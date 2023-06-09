<div class="hero-wrap js-fullheight" style="background-image: url('assets/images/jasaAkomodasi/jasa-akomodasi-19.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Temukan Akomodasi, Kuliner & Wisata terbaik<br></strong> impian Anda</h1>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="text-align: justify;">DIbawah ini menampilkan hasil search berdasarkan Kode Provinsi dan Kode Kabupaten, serta Penyedia Makan dan Minum dan Daya Tarik Wisata (DTW) sekitar daerah Jasa Akomodasi yang dicari.</p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="col-md-12" style="margin-bottom:-20px;margin-top:-20px;">
            <h2 class="h4">Search Result From <b><i>Kode Provinsi <?= $kode_prov ?>, Kode Kabupaten <?= $kode_kab ?> & Kategori <?= $kode_klasifikasi ?></i></h2>
        </div>
        <div class="row d-md-flex">
            <div class="col-md-12 ftco-animate img about-image" style="background-image: url(images/about.jpg);">
            </div>
            <div class="col-md-12 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-all" aria-selected="true">All Result</a>
                        
                            <a class="nav-link" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="flase">Jasa Akomodasi</a>

                            <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Penyedia Makanan Dan Minuman</a>

                            <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Daya Tarik Wisata</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex align-items-center">
                
                    <div class="tab-content ftco-animate" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-12 ftco-animate">
                                        <?php if ($result_search->status) {
                                                ?>
                                                <table id="example1" class="table table-borderless" style="width:100%;padding-top:0px">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($result_search->data as $d) { ?>
                                                        <tr>
                                                            <td>
                                                                <div class="destination">
                                                                    <?php if($d->kategori == 'akomodasi')  {
                                                                        ?>
                                                                        <a href="<?= base_url('jasa_akomodasi_sekitar'); ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?= $d->photo_url ?>);">
                                                                            <div class="icon d-flex justify-content-center align-items-center">
                                                                                <span class="icon-search2"></span>
                                                                            </div>
                                                                        </a>
                                                                        <?php
                                                                    }else if($d->kategori == 'PMM'){
                                                                        ?>
                                                                        <a href="<?= base_url('penyedia_makan_dan_minum_sekitar'); ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?= $d->photo_url ?>);">
                                                                            <div class="icon d-flex justify-content-center align-items-center">
                                                                                <span class="icon-search2"></span>
                                                                            </div>
                                                                        </a>
                                                                        <?php
                                                                    }else {
                                                                        ?>
                                                                        <a href="<?= base_url('daya_tarik_wisata_sekitar'); ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?= $d->photo_url ?>);">
                                                                            <div class="icon d-flex justify-content-center align-items-center">
                                                                                <span class="icon-search2"></span>
                                                                            </div>
                                                                        </a>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <div class="text p-3">
                                                                        <div class="d-flex">
                                                                            <div class="one">
                                                                                <?php if($d->kategori == 'akomodasi') {
                                                                                    ?>
                                                                                        <h3><a href="<?= base_url('jasa_akomodasi_detail'); ?>"><?= $d->nama_komersial ?></a></h3>
                                                                                    <?php
                                                                                }else if($d->kategori == 'PMM') {
                                                                                    ?>
                                                                                        <h3><a href="<?= base_url('penyedia_makan_dan_minum_sekitar'); ?>"><?= $d->nama_komersial ?></a></h3>
                                                                                    <?php
                                                                                }else{
                                                                                    ?>
                                                                                        <h3><a href="<?= base_url('daya_tarik_wisata_sekitar'); ?>"><?= $d->nama_komersial ?></a></h3>
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                                <p class="rate">
                                                                                    <span>No Telephone : <?= $d->no_telp ?></span> <br />
                                                                                    <span>Fax : -</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="two">
                                                                                <span class="price per-price"><small><?= $d->nama_kab ?><br><?= $d->nama_prov ?></small></span>
                                                                            </div>
                                                                        </div>
                                                                        <p><?= $d->alamat_jalan ?></p>
                                                                        <hr>
                                                                        <p class="bottom-area d-flex">
                                                                            <?php if($d->kategori == 'akomodasi') {
                                                                                ?>
                                                                                    <a href="<?= base_url('Penyedia_makan_dan_minum/penyedia_makan_dan_minum_sekitar/'.$kode_prov.'/'.$kode_kab.'/'.$kode_klasifikasi); ?>" class="btn-first-2 float-left">PMM Sekitar</a>
                                                                                    <a href="<?= base_url('Daya_tarik_wisata/daya_tarik_wisata_sekitar/'.$kode_prov.'/'.$kode_kab.'/'.$kode_klasifikasi); ?>" class="btn-first-2 float-left">DTW Sekitar</a>
                                                                                    <a href="<?= base_url('Jasa_akomodasi/jasa_akomodasi_detail/'.$d->id); ?>" class="btn-first-3 ml-auto">Lihat</a>
                                                                                <?php
                                                                            }else if($d->kategori == 'PMM') {
                                                                                ?>
                                                                                    <a href="<?= base_url('Jasa_akomodasi/jasa_akomodasi_sekitar/'.$kode_prov.'/'.$kode_kab.'/'.$kode_klasifikasi); ?>" class="btn-first-2 float-left">Jasa Akomodasi Sekitar</a>
                                                                                    <a href="<?= base_url('Daya_tarik_wisata/daya_tarik_wisata_sekitar/'.$kode_prov.'/'.$kode_kab.'/'.$kode_klasifikasi); ?>" class="btn-first-2 float-left">DTW Sekitar</a>
                                                                                    <a href="<?= base_url('Penyedia_makan_dan_minum/penyedia_makan_dan_minum_detail/'.$d->id); ?>" class="btn-first-3 ml-auto">Lihat</a>
                                                                                <?php
                                                                            }else{
                                                                                ?>
                                                                                    <a href="<?= base_url('Jasa_akomodasi/jasa_akomodasi_sekitar/'.$kode_prov.'/'.$kode_kab.'/'.$kode_klasifikasi); ?>" class="btn-first-2 float-left">Jasa Akomodasi Sekitar</a>
                                                                                    <a href="<?= base_url('Penyedia_makan_dan_minum/penyedia_makan_dan_minum_sekitar/'.$kode_prov.'/'.$kode_kab.'/'.$kode_klasifikasi); ?>" class="btn-first-2 float-left">PMM Sekitar</a>
                                                                                    <a href="<?= base_url('Daya_tarik_wisata/daya_tarik_wisata_detail/'.$d->id); ?>" class="btn-first-3 ml-auto">Lihat</a>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            <?php 
                                            } else {
                                                echo "Data Not Found!";
                                        } ?>
                                    </div>
                                </div>
                            </div> <!-- .col-md-8 --> 
                        </div>

                        <div class="tab-pane fade show" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-12 ftco-animate">
                                        <?php if ($result_search_akomodasi->status) {
                                            ?>
                                                <table id="example2" class="table table-borderless" style="width:100%;padding-top:0px">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($result_search_akomodasi->data as $d) { ?>
                                                        <tr>
                                                            <td>
                                                                <div class="destination">
                                                                    <a href="<?= base_url('jasa_akomodasi_detail'); ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?= $d->photo_url ?>);">
                                                                        <div class="icon d-flex justify-content-center align-items-center">
                                                                            <span class="icon-search2"></span>
                                                                        </div>
                                                                    </a>
                                                                    <div class="text p-3">
                                                                        <div class="d-flex">
                                                                            <div class="one">
                                                                                <h3><a href="<?= base_url('jasa_akomodasi_detail'); ?>"><?= $d->nama_komersial ?></a></h3>
                                                                                <p class="rate">
                                                                                    <span>No Telephone : <?= $d->no_telp ?></span> <br />
                                                                                    <span>Fax : -</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="two">
                                                                                <span class="price per-price"><small><?= $d->nama_kab ?><br><?= $d->nama_prov ?></small></span>
                                                                            </div>
                                                                        </div>
                                                                        <p><?= $d->alamat_jalan ?></p>
                                                                        <hr>
                                                                        <p class="bottom-area d-flex">
                                                                            <a href="<?= base_url('Penyedia_makan_dan_minum/penyedia_makan_dan_minum_sekitar/'.$kode_prov.'/'.$kode_kab.'/'.$kode_klasifikasi); ?>" class="btn-first-2 float-left">PMM Sekitar</a>
                                                                            <a href="<?= base_url('Daya_tarik_wisata/daya_tarik_wisata_sekitar/'.$kode_prov.'/'.$kode_kab.'/'.$kode_klasifikasi); ?>" class="btn-first-2 float-left">DTW Sekitar</a>
                                                                            <a href="<?= base_url('Jasa_akomodasi/jasa_akomodasi_detail/'.$d->id); ?>" class="btn-first-3 ml-auto">Lihat</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            <?php 
                                            } else {
                                                echo "Data Not Found!";
                                        } ?>
                                    </div>
                                </div>
                            </div> <!-- .col-md-8 --> 
                        </div>

                        <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-12 ftco-animate">
                                        <?php if ($result_search_pmm->status) {
                                            ?>
                                                <table id="example3" class="table table-borderless" style="width:100%;padding-top:0px">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($result_search_pmm->data as $d) { ?>
                                                        <tr>
                                                            <td>
                                                                <div class="destination">
                                                                    <a href="<?= base_url('penyedia_makan_dan_minum_detail'); ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?= $d->photo_url ?>);">
                                                                        <div class="icon d-flex justify-content-center align-items-center">
                                                                            <span class="icon-search2"></span>
                                                                        </div>
                                                                    </a>
                                                                    <div class="text p-3">
                                                                        <div class="d-flex">
                                                                            <div class="one">
                                                                                <h3><a href="<?= base_url('penyedia_makan_dan_minum_detail'); ?>"><?= $d->nama_komersial ?></a></h3>
                                                                                <p class="rate">
                                                                                    <span>No Telephone : <?= $d->no_telp ?></span> <br />
                                                                                    <span>Fax : -</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="two">
                                                                                <span class="price per-price"><small><?= $d->nama_kab ?><br><?= $d->nama_prov ?></small></span>
                                                                            </div>
                                                                        </div>
                                                                        <p><?= $d->alamat_jalan ?></p>
                                                                        <hr>
                                                                        <p class="bottom-area d-flex">
                                                                            <a href="<?= base_url('Jasa_akomodasi/jasa_akomodasi_sekitar/'.$kode_prov.'/'.$kode_kab.'/'.$kode_klasifikasi); ?>" class="btn-first-2 float-left">Jasa Akomodasi Sekitar</a>
                                                                            <a href="<?= base_url('Daya_tarik_wisata/daya_tarik_wisata_sekitar/'.$kode_prov.'/'.$kode_kab.'/'.$kode_klasifikasi); ?>" class="btn-first-2 float-left">DTW Sekitar</a>
                                                                            <a href="<?= base_url('Penyedia_makan_dan_minum/penyedia_makan_dan_minum_detail/'.$d->id); ?>" class="btn-first-3 ml-auto">Lihat</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            <?php 
                                            } else {
                                                echo "Data Not Found!";
                                        } ?>
                                    </div>
                                </div>
                            </div> <!-- .col-md-8 -->
                        </div>

                        <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-12 ftco-animate">
                                        <?php if ($result_search_dtw->status) {
                                            ?>
                                                <table id="example4" class="table table-borderless" style="width:100%;padding-top:0px">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($result_search_dtw->data as $d) { ?>
                                                        <tr>
                                                            <td>
                                                                <div class="destination">
                                                                    <a href="<?= base_url('daya_tarik_wisata_detail'); ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?= $d->photo_url ?>);">
                                                                        <div class="icon d-flex justify-content-center align-items-center">
                                                                            <span class="icon-search2"></span>
                                                                        </div>
                                                                    </a>
                                                                    <div class="text p-3">
                                                                        <div class="d-flex">
                                                                            <div class="one">
                                                                                <h3><a href="<?= base_url('daya_tarik_wisata_detail'); ?>"><?= $d->nama_komersial ?></a></h3>
                                                                                <p class="rate">
                                                                                    <span>No Telephone : <?= $d->no_telp ?></span> <br />
                                                                                    <span>Fax : -</span>
                                                                                </p>
                                                                            </div>
                                                                            <div class="two">
                                                                                <span class="price per-price"><small><?= $d->nama_kab ?><br><?= $d->nama_prov ?></small></span>
                                                                            </div>
                                                                        </div>
                                                                        <p><?= $d->alamat_jalan ?></p>
                                                                        <hr>
                                                                        <p class="bottom-area d-flex">
                                                                            <a href="<?= base_url('Jasa_akomodasi/jasa_akomodasi_sekitar/'.$kode_prov.'/'.$kode_kab.'/'.$kode_klasifikasi); ?>" class="btn-first-2 float-left">Jasa Akomodasi Sekitar</a>
                                                                            <a href="<?= base_url('Penyedia_makan_dan_minum/penyedia_makan_dan_minum_sekitar/'.$kode_prov.'/'.$kode_kab.'/'.$kode_klasifikasi); ?>" class="btn-first-2 float-left">PMM Sekitar</a>
                                                                            <a href="<?= base_url('Daya_tarik_wisata/daya_tarik_wisata_detail/'.$d->id); ?>" class="btn-first-3 ml-auto">Lihat</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            <?php 
                                            } else {
                                                echo "Data Not Found!";
                                        } ?>
                                    </div>
                                </div>
                            </div> <!-- .col-md-8 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                        <a href="<?= base_url('tentang'); ?>" class="btn-first-4 justify-content-center w-50">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$(document).ready(function () {

    $('#example1').DataTable({
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": true,
        "bAutoWidth": false,
        "ordering": false
    });

    $('#example1').on('page.dt', function() {
    // Your code here
        $('html, body').animate({
        scrollTop: $('#v-pills-all').offset().top
        },0);
    });

    $('#example2').DataTable({
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": true,
        "bAutoWidth": false,
        "ordering": false
    });

    $('#example2').on('page.dt', function() {
    // Your code here
        $('html, body').animate({
        scrollTop: $('#v-pills-whatwedo-tab').offset().top
        },0);
    });

    $('#example3').DataTable({
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": true,
        "bAutoWidth": false,
        "ordering": false
    });

    $('#example3').on('page.dt', function() {
    // Your code here
        $('html, body').animate({
        scrollTop: $('#v-pills-mission-tab').offset().top
        },0);
    });

    $('#example4').DataTable({
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": true,
        "bAutoWidth": false,
        "ordering": false
    });

    $('#example4').on('page.dt', function() {
    // Your code here
        $('html, body').animate({
        scrollTop: $('#v-pills-goal-tab').offset().top
        },0);
    });
});
</script>