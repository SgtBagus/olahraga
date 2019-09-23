var BookingFutsalApp = angular.module('BookingFutsalApp', []);

BookingFutsalApp.controller('MainController', function($scope, $http) {

  var base_url = "https://futsaloka.id/";

  $http.get(base_url+'account/LoggedIn').then(function(response){
    // console.log(response);
    $scope.logged_in = response.data.logged_in;
    if($scope.logged_in == true){
      $scope.user_id = response.data.user_id;
      $scope.ProfileName = response.data.name;
      $scope.customer_id = response.data.customer_id;
      $scope.customer_name = response.data.customer_name;
    }
  })

  $scope.chooseLapang = function(lapang_id){
    $("#book-lapang").modal('show');
    var date = $("#kalender").val();
    $http.post(base_url+'home/getBook', {
      date:date,
      lapang_id:lapang_id,
		}).then(function(response){
			$scope.books = response.data.books;
      $scope.lapang_id = response.data.lapang_id;
      $scope.lapang_name = response.data.lapang_name;
      $scope.gedung_id = response.data.gedung_id;
      $scope.gedung_name = response.data.gedung_name;
      $scope.tanggal = $("#kalender").val();
      $scope.down_payment = response.data.down_payment;
      $scope.minimum_payment = response.data.minimum_payment;
      $scope.full_payment = response.data.full_payment;
      $scope.lapangan = response.data.gedung_name+" "+response.data.lapang_name;
      $scope.price = response.data.price;
      $("#lapang").html(response.data.gedung_name+" "+response.data.lapang_name);
		});
  }

  $scope.chooseSearchLapang = function(lapang_id, time, duration, date){
    $http.post(base_url+'home/get_lapang_search', {
      lapang_id:lapang_id,
      time:time,
      duration:duration,
      date:date
		}).then(function(response){
      console.log(response);
      $scope.lapang_id = response.data.lapang_id;
      $scope.gedung_id = response.data.gedung_id;
      $scope.down_payment = response.data.down_payment;
      $scope.minimum_payment = response.data.minimum_payment;
      $scope.full_payment = response.data.full_payment;
      $scope.lapangan = response.data.gedung_name+" "+response.data.lapang_name;
      $scope.price = response.data.price;
      $scope.TimeArray = response.data.time; //["08:00:00","09:00:00"];
      // $scope.TimeArray.push(response.data.time);
      $scope.DurationArray = response.data.time;
      // $scope.DurationArray.push(response.data.time);
      $scope.total_fp = response.data.price;
		});

    if($scope.logged_in == true){
      $("#book-lapang").modal('hide');
      $("#book-now").modal('show');
    }else{
      $("#book-lapang").modal('hide');
      $("#book-customer").modal('show');
    }
  }

  $scope.BackTo = function(){
    $("#book-lapang").modal('show');
    $("#book-now").modal('hide');
  }

  $scope.ReadyToBook = function(){
    $scope.TimeArray = [];
    $scope.DurationArray = [];
    angular.forEach($scope.books, function(book){
      if (!!book.selected) $scope.TimeArray.push(book.time);
      if (!!book.selected) $scope.DurationArray.push(book.jam);
    })

    $http.post(base_url+'home/getLapangPrice', {
      time:$scope.TimeArray,
      lapang_id:$scope.lapang_id,
      date:$("#kalender").val(),
    }).then(function(response){
      $scope.price = response.data.price;
      $scope.total_fp = response.data.price;
    },(function(response){
      console.log(response);
      // toastr.error(response.data.message);
      // console.log(response);
    }));

    if($scope.logged_in == true){
      $("#book-lapang").modal('hide');
      $("#book-now").modal('show');
    }else{
      $("#book-lapang").modal('hide');
      $("#book-customer").modal('show');
    }
  }

  $scope.SubmitCustomer = function(){
    $http({
        method: 'POST',
        url: base_url+'account/SubmitCustomer',
        data: $.param({
          email:$scope.CustomerEmail,
          name:$scope.CustomerName,
          phone:$scope.CustomerPhone,
        }),
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    }).then(function(response){
      if(response.data.status == 200){
        $scope.customer_id = response.data.customer_id;
        $scope.customer_name = response.data.name;
        $("#book-customer").modal('hide');
        $("#book-now").modal('show');
      }else{
        $("#CustomerMessageError").html('<div class="alert alert-danger">'+response.data.message+'</div>');
      }
		});
  }

  $scope.BtnBookNow = "Booking Sekarang";
  $scope.isDisabled = false;
  $scope.BookNow = function(){
    $scope.isDisabled = true;
    $scope.BtnBookNow = "Sedang Diproses";
    var date = $("#kalender").val();
    var unique_code = $("#unique_code").val();
    $scope.date = date;
    $http({
      method: 'POST',
      url: base_url+'home/BookNow',
      data: $.param({
        time:$scope.TimeArray,
        lapang_id:$scope.lapang_id,
        gedung_id:$scope.gedung_id,
        customer_id:$scope.customer_id,
        customer_name:$scope.customer_name,
        date:date,
        total:$scope.type_payment == 'dp' ? $scope.total : $scope.total_fp,
        unique_code:unique_code,
        method:$scope.method,
        type_payment:$scope.type_payment,
        minimum_payment: $scope.minimum_payment,
      }),
      headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    }).then(function(response){
      console.log(response);
      if(response.data.status == 200){ // jika response sukses
        $scope.invoice = response.data.invoice;
        $scope.total = response.data.total;
        $scope.fee_admin = response.data.fee_admin;
        $scope.subtotal = response.data.subtotal;
        $scope.banks = response.data.banks;
        $("#book-notification").modal('show');
        $("#book-now").modal('hide');
      }else{ // jika response gagal
        $("#message").html('<div class="alert alert-danger">'+response.data.message+'</div>');
        $scope.BtnBookNow = "Booking Sekarang";
        $scope.isDisabled = false;
      }
		});
  }

  $scope.Done = function(){
    window.location.assign(base_url);
  }

  $scope.NewUser = function(){
    if($scope.UserPassword === $scope.UserPasswordConfirm){
      $http({
          method: 'POST',
          url: base_url+'account/NewUser',
          data: $.param({
            name:$scope.UserName,
            email:$scope.UserEmail,
            phone:$scope.UserPhone,
            password:$scope.UserPassword,
            password_confirm:$scope.UserPasswordConfirm,
          }),
          headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      }).then(function(response){
        toastr.success(response.data.message);
        $("#login").modal('show');
        $("#register").modal('hide');
        // console.log(response);
  		},(function(response){
        $scope.UserEmail_error = response.data.email;
        $scope.UserName_error = response.data.name;
        $scope.UserPhone_error = response.data.phone;
        $scope.UserPassword_error = response.data.password;
        $scope.UserPasswordConfirm_error = response.data.password_confirm;
        toastr.error(response.data.data);
        // console.log(response);
      }));
    }else{
      toastr.error('password not match');
    }
  }

  $scope.Login = function(){
    $http.post(base_url+'account/Login', {
      email:$scope.LoginEmail,
      password:$scope.LoginPassword,
    }).then(function(response){
      toastr.success(response.data.message);
      window.location.reload();
      // console.log(response.data.user_id);
    },(function(response){
      toastr.error(response.data.message);
      // console.log(response);
    }));
  }

  $scope.Logout = function(){
    signOut()
    $http.get(base_url+'account/logout').then(function(response){
      window.location.assign(base_url);
    })
  }

  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }


  $scope.ForgotPassword = function(){
    $http.post(base_url+'account/ForgotPassword', {
      email:$scope.ForgotpasswordEmail,
    }).then(function(response){
      toastr.success(response.data.message);
      // window.location.assign('');
      // console.log(response);
    },(function(response){
      toastr.error(response.data.message);
      // console.log(response);
    }));
  }

});
