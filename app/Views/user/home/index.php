<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- TEST SLIDER img -->
<?= $this->include('user/home/slider'); ?>

<!-- END slider -->

<main>

<div class="container-fluid py-5">
    <div class="container pt-0 pt-lg-4">
        <div class="about-title">
            <?php foreach ($profil as $title) : ?>
                <p class="title-text mb-4" style="font-size: 36px; font-weight: bold; text-align: center; color: #007BFF;">
                    <?= $title->title_website; ?>
                </p>
            <?php endforeach; ?>
        </div>
    </div>
</div>


    <!-- We Trusted Start-->
    <div class="we-trusted-area trusted-padding">
        <div class="container">
            <?php foreach ($profil as $descper) : ?>

                <div class="row d-flex align-items-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="trusted-img">
                            <img data-src="asset-user/images/<?= $descper->foto_utama; ?>" <?php foreach ($profil as $perusahaan) :  ?>alt="<?= $perusahaan->nama_perusahaan; ?>" <?php endforeach; ?> class="img-fluid img-overlap lazyload">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="trusted-caption">
                            <h2 class="mb-4"><?php echo lang('Blog.titleAboutUs')  ?></h2>
                            <h1 class="text-primary mb-3"><?= $descper->nama_perusahaan; ?></h1>

                            <p><?php if (lang('Blog.Languange') == 'en') {
                                    echo character_limiter($descper->deskripsi_perusahaan_en, 700);
                                } ?>
                                <?php if (lang('Blog.Languange') == 'in') {
                                    echo character_limiter($descper->deskripsi_perusahaan_in, 700);
                                } ?></p>
                            <a href="about" class="btn trusted-btn"><?php echo lang('Blog.btnReadmore'); ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
    <!-- We Trusted End-->

    <!-- Recent Area Start -->
    <div class="recent-area section-paddingt">
        <div class="container">
            <!-- section tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <h2><?php echo lang('Blog.btnOurproducts'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $count = 0;
                foreach ($tbproduk as $produk) :
                    if ($count < 3) { ?>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-recent-cap mb-30">
                                <div class="recent-img">
                                    <img src="asset-user/images/<?= $produk->foto_produk; ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                                                                                        echo $produk->nama_produk_en;
                                                                                                    } ?>
                                    <?php if (lang('Blog.Languange') == 'in') {
                                        echo $produk->nama_produk_in;
                                    } ?>">
                                </div>
                                <div class="recent-cap">
                                    <a href="<?= base_url('product/detail/' . $produk->id_produk . '/' . url_title($produk->nama_produk_en) . '_' . url_title($produk->nama_produk_in)) ?>">
                                        <h4><a href="<?= base_url('product/detail/' . $produk->id_produk . '/' . url_title($produk->nama_produk_en) . '_' . url_title($produk->nama_produk_in)) ?>">
                                            <?php if (lang('Blog.Languange') == 'en') {
                                                echo $produk->nama_produk_en;
                                            } ?>
                                            <?php if (lang('Blog.Languange') == 'in') {
                                                echo $produk->nama_produk_in;
                                            } ?></a></h4>
                                </div>
                            </div>
                        </div>
                <?php
                        $count++;
                    }
                endforeach; ?>
            </div>
        </div>
        <div class="d-flex justify-content-center"> <!-- Menengahkan tombol -->
            <a href="<?= base_url('product') ?>" class="btn trusted-btn"><?php echo lang('Blog.btnOurproducts'); ?></a>
        </div>
    </div>
    <!-- Recent Area End-->

    <?= $this->endSection('content') ?>