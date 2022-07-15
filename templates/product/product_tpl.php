<div class="info-main">
    <div class="maxwidth">
        <?php if (!empty($product)) { ?>
        <div class="grid-product w-clear">
            <?php foreach ($product as $k => $v) { ?>
            <div class="product shine animate__animated wow animate__zoomIn">
                <a class="box-product text-decoration-none w-clear" href="<?= $v[$sluglang] ?>"
                    title="<?= $v['name' . $lang] ?>">
                    <div class="pic-product">
                        <div class="pic-shine scale-img">
                            <?= $func->getImage(['sizes' => '300x285x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </div>
                    </div>
                    <div class="ds-product">
                        <h3 class="name-product text-split"><?= $v['name' . $lang] ?></h3>
                        <div class="price-product">
                            <p class="price-new">
                                <?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
        <?php } else { ?>
        <div class="">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?= khongtimthayketqua ?></strong>
            </div>
        </div>
        <?php } ?>

        <div class="clear"></div>
        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
    </div>
</div>