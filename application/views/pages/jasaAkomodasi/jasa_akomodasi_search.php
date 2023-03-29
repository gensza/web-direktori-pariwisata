<div class="hero-wrap js-fullheight" style="background-image: url('assets/images/jasaAkomodasi/jasa-akomodasi-19.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Temukan hotel terbaik<br></strong> impian Anda</h1>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="text-align: justify;">Jasa Akomodasi adalah layanan web penyedia data nama, alamat, nomor telefon, dan
                    sosial media yang terkait dari setiap jasa akomodasi yang dicari. Lalu, terdapat fitur search berdasarkan Kode Provinsi dan Kode Kabupaten, serta Penyedia Makan dan Minum dan Daya Tarik Wisata (DTW) sekitar daerah Jasa Akomodasi yang dicari.</p>
            </div>
        </div>
    </div>
</div>

<!-- <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <h2 class="mb-4"><strong>Rekomendasi</strong> Jasa Akomodasi</h2>
                <span class="subheading">Temukan pilihan terbaik untuk setiap informasi penginapan yang Anda butuhkan</span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm col-md-6 col-lg ftco-animate">               
                <div class="destination">
                    <a href="<?= base_url('jasa_akomodasi_detail'); ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets/images/jasaAkomodasi/jasa-akomodasi-2.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="<?= base_url('jasa_akomodasi_detail'); ?>"></a></h3>
                                <p class="rate">
                                    <span>Kode pos : </span>
                                </p>
                            </div>
                        </div>
                        <p>Alamat Akomodasi
                            <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="icon-contact_phone"></i> No. Telephone</span>
                            <span class="ml-auto"><a href="<?= base_url('jasa_akomodasi_detail'); ?>">Lihat</a></span>
                        </p>
                    </div>
                </div>                 
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="ftco-section ftco-destination">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section-2 ftco-animate">
                <h2 class="mb-4"><strong>Jasa Akomodasi</strong></h2>
                <span class="subheading-2">Jelajahi beragam pilihan tempat penginapan dengan berbagai fasilitas untuk liburan yang berkenang</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="destination-slider owl-carousel ftco-animate">
                    <?php foreach ($akomodasi_all->data as $akomodasiAll) { ?>
                        <div class="item">
                            <div class="destination">
                                <a href="<?= base_url('jasa_akomodasi_detail'); ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets/images/jasaAkomodasi/jasa-akomodasi-2.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="<?= base_url('jasa_akomodasi_detail'); ?>"><?= $akomodasiAll->nama_komersial ?></a></h3>
                                            <p class="rate">
                                                <span>Kode pos : <?= $akomodasiAll->kodepos ?></span>
                                            </p>
                                        </div>
                                    </div>
                                    <p><?= $akomodasiAll->alamat_jalan ?>
                                        <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-contact_phone"></i> <?= $akomodasiAll->no_telp ?></span>
                                        <span class="ml-auto"><a href="<?= base_url('jasa_akomodasi_detail'); ?>">Lihat</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar">
                <div class="sidebar-wrap bg-light ftco-animate">
                    <h3 class="heading mb-4" style="text-align: center; font-weight: bold">Cari Akomodasi Keinginan Anda</h3>
                    <form action="#">
                        <div class="fields">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Kode Provinsi">
                            </div>
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
                        <?php foreach ($akomodasi_all->data as $akomodasiAll) { ?>
                            <div class="destination">
                                <a href="<?= base_url('jasa_akomodasi_detail'); ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?= $akomodasiAll->photo_url ?>);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="<?= base_url('jasa_akomodasi_detail'); ?>"><?= $akomodasiAll->nama_komersial ?></a></h3>
                                            <p class="rate">
                                                <span>No Telephone : <?= $akomodasiAll->no_telp ?></span> <br />
                                                <span>Fax : -</span>
                                            </p>
                                        </div>
                                        <div class="two">
                                            <span class="price per-price"><small><?= $akomodasiAll->nama_kab ?><br><?= $akomodasiAll->nama_prov ?></small></span>
                                        </div>
                                    </div>
                                    <p><?= $akomodasiAll->alamat_jalan ?></p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <a href="<?= base_url('penyedia_makan_dan_minum_sekitar'); ?>" class="btn-first-2 float-left">PMM Sekitar</a>
                                        <a href="<?= base_url('daya_tarik_wisata_sekitar'); ?>" class="btn-first-2 float-left">DTW Sekitar</a>
                                        <a href="<?= base_url('jasa_akomodasi_detail'); ?>" class="btn-first-3 ml-auto">Lihat</a>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
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

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <h2 class="mb-4"><strong>Layanan</strong> Lain</h2>
                <span class="subheading">Ada layanan lain yang mungkin Anda cari juga</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div id="accordion">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" href="<?= base_url('penyedia_makan_dan_minum_search'); ?>"><strong>Penyedia Makan dan Minum </strong><span class="collapsed"><i class="icon-restaurant_menu"></i></span></a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" href="<?= base_url('daya_tarik_wisata_search'); ?>"><strong>Daya Tarik Wisata </strong><span class="collapsed"><i class="icon-nature"></i></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" href="<?= base_url('penunjang_pariwisata_search'); ?>"><strong>Penunjang Pariwisata </strong><span class="collapsed"><i class="icon-cab"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Ada Pertanyaan?</h2>
                    <p>Hubungi saja kami dengan mengakses halaman berikut</p>
                    <div class="row d-flex justify-content-center mt-5">
                        <a href="<?= base_url('tentang'); ?>" class="btn-first-4">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>