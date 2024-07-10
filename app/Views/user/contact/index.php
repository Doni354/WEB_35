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
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-5">
                <div class="testimonial">
                    <p class="map">
                        <div class="embed-responsive embed-responsive-16by9" style="width: 100%;">
                            <?php foreach ($profil as $maps) :  ?>
                                <?php echo $maps->link_maps ?>
                            <?php endforeach;  ?>
                        </div>
                    </p>
                </div>
            </div>
            <div class="col-md-6 mb-5 mb-md-5">
                <div class="testimonial">
                    <?php foreach ($profil as $desc) : ?>
                        <blockquote>
                            <p>
                                <?php if (lang('Blog.Languange') == 'en') {
                                    echo $desc->deskripsi_kontak_en;
                                } ?>
                                <?php if (lang('Blog.Languange') == 'in') {
                                    echo $desc->deskripsi_kontak_in;
                                } ?>
                            </p>
                        </blockquote>
                        <!-- <img src="images/person_2.jpg" alt="">
                    
                    <p class="client-name">Ben Anderson</p> -->
                    <?php endforeach;  ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>