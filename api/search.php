<?php
include "config.php";

$tukhoa = htmlspecialchars($_GET['keyword']);
$tukhoa = $func->changeTitle($tukhoa);

$product = $cache->get("select name$lang, slugvi, slugen, id, photo, regular_price, old_price, discount, type from #_product where type = ?  and find_in_set('hienthi',status) and (name$lang LIKE ? or slugvi LIKE ? or slugen LIKE ?) and time=0 order by numb,id desc", array('san-pham', "%$tukhoa%", "%$tukhoa%", "%$tukhoa%"), 'result', 7200);


$str = '<div class="content_result_search">
<ul class="list_result_search">';

$str .= '</ul>
</div>
<ul class="list_result_search">';

foreach ($product as $k => $v) {

    $str .= '<li class="result_search_item">';

    $str .= '<a title="' . $v['name' . $lang] . '" href="' . $v['slugvi'] . '">';

    $str .= '<img title="' . $v['name' . $lang] . '" alt="' . $v['name' . $lang] . '" src="' . UPLOAD_PRODUCT_L . $v['photo'] . '">';

    $str .= '<div class="caption_result">' . preg_replace("/ch/", "<strong>$1</strong>", $v['name' . $lang]) . '</div>';

    $str .= '<div class="price_result">';

    $str .= '<span>' . gia . ': </span>' . (($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe) . '</div>';

    $str .= '<div style="clear:both;"></div>';

    $str .= '</a>';

    $str .= '</li>';
}

$str .= '</ul></div></div>';

echo    json_encode(array("num" => count($product), "data" => $str));