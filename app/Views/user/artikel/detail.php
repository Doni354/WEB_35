<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<style>
    .article-title {
    white-space: normal;      
    word-wrap: break-word;    
    overflow-wrap: break-word; 
    width: 100%;              
}
.article-item {
    display: flex;
    height: 110px; /* Tinggi card sesuai dengan tinggi gambar */
    overflow: hidden; /* Sembunyikan overflow */
}

.article-image {
    width: 110px;
    height: 110px;
    object-fit: cover;
}

.article-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    flex: 1;
    padding: 0 1rem;
    white-space: normal; /* Izinkan teks membungkus ke baris berikutnya */
    overflow: hidden; /* Sembunyikan overflow yang tidak perlu */
    text-overflow: ellipsis; /* Tambahkan ellipsis pada teks yang terlalu panjang */
}



</style>

<!-- Page Header Start -->
<div class="container-fluid page-header-1 py-5 mb-5 wow fadeIn lazyload" data-wow-delay="0.1s" style="min-height: 500px; display: flex; align-items: center; justify-content: center;">
    <div class="container text-center py-5">
        <?php foreach ($profil as $perusahaan) : ?>
            <h1 class="text-white">
                <?php echo lang('Blog.titleOurarticle');
                        if (!empty($perusahaan)) {
                            echo ' ' . $perusahaan->nama_perusahaan;
                        } ?>
            </h1>
        <?php endforeach; ?>
        <div class="d-inline-flex text-white m-3 p-3" style="border-radius: 8px;">
            <p class="m-0 text-uppercase"><a class="text-white" href="<?= base_url('/') ?>"><?php echo lang('Blog.Blog.headerHome'); ?></a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <span><?php echo lang('Blog.headerArticle');  ?></span>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- News With Sidebar Start -->
<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="<?= base_url('asset-user/images/' . $artikel->foto_artikel); ?>" style="object-fit: cover;">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <a class="text-uppercase mb-3 text-body"><?= date('d F Y', strtotime($artikel->created_at)); ?></a>
                        </div>
                        <h1 class="display-5 mb-2 article-title"><?= $artikel->judul_artikel; ?></h1>
                        <p class="fs-5"><?= $artikel->deskripsi_artikel; ?></p>
                    </div>
                </div>
                <!-- News Detail End -->
            </div>

            <div class="col-lg-4">
    <!-- Popular News Start -->
    <div class="mb-3">
        <div class="section-title mb-0">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Baca Juga</h5>
        </div>
        <br>
        <div class="bg-white border border-top-0 p-3">
            <?php foreach ($artikel_lain as $artikel_item) : ?>
                <div class="d-flex align-items-center bg-white mb-3 article-item">
                    <img class="img-fluid article-image" src="<?= base_url('asset-user/images/' . $artikel_item->foto_artikel); ?>" alt="">
                    <div class="w-100 h-100 d-flex flex-column justify-content-center border border-left-0 article-content">
                        <div class="mb-2">
                            <a class="text-body" href="<?= base_url('/artikel/detail/' . $artikel_item->id_artikel) ?>"><small><?= date('d F Y', strtotime($artikel_item->created_at)); ?></small></a>
                        </div>
                        <a class="h6 m-0 display-7" href="<?= base_url('/artikel/detail/' . $artikel_item->id_artikel) ?>"><?= substr($artikel_item->judul_artikel, 0, 20) ?>...</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Popular News End -->
</div>


                <!-- Popular News End -->
            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->

<?= $this->endSection('content'); ?>