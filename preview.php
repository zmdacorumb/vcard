<?php
session_start();
date_default_timezone_set('Asia/Taipei');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>preview1</title>
    <link rel="stylesheet" type="text/css" href="css/<?=$_SESSION['bgbox']?>.css">
   
 
</head>
<body>
    <div class="userdis  ">
        <img src="upload/<?=$_SESSION['now']."_".$_SESSION['myimg']['name']?>" alt="" width="230px" height="230px">
        <h2>關於
        <span><?=$_SESSION['name']?></span>
        </h2>
        <h4><?=$_SESSION['title']?></h4> 
        <hr>
        <p class="dis"><?=$_SESSION['content']?></p>
        <div class="box"><?=$_SESSION['mail']?></div>
        <div class="box"><?=$_SESSION['phone']?></div>
    </div>
    <button style="margin:50px auto;display:block" onclick="window.history.go(-1)">回頁面</button>
<?php
session_unset();
session_destroy();
?> 
</body>
</html>