<h1 class="ct">訂單管理</h1>
<!-- 從back/mem.php複製來的 -->
<table class="all ct">
    <tr class="tt">
        <!-- td加2行 -->
        <td>訂單標號</td>
        <td>金額</td>
        <td>會員帳號</td>
        <td>姓名</td>
        <td>下單時間</td>
        <td>操作</td>
        <!-- 發現超出範圍了，所以去css改.all的大小 -->
    </tr>
    <?php
    // Admin改成Mem
    $rows=$Ord->all();
    foreach($rows as $row){
    ?>
    <tr class="pp">
    <td><?=$row['no'];?></td>
    <td><?=$row['total'];?></td>
    <td><?=$row['acc'];?></td>
    <td><?=$row['name'];?></td>
        <!-- 資料庫用timestep,他的時間顯示是時分秒都有 -->
        <!-- 這個方法是把他轉成秒數再把它秀出來 -->
        <td><?=date("Y/m/d",strtotime($row['orddate']));?></td>
        <td>
                <!-- member改成資料表 -->
                <button onclick="del('member',<?=$row['id'];?>)">刪除</button>
        </td>
    </tr>
    <?php
    }
    ?>
</table>