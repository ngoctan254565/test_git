<?php
include "config.php";

$id_color = (!empty($_POST['id_color'])) ? htmlspecialchars($_POST['id_color']) : 0;
$id_size = (!empty($_POST['id_size'])) ? htmlspecialchars($_POST['id_size']) : 0;
$id_pro = (!empty($_POST['id_pro'])) ? htmlspecialchars($_POST['id_pro']) : 0;

if ($id_color != 0 && $id_size != 0) {
    $tt = $d->rawQueryOne("select regular_price	 from #_product_sale where id_parent = " . $id_pro . " and  id_color = " . $id_color . " and  id_size = " . $id_size . " order by id asc limit 0,1");

    echo $func->formatMoney($tt['regular_price']);
}