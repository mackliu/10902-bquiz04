<?php include_once "../base.php";

if(!empty($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
}else{
    $goods=$Goods->find($_POST['id']);
    $_POST['img']=$goods['img'];
}

$Goods->save($_POST);

to("../backend.php?do=th");

?>