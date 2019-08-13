<!-- About -->
<section id="about">
    <div class="banner" style="background-image: url('<?= $about['image_banner'] ?>');"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-lg-9 px-sm-0">
                <div class="about-item">
                    <h2 class="title">
                        <?= $about['title']; ?>
                    </h2>
                    <div class="separator"></div>
                    <div class="description">
                        <p>
                            <?= $about['description']; ?>
                        </p>
                    </div>
                    <div class="decor-icon">
                        <svg>
                            <use xlink:href="#decor-line"></use>
                        </svg>
                    </div>
                </div>
                <div class="about-video"
                     style="background-image: url('<?= getVideoImageLinkAttribute($about['video_link']); ?>');">
                    <div class="play-icon" data-src="<?= getVideoLinkAttribute($about['video_link']); ?>">
                        <div class="triangle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>