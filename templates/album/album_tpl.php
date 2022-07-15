<div class="info-main">
    <div class="maxwidth">
        <div class="grid-album">
            <?php if (!empty($news)) {
                foreach ($news as $k => $v) { ?>
            <div class="box-album">
                <a class="album-image" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                    <div class="scale-img">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '480x360x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </div>
                    <h3 class="album-name"><?= $v['name' . $lang] ?></h3>
                </a>
            </div>
            <?php }
            }   ?>
        </div>
        <div class="clear"></div>
        <div class="">
            <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
        </div>
    </div>
</div>