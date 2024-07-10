<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header-1 py-5 mb-5 wow fadeIn lazyload" data-wow-delay="0.1s" style="min-height: 500px; display: flex; align-items: center; justify-content: center;">
    <div class="container text-center py-5">
        <?php foreach ($profil as $perusahaan) : ?>
            <h1 class="text-white">
                <?php echo lang('Blog.titleOurproducts');
                if (!empty($perusahaan)) {
                    echo ' ' . $perusahaan->nama_perusahaan;
                } ?>
            </h1>
        <?php endforeach; ?>
        <div class="d-inline-flex text-white m-3 p-3" style="border-radius: 8px;">
            <p class="m-0 text-uppercase"><a class="text-white" href="<?= base_url('/') ?>"><?php echo lang('Blog.Blog.headerHome'); ?></a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <span><?php echo lang('Blog.headerProducts');  ?></span>
        </div>
    </div>
</div>

<div class="site-section pb-0">
    <div class="block-2">
        <?php foreach ($profil as $descper) : ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img data-src="/asset-user/images/<?= $tbproduk->foto_produk ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                                                                                    echo $tbproduk->nama_produk_en;
                                                                                                } ?>
                                    <?php if (lang('Blog.Languange') == 'in') {
                                        echo $tbproduk->nama_produk_in;
                                    } ?>" class="img-fluid img-overlap lazyload">
                    </div>
                    <div class="col-lg-5 ml-auto">
                        <h3 class="section-subtitle text-white opacity-50"><?php echo lang('Blog.titleAboutUs')  ?></h3>
                        <h1 class="section-title mb-4"><?php if (lang('Blog.Languange') == 'en') {
                                                            echo $tbproduk->nama_produk_en;
                                                        } elseif (lang('Blog.Languange') == 'in') {
                                                            echo $tbproduk->nama_produk_in;
                                                        } ?></h1>
                        <p class="opacity-50">
                            <?php if (lang('Blog.Languange') == 'en') {
                                echo $tbproduk->deskripsi_produk_en;
                            } elseif (lang('Blog.Languange') == 'in') {
                                echo $tbproduk->deskripsi_produk_in;
                            } ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<br>
<br>
<?= $this->endSection('content'); ?>