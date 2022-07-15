<?php
if (!defined('SOURCES')) die("Error");

$popup = $cache->get("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('popup', 'photo_static'), 'fetch', 7200);
$photo_vs = $cache->get("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('photo-vs', 'photo_static'), 'fetch', 7200);
$slider = $cache->get("select name$lang, photo, desc$lang, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('slide'), 'result', 7200);
$photoab = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc limit 0,2", array('photo-about'), 'result', 7200);
$newsnb = $cache->get("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc limit 0,2", array('tin-tuc'), 'result', 7200);
$about = $cache->get("select name$lang, desc$lang, photo from #_static where type = ? limit 0,1", array('gioi-thieu'), 'fetch', 7200);
$album = $cache->get("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('album'), 'result', 7200);
$kh = $cache->get("select name$lang, desc$lang, slugvi, slugen, id, photo, type from #_news where type = ?  and find_in_set('hienthi',status)  order by numb,id desc", array('y-kien-khach-hang'), 'result', 7200);
$vs = $cache->get("select name$lang, desc$lang, slugvi, slugen, id, photo, type from #_news where type = ?  and find_in_set('hienthi',status)  order by numb,id desc", array('vi-sao-chon-chung-toi'), 'result', 7200);
$video = $cache->get("select name$lang, video, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('video'), 'result', 7200);

/* SEO */
$seoDB = $seo->getOnDB(0, 'setting', 'update', 'setting');
if (!empty($seoDB['title' . $seolang])) $seo->set('h1', $seoDB['title' . $seolang]);
if (!empty($seoDB['title' . $seolang])) $seo->set('title', $seoDB['title' . $seolang]);
if (!empty($seoDB['keywords' . $seolang])) $seo->set('keywords', $seoDB['keywords' . $seolang]);
if (!empty($seoDB['description' . $seolang])) $seo->set('description', $seoDB['description' . $seolang]);
$seo->set('url', $func->getPageURL());
$imgJson = (!empty($logo['options'])) ? json_decode($logo['options'], true) : null;
if (empty($imgJson) || ($imgJson['p'] != $logo['photo'])) {
    $imgJson = $func->getImgSize($logo['photo'], UPLOAD_PHOTO_L . $logo['photo']);
    $seo->updateSeoDB(json_encode($imgJson), 'photo', $logo['id']);
}
if (!empty($imgJson)) {
    $seo->set('photo', $configBase . THUMBS . '/' . $imgJson['w'] . 'x' . $imgJson['h'] . 'x2/' . UPLOAD_PHOTO_L . $logo['photo']);
    $seo->set('photo:width', $imgJson['w']);
    $seo->set('photo:height', $imgJson['h']);
    $seo->set('photo:type', $imgJson['m']);
}