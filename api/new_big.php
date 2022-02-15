<?php include_once "base.php";
// 假設忘記設預設值，先在這邊設為0
// 我送過來big的值，但因為欄位不一樣所以資料庫毫無反應
$_post['parent']=0;
$Type->save($_POST);





