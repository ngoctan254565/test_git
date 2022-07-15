<div class="info-main">
    <div class="maxwidth">
        <?php $brand_list = $func->stringBrand($lang);
        foreach ($brand_list as $key => $list) { ?>
        <div class="line-brand">
            <div class="title-brand"><?= $list ?></div>
            <?php foreach ($brand as $v) {
                    if ($list == substr($v['name' . $lang], 0, 1)) { ?>
            <div class="box-brand"><a href="<?= $v['slugvi'] ?>"><?= $v['name' . $lang] ?></a></div>
            <?php }
                } ?>
        </div>
        <?php } ?>
    </div>
</div>