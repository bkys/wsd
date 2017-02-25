<?php
//主要功能：可以通过向此php发送get请求，将参数wendu、shidu上传至mysql数据库中
$con = mysql_connect("bjl002.vhost007.cn","db08171","XoXkXiYX");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
echo 'link db ok';
mysql_select_db("db08171", $con);
echo 'select db ok';

$wendu=$_GET['wendu'];
$shidu=$_GET['shidu'];
mysql_query("INSERT INTO wsdb (wendu, shidu) 
VALUES ('".$wendu."','".$shidu."')");

mysql_close($con);
?>