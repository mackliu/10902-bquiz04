<?php include_once "../base.php";

if(!empty($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
}

$_POST['num']=rand(100000,999999);
$Type->save($_POST);

to("../backend.php?do=th");

?>