<!-- Packages -->
<section id="packages">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-description text-center">
                    <h2 class="title">
                        <?= $packages['title']; ?>
                    </h2>
                    <div class="description">
                        <?= $packages['description']; ?>
                    </div>
                </div>
            </div>
            <?php
            foreach ($packages['item'] as $item) :
                ?>
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div class="packages-card">
                        <div class="packages-card-item">
                            <div class="decor-left"></div>
                            <div class="decor-right"></div>
                            <h4 class="title">
                                <?= $item['title']; ?>
                            </h4>
                            <?php if ($item['hit']): ?>
                                <div class="hit">
                                    <div class="decor-left"></div>
                                    хит
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="packages-card-item">
                            <div class="decor-left"></div>
                            <div class="decor-right"></div>
                            <div class="description">
                                <?= $item['description']; ?>
                            </div>
                        </div>
                        <div class="packages-card-item">
                            <div class="decor-left"></div>
                            <div class="decor-right"></div>
                            <div class="price">
                                <?php if (!is_null($item['old_price'])): ?>
                                    <div class="old-price">
                                        Обычная цена <?= $item['old_price'] ?>
                                    </div>
                                <?php endif; ?>
                                <div class="main-price">
                                    <?= $item['main_price'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="packages-card-item">
                            <div class="decor-left"></div>
                            <div class="decor-right"></div>
                            <div class="select">
                                <div class="description">
                                    Жми и выбирай свой тарифный план
                                </div>
                                <a href="#" class="btn btn-outline-primary open-packages" data-name-package="<?= $item['title']; ?>">
                                    выбрать
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="places-left">
                        <div class="description">
                            Осталось <span><?= $item['places_left']; ?></span> мест
                        </div>
                        <div class="places-progress-bar" data-places-all="<?= $item['places_all']; ?>" data-places-left="<?= $item['places_left']; ?>">
                            <div class="driver"></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>