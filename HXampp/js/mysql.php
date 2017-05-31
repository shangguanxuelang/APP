<?php
	$serverLink=@mysql_connect("localhost","root","") or die("连接服务器失败!程序中断执行");
	echo $serverLink;
	mysql_query("set name 'gbk'");
	if($serverLink){
		echo "连接成功<br/>";
	}
	$close=@mysql_close($serverLink);
	if($close){
		echo "关闭成功";
	}else{
		exit("关闭失败");
	}
?>