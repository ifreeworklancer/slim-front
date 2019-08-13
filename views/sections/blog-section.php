<!-- Blog section -->
<section id="blog-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto col-lg-12 px-1">
                <h2 class="section-title">
                    <?= $blog_section['title']; ?>
                </h2>
            </div>
            <div class="article-wrapper">
                <?php
                foreach ($blog_section['item'] as $item) :
                    ?>
                    <article class="article-item">
                        <a href="#">
                            <div class="image">
                                <figure style="background-image:url('<?= $item['image']; ?>');"></figure>
                            </div>
                            <div class="content">
                                <h5 class="title">
                                    <?= $item['title']; ?>
                                </h5>
                                <div class="description">
                                    <?= $item['description'] ?>
                                </div>
                                <div class="read-more">
                                    <div class="read-more__text">читать статью</div>
                                    <div class="read-more__icon"></div>
                                </div>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="col-12 text-center mt-4">
                <a href="#" class="btn btn-outline-primary">
                    В БЛОГ
                </a>
            </div>
        </div>
    </div>
</section>