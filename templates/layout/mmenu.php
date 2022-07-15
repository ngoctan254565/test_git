<nav id="menu">
    <ul>
        <li><a class="<?php if ($com == 'index') echo 'active'; ?> transition" href="" title="Trang chủ">Trang
                chủ</a>
        </li>
        <li><span></span></li>
        <li><a class="<?php if ($com == 'gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu"
                title="Giới thiệu">Giới thiệu</a></li>
        <li><span></span></li>
        <li><a class="<?php if ($com == 'cac-dong-xe') echo 'active'; ?> transition" href="cac-dong-xe"
                title="Các dòng xe">Các dòng xe</a>
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
        <li><span></span></li>
        <li><a class="<?php if ($com == 'dich-vu') echo 'active'; ?> transition" href="dich-vu" title="Dịch vụ">Dịch
                vụ</a>
            <ul>
                <?php foreach ($svlist as $klist => $vlist) {
                    $svcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                <li>
                    <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>"
                        href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                    <?php if (!empty($svcat)) { ?>
                    <ul>
                        <?php foreach ($svcat as $kcat => $vcat) { ?>
                        <li>
                            <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>"
                                href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
                <?php } ?>
            </ul>
        </li>
        <li><span></span></li>
        <li><a class="<?php if ($com == 'vat-lieu-xay-dung') echo 'active'; ?> transition" href="vat-lieu-xay-dung"
                title="Vật liệu xây dựng">Vật liệu xây dựng</a>
            <ul>
                <?php foreach ($vllist as $klist => $vlist) {
                    $vlcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                <li>
                    <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>"
                        href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                    <?php if (!empty($vlcat)) { ?>
                    <ul>
                        <?php foreach ($vlcat as $kcat => $vcat) { ?>
                        <li>
                            <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>"
                                href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
                <?php } ?>
            </ul>
        </li>
        <li><span></span></li>
        <li><a class="<?php if ($com == 'bao-gia') echo 'active'; ?> transition" href="bao-gia" title="Báo giá">Báo
                giá</a></li>
        <li><span></span></li>
        <li><a class="<?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="Tin tức">Tin
                tức</a></li>
        <li><span></span></li>
        <li><a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he"
                title="<?= lienhe ?>"><?= lienhe ?></a></li>
    </ul>
</nav>