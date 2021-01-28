<?php
include_once "../base.php";

$bigs=$Type->all(['parent'=>0]);

foreach($bigs as $big){
    echo "<option value='{$big['id']}'>{$big['name']}</option>";
}




?>