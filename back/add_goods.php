<h1 class="ct">新增商品</h1>
<!-- 從add_admin複製來的 -->
<form action="api/save_admin.php" method="post">
    <table class="all">
        <tr>
            <td class="tt ct">所屬大分類</td>
            <td class="pp">
                <select name="big" id="big"></select>
        </tr>
        <tr>
            <td class="tt ct">所屬中分類</td>
            <td class="pp">
            <select name="mid" id="mid"></select>
            </td>

        </tr>
        <tr>
            <td class="tt ct">商品編號</td>
            <td class="pp">完成分類後自動分配</td>
            </tr>
            <tr>
            <td class="tt ct">商品名稱</td>
            <td class="pp">
            <input type="text" name="name" id="name">
            </td>
        </tr>
        <tr>
            <td class="tt ct">商品價格</td>
            <td class="pp">
            <input type="text" name="price" id="price">
            </td>
        </tr>
        <tr>
            <td class="tt ct">規格</td>
            <td class="pp">
            <input type="text" name="spec" id="spec">
            </td>
        </tr>
        <tr>
            <td class="tt ct">庫存量</td>
            <td class="pp">
            <input type="text" name="stoc" id="stoc">
            </td>
        </tr>
        <tr>
            <td class="tt ct">商品圖片</td>
            <td class="pp">
            <input type="file" name="img" id="img">
            </td>
        </tr>
        <tr>
            <td class="tt ct">商品介紹</td>
            <td class="pp">
            <input type="text" name="intro" id="intro">            
        </td>
        </tr>
    </table>
    <div class="ct">
        <button type="submit">新增</button> | 
        <button type="reset">重置</button> | 
        <button type="button" onclick="location.href='?do=th'">返回</button>
</div>
</form>
<script>
/* function reset(){
    $("#acc,#pw").val("")
    $("input[type='checkbox']").prop('checked',false)
}
function addAdmin(){
    let pr=new Array();
    $("input[type='checkbox']:checked").each((idx,dom)=>{
        pr.push($(dom).val())
    })
$.post("api/save_admin.php",
        {acc:$("#acc").val(),
         pw:$("#pw").val(),
         pr},
        ()=>{
           location.href="?do=admin" 
        })
} */
</script>