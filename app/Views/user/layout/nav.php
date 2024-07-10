<div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
    <div class="container">
        <div class="col-xl-8 col-lg-8 col-md-8">
            <!-- Main-menu -->
            <div class="main-menu f-right d-none d-lg-block">
                <nav>
                    <ul id="navigation">
                        <li><a id="home-link" href="<?= base_url('/') ?>" class="nav-item nav-link <?php if (current_url() == base_url('/') || current_url() == base_url()) echo 'active'; ?>"><?php echo lang('Blog.headerHome'); ?></a></li>
                        <li><a href="<?= base_url('about') ?>" class="nav-link text-left"><?php echo lang('Blog.headerAbout'); ?></a></li>
                        <li><a href="<?= base_url('product') ?>" class="nav-link text-left"><?php echo lang('Blog.headerProducts'); ?></a></li>
                        <li><a href="<?= base_url('activities') ?>" class="nav-link text-left"><?php echo lang('Blog.headerActivities'); ?></a></li>
                        <li><a href="<?= base_url('contact') ?>" class="nav-link text-left"><?php echo lang('Blog.headerContact'); ?></a>
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
    </div>
</div>