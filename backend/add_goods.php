<h2 class="ct">新增商品</h2>
<form action="api/save_goods.php" method="post" enctype="multipart/form-data">
    <table class="all">
        <tr>
            <td class="tt">所屬大分類</td>
            <td class="pp">
                <select name="big" id="big" onchange="getType('mid')"></select>
            </td>
        </tr>
        <tr>
            <td class="tt">所屬中分類</td>
            <td class="pp">
                <select name="mid" id="mid"></select>
            </td>
        </tr>
        <tr>
            <td class="tt">商品編號</td>
            <td class="pp">完成分類後自動分配</td>
        </tr>
        <tr>
            <td class="tt">商品名稱</td>
            <td class="pp"><input type="text" name='name'></td>
        </tr>
        <tr>
            <td class="tt">商品價格</td>
            <td class="pp"><input type="text" name='price'></td>
        </tr>
        <tr>
            <td class="tt">規格</td>
            <td class="pp"><input type="text" name='spec'></td>
        </tr>
        <tr>
            <td class="tt">庫存量</td>
            <td class="pp"><input type="number" name="quota"></td>
        </tr>
        <tr>
            <td class="tt">商品圖片</td>
            <td class="pp"><input type="file" name="img"></td>
        </tr>
        <tr>
            <td class="tt">商品介紹</td>
            <td class="pp"><textarea name="intro" style="width:90%;height:200px;"></textarea></td>
        </tr>
    </table>
    <div class="ct">
        <input type="submit" value="新增">|
        <input type="reset" value="重置">
        <input type="button" value="返回" onclick="lof('?do=th')">
    </div>
</form>

<script>
getType('big');

function getType(type){
    switch(type){
        case 'big':
            $.get("api/get_type.php",{type:'big'},function(bigs){
                //console.log(bigs)
                let b=JSON.parse(bigs)
                console.log("b",b)

                b.forEach(function(o,i){
                    
                    let dom=document.createElement('option');
                        dom.setAttribute("value",o.id)
                    let text=document.createTextNode(o.name)
                        dom.appendChild(text);
                    $("#big").append(dom)
                })
                //$("#big").html(bigs)
                getType('mid');
            })
        break;
        case 'mid':
            $.get("api/get_type.php",{type:'mid',bigId:$("#big").val()},function(mids){
                let m=JSON.parse(mids)
                $("#mid").html("");
                m.forEach(function(o,i){
                    let dom=document.createElement('option');
                        dom.setAttribute("value",o.id)
                    let text=document.createTextNode(o.name)
                        dom.appendChild(text);
                    $("#mid").append(dom)
                })
           
    })
        break;
    }

}

</script>