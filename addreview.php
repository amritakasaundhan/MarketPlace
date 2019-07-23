<?php

$category = $_POST['category'];
$product = $_POST['product'];
$star = $_POST['star'];
$review = $_POST['review'];

$dbcheck = true;

if($dbcheck)
{
    header("Location: productPage.php?category='$category'&product='$product'&re=true");
}

?>