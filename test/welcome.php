<?php
if($_REQUEST["key"]== "LZPTXPX") 
{
echo '<h1> 认证成功!</h1>','<br>';
echo "姓名：", $_REQUEST["name"],'<br>'; 
echo "随机秘钥：", $_REQUEST["key"],'<br>';
//echo "<div style='Color:red'>",消费代码：.$_REQUEST["key"]."</div>";
echo "<div style='Color:red'>",消费代码：7654827163,"</div>";
echo '<br><br><br><br>';
}
else
{
echo '<h1>二维码错误，认证失败！</h1>','<br><br><br><br>';
}
?> 
<html>
<head>
<meta charset="utf-8">
<title>lpx-cn</title>
</head>
<body>

<img src="logo.jpg" width="140" height="140" /> 
 
</body>
</html>
