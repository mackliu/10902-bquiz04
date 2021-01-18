// JavaScript Document
function lof(x)
{
	location.href=x
}

function del(table,id){
	$.post("api/del.php",{table,id},function(){
		
		location.reload();
	})
}

function login(table){
    let acc=$("#acc").val()
    let pw=$("#pw").val()
    let ans=$("#ans").val()

    $.get("api/ans.php",{ans},function(res){
        if(parseInt(res)){
            $.get('api/login.php',{table,acc,pw},function(result){
                if(parseInt(result)){
                    switch(table){
                        case 'mem':
                            location.href='index.php';
                        break;
                        case 'admin':
                            location.href='backend.php';
                        break;
                    }
                }else{
                    alert('帳號或密碼錯誤');
                }
            })
        }else{
            alert("對不起，你輸入的驗證碼有誤，請您重新登入")
        }
    })

}