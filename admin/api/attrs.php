<?php

include "config.php";

$id_color = (!empty($_POST['id_color'])) ? $_POST['id_color'] : null;

$id_size = (!empty($_POST['id_size'])) ? $_POST['id_size'] : null;

$id_product = (!empty($_POST['id_product'])) ? $_POST['id_product'] : 0;



if (!empty($id_color) && !empty($id_size)) {

    $id_color = implode(",", $id_color);

    $id_size = implode(",", $id_size);



    $colors = $d->rawQuery("select id, namevi from #_color where id in (" . $id_color . ") order by numb,id desc");

    $sizes = $d->rawQuery("select id, namevi from #_size where id in (" . $id_size . ") order by numb,id desc");
}



if (!empty($colors) && !empty($sizes)) {
    foreach ($colors as $vcolor) {
        foreach ($sizes as $vsizes) { ?>

<?php

            if (!empty($id_product)) $price = $d->rawQueryOne("select id, regular_price from #_product_sale where id_parent = ? and id_color = ? and id_size = ? limit 0,1", array($id_product, $vcolor['id'], $vsizes['id']));

            ?>

<div class="form-group col-xl-12 col-lg-4 col-md-4 col-sm-6">

    <label>

        <span>Màu sắc: </span>

        <span class="text-danger"><?= $vcolor['namevi'] ?></span>

        <span> - </span>

        <span>Kích thước: </span>

        <span class="text-danger"><?= $vsizes['namevi'] ?></span>

    </label>

    <div class="input-group">

        <input type="text" class="form-control format-price price-origin-attr" name="price_attrs[regular_price][]"
            placeholder="Giá bán" value="<?= @$price['regular_price'] ?>">

        <div class="input-group-append">

            <div class="input-group-text"><strong>VNĐ</strong></div>

        </div>

    </div>


    <input type="hidden" name="price_attrs[id_color][]" value="<?= $vcolor['id'] ?>" />

    <input type="hidden" name="price_attrs[id_size][]" value="<?= $vsizes['id'] ?>" />

</div>

<?php }
    }
} ?>