<?php
$servername="localhost";
$username="root";
$password="bangsun";
$dbname="test";
//PDO方法创建连接
try {
	$conn=new PDO("mysql:host=$servername;dbname=test",$username,$password);
	echo "PDO方法连接MySQL数据库成功","<br/>";
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
$conn=null;

//创建连接
$conn=new mysqli($servername,$username,$password,$dbname);
//检测连接
if ($conn->connect_error){
	die("对象连接失败".$conn->connect_error);
}
echo "MySQLi-面向对象方法连接MySQL数据库成功","<br/>";
$conn->close();

//创建连接
$conn=new mysqli($servername,$username,$password,$dbname);
//检测连接
if (!$conn){
	die("过程连接失败:".mysqli_connect_error());
}
echo "MySQLi-面向过程方法连接MySQL数据库成功";
mysqli_close($conn);
?>