<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shorcut icon" href="<?=base_url()?>assets/image/fav.png">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/pace.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/swal/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/select2/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/custom.css">
    <!-- owl carousel -->


    <title>KUY</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/owl/assets/owl.theme.default.min.css">
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/swal/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/owl/owl.carousel.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color:#0075ad;border-color:#0075ad;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="bar-menu">Menu</span>
                </button>
                <a class="navbar-brand" href="<?=base_url()?>"> <img src="<?=base_url()?>assets/image/logo.png"
                    alt="" /> 
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                   <?php if($this->session->userdata("authAdmin")==true && $this->session->userdata("authMember")==true){ ?>
                       <li><a href="<?=base_url()?>my-profile/"><?= $m->m_first_name.' '.$m->m_last_name; ?> (<?=$m->m_rule?>)</a></li>
                       <li><a href="<?=base_url()?>logout-process/">Keluar</a></li>
                   <?php }else if($this->session->userdata("authMember")==true){ ?>
                       <li><a href="<?=base_url()?>my-profile/"><?= $m->m_first_name.' '.$m->m_last_name; ?> (<?=$m->m_rule?>)</a></li>
                       <li><a href="<?=base_url()?>logout-process/">Keluar</a></li>
                   <?php }else if($this->session->userdata("authAdmin")==true && $this->uri->segment(1)=='invoice'){ ?>
                       <li><a href="<?=base_url()?>po-admin/dashboard/"><?= $a->ad_name?> (<?=$a->ad_rule?>)</a></li>
                       <li><a href="<?=base_url()?>po-admin/logout-process/">Keluar</a></li>
                   <?php }else{ ?>
                       <li><a href="<?=base_url()?>register/">Daftar</a></li>
                       <li><a href="<?=base_url()?>login/">Masuk</a></li>
                   <?php } ?>
               </ul>
           </div>
       </div>
   </nav>
   <?=$contents?>
   <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <a href="index.html"> <img src="<?=base_url()?>assets/image/logo.png"
                                alt="" class="img-responsive" /> </a>
                            </center>
                        </div>
                    </div>
                    <hr>
                    <strong>Customer Service</strong> +62857-9208-2725 <br>
                    Email : <a href="mailto:cs@kuy.id"><strong>cs@kuy.id</strong></a>
                </div>
            </div>
            <br><br>
            <p class="text-center">Copyright &copy 2019 <a href="https://www.instagram.com/aang_mz/" target="_blank">Kuy</a>. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="<?=base_url()?>assets/datepicker/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/pace.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/toastr.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/lazyload/lazyload.transpiled.min.js"></script>

    <script type="text/javascript" src="<?=base_url()?>assets/select2/js/select2.min.js"></script>
</body>

</html>