<?php

/* Video */
$nametype = "video";
$config['news'][$nametype]['title_main'] = "Video";
$config['news'][$nametype]['dropdown'] = true;
$config['news'][$nametype]['schema'] = false;
$config['news'][$nametype]['list'] = false;
$config['news'][$nametype]['cat'] = false;
$config['news'][$nametype]['item'] = false;
$config['news'][$nametype]['sub'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['video'] = true;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['comment'] = false;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['desc'] = false;
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 850;
$config['news'][$nametype]['height'] = 435;
$config['news'][$nametype]['thumb'] = '850x435x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Album */
$nametype = "album";
$config['news'][$nametype]['title_main'] = "Album";
$config['news'][$nametype]['dropdown'] = true;
$config['news'][$nametype]['schema'] = true;
$config['news'][$nametype]['list'] = false;
$config['news'][$nametype]['cat'] = false;
$config['news'][$nametype]['item'] = false;
$config['news'][$nametype]['sub'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['comment'] = false;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh album",
        "title_sub_photo" => "Hình ảnh",
        "number_photo" => 3,
        "images_photo" => true,
        "avatar_photo" => true,
        "tieude_photo" => true,
        "width_photo" => 600,
        "height_photo" => 535,
        "thumb_photo" => '600x535x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF'
    )
);
$config['news'][$nametype]['desc'] = false;
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['width'] = 600;
$config['news'][$nametype]['height'] = 535;
$config['news'][$nametype]['thumb'] = '600x535x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Tin tức */
$nametype = "tin-tuc";
$config['news'][$nametype]['title_main'] = "Tin tức";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['schema'] = true;
$config['news'][$nametype]['list'] = false;
$config['news'][$nametype]['cat'] = false;
$config['news'][$nametype]['item'] = false;
$config['news'][$nametype]['sub'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['comment'] = false;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['width'] = 600;
$config['news'][$nametype]['height'] = 500;
$config['news'][$nametype]['thumb'] = '600x500x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Khuyến mãi */
$nametype = "khuyen-mai";
$config['news'][$nametype]['title_main'] = "Khuyến mãi";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['schema'] = true;
$config['news'][$nametype]['list'] = false;
$config['news'][$nametype]['cat'] = false;
$config['news'][$nametype]['item'] = false;
$config['news'][$nametype]['sub'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['comment'] = false;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['width'] = 350;
$config['news'][$nametype]['height'] = 300;
$config['news'][$nametype]['thumb'] = '350x300x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Ý kiến khách hàng */
$nametype = "y-kien-khach-hang";
$config['news'][$nametype]['title_main'] = "Ý kiến khách hàng";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['schema'] = true;
$config['news'][$nametype]['list'] = false;
$config['news'][$nametype]['cat'] = false;
$config['news'][$nametype]['item'] = false;
$config['news'][$nametype]['sub'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['comment'] = false;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = false;
$config['news'][$nametype]['content_cke'] = false;
$config['news'][$nametype]['seo'] = false;
$config['news'][$nametype]['width'] = 200;
$config['news'][$nametype]['height'] = 200;
$config['news'][$nametype]['thumb'] = '200x200x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Vì sao chọn chúng tôi */
$nametype = "vi-sao-chon-chung-toi";
$config['news'][$nametype]['title_main'] = "Vì sao chọn chúng tôi";
$config['news'][$nametype]['dropdown'] = false;
$config['news'][$nametype]['schema'] = true;
$config['news'][$nametype]['list'] = false;
$config['news'][$nametype]['cat'] = false;
$config['news'][$nametype]['item'] = false;
$config['news'][$nametype]['sub'] = false;
$config['news'][$nametype]['tags'] = false;
$config['news'][$nametype]['view'] = true;
$config['news'][$nametype]['copy'] = true;
$config['news'][$nametype]['copy_image'] = true;
$config['news'][$nametype]['comment'] = false;
$config['news'][$nametype]['slug'] = true;
$config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
$config['news'][$nametype]['images'] = true;
$config['news'][$nametype]['show_images'] = true;
$config['news'][$nametype]['desc'] = true;
$config['news'][$nametype]['content'] = true;
$config['news'][$nametype]['content_cke'] = true;
$config['news'][$nametype]['seo'] = true;
$config['news'][$nametype]['width'] = 70;
$config['news'][$nametype]['height'] = 70;
$config['news'][$nametype]['thumb'] = '70x70x1';
$config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

// /* Hình thức thanh toán */
// $nametype = "hinh-thuc-thanh-toan";
// $config['news']['hinh-thuc-thanh-toan']['title_main'] = "Hình thức thanh toán";
// $config['news']['hinh-thuc-thanh-toan']['check'] = array("hienthi" => "Hiển thị");
// $config['news']['hinh-thuc-thanh-toan']['copy'] = true;
// $config['news']['hinh-thuc-thanh-toan']['desc'] = true;

/* Quản lý mục (Không cấp) */
if (isset($config['news'])) {
    foreach ($config['news'] as $key => $value) {
        if (!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false)) {
            $config['shownews'] = 1;
            break;
        }
    }
}