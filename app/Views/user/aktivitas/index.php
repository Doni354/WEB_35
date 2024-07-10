<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>
<!-- Page Header Start -->
<div class="container-fluid page-header-1 py-5 mb-5 wow fadeIn lazyload" data-wow-delay="0.1s" style="min-height: 500px; display: flex; align-items: center; justify-content: center;">
    <div class="container text-center py-5">
        <?php foreach ($profil as $perusahaan) : ?>
            <h1 class="text-white">
                <?php echo lang('Blog.titleActivities');
                if (!empty($perusahaan)) {
                    echo ' ' . $perusahaan->nama_perusahaan;
                } ?>
            </h1>
        <?php endforeach; ?>
        <div class="d-inline-flex text-white m-3 p-3" style="border-radius: 8px;">
            <p class="m-0 text-uppercase"><a class="text-white" href="<?= base_url('/') ?>"><?php echo lang('Blog.Blog.headerHome'); ?></a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <span><?php echo lang('Blog.headerActivities');  ?></span>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="site-section">
    <div class="container">
        <div class="row">
            <?php foreach ($tbaktivitas as $aktivitas) : ?>
                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                    <div class="blog-entry">
                        <a href="<?= base_url('activities/detail/' . $aktivitas->id_aktivitas . '/' . url_title($aktivitas->nama_aktivitas_en) . '_' . url_title($aktivitas->nama_aktivitas_in)) ?>" class="img-link">
                            <img data-src="asset-user/images/<?= $aktivitas->foto_aktivitas ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                                                                                            echo $aktivitas->nama_aktivitas_en;
                                                                                                        } ?>
                                    <?php if (lang('Blog.Languange') == 'in') {
                                        echo $aktivitas->nama_aktivitas_in;
                                    } ?>" class="img-fluid lazyload">
                        </a>
                        <div class="blog-entry-contents">
                            <h3 class="project-item-title">
                                <a href="<?= base_url('activities/detail/' . $aktivitas->id_aktivitas . '/' . url_title($aktivitas->nama_aktivitas_en) . '_' . url_title($aktivitas->nama_aktivitas_in)) ?>">
                                    <?php if (lang('Blog.Languange') == 'en') {
                                        echo $aktivitas->nama_aktivitas_en;
                                    } ?>
                                    <?php if (lang('Blog.Languange') == 'in') {
                                        echo $aktivitas->nama_aktivitas_in;
                                    } ?>
                                </a>
                            </h3>
                            <!-- <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div> -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- </div> -->

<?= $this->endSection('content'); ?>