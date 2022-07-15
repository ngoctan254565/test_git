<?php
include "config.php";

$num = (!empty($_POST['num'])) ? htmlspecialchars($_POST['num']) : 0;

$num_max = $num + 10;

$spcatnb = $cache->get("select name$lang, slugvi, slugen, id, photo from #_product_cat where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc limit 0,$num_max", array('san-pham'), 'result', 7200);

?>
<div class="w-clear w-cat">
    <?php foreach ($spcatnb as $cat) { ?>
    <div class="box-cat">
        <a href="<?= $cat[$sluglang] ?>">
            <div class="img-cat scale-img">
                <?= $func->getImage(['class' => ' w-100', 'sizes' => '300x250x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $cat['photo'], 'alt' => $cat['name' . $lang]]) ?>
            </div>
            <h3><?= $cat['name' . $lang] ?></h3>
        </a>
    </div>
    <?php } ?>
</div>
<a class="view-cat" data-num="<?= $num_max ?>"><?= xemthem ?> <i class="fas fa-arrow-alt-circle-right"></i></a>