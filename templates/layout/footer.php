<div class="footer">
    <div class="maxwidth">
        <div class="fl-footer">
            <div class="footer-news">
                <div class="logo-footer">
                    <a class="" href="">
                        <?= $func->getImage(['sizes' => '135x135x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
                    </a>
                    <h4><?= $setting['name' . $lang] ?></h4>
                </div>
            </div>
            <div class="footer-news">
                <div class="title-ft">
                    <h4>Thông tin liên hệ</h4>
                    <h2><?= $footer['name' . $lang] ?></h2>
                </div>
                <?= (!empty($footer['content' . $lang])) ? htmlspecialchars_decode($footer['content' . $lang]) : '' ?>
            </div>
        </div>
        <div class="footer-end">
            <div class="fl-end">
                <div class="footer-copyright">2022 Copyright <?= $setting['name' . $lang] ?>. Design by Nina.vn</div>
                <div class="statistic">
                    <span><?= dangonline ?>: <?= $online ?></span>
                    <span>|</span>
                    <span><?= homnay ?>: <?= $counter['today'] ?></span>
                    <span>|</span>
                    <span><?= tongtruycap ?>: <?= $counter['total'] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>