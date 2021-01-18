<?php
include_once "../base.php";

$db=new DB($_GET['table']);

echo $db->count(['acc'=>$_GET['acc'],'pw'=>$_GET['pw']]);

switch($_GET['table']){
    case 'mem':
        $_SESSION['mem']=$_GET['acc'];
    break;
    case 'admin':
        $_SESSION['admin']=$_GET['acc'];
    break;
}



?>