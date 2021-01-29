<h2 class="ct">訂單管理</h2>

<table class="all">
    <tr class="tt ct">
        <td>訂單編號</td>
        <td>金額</td>
        <td>會員帳號</td>
        <td>姓名</td>
        <td>下單時間</td>
        <td>操作</td>
    </tr>

    <?php
        $ords=$Ord->all();
        foreach($ords as $ord){
    ?>
    <tr class="pp">
        <td><a href="?do=ord_detail&id=<?=$ord['id'];?>"><?=$ord['num'];?></a></td>
        <td><?=$ord['sum'];?></td>
        <td><?=$ord['acc'];?></td>
        <td><?=$ord['name'];?></td>
        <td><?=$ord['orddate'];?></td>
        <td>
            <button onclick="del('ord',<?=$ord['id'];?>)">刪除</button>
        </td>
    </tr>
    <?php
        }

    ?>
</table>
<div class="ct"><button onclick="lof('index.php')">返回</button></div>