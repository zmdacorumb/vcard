<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/incss.css">
    <style>
     
       
    </style>  
</head> 
<body>
 

<h1>vCard產生器</h1>
<div class="col">
    <form action="api.php" method="post" enctype="multipart/form-data">
        <!-- <div class="car"></div> -->
        <p>你的名字 | <input type="text" name="name" id="" value="唐三"></p>
        <p>職位名稱 | <input type="text" name="title" id="" value="昊天宗大弟子"></p>
        <p><span style="vertical-align:top" >技能說明 | </span>
        <textarea name="content" id="" cols="30" rows="10">武魂特點：力量大、爆發力强悍.   武魂绝技： 亂披風錘法、大须彌錘、昊天護體、昊天真身、錘撼天地、凌天一擊、昊天九绝

        </textarea></p>
        <p>E-mail | <input type="email" name="mail" id="" value="77977@77"></p>
        <p>手機號碼 | <input type="texe" name="phone" id="" value="1234567890"></p>
        <hr>
        <p>人像照 | <input type="file" name="myimg" id=""></p>
        <p>版型選擇 |
        <select name="bgbox" id="">
        
            <option value="bg1" >梨木紋</option>
            <option value="bg2" selected>寶石綠</option>
            <option value="bg3">復古褐</option>
            <option value="bg4">大理石</option>
        </select>
        <p class="sub"><input type="submit" value="送出預覽"></p>
    </form>
</div>




</body>
</html>
