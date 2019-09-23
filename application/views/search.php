<section class="section-top" style="min-height: 100px;"></section>
<div class="container search-home">
    <div class="search-box">
        <div class="tab-content">
            <div id="futsal" class="tab-pane fade in active">
                <div class="panel panel-default panel-search">
                    <div class="panel-body nopadding search-form">
                        <div class="col-md-12">
                            <h3 class="text-search black" style="margin-top:5px;">Kuy Main <?=ucwords($this->input->get('category'))?>!</h3>
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
                                <p class="black">Lokasi</p>
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
        </div>
    </div>
</div>
<div class="bg-home" style="margin-bottom: 15px">
    <div class="container benefit-section">
        <div class="row">
            <div class="col-md-6">
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
                            <div class="indicator text-default">
                                Rp 1000000
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
            </div>
            <div class="col-md-6">
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
                            <div class="indicator text-default">
                                Rp 1000000
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
            </div>
            <div class="col-md-6">
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
                            <div class="indicator text-default">
                                Rp 1000000
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
            </div>
            <div class="col-md-6">
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
                            <div class="indicator text-default">
                                Rp 1000000
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
            </div>
            <div class="col-md-6">
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
                            <div class="indicator text-default">
                                Rp 1000000
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
            </div>
            <div class="col-md-6">
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
                            <div class="indicator text-default">
                                Rp 1000000
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
            </div>
        </div>
    </div>
</div>
