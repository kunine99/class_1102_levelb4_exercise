<h1 class="ct">會員管理</h1>
<table class="all ct">
    <!-- 從admin.php複製來的 -->
    <tr class="tt">
        <!-- td加一行 -->
        <td>姓名</td>
        <td>會員帳號</td>
        <td>註冊日期</td>
        <td>操作</td>
    </tr>
    <?php
    // Admin改成Mem
    $rows=$Mem->all();
    foreach($rows as $row){
    ?>
    <tr class="pp">
    <td><?=$row['name'];?></td>
<td><?=$row['acc'];?></td>
        <!-- 資料庫用timestep,他的時間顯示是時分秒都有 -->
        <!-- 這個方法是把他轉成秒數再把它秀出來 -->
        <td><?=date("Y/m/d",strtotime($row['regdate']));?></td>
        <td>
                <button onclick="location.href='?do=edit_mem&id=<?=$row['id'];?>'">修改</button>
                <!-- admin改成member資料表 -->
                <button onclick="del('member',<?=$row['id'];?>)">刪除</button>
        </td>
    </tr>
    <?php
    }
    ?>
</table>