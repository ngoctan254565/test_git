<?php
include "config.php";

/* Paginations */
include LIBRARIES . "class/class.PaginationsAjax.php";
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
$eShow = htmlspecialchars($_GET['eShow']);
$idList = (!empty($_GET['idList'])) ? htmlspecialchars($_GET['idList']) : 0;
$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
$start = ($p - 1) * $pagingAjax->perpage;
$pageLink = "api/product.php?perpage=" . $pagingAjax->perpage;
$tempLink = "";
$where = "";
$params = array();

/* Math url */
if ($idList) {
    $tempLink .= "&idList=" . $idList;
    $where .= " and id_list = ?";
    array_push($params, $idList);
}
$tempLink .= "&p=";
$pageLink .= $tempLink;

/* Get data */
$sql = "select name$lang, slugvi, slugen, id, photo, regular_price, old_price, discount, type from #_product where type='menu' $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";
$sqlCache = $sql . " limit $start, $pagingAjax->perpage";
$items = $cache->get($sqlCache, $params, 'result', 7200);

/* Count all data */
$countItems = count($cache->get($sql, $params, 'result', 7200));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if ($countItems) { ?>
<div class="grid-product">
    <?php foreach ($items as $k => $v) { ?>
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
                    <p class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?>
                    </p>
                </div>
            </div>
        </a>
    </div>
    <?php } ?>
</div>
<div class="pagination-ajax"><?= $pagingItems ?></div>
<?php } ?>