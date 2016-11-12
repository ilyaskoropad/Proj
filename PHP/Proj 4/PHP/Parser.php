<?php
	if(isset($_POST['_URL']))
	{
		$url = $_POST['_URL'];
		$url = iconv("UTF-8","windows-1251",$url);
		
		$html = file_get_contents($url);

		if($_POST['_Pattern'] == 1)
		{
			$pattern = "/[A-Z][a-z]{5,}/";
		}
		if($_POST['_Pattern'] == 2)
		{
			$pattern = "/[8]\([0-9]{3}\)[0-9]{3}\-[0-9]{2}\-[0-9]{2}/";
		}
		if($_POST['_Pattern'] == 3)
		{
			$pattern = "/[А-Я][а-я]+\s[А-Я][а-я]+\s[А-Я][а-я]+/u";
		}
		if($_POST['_Pattern'] == 4)
		{
			$pattern = "/[0-9]{2}.[0-9]{2}.[0-9]{2|4}/"; 
		}
		if($_POST['_Pattern'] == 5)
		{
			$pattern = "/^[0-9]{6}$/"; 
		}
		if($_POST['_Pattern'] == 6)
		{
			$pattern = "/(\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6})/"; 
		}
		
		$result_index = preg_match_all($pattern, $html, $result, PREG_PATTERN_ORDER);
		if($result_index == 0)
		{
			echo "Извините, но на сайте ничего не найдено";
		}
		else
		{
			for($i = 0; $i < $result_index; $i++)
			{
				echo "<Div style=\"width:100%;\">".$i." ".@$result[0][$i]."</Div>";
			}
		}
	}
?>