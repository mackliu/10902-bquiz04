<?php include_once "../base.php";

if(isset($_POST['mid'])){
    $data['parent']=$_POST['big'];
    $data['name']=$_POST['mid'];
}else{
    $data['parent']=0;
    $data['name']=$_POST['big'];
}

$Type->save($data);

to("../backend.php?do=th");

?>