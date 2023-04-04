<div class="hero-wrap js-fullheight" style="background-image: url('assets/images/jasaAkomodasi/jasa-akomodasi-11.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?= base_url(); ?>">Home</a></span>/ <span> Jasa Akomodasi Sekitar</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Jasa Akomodasi di Sekitar ......</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row" style="justify-content: center;">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <?php if ($result_search_akomodasi->status) {
                            ?>
                            <?php foreach ($result_search_akomodasi->data as $d) { ?>
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
                                            <a href="<?= base_url('jasa_akomodasi_detail/'); ?>" class="btn-first-3 ml-auto">Lihat</a>
                                        </p>
                                    </div>
                                </div>
                            <?php
                            } 
                        } else {
                            echo "Data Not Found!";
                        }?>
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