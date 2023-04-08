<div class="hero-wrap js-fullheight" style="background-image: url('https://media-cdn.tripadvisor.com/media/photo-s/19/5e/de/2a/img20190924155536-largejpg.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?= base_url(); ?>">Home</a></span>/ <span>Jumlah PMM berdasarkan Provinsi</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">PMM di Provinsi</h1>
                <?php if($first_data) {?>
                    <h2 class="mb-3 bread text-white"><?= $first_data->nama_prov ?></h2>
                <?php }else{ ?>
                    <h2 class="mb-3 bread text-white">Data Not Found!</h2>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar">
                <div class="sidebar-wrap bg-light ftco-animate">
                    <h3 class="heading mb-4" style="text-align: center; font-weight: bold">Cari PMM Selera Anda</h3>
                    <form action="" method="post">
                        <div class="fields">
                            <div class="form-group">
                                <input type="text" name="kode_kab" class="form-control" placeholder="Kode Kabupaten">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Cari" class="btn btn-primary py-3 px-5">
                                <?php if($kode_kab) {?>
                                    <button class="btn btn-secondary mt-2 py-3 px-5" onclick="history.go(-1);">Back </button>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <?php if($kode_kab) {?>
                        <div class="col-md-12 ml-4" style="margin-bottom:-30px;">
                            <h2 class="h4">Search Result From <b><i>Kode Kab <?= $kode_kab ?></i></h2>
                        </div>
                    <?php }else { ?>
                        <div class="col-md-12 ml-4" style="margin-bottom:-30px;">
                            <h2 class="h4"><b><i> Menampilkan Semua Kuliner di Kode Provinsi <?= $kode_prov ?></i></b></h2>
                        </div>
                    <?php } ?>
                    <div class="col-md-12 ftco-animate">
                        <?php if ($result_pmm->status) {
                        ?>
                            <table id="example" class="table table-borderless" style="width:100%;padding-top:0px">
                                <thead>
                                    <tr>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php foreach ($result_pmm->data as $pmmAll) { ?>
                                <tr>
                                    <td>
                                        <div class="destination">
                                            <a href="<?= base_url('penyedia_makan_dan_minum_detail'); ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?= $pmmAll->photo_url ?>);">
                                                <div class="icon d-flex justify-content-center align-items-center">
                                                    <span class="icon-search2"></span>
                                                </div>
                                            </a>
                                            <div class="text p-3">
                                                <div class="d-flex">
                                                    <div class="one">
                                                        <h3><a href="<?= base_url('penyedia_makan_dan_minum_detail'); ?>"><?= $pmmAll->nama_komersial ?></a></h3>
                                                        <p class="rate">
                                                            <span>No Telephone : <?= $pmmAll->no_telp ?></span> <br />
                                                            <span>Fax : -</span>
                                                        </p>
                                                    </div>
                                                    <div class="two">
                                                        <span class="price per-price"><small><?= $pmmAll->nama_kab ?><br><?= $pmmAll->nama_prov ?></small></span>
                                                    </div>
                                                </div>
                                                <p><?= $pmmAll->alamat_jalan ?></p>
                                                <hr>
                                                <p class="bottom-area d-flex">
                                                    <a href="<?= base_url('Jasa_akomodasi/jasa_akomodasi_sekitar/'.$kode_prov.'/'.$kode_kab); ?>" class="btn-first-2 float-left">Jasa Akomodasi Sekitar</a>
                                                    <a href="<?= base_url('Daya_tarik_wisata/daya_tarik_wisata_sekitar/'.$kode_prov.'/'.$kode_kab); ?>" class="btn-first-2 float-left">DTW Sekitar</a>
                                                    <a href="<?= base_url('Penyedia_makan_dan_minum/penyedia_makan_dan_minum_detail/'.$pmmAll->id); ?>" class="btn-first-3 ml-auto">Lihat</a>
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
                        }?>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->
<script>
$(document).ready(function () {
    // Save the scroll position in local storage when the page is unloaded
    window.addEventListener('beforeunload', function() {
    localStorage.setItem('scrollPosition', window.scrollY);
    });

    // Retrieve the scroll position from local storage when the page is loaded
    window.addEventListener('load', function() {
    var scrollPosition = localStorage.getItem('scrollPosition');
        if (scrollPosition !== null) {
            window.scrollTo(0, scrollPosition);
            localStorage.removeItem('scrollPosition');
        }
    });

    $('#example').DataTable({
        "bLengthChange": false,
        "bFilter": false,
        "bInfo": true,
        "bAutoWidth": false,
        "ordering": false
    });
});
</script>