<?php
namespace MyProject;
echo '命名空间为：'.__NAMESPACE__.''; // 输出 "MyProject"

$name="赵鹏杰";
$age=21;
$addr="杭州市西湖区";
echo "<h2>PHP很有趣！！！</h2>";
echo "年龄:$age<br/>";
echo "这是一个","很有意思的语音，","这行字使用了多个参数。<br/>";
echo "我的名字叫：$name, ","年龄：$age, ","住在：$addr<br/>";
if ($age<"30"){
	echo "你好<br/>";
}
elseif ($age<"40") {
	echo "30多了啊<br/>";
}
else {
	echo "哈哈哈<br/>";
}
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
 
for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}
echo "魔术变量：__line__;__file__;__dir__;__function__;__class__;<br/>";
echo '这是第"'.__LINE__.'"行<br/>';
echo '该文件位于："'.__FILE__.'"<br/>';
echo '该文件位于目录："'.__DIR__.'"<br/>';
echo '该文件位于目录："'.dirname(__FILE__).'"<br/>';

class text{
function test(){
	echo "函数名为:".__FUNCTION__."<br/>";
	echo "类名为:".__CLASS__."<br/>";
}
}
$a=new text;
$a->test();

function test(){
	echo "函数名为:".__FUNCTION__."<br/>";
}
test();

function test2(){
	echo "函数名为:".__METHOD__."<br/>";
}
test2();
?>
