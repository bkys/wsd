<?php
//主要功能：通过请求此php，以json格式打印出mysql数据库中的温度湿度表
$con = mysql_connect("bjl002.vhost007.cn","db08171","XoXkXiYX");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  //echo 'link db ok';
mysql_select_db("db08171", $con);
//echo 'select db ok';


$resultset = mysql_query("select id, time, wendu, shidu  from wsdb", $con);
//echo "select ok";
////////////////////////////////////////////////准备数据进行装填
$data = array();
////////////////////////////////////////////////实体类
class User{
    public $id;
    public $time;
    public $wendu;
    public $shidu;
}
//$user->id='1';
////////////////////////////////////////////////处理
while($row = mysql_fetch_array($resultset, MYSQL_ASSOC)) {
    $user = new User();
    $user->id = $row['id'];
    $user->time = $row['time'];
    $user->wendu = $row['wendu'];
    $user->shidu = $row['shidu'];
    $data[] = $user;
}
echo json_encode($data);
mysql_close($con);
?>