<?php date_default_timezone_set("Asia/Jakarta"); ?>
<section class="section-top">
    <div class="container">
        <div class="jumbotron jumbotron-promo">
            <div class="owl-carousel promo owl-theme">
                <div class="item">
                    <div class="cards">
                        <div class="cards-image" style="background: url('assets/image/uploads/promo/promo1.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container search-home">
    <div class="search-box">
        <ul class="nav nav-tabs kategori-lapang">
            <li class="active">
                <a data-toggle="tab" href="#futsal"><img src="<?=base_url()?>assets/image/futsal-ico.png"
                    class="ico-cat" alt="badminton"> 
                    <span>Lorem</span>
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#badminton">
                    <img src="<?=base_url()?>assets/image/badminton-ico.png"
                    class="ico-cat" alt="badminton"> 
                    <span>Lorem</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="futsal" class="tab-pane fade in active">
                <div class="panel panel-default panel-search">
                    <div class="panel-body nopadding search-form">
                        <div class="col-md-12">
                            <h3 class="text-search black" style="margin-top:-31px;">Kuy Main Lorem!</h3>
                        </div>
                        <form class="" role="search" action="<?=base_url()?>search">
                            <input type="hidden" name="category" value="Futsal">
                            <div class="col-md-12">
                                <p class="black">Nama Lapangan</p>
                                <div class="form-group">
                                    <input id="name1" type="text" class="form-control" name="date">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p class="black">Lokasi, Kota atau Nama Lapangan</p>
                                <div class="form-group">
                                    <select class="form-control select2" name="keyword" style="width:100%">
                                        <option>Malang</option>
                                        <option>Surabaya</option>
                                        <option>Solo</option>
                                        <option>Jakarta</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p class="black">Tanggal Main</p>
                                <div class="form-group">
                                    <input id="kalender1" type="text" class="form-control datepicker" name="date" value="<?=date('d/m/Y')?>" >
                                </div>
                            </div>
                            <div class="col-md-2">
                                <p class="black">Jam Mulai</p>
                                <div class="form-group">
                                    <select class="form-control select2" name="time" style="width:100%">
                                        <?php $now = date('H')+1; for($i=5; $i<24; $i++){?>
                                            <?php if($now==substr(('0'.$i),-2)){ ?>
                                                <option selected><?=substr(('0'.$i), -2).':00'?></option>
                                            <?php }else{ ?>
                                                <option><?=substr(('0'.$i), -2).':00'?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <p class="black">Durasi</p>
                                <div class="form-group">
                                    <select class="form-control select2" name="duration" style="width:100%"> 
                                        <option value="1">1 Jam</option>
                                        <option value="2">2 Jam</option>
                                        <option value="3">3 Jam</option>
                                        <option value="4">4 Jam</option>
                                        <option value="5">5 Jam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <p>&nbsp;</p>
                                <button type="submit" class="btn btn-success btn-block green">CARI LAPANGAN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="badminton" class="tab-pane fade">
                <div class="panel panel-default panel-search">
                    <div class="panel-body nopadding search-form">
                        <div class="col-md-12">
                            <h3 class="text-search black" style="margin-top:-31px;">Kuy Main Lorem!</h3>
                        </div>
                        <form class="" role="search" action="<?=base_url()?>search">
                            <input type="hidden" name="category" value="Bulutangkis">
                            <div class="col-md-12">
                                <p class="black">Nama Lapangan</p>
                                <div class="form-group">
                                    <input id="name1" type="text" class="form-control" name="date">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p class="black">Lokasi, Kota atau Nama Lapangan</p>
                                <div class="form-group">
                                    <select class="form-control select2" name="keyword" style="width:100%">
                                        <option>Malang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p class="black">Tanggal Main</p>
                                <div class="form-group">
                                    <input id="kalender2" type="text" class="form-control datepicker" name="date" value="<?=date('d/m/Y')?>" >
                                </div>
                            </div>
                            <div class="col-md-2">
                                <p class="black">Jam Mulai</p>
                                <div class="form-group">
                                    <select class="form-control select2" name="time" style="width:100%">
                                        <?php $now = date('H')+1; for($i=5; $i<24; $i++){?>
                                            <?php if($now==substr(('0'.$i),-2)){ ?>
                                                <option selected><?=substr(('0'.$i), -2).':00'?></option>
                                            <?php }else{ ?>
                                                <option><?=substr(('0'.$i), -2).':00'?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <p class="black">Durasi</p>
                                <div class="form-group">
                                    <select class="form-control select2" name="duration" style="width:100%"> 
                                        <option value="1">1 Jam</option>
                                        <option value="2">2 Jam</option>
                                        <option value="3">3 Jam</option>
                                        <option value="4">4 Jam</option>
                                        <option value="5">5 Jam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <p>&nbsp;</p>
                                <button type="submit" class="btn btn-success btn-block green">CARI LAPANGAN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-home">
    <div class="container benefit-section text-center">
        <h1 class="section-title">Kenapa Harus Kuy?</h1>
        <div class="col-md-3 text-center">
            <img src="<?=base_url()?>assets/image/anywhere.png" class="img-responsive">
            <h3 style="font-size: 21px;" class="black"><b>Everytime Everywhere</b></h3>
            <p class="black">Pesan lapangan yang Anda inginkan dalam genggaman kapan saja dan di mana saja .</p>
        </div>
        <div class="col-md-3 text-center">
            <img src="<?=base_url()?>assets/image/time.png" class="img-responsive">
            <h3 style="font-size: 21px;" class="black"><b>Realtime Booking</b></h3>
            <p class="black">Bingung ketika kehabisan lapangan? Kuy cari lapangan yang Anda inginkan di sini dengan cepat, akurat, dan mudah.</p>
        </div>
        <div class="col-md-3 text-center">
            <img src="<?=base_url()?>assets/image/promo.png" class="img-responsive">
            <h3 style="font-size: 21px;" class="black"><b>Instan Payment</b></h3>
            <p class="black">Malas melakukan pembayaran di tempat? Jangan khawatir, saatnya lakukan pembayaran dengan e-money.</p>
        </div>
        <div class="col-md-3 text-center">
            <img src="<?=base_url()?>assets/image/schedule.png" class="img-responsive">
            <h3 style="font-size: 21px;" class="black"><b>Easy Schedule</b></h3>
            <p class="black">Pusing mengatur jadwal lapangan? Kuy gunakan sistem manajemen penjadwalan lapangan yang mudah di Kuy.</p>
        </div>
        <hr>
    </div>
    <div class="container benefit-section">
        <div class="row">
            <h1 class="section-title">Lapangan Siap Pakai</h1>
            <div class="col-md-4">
                <a href="<?= base_url('field/view/') ?>lapangan-1">
                    <div class="list-lapang-search" style="margin-top:15px;">
                        <div class="row">
                            <div class="col-md-12">
                                <img style="height: 230px; width: 100%; object-fit: cover; display: inline;" src="https://images.unsplash.com/photo-1552667466-07770ae110d0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h4>Lapangan 1</h4>
                                <p><b>Pembuat</b></p>
                                <div class="indicator-green">
                                    <span> Tersedia 1 </span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>
                                    <i class="fa fa-star" style="color: yellow"></i>
                                    <i class="fa fa-star" style="color: yellow"></i>
                                    <i class="fa fa-star" style="color: yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <small>Review : 2.5 dari 23</small>
                                </h4>
                                <p>Alamat nya disini</p>
                                Jam Buka : <b>02:00 - 10:00</b> 
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?= base_url('field/view/') ?>lapangan-1">
                    <div class="list-lapang-search" style="margin-top:15px;">
                        <div class="row">
                            <div class="col-md-12">
                                <img style="height: 230px; width: 100%; object-fit: cover; display: inline;" src="https://images.unsplash.com/photo-1552667466-07770ae110d0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h4>Lapangan 1</h4>
                                <p><b>Pembuat</b></p>
                                <div class="indicator-green">
                                    <span> Tersedia 1 </span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>
                                    <i class="fa fa-star" style="color: yellow"></i>
                                    <i class="fa fa-star" style="color: yellow"></i>
                                    <i class="fa fa-star" style="color: yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <small>Review : 2.5 dari 23</small>
                                </h4>
                                <p>Alamat nya disini</p>
                                Jam Buka : <b>02:00 - 10:00</b> 
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?= base_url('field/view/') ?>lapangan-1">
                    <div class="list-lapang-search" style="margin-top:15px;">
                        <div class="row">
                            <div class="col-md-12">
                                <img style="height: 230px; width: 100%; object-fit: cover; display: inline;" src="https://images.unsplash.com/photo-1552667466-07770ae110d0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h4>Lapangan 1</h4>
                                <p><b>Pembuat</b></p>
                                <div class="indicator-green">
                                    <span> Tersedia 1 </span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>
                                    <i class="fa fa-star" style="color: yellow"></i>
                                    <i class="fa fa-star" style="color: yellow"></i>
                                    <i class="fa fa-star" style="color: yellow"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <small>Review : 2.5 dari 23</small>
                                </h4>
                                <p>Alamat nya disini</p>
                                Jam Buka : <b>02:00 - 10:00</b> 
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container register-section text-center">
        <div class="col-md-6">
            <img style="padding:10% 20% 20% 20%" src="<?=base_url()?>assets/image/registration.png" class="img-responsive">
        </div>
        <div class="col-md-6">
            <h1 class="section-title">Bergabung sebagai Partner</h1>
            <p>Kami paham betul akan masalah manajemen penjadwalan dan pemesanan dalam usaha Anda. Oleh karena itu kami kembangan sistem manajemen penjadwalan dan pemesanan tempat olahraga yang mudah digunakan dan dapat digunakan secara online maupun offline. Kuy buruan gabung sebagai partner dan dapatkan banyak kemudahan dan manfaatnya!</p>
            <a href="<?=base_url()?>register/">
                <button class="btn btn-warning">Daftar Kuy Partner</button>
            </a>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
  $('.promo').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        }
    }
})
</script>
