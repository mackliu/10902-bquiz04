<?php include_once "../base.php";

$data['name']=$_POST['mid'];
$data['parent']=$_POST['big'];

$Type->save($data);

to("../backend.php?do=th");

?>