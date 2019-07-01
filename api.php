<?php
session_start();
date_default_timezone_set("Asia/Taipei");
print_r($_FILES);

$now = date("YmdHis");
$_SESSION['name'] = $_POST['name'];
$_SESSION['title'] = $_POST['title'];
$_SESSION['content'] = $_POST['content'];
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['phone'] = $_POST['phone']; 
$_SESSION['myimg'] = $_FILES['myimg'];
$_SESSION['bgbox'] = $_POST['bgbox'];
$_SESSION['now']= $now;

print_r($_FILES);
print_r($_SESSION['now']);

if(!empty($_FILES)){
copy($_FILES['myimg']['tmp_name'],"upload/".date("YmdHis")."_".$_FILES['myimg']['name']);
}
header('location:preview.php');
?>
