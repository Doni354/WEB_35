

<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <?php foreach ($profil as $header) :  ?>
                            <div class="col-lg-4 mb-3 mb-lg-0">
                                <a href="<?= base_url('/') ?>" class="d-flex align-items-center">
                                    <img src="<?= base_url('asset-user/images/'); ?><?= $header->logo_perusahaan ?>" alt="<?= $header->nama_perusahaan ?>" class="img-fluid" style="max-height: 80px; width: auto;">
                                </a>
                            </div>
                        <?php endforeach;  ?>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a id="home-link" href="<?= base_url('/') ?>" class="nav-item nav-link <?php if (current_url() == base_url('/') || current_url() == base_url()) echo 'active'; ?>"><?php echo lang('Blog.headerHome'); ?></a></li>
                                        <li><a href="<?= base_url('about') ?>" class="nav-link text-link"<?php if (current_url() == base_url('about')) echo 'active'; ?>"><?php echo lang('Blog.headerAbout'); ?></a></li>
                                        <li><a href="<?= base_url('artikel') ?>" class="nav-item nav-link" <?php if (current_url() == base_url('artikel')) echo 'active'; ?>"><?php echo lang('Blog.headerArticle'); ?></a></li>
                                        <li><a href="<?= base_url('product') ?>" class="nav-link text-link"<?php if (current_url() == base_url('product')) echo 'active'; ?>"><?php echo lang('Blog.headerProducts'); ?></a></li>
                                        <li><a href="<?= base_url('activities') ?>" class="nav-link text-link"<?php if (current_url() == base_url('activities')) echo 'active'; ?>"><?php echo lang('Blog.headerActivities'); ?></a></li>
                                        <li><a href="<?= base_url('contact') ?>" class="nav-link text-link"<?php if (current_url() == base_url('contact')) echo 'active'; ?>"><?php echo lang('Blog.headerContact'); ?></a>
                                        <li><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo lang('Blog.headerLanguange'); ?></a>
                                            <ul class="submenu">
                                                <li><a href="<?= site_url('lang/in') ?>" class="dropdown-item">Indonesia</a></li>
                                                <li><a href="<?= site_url('lang/en') ?>" class="dropdown-item">English</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none text-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>