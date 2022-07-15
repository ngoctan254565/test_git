<div class="menu">
    <div class="maxwidth w-clear">
        <div class="logo-header">
            <a class="" href="">
                <?= $func->getImage(['sizes' => '135x135x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
            </a>
        </div>
        <ul class="menu-des d-flex align-items-center justify-content-between">
            <li><a class="<?php if ($com == 'index') echo 'active'; ?> transition" href="" title="Trang chủ">Trang
                    chủ</a>
            </li>

            <li><a class="<?php if ($com == 'gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu"
                    title="Giới thiệu">Giới thiệu</a></li>

            <li><a class="<?php if ($com == 'menu') echo 'active'; ?> transition" href="menu" title="Menu">Menu</a>
                <ul>
                    <?php foreach ($splist as $klist => $vlist) {
                        $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                    <li>
                        <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>"
                            href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                        <?php if (!empty($spcat)) { ?>
                        <ul>
                            <?php foreach ($spcat as $kcat => $vcat) {
                                        $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                            <li>
                                <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>"
                                    href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                <?php if (!empty($spitem)) { ?>
                                <ul>
                                    <?php foreach ($spitem as $kitem => $vitem) { ?>
                                    <li>
                                        <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>"
                                            href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php } ?>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
            </li>

            <li><a class="<?php if ($com == 'khuyen-mai') echo 'active'; ?> transition" href="khuyen-mai"
                    title="Khuyến mãi">Khuyến mãi</a></li>

            <li><a class="<?php if ($com == 'album') echo 'active'; ?> transition" href="album" title="Album">Album</a>
            </li>

            <li><a class="<?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="Tin tức">Tin
                    tức</a></li>

            <li><a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he"
                    title="<?= lienhe ?>"><?= lienhe ?></a></li>
        </ul>
    </div>
</div>