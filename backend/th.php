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
    
        </select>
        <input type="text" name="mid">
        <input type="submit" value="新增">
    </div>
</form>
<hr>
<h2 class="ct">商品管理</h2>
<div class="ct"><button onclick="lof('?do=add_goods')">新增商品</button></div>