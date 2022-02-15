<?php include_once "base.php";
//當我在瀏覽器按出送出的時候，網址列打完後
// 1.我的網路到對方的service
// 頁面回傳到client




$bigs=$Type->all(['parent'=>0]);
foreach ($bigs as $key => $b) {
    echo "<option value='{$b['id']}'>{$b['name']}</option>";
}


