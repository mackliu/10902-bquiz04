<h2 class="ct">會員註冊</h2>
<!-- table.all>tr*6>td.ct.tt+td.pp>input -->
<table class="all">
    <tr>
        <td class="ct tt">姓名</td>
        <td class="pp"><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
        <td class="ct tt">帳號</td>
        <td class="pp">
            <input type="text" name="acc" id="acc">
            <button onclick="chkAcc()">檢測帳號</button>
        </td>
    </tr>
    <tr>
        <td class="ct tt">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="ct tt">電話</td>
        <td class="pp"><input type="text" name="tel" id="tel"></td>
    </tr>
    <tr>
        <td class="ct tt">住圵</td>
        <td class="pp"><input type="text" name="addr" id="addr"></td>
    </tr>
    <tr>
        <td class="ct tt">電子信箱</td>
        <td class="pp"><input type="text" name="email" id="email"></td>
    </tr>
</table>
<div class="ct">
<button onclick="reg()">註冊</button>
<button onclick="reset()">重置</button>

</div>

<script>

function reg(){
    let acc=$("#acc").val();
    let name=$("#name").val();
    let pw=$("#pw").val();
    let tel=$("#tel").val();
    let addr=$("#addr").val();
    let email=$("#email").val();
    
    $.get('api/chk_acc.php',{acc},function(res){
        if(parseInt(res) || acc=='admin'){
            alert("帳號已被使用")
        }else{
            $.post('api/reg.php',{name,acc,pw,tel,addr,email},function(){
                location.href='index.php?do=login'
            })

        }
    })


}

function chkAcc(){
    let acc=$("#acc").val();
    $.get('api/chk_acc.php',{acc},function(res){
        if(parseInt(res) || acc=='admin'){
            alert("帳號已被使用")
        }else{
            alert("此帳號可使用")

        }
    })
    
}

</script>