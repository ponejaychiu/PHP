<?php 
header('Content-Type: text/event-stream'); 
header('Cache-Control: no-cache'); 

$time = date('r'); 
echo "data: The server time is: {$time}\n\n";
flush();
?>
<?php
	echo "今天是：".date("Y-m-d")."";
?>