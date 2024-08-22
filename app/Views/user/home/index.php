<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- TEST SLIDER img -->
<?= $this->include('user/home/slider'); ?>

<!-- END slider -->

<main>

<div class="container-fluid py-2" style="padding-top: 10px !important;"> <!-- Adjust the value as needed -->
    <div class="container pt-0 pt-lg-4" style="padding-top: 40px !important;"> <!-- Adjust the value as needed -->
        <div class="about-title" style=" margin: 0 auto 20px auto; border-bottom: 2px solid #000000;">
            <?php foreach ($profil as $title) : ?>
                <p class="title-text mb-4" style="font-size: 36px; font-weight: bold;text-align: center; color: #007BFF;">
                    <?= $title->title_website; ?>
                </p>
            <?php endforeach; ?>
        </div>
    </div>
</div>



<!--About Us Start-->
<div class="we-trusted-area trusted-padding">
    <div class="container">
        <?php foreach ($profil as $descper) : ?>
            <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-4 mb-4 text-center"> <!-- Increase the column width -->
        <div class="trusted-img">
            <img data-src="asset-user/images/<?= $descper->foto_utama; ?>" alt="<?= $descper->nama_perusahaan; ?>" class="img-fluid lazyload">
        </div>
    </div>
</div>

            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 text-center">
                    <div class="trusted-caption">
                        <h2 class="mb-4"><?php echo lang('Blog.titleAboutUs') ?></h2>
                        <h1 class="text-primary mb-3"><?= $descper->nama_perusahaan; ?></h1>
                        <p class="description-text">
                            <?php if (lang('Blog.Languange') == 'en') {
                                echo character_limiter($descper->deskripsi_perusahaan_en, 700);
                            } ?>
                            <?php if (lang('Blog.Languange') == 'in') {
                                echo character_limiter($descper->deskripsi_perusahaan_in, 700);
                            } ?>
                        </p>
                        <a href="about" class="btn trusted-btn"><?php echo lang('Blog.btnReadmore'); ?></a>
                        <br><br>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!--About Us End-->

<!-- Our Product  -->
<div class="recent-area section-paddingt" style="background: linear-gradient(#FFFFFF, #75B8FF, #FFFFFF);padding-top:60px;padding-bottom:60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" style="border-bottom: 2px solid #000000; margin:0 auto;">
                    <p style="color:#007BFF;font-size: 36px; font-weight: bold; text-align: center;"><?php echo lang('Blog.btnOurproducts'); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $count = 0;
            foreach ($tbproduk as $produk) :
                if ($count < 3) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6" style="padding-top: 40px !important;">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="asset-user/images/<?= $produk->foto_produk; ?>" alt="<?php if (lang('Blog.Languange') == 'en') {echo $produk->nama_produk_en;} ?>
                                <?php if (lang('Blog.Languange') == 'in') {
                                    echo $produk->nama_produk_in;
                                } ?>">
                            </div>
                            <div class="recent-cap">
                                <a href="<?= base_url('product/detail/' . $produk->id_produk . '/' . url_title($produk->nama_produk_en) . '_' . url_title($produk->nama_produk_in)) ?>">
                                    <h4>
                                        <?php if (lang('Blog.Languange') == 'en') {
                                            echo $produk->nama_produk_en;
                                        } ?>
                                        <?php if (lang('Blog.Languange') == 'in') {
                                            echo $produk->nama_produk_in;
                                        } ?>
                                    </h4>
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                    $count++;
                }
            endforeach; ?>
        </div>
    </div>
    <div class="d-flex justify-content-center"> <!-- Center the button -->
        <a href="<?= base_url('product') ?>" class="btn trusted-btn"><?php echo lang('Blog.btnOurproducts'); ?></a>
    </div>
</div>

<!-- Our Product End-->

<!-- Contact Start-->
<div class="p-2" style="max-width: 900px; margin: 0 auto; text-align: center;">
    <h3 class="display-3 mt-5 mb-md-5" style="font-size: 36px; margin:0 auto; font-weight: bold; color: #007BFF; border-bottom: 2px solid black; padding-bottom:10px;margin-bottom:1rem!important;">
        <?= lang('Blog.currentPosition') ?>
    </h3>
</div>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-5 mb-md-5">
                <div class="testimonial">
                    <p class="map">
                        <?php foreach ($profil as $maps) : ?>
                            <div class="embed-responsive embed-responsive-21by9">
                                <?= $maps->link_maps ?>
                            </div>
                        <?php endforeach; ?>
                    </p>
                </div>
            </div>
            <a href="contact" class="btn trusted-btn" style="margin-bottom: 60px;"><?php echo lang('Blog.btnReadmore'); ?></a>
        </div>
    </div>
</div>
<!-- Contact End -->

<?= $this->endSection('content') ?>

