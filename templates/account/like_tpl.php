<div class="info-main">
    <div class="maxwidth">
        <div class="w-clear">
            <div class="user-left">
                <h4><?= taikhoan ?></h4>
                <ul>
                    <li><a href="account/thong-tin"><?= thongtintaikhoan ?></a></li>
                    <li><a href="account/dang-xuat"><?= dangxuat ?></a></li>
                </ul>
                <h4><?= sanpham ?></h4>
                <ul>
                    <li><a href="account/san-pham-thich"><?= sanphamuathich ?></a></li>
                </ul>
            </div>
            <div class="user-right">
                <div class="wrap-user">
                    <div class="title-user">
                        <span><?= sanphamuathich ?></span>
                    </div>

                    <div class="maxwidth">
                        <div class="grid-product-in">
                            <?php if (!empty($product_like)) {
                                foreach ($product_like as $k => $v) { ?>
                            <div class="product">
                                <a class="box-product text-decoration-none" href="<?= $v[$sluglang] ?>"
                                    title="<?= $v['name' . $lang] ?>">
                                    <p class="pic-product scale-img">
                                        <?= $func->getImage(['sizes' => '270x270x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                    </p>
                                    <h3 class="name-product text-split"><?= $v['name' . $lang] ?></h3>
                                    <p class="price-product">
                                        <span class="price-old"><?= $func->formatMoney($v['old_price']) ?></span>
                                        <span
                                            class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                                    </p>
                                </a>
                                <div class="heart" data-id="<?= $v['id'] ?>">
                                    <?= $func->headLike($v['id']) ?></div>
                            </div>
                            <?php }
                            }  ?>
                        </div>
                        <div class="clear"></div>
                        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>