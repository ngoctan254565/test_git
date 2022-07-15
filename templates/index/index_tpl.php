<div class="info-about">
    <div class="maxwidth">
        <div class="w-clear">
            <div class="photo-about animate__animated wow animate__zoomIn">
                <?php foreach ($photoab as $photo) { ?>
                <div class="img-about shine">
                    <div class="pic-shine scale-img">
                        <?= $func->getImage(['class' => 'lazy', 'sizes' => '400x450x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $photo['photo'], 'alt' => $photo['name' . $lang]]) ?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="ds-about animate__animated wow animate__zoomIn">
                <div class="title-about">
                    <p>Welcome to</p>
                    <h4><?= $about['name' . $lang] ?></h4>
                </div>
                <div class="desc-ab">
                    <?= htmlspecialchars_decode($about['desc' . $lang]) ?>
                </div>
                <a href="gioi-thieu" class="view-ab">Khám phá ngay</a>
                <div class="name"><?= $about['name' . $lang] ?></div>
            </div>
        </div>
    </div>
</div>

<div class="info-main">
    <div class="maxwidth">
        <div class="wr-vs w-clear">
            <div class="vs-left">
                <?php foreach ($vs as $v) { ?>
                <div class="box-vs animate__animated wow animate__zoomIn">
                    <a href="<?= $v[$sluglang] ?>">
                        <?= $func->getImage(['class' => 'lazy', 'sizes' => '70x70x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        <h3 class="text-split"><?= $v['name' . $lang] ?></h3>
                        <p class="text-split"><?= $v['desc' . $lang] ?></p>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="vs-right animate__animated wow animate__zoomIn">
                <div class="logo-vs shine">
                    <a class="pic-shine scale-img">
                        <?= $func->getImage(['sizes' => '550x385x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $photo_vs['photo'], 'alt' => $setting['name' . $lang]]) ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="info-menu">
    <div class="maxwidth">
        <div class="title-main">
            <p><?= $setting['name' . $lang] ?></p>
            <h4>Menu phoenix</h4>
        </div>
        <div class="paging-product"></div>
    </div>
</div>

<div class="info-main">
    <div class="fullwidth w-clear">
        <div class="photo-kh animate__animated wow animate__zoomIn"><img src="assets/images/photo_kh.png"
                alt="<?= $setting['name' . $lang] ?>" /></div>
        <div class="wr-kh animate__animated wow animate__zoomIn">
            <div class="tt-kh">
                <p>Hey ‘ there!</p>
                <p>my freind</p>
            </div>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0" data-md-items="1:0"
                data-lg-items="1:0" data-xlg-items="1:0" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="0" data-touchdrag="0" data-smartspeed="800" data-autoplayspeed="800"
                data-autoplaytimeout="5000" data-dots="0" data-animations="animate__fadeIn" data-nav="0"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".control-kh">
                <?php for ($i = 0; $i < count($kh); $i++) { ?>
                <div class="box-kh">
                    <div class="ds-yk">
                        <p><?= $kh[$i]['desc' . $lang] ?></p>
                    </div>
                    <div class="img-yk">
                        <img onerror="this.src='<?= THUMBS ?>/60x60x1/assets/images/noimage.png';"
                            src="<?= THUMBS ?>/60x60x1/<?= UPLOAD_NEWS_L . $kh[$i]['photo'] ?>"
                            alt="<?= $kh[$i]['name' . $lang] ?>" />
                        <div>
                            <h3><?= $kh[$i]['name' . $lang] ?></h3>
                            <p>Nhân viên</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="wr-video">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0" data-md-items="1:0"
                data-lg-items="1:0" data-xlg-items="1:0" data-rewind="1" data-autoplay="1" data-loop="0"
                data-lazyload="0" data-mousedrag="0" data-touchdrag="0" data-smartspeed="800" data-autoplayspeed="800"
                data-autoplaytimeout="5000" data-dots="0" data-animations="animate__fadeIn" data-nav="0"
                data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                data-navcontainer=".control-video">
                <?php foreach ($video as $v) { ?>
                <div class="video-item" owl-item-animation>
                    <a data-fancybox="video" data-src="<?= $v['video'] ?>" title="<?= $v['name' . $lang] ?>">
                        <?= $func->getImage(['class' => 'lazy', 'sizes' => '800x435x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        <i class="icon-video"></i>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


<div class="info-news">
    <div class="maxwidth w-clear">
        <div class="fl-between">
            <div class="wr-news">
                <?php foreach ($newsnb as $v) { ?>
                <div class="box-news shine animate__animated wow animate__zoomIn">
                    <a class="newshome-normal text-decoration-none w-clear" href="<?= $v[$sluglang] ?>"
                        title="<?= $v['name' . $lang] ?>">
                        <div class="pic-newshome-normal scale-img pic-shine">
                            <img onerror="this.src='<?= THUMBS ?>/600x500x1/assets/images/noimage.png';"
                                src="<?= THUMBS ?>/600x500x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>"
                                alt="<?= $v['name' . $lang] ?>">
                        </div>
                        <div class="info-newshome-normal">
                            <h3 class="name-newshome text-split"><?= $v['name' . $lang] ?></h3>
                            <p class="desc-newshome text-split"><?= $v['desc' . $lang] ?></p>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="wr-album">
                <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0"
                    data-md-items="1:0" data-lg-items="1:0" data-xlg-items="1:0" data-rewind="1" data-autoplay="1"
                    data-loop="0" data-lazyload="0" data-mousedrag="0" data-touchdrag="0" data-smartspeed="800"
                    data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="0" data-animations="animate__fadeIn"
                    data-nav="0"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                    data-navcontainer=".control-album">
                    <?php foreach ($album as $v) { ?>
                    <div class="album shine animate__animated wow animate__zoomIn">
                        <a href="<?= $v[$sluglang] ?>">
                            <div class="scale-img pic-shine">
                                <?= $func->getImage(['class' => 'lazy', 'sizes' => '600x480x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                            </div>
                            <h3><?= $v['name' . $lang] ?></h3>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="info-main">
    <div class="maxwidth w-clear">
        <div class="map">
            <div class="title">
                <span><?= $setting['name' . $lang] ?></span>
                <h4>Google map</h4>
            </div>
            <?= $addons->set('footer-map', 'footer-map', 2); ?>
        </div>
        <div class="facebook">
            <div class="title">
                <span><?= $setting['name' . $lang] ?></span>
                <h4>Fanpage facebook</h4>
            </div>
            <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
        </div>
    </div>
</div>