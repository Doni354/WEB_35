<!-- slider Area Start-->
<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($tbslider as $key => $slider) : ?>
                <div class="carousel-item <?php echo ($key === 0) ? 'active' : ''; ?>">
                    <!-- ^ Add active class only to the first item -->
                    <img class="w-100" src="asset-user/images/<?= $slider->file_foto_slider; ?>" alt="Slider Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#blog-carousel" role="button" data-slide="prev">
            <div>
                <span class="carousel-control-prev-icon mb-n2" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </div>
        </a>
        <a class="carousel-control-next" href="#blog-carousel" role="button" data-slide="next">
            <div><span class="carousel-control-next-icon mb-n2" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </div>
        </a>
    </div>
</div>
<!-- slider Area End-->