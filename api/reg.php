<?php include_once "../base.php";

$_POST['regdate']=date("Y-m-d");
$Mem->save($_POST);

?>