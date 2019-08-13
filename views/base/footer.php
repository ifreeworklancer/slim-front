</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="footer-contacts px-2 px-sm-5">
        <div class="footer-contacts-item">
            <a href="/" class="logo">
                <img src="<?= $logo; ?>" alt="logo">
            </a>
        </div>
        <div class="footer-contacts-item footer-contacts-item--big">
            <div class="contacts-title">
                Контактная информация
            </div>
            <div class="contacts-list">
                <div class="contacts-item">
                    <svg width="20" height="15">
                        <use xlink:href="#phone-icon"></use>
                    </svg>
                    <a href="tel:<?= phone_link($phone1); ?>">
                        <?= $phone1; ?>
                    </a>
                </div>
                <div class="contacts-item">
                    <svg width="20" height="15">
                        <use xlink:href="#phone-icon"></use>
                    </svg>
                    <a href="tel:<?= phone_link($phone2); ?>">
                        <?= $phone2; ?>
                    </a>
                </div>
                <div class="contacts-item">
                    <svg width="20" height="15">
                        <use xlink:href="#place-icon"></use>
                    </svg>
                    <a href="<?= $address_link; ?>">
                        <?= $address; ?>
                    </a>
                </div>
                <div class="contacts-item">
                    <svg width="20" height="15">
                        <use xlink:href="#email-icon"></use>
                    </svg>
                    <a href="mailto:<?= $email; ?>">
                        <?= $email; ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-contacts-item">
            <a href="#" class="btn btn-primary open-feedback">
                связаться
            </a>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container-fluid px-2 px-sm-5">
            <div class="row justify-content-between align-items-center w-100 m-0 no-gutters">
                <div class="col-sm-4">
                    <div class="footer-copyright-item text-center text-sm-left">
                        <?= date('Y') ?> Все права защищены
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer-copyright-item d-flex justify-content-center">
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
                <div class="col-sm-4">
                    <div class="footer-copyright-item text-center text-sm-right">
                        Дизайн и веб разработка компании <a href="https://impressionbureau.pro/">Impression Bureau</a>
                        2019
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="../dist/app.js"></script>
</body>

</html>