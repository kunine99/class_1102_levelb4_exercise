<?php include_once "../base.php";
// 複製save_admin

$Mem->save($_POST);
to("../back.php?do=mem");