<?php include_once "../base.php";

// 如果post有parent的值我就用parent(大分類),沒有就用0(中分類)
$parent=$_POST['parent']??0;
$opts=$Type->all(['parent'=>$parent]);

foreach($opts as $opt){
    // 前面放我的id,中間這邊就是放我的內容
    echo "<option value='{$opt['id']}'>{$opt['name']}</option>";
}


// 但這邊會有個問題，我頁面剛載入的時候不會有中分類
// 所以要多寫
//大分類載入後我才載入中分類
//大分類更改後中分類才改...?聽不懂 現在是03:24


