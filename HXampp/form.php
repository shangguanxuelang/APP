<?php
	$user=$_GET['user'];
	$passwd=$_GET['passwd'];
	$arr=array("user"=>$user,"passwd"=>$passwd);
	//json_encode转换为json格式字符串
	echo json_encode($arr);
?>