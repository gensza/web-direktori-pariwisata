<div class="hero-wrap js-fullheight" style="background-image: url('assets/images/home/home-18.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?= base_url(); ?>">Home</a></span>/ <span>Jumlah DTW berdasarkan Provinsi</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">DTW di Provinsi ......</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar">
                <div class="sidebar-wrap bg-light ftco-animate">
                    <h3 class="heading mb-4" style="text-align: center; font-weight: bold">Cari DTW Selera Anda</h3>
                    <form action="#">
                        <div class="fields">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Kode Kabupaten">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Cari" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="destination">
                            <a href="<?= base_url('hotel_single'); ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets/images/hotel-1.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="<?= base_url('hotel_single'); ?>">Nama DTW</a></h3>
                                        <p class="rate">
                                            <span>No Telephone :</span> <br />
                                            <span>Fax :</span>
                                        </p>
                                    </div>
                                    <div class="two">
                                        <span class="price per-price"><small>Nama Kabupaten<br>Nama Provinsi</small></span>
                                    </div>
                                </div>
                                <p>Alamat Komersial</p>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <a href="<?= base_url('jasa_akomodasi'); ?>" class="btn-first-2 float-left">Jasa Akomodasi Sekitar</a>
                                    <a href="<?= base_url('jasa_akomodasi'); ?>" class="btn-first-2 float-left">PMM Sekitar</a>
                                    <a href="<?= base_url('jasa_akomodasi'); ?>" class="btn-first-3 ml-auto">Lihat</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->