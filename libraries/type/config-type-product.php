<?php
/* Menu */
$nametype = "menu";
$config['product'][$nametype]['title_main'] = "Menu";
$config['product'][$nametype]['dropdown'] = true;
$config['product'][$nametype]['schema'] = true;
$config['product'][$nametype]['list'] = true;
$config['product'][$nametype]['cat'] = true;
$config['product'][$nametype]['item'] = false;
$config['product'][$nametype]['sub'] = false;
$config['product'][$nametype]['brand'] = false;
$config['product'][$nametype]['color'] = false;
$config['product'][$nametype]['size'] = false;
$config['product'][$nametype]['tags'] = false;
$config['product'][$nametype]['sale'] = false;
$config['product'][$nametype]['time'] = false;
$config['product'][$nametype]['import'] = false;
$config['product'][$nametype]['export'] = false;
$config['product'][$nametype]['view'] = true;
$config['product'][$nametype]['copy'] = true;
$config['product'][$nametype]['copy_image'] = true;
$config['product'][$nametype]['comment'] = false;
$config['product'][$nametype]['slug'] = true;
$config['product'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['product'][$nametype]['images'] = true;
$config['product'][$nametype]['show_images'] = true;
$config['product'][$nametype]['gallery'] = array(
    $nametype => array(
        "title_main_photo" => "Hình ảnh Menu",
        "title_sub_photo" => "Hình ảnh",
        "check_photo" => array("hienthi" => "Hiển thị"),
        "number_photo" => 3,
        "images_photo" => true,
        "cart_photo" => true,
        "avatar_photo" => true,
        "name_photo" => true,
        "width_photo" => 550,
        "height_photo" => 525,
        "thumb_photo" => '550x525x1',
        "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif'
    )
);
$config['product'][$nametype]['code'] = true;
$config['product'][$nametype]['regular_price'] = true;
$config['product'][$nametype]['old_price'] = false;
$config['product'][$nametype]['discount'] = false;
$config['product'][$nametype]['desc'] = true;
$config['product'][$nametype]['desc_cke'] = false;
$config['product'][$nametype]['content'] = true;
$config['product'][$nametype]['content_cke'] = true;
$config['product'][$nametype]['seo'] = true;
$config['product'][$nametype]['width'] = 550;
$config['product'][$nametype]['height'] = 525;
$config['product'][$nametype]['thumb'] = '550x525x1';
$config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Menu (Size) */
$config['product'][$nametype]['check_size'] = array("hienthi" => "Hiển thị");

/* Menu (Color) */
$config['product'][$nametype]['check_color'] = array("hienthi" => "Hiển thị");
$config['product'][$nametype]['color_images'] = false;
$config['product'][$nametype]['color_code'] = true;
$config['product'][$nametype]['color_type'] = true;
$config['product'][$nametype]['width_color'] = 30;
$config['product'][$nametype]['height_color'] = 30;
$config['product'][$nametype]['thumb_color'] = '100x100x1';
$config['product'][$nametype]['img_type_color'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Menu (List) */
$config['product'][$nametype]['title_main_list'] = "Menu cấp 1";
$config['product'][$nametype]['images_list'] = true;
$config['product'][$nametype]['show_images_list'] = true;
$config['product'][$nametype]['slug_list'] = true;
$config['product'][$nametype]['check_list'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['product'][$nametype]['desc_list'] = false;
$config['product'][$nametype]['seo_list'] = true;
$config['product'][$nametype]['width_list'] = 300;
$config['product'][$nametype]['height_list'] = 300;
$config['product'][$nametype]['thumb_list'] = '300x300x1';
$config['product'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Menu (Cat) */
$config['product'][$nametype]['title_main_cat'] = "Menu cấp 2";
$config['product'][$nametype]['images_cat'] = true;
$config['product'][$nametype]['show_images_cat'] = true;
$config['product'][$nametype]['slug_cat'] = true;
$config['product'][$nametype]['check_cat'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['product'][$nametype]['desc_cat'] = false;
$config['product'][$nametype]['seo_cat'] = true;
$config['product'][$nametype]['width_cat'] = 300;
$config['product'][$nametype]['height_cat'] = 300;
$config['product'][$nametype]['thumb_cat'] = '300x300x1';
$config['product'][$nametype]['img_type_cat'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Menu (Item) */
$config['product'][$nametype]['title_main_item'] = "Menu cấp 3";
$config['product'][$nametype]['images_item'] = true;
$config['product'][$nametype]['show_images_item'] = true;
$config['product'][$nametype]['slug_item'] = true;
$config['product'][$nametype]['check_item'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['product'][$nametype]['desc_item'] = true;
$config['product'][$nametype]['seo_item'] = true;
$config['product'][$nametype]['width_item'] = 300;
$config['product'][$nametype]['height_item'] = 300;
$config['product'][$nametype]['thumb_item'] = '300x300x1';
$config['product'][$nametype]['img_type_item'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Menu (Sub) */
$config['product'][$nametype]['title_main_sub'] = "Menu cấp 4";
$config['product'][$nametype]['images_sub'] = true;
$config['product'][$nametype]['show_images_sub'] = true;
$config['product'][$nametype]['slug_sub'] = true;
$config['product'][$nametype]['check_sub'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['product'][$nametype]['desc_sub'] = true;
$config['product'][$nametype]['seo_sub'] = true;
$config['product'][$nametype]['width_sub'] = 300;
$config['product'][$nametype]['height_sub'] = 300;
$config['product'][$nametype]['thumb_sub'] = '300x300x1';
$config['product'][$nametype]['img_type_sub'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Menu (Hãng) */
$config['product'][$nametype]['title_main_brand'] = "Thương hiệu Menu";
$config['product'][$nametype]['images_brand'] = false;
$config['product'][$nametype]['show_images_brand'] = false;
$config['product'][$nametype]['slug_brand'] = true;
$config['product'][$nametype]['check_brand'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
$config['product'][$nametype]['seo_brand'] = true;
$config['product'][$nametype]['width_brand'] = 150;
$config['product'][$nametype]['height_brand'] = 150;
$config['product'][$nametype]['thumb_brand'] = '100x100x1';
$config['product'][$nametype]['img_type_brand'] = '.jpg|.gif|.png|.jpeg|.gif';