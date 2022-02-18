<?php
$type=$_GET['type']??0;
if($type==0){
    $nav="全部商品";
}else{
    $t=$Type->find($type);
    if($t['parent']==0){
        $nav=$t['name'];
    }else{
        $b=$Type->find($t['parent']);
        $nav= $b['name'] ." > ".$t['name'];
    }
}


?>



<h1><?=$nav;?></h1>