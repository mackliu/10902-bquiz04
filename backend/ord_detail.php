<?php
$ord=$Ord->find($_GET['id']);
?>
<h2 class="ct">訂單編號<span style="color:red"><?=$ord['num'];?></span>的詳細資料</h2>
<!-- //table.all>tr*5>td.tt.ct+td.pp>input -->
    <table class="all">
        <tr>
            <td class="tt ct">登入帳號</td>
            <td class="pp"><?=$ord['acc'];?></td>
        </tr>
        <tr>
            <td class="tt ct">姓名</td>
            <td class="pp"><?=$ord['name'];?></td>
        </tr>
        <tr>
            <td class="tt ct">電子信箱</td>
            <td class="pp"><?=$ord['email'];?></td>
        </tr>
        <tr>
            <td class="tt ct">聯絡地址
            </td>
            <td class="pp"><?=$ord['addr'];?></td>
        </tr>
        <tr>
            <td class="tt ct">聯絡電話</td>
            <td class="pp"><?=$ord['tel'];?></td>
        </tr>
    </table>
    
    <table class="all">
        <tr class="tt ct">
            <td>商品名稱</td>
            <td>編號</td>
            <td>數量</td>
            <td>單價</td>
            <td>小計</td>
            
        </tr>
    <?php
    
        $sum=0;
        $cart=unserialize($ord['cart']);
        foreach ($cart as $id =>$qt) {
            $g=$Goods->find($id);
    ?>
        <tr class="pp ct">
            <td><?=$g['name'];?></td>
            <td><?=$g['num'];?></td>
            <td><?=$qt;?></td>
            <td><?=$g['price'];?></td>
            <td><?=$qt*$g['price'];?></td>
            
        </tr>
    <?php
            $sum=$sum+($qt*$g['price']);
        }
    ?>
    </table>
    <div class="tt ct">總價:<?=$sum;?></div>   
    <div class="ct">
        <input type="button" value="返回" onclick="lof('?do=order')">
    </div>
