<div class="info-main">
    <div class="maxwidth">
        <div class="grid-service">
            <?php if (!empty($news)) {
                foreach ($news as $k => $v) { ?>
            <div class="">
                <a class="pic-vl" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                    <div class="scale-img">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '350x310x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </div>
                    <div class="ds-vl">
                        <h3 class="text-split"><?= $v['name' . $lang] ?></h3>
                        <p class="text-split"><?= $v['desc' . $lang] ?></p>
                    </div>
                </a>
            </div>
            <?php }
            }   ?>
            <div class="clear"></div>
            <div class="col-12">
                <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
            </div>
        </div>
    </div>
</div>