<h2 class="ct">商品分類</h2>
<form action="api/add_big.php" method="post">
    <div class="ct">
        新增大分類
        <input type="text" name="big" >
        <input type="submit" value="新增">
    </div>
</form>
<form action="api/add_mid.php" method="post">
    <div class="ct">
        新增中分類

        <select name="big">
        <?php
        $bigs=$Type->all(['parent'=>0]);
            foreach ($bigs as $key => $value) {
                echo "<option value='{$value['id']}'>{$value['name']}</option>";
            }
        ?>
        </select>
        <input type="text" name="mid">
        <input type="submit" value="新增">
    </div>
</form>

<table class="all">
<?php
foreach($bigs as $big){
?>
    <tr class='tt'>
        <td id='t<?=$big['id'];?>'><?=$big['name'];?></td>
        <td class="ct">
            <button onclick="edit(<?=$big['id'];?>,'<?=$big['name'];?>')">修改</button>
            <button onclick="del('type',<?=$big['id'];?>)">刪除</button>
        </td>
    </tr>
<?php
    $mids=$Type->all(['parent'=>$big['id']]);
    if(!empty($mids)){
        foreach ($mids as $mid) {
        ?>
    <tr class='pp ct'>
        <td id='t<?=$mid['id'];?>'><?=$mid['name'];?></td>
        <td>
            <button onclick="edit(<?=$mid['id'];?>,'<?=$mid['name'];?>')">修改</button>
            <button onclick="del('type',<?=$mid['id'];?>)">刪除</button>
        </td>
    </tr>

        <?php
        }
    }
}
?>
</table>
<hr>
<h2 class="ct">商品管理</h2>
<div class="ct"><button onclick="lof('?do=add_goods')">新增商品</button></div>




<script>
function edit(id,name){
    let result=prompt('修改分類名稱為:',name)
    if(result!=null){
        $.post('api/edit_type.php',{id,result},function(){
            //$("#t"+id).html(result)
            location.reload();
        })
    }
}

</script>