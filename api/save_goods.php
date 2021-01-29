<?php include_once "../base.php";



if(isset($_POST['id'])){
    if(!empty($_FILES['img']['tmp_name'])){
        $_POST['img']=$_FILES['img']['name'];
    }else{
        $goods=$Goods->find($_POST['id']);
        $_POST['img']=$goods['img'];
    }
}else{
    if(!empty($_FILES['img']['tmp_name'])){
        $_POST['img']=$_FILES['img']['name'];
    }
    $_POST['num']=rand(100000,999999);
    $_POST['sh']=1;

}

$Goods->save($_POST);

to("../backend.php?do=th");

?>