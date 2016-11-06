<?php 
	function lines($file) 
	{ 
		// в начале ищем сам файл. Может быть, путь к нему был некорректно указан 
		if(!file_exists($file))exit("Файл не найден"); 
	
		// рассмотрим файл как массив
		$file_arr = file($file); 
	
		// подсчитываем количество строк в массиве 
		$lines = count($file_arr); 
	
		// вывод результата работы функции 
		return $lines; 
	} 

	if(	isset($_POST['_Vhod_Login']) &&
		isset($_POST['_Vhod_Password']))
	{
		$file = 'login.txt';
		$tmpp = false;
		$tmp = file_get_contents($file, true);
		$line = explode("\n", $tmp);
		$index = lines($file);
		for($i = 0; $i < $index; $i++)
		{
			$cell = explode("|", $line[$i]);
			//echo "Массив строки: ".$line[$i]." ";
			//echo "Значение ячейки: ".$cell[2]." ";
			//echo "Кол-во строк: ".$index."<br>";
			if(@$cell[2] == $_POST['_Vhod_Login'] && @$cell[3] == $_POST['_Vhod_Password'])
			{
				$tmpp = true;
				break;
			}
			else
			{
				$tmpp = false;
			}
		}
		if($tmpp == true)
		{
			echo "Вы успешно авторизовались.<br>"; 
			echo "<a href=\"http://domenpracticaka.esy.es\">Вам сюда</a>"; 
		}
		else
		{
			echo "Все лажа";
		}
	}
	else
	{
		echo "Не заполнили поля.";
	}
?>