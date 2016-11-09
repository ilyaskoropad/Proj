<?php
	if(isset($_POST['url']))
	{
		
		$url = $_POST['url'];
		$url = iconv("UTF-8","windows-1251",$url);
		
		$html = file_get_contents($url);
		echo $html;
	}
?>