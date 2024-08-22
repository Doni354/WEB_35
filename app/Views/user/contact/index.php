<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header-2 py-5 mb-5 wow fadeIn lazyload" data-wow-delay="0.1s" style="min-height: 500px; display: flex; align-items: center; justify-content: center;">
    <div class="container text-center py-5">
        <?php foreach ($profil as $perusahaan) : ?>
            <h1 class="text-white">
                <?php echo lang('Blog.titleOurContact');
                if (!empty($perusahaan)) {
                    echo ' ' . $perusahaan->nama_perusahaan;
                } ?>
            </h1>
        <?php endforeach; ?>
        <div class="d-inline-flex text-white m-3 p-3" style="border-radius: 8px;">
            <p class="m-0 text-uppercase"><a class="text-white" href="<?= base_url('/') ?>"><?php echo lang('Blog.headerHome'); ?></a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <span><?php echo lang('Blog.headerContact');  ?></span>
        </div>
    </div>
</div>
<body>
    <div class="p-3" style="max-width: 900px; margin: 0 auto; text-align: center;">
        <h3 class="display-3 mt-5 mb-md-5" style="font-size: 36px; font-weight: bold; color: #007BFF; border-bottom: 2px solid black; padding-bottom: 10px;">
            <?= lang('Blog.currentPosition') ?>
        </h3>
    </div>
</body>

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
        </div>
    </div>
</div>
<!-- Contact Info Box -->
<?= $this->endSection('content'); ?>

<style>
    .contact-info-box {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }
    .contact-info-item i {
        margin-right: 10px;
    }
</style>

<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
