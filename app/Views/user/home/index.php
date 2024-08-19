<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- TEST SLIDER img -->
<?= $this->include('user/home/slider'); ?>

<!-- END slider -->

<main>

<div class="container-fluid py-2" style="padding-top: 10px !important;"> <!-- Adjust the value as needed -->
    <div class="container pt-0 pt-lg-4" style="padding-top: 40px !important;"> <!-- Adjust the value as needed -->
        <div class="about-title" style="width: 60%; margin: 0 auto 20px auto; border-bottom: 2px solid #000000;">
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
        <!-- section title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
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
<!-- Recent Area End-->

<?= $this->endSection('content') ?>

<style>

    .we-trusted-area {
        text-align: center !important;
        margin-top: 10px !important;
        padding-top: 10px !important;
    }

    .trusted-img img {
    max-width: 100% !important;
    width: 100% !important;
    height: auto !important;
    max-width: 1000px !important; /* Set the maximum width of the image */
}

.col-xl-8, .col-lg-10 { /* Ensure the container takes more space */
    flex: 0 0 100% !important;
    max-width: 100% !important;
}

@media (min-width: 992px) { /* Adjust these media queries based on your grid system */
    .col-xl-8, .col-lg-10 {
        flex: 0 0 75% !important; /* Use 75% of the row width on larger screens */
        max-width: 75% !important;
    }
}


    .description-text {
        margin: 10px auto !important;
        max-width: 80% !important;
        text-align: left !important;
        display: block !important;
    }

    .about-title .title-text {
        margin-bottom: 10px !important;
    }

    @media (max-width: 768px) {
        .col-xl-4, .col-xl-8 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>
