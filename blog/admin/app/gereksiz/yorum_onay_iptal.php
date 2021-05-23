<?php 
if (!defined("ADMIN")) {die("Kullanıcı Girişi Gerekmektedir..");} //admin kontrolü

if (!get("id")) {
	header("location:index.php"); exit();
}
$id=(int)get("id");

$db->sql="select * from tb_comment where comment_id=?";
$db->veri=array($id);

$yorum=$db->select(1);

if ($yorum ==false) {
	header("location:index.php");exit();
}

$db->sql=" update tb_comment set comment_confirm=? where comment_id=?";
$db->veri=array(0,$id);
$db->update();

header("location:index.php?url=yorumlar"); exit();

 ?>