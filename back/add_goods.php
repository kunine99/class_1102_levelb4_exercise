<h1 class="ct">新增商品</h1>
<!-- 從add_admin複製來的 -->
<form action="api/save_goods.php" method="post" enctype="multipart/form-data">
    <table class="all">
        <tr>
            <td class="tt ct">所屬大分類</td>
            <td class="pp">
                <select name="big" id="big"></select>
            </td>
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
            <input type="text" name="stock" id="stoc">
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
            <textarea name="intro" id="intro" style="width:90%;height:100px"></textarea>          
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

    $("#big").load('api/get_type.php',()=>{
        $("#mid").load('api/get_type.php',{parent:$("#big").val()})
    })
    $("#big").on("change",function(){
        //load 是用get還是post送資料?
        //老師去查官方文件發現如果我是用物件的方式帶參數的話是post,沒有的話是用get
        //我們這邊有帶參數parent:$("#big") 所以是post
        //寫到這邊後去創造一個api/get_mid檔案
        $("#mid").load("api/get_type.php",{parent:$("#big").val()})
    })


// 不帶參數=大分類
// 帶參數=中分類
</script>