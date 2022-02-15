<!-- div.ct*2>input:text -->
<h1 class="ct">商品分類</h1>
<div class="ct">新增大分類
    <input type="text" name="big" id="big">
    <button onclick="newType('big')">新增</button>
</div>
<div class="ct">新增中分類
    <select name="parent" id="parent"></select>
    <input type="text" name="mid" id="mid">
    <button onclick="newType('mid')">新增</button>
</div>
<!-- 分類區 -->
<hr>
<h1 class="ct">商品管理</h1>
<div class="ct"><button>新增商品</button></div>
<table class="all">
    <tr class="tt ct">
        <td>編號</td>
        <td>商品名稱</td>
        <td>庫存量</td>
        <td>狀態</td>
        <td>操作</td>
    </tr>
    <tr class="pp ct">
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <button>修改</button>
            <button onclick="del('type')">刪除</button>
            <button>上架</button>
            <button>下架</button>
        </td>
    </tr>
</table>
<script>
    // 請在我parent的項目 用load
    //我一載入這個畫面他就會幫我執行jquery的程式
    //沒有用function包起來的程式會直接執行
    $("#parent").load("api/get_big.php")

    function newType(type) {
        let name, parent
        switch (type) {
            case "big":
                name = $("#big").val();
                parent = 0;
                break;
            case 'mid':
                name = $("#mid").val();
                parent = $("#parent").val();
                break;
        }
        $.post("api/save_type.php", {
            name,
            parent
        }, (res) => {
            location.reload();
        })
    }



    /* function newBig(){
    // 把送出來的值name換成big=name用big這個值
   // let big=$("#big").val();
    $.post("api/save_type.php",{name:$("#big").val(),parent:0},(res)=>{
             // console.log(res);
            //會造成畫面重整
        location.reload();
    })
}
function newMid(){
   let parent=$("#parent").val();
   let name=$("#mid").val();
    $.post("api/save_type.php",{name,parent},(res)=>{
        location.reload();
    })
} */
</script>