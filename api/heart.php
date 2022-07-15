<?php

include "config.php";

$id = (!empty($_POST['id'])) ? htmlspecialchars($_POST['id']) : 0;

?>

<?php if (array_key_exists($loginMember, $_SESSION) && $_SESSION[$loginMember]['active'] == true) {
    $row = $d->rawQueryOne("select * from #_member_like where id_user = ? and id_product = ? limit 0,1", array($_SESSION[$loginMember]['id'], $id));
    if (isset($row['id']) && $row['id'] > 0) {
        $d->rawQuery("delete from #_member_like where id = ?", array($row['id']));
        echo '<i class="far fa-heart"></i>';
    } else {
        $dataLike['id_user'] = $_SESSION[$loginMember]['id'];
        $dataLike['id_product'] = $id;
        $d->insert('member_like', $dataLike);
        echo '<i class="fas fa-heart"></i>';
    }
} else {
    echo 0;
} ?>