<?php
include_once "../base.php";

//新增及編輯商品的分類選單
switch($_GET['type']){
    case "big":
        $bigs=$Type->all(['parent'=>0]);
        echo json_encode($bigs);
        /* foreach($bigs as $big){
            echo "<option value='{$big['id']}'>{$big['name']}</option>";
        } */

    break;
    case "mid":
        $mids=$Type->all(['parent'=>$_GET['bigId']]);
        echo json_encode($mids);
        /* foreach($mids as $mid){
            echo "<option value='{$mid['id']}'>{$mid['name']}</option>";
        } */
        
    break;
}





?>