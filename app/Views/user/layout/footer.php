<footer class="footer-distributed">

    <div class="footer-left">
        <h3>Pet<span>And</span>Paws</h3>
        <p class="footer-links">
            <a id="home-link" href="<?= base_url('/') ?>" class="link-1 <?php if (current_url() == base_url('/') || current_url() == base_url()) echo 'active'; ?>"><?php echo lang('Blog.headerHome'); ?></a>
            <a href="<?= base_url('about') ?>" class="<?php if (current_url() == base_url('about')) echo 'active'; ?>"><?php echo lang('Blog.headerAbout'); ?></a>
            <a href="<?= base_url('artikel') ?>" class="<?php if (current_url() == base_url('artikel')) echo 'active'; ?>"><?php echo lang('Blog.headerArticle'); ?></a>
            <a href="<?= base_url('product') ?>" class="<?php if (current_url() == base_url('product')) echo 'active'; ?>"><?php echo lang('Blog.headerProducts'); ?></a>
            <a href="<?= base_url('activities') ?>" class="<?php if (current_url() == base_url('activities')) echo 'active'; ?>"><?php echo lang('Blog.headerActivities'); ?></a>
            <a href="<?= base_url('contact') ?>" class="<?php if (current_url() == base_url('contact')) echo 'active'; ?>"><?php echo lang('Blog.headerContact'); ?></a>
        </p>
        <?php foreach ($profil as $footer) : ?>
            <p class="footer-company-name" style="color: #fff;">Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script>. <?= $footer->teks_footer; ?></p>
        <?php endforeach; ?>
    </div>

    <div class="footer-center">
        <?php foreach ($profil as $info) : ?>
            <div>
                <i class="fas fa-phone"></i>
                <p><?= $info->no_hp ?></p>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <p><a href="mailto:<?= $info->email ?>"><?= $info->email ?></a></p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="footer-right">
        <p class="footer-company-about">
            <span><?php echo lang('Blog.titleAboutUs'); ?></span>
            <?php foreach ($profil as $descper) : ?>
                <?php
                if (lang('Blog.Languange') == 'en') {
                    $description = $descper->deskripsi_perusahaan_en;
                } else {
                    $description = $descper->deskripsi_perusahaan_in;
                }
                $short_description = (strlen($description) > 100) ? substr($description, 0, 100) . '...' : $description;
                echo '<span class="description-text">' . $short_description . '</span>';
                if (strlen($description) > 100) {
                    echo ' <a href="' . base_url('/about') . '" class="read-more-btn">Read More</a>';
                }
                ?>
            <?php endforeach; ?>
        </p>
    </div>

</footer>

<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

    .footer-distributed {
        background: #171515;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        padding: 55px 50px;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
        display: inline-block;
        vertical-align: top;
    }

    /* Footer left */
    .footer-distributed .footer-left {
        width: 40%;
    }

    /* The company logo */
    .footer-distributed h3 {
        color: #ffffff;
        font: normal 36px 'Open Sans', cursive;
        margin: 0;
    }

    .footer-distributed h3 span {
        color: lightseagreen;
    }

    /* Footer links */
    .footer-distributed .footer-links {
        color: #b0b0b0;
        /* Darker initial color */
        margin: 20px 0 12px;
        padding: 0;
    }

    .footer-distributed .footer-links a {
        display: inline-block;
        line-height: 1.8;
        font-weight: 400;
        text-decoration: none;
        color: #b0b0b0;
        /* Darker initial color */
        transition: color 0.3s;
    }

    .footer-distributed .footer-links a:hover {
        color: #ffffff;
        /* Highlight color on hover */
    }

    .footer-distributed .footer-company-name {
        color: #fff;
        /* Changed color to white */
        font-size: 14px;
        font-weight: normal;
        margin: 0;
    }

    /* Footer Center */
    .footer-distributed .footer-center {
        width: 35%;
    }

    .footer-distributed .footer-center i {
        background-color: #33383b;
        color: #ffffff;
        font-size: 25px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        text-align: center;
        line-height: 42px;
        margin: 10px 15px;
        vertical-align: middle;
    }

    .footer-distributed .footer-center i.fa-envelope {
        font-size: 17px;
        line-height: 38px;
    }

    .footer-distributed .footer-center p {
        display: inline-block;
        color: #ffffff;
        font-weight: 400;
        vertical-align: middle;
        margin: 0;
    }

    .footer-distributed .footer-center p span {
        display: block;
        font-weight: normal;
        font-size: 14px;
        line-height: 2;
    }

    .footer-distributed .footer-center p a {
        color: lightseagreen;
        text-decoration: none;
    }

    .footer-distributed .footer-links a:before {
        content: "|";
        font-weight: 300;
        font-size: 20px;
        left: 0;
        color: #b0b0b0;
        /* Darker initial color */
        display: inline-block;
        padding-right: 5px;
    }

    .footer-distributed .footer-links .link-1:before {
        content: none;
    }

    /* Footer Right */
    .footer-distributed .footer-right {
        width: 20%;
    }

    .footer-distributed .footer-company-about {
        line-height: 20px;
        color: #92999f;
        /* Darker color */
        font-size: 14px;
        /* Smaller text size */
        font-weight: normal;
        margin: 0;
    }

    .footer-distributed .footer-company-about span {
        display: block;
        color: #ffffff;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .footer-distributed .description-text {
        font-size: 12px;
        /* Smaller text size */
        color: #92999f;
        /* Darker color */
    }

    .footer-distributed .read-more-btn {
        color: lightseagreen;
        text-decoration: none;
        font-size: 12px;
        /* Smaller text size */
    }

    /* Add hover effect to the "Read More" button */
    .footer-distributed .read-more-btn:hover {
        text-decoration: underline;
    }

    .footer-distributed .footer-icons {
        margin-top: 25px;
    }

    .footer-distributed .footer-icons a {
        display: inline-block;
        width: 35px;
        height: 35px;
        cursor: pointer;
        background-color: #33383b;
        border-radius: 2px;
        font-size: 20px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;
        margin-right: 3px;
        margin-bottom: 5px;
    }

    /* If you don't want the footer to be responsive, remove these media queries */
    @media (max-width: 880px) {
        .footer-distributed {
            font: bold 14px sans-serif;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: block;
            width: 100%;
            margin-bottom: 40px;
            text-align: center;
        }

        .footer-distributed .footer-center i {
            margin-left: 0;
        }
    }
</style>

<!-- Add Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">