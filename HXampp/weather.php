<?php
	$city=$_GET["city"];
	$myurl="http://api.map.baidu.com/telematics/v3/weather?location={$city}&output=json&ak=GfF1L3F16fi1WvXmz9xhxk712o4iKRqF";
	echo file_get_contents($myurl);
?>