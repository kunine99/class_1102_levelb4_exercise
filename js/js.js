// JavaScript Document
function lof(x)
{
	location.href=x
}

function del(table,id){
    $.post("api/del.php",{table,id},()=>{ 
        location.reload()
    })
}


// 透過轉頁的方式
// 使用者端不會讀到舊的方式
function logout (user){
    $.post("api/logout.php",{user},()=>{
        location.href="index.php";
    })
}