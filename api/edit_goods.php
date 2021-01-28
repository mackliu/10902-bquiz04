<?php include_once "../base.php";

if(!empty($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
}

$Goods->save($_POST);

to("../backend.php?do=th");

?>