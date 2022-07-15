<div class="header">
    <div class="maxwidth">
        <div class="fl-between">
            <div class="worktime"><?= $optsetting['worktime'] ?></div>
            <div class="banner-header">
                <a class="" href="">
                    <?= $func->getImage(['sizes' => '495x80x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner['photo'], 'alt' => $setting['name' . $lang]]) ?>
                </a>
            </div>
            <div class="hotline">
                <p>Booking Show</p>
                <span><?= $func->formatPhone($optsetting['hotline']) ?></span>
            </div>
            <div class="email">
                <p>Email liên hệ</p>
                <span><?= $optsetting['email'] ?></span>
            </div>
        </div>
    </div>
    <?php include TEMPLATE . LAYOUT . "menu.php"; ?>
</div>