<?php include_once "../base.php";

$Mem->save($_POST);

//$mem=$Mem->find($_POST['id']);
//
//$mem['name']=$_POST['name'];
//$mem['tel']=$_POST['tel'];
//$mem['addr']=$_POST['addr'];
//$mem['email']=$_POST['email'];
//
//$Mem->save($mem);

to("../backend.php?do=mem");
?>