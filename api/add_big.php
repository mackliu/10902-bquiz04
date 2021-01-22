<?php include_once "../base.php";

$data['name']=$_POST['big'];
$data['parent']=0;

$Type->save($data);

to("../backend.php?do=th");

?>