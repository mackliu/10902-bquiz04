<?php include_once "../base.php";

$type=$Type->find($_POST['id']);
$type['name']=$_POST['result'];
$Type->save($type);


?>
