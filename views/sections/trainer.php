<!-- Trainer -->
<section id="trainer">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="section-title text-primary">
                    <?= $trainer['title']; ?>
                </h3>
                <div class="trainer-card">
                    <div class="content">
                        <div class="item">
                            <div class="decor-left"></div>
                            <h2 class="title">
                                <?= $trainer['full_name']; ?>
                            </h2>
                        </div>
                        <div class="item">
                            <div class="decor-left"></div>
                            <div class="advantages-row">
                                <?php
                                foreach ($trainer['advantages'] as $item):
                                    ?>
                                    <div class="advantages-item">
                                        <h4 class="advantages-item__title">
                                            <?= $item['title']; ?>
                                        </h4>
                                        <div class="advantages-item__description">
                                            <p>
                                                <?= $item['description']; ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="decor-left"></div>
                            <div class="description">
                                <?= $trainer['description']; ?>
                            </div>
                            <div class="item-footer">
                                <ul class="social-list">
                                    <li>
                                        <a href="<?= $facebook; ?>">
                                            <svg width="15" height="15">
                                                <use xlink:href="#facebook-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= $instagram; ?>">
                                            <svg width="15" height="15">
                                                <use xlink:href="#instagram-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="prev">
                        <div class="decor-right"></div>
                        <div class="image" style="background-image:url('<?= $trainer['image_trainer']; ?>');"></div>
                        <h6 class="full-name">
                            <?= $trainer['full_name']; ?>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="decor-icon">
        <svg width="1700" height="230">
            <use xlink:href="#decor-line"></use>
        </svg>
    </div>
</section>

