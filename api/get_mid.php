<?php
include_once "../base.php";

$mids=$Type->all(['parent'=>$_GET['bigId']]);

foreach($mids as $mid){
    echo "<option value='{$mid['id']}'>{$mid['name']}</option>";
}


?>