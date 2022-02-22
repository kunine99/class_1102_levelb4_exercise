<?php 
if(isset($_GET["id"]) && isset($_GET['qt'])){
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
}

if(!isset($_SESSION['mem'])){
    to("?do=login");
    exit();
}

if(empty($_SESSION['cart'])){
    echo "<h1 class='ct'>購物車中無商品</h1>";

}else{
   print_r($_SESSION['cart']);
}
