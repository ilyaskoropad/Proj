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

	if(	isset($_POST['_FirstName']) &&
		isset($_POST['_LastName']) &&
		isset($_POST['_Login']) &&
		isset($_POST['_Password']) &&
		isset($_POST['_RPassword']) &&
		isset($_POST['_Mail']) &&
		isset($_POST['_Data']) &&
		isset($_POST['_O_Sebe']) &&
		isset($_POST['_Vopros']) &&
		isset($_POST['_Otvet']))
	{
		$ErrorLog = 0;
		$file = 'login.txt';
		$str = $_POST['_FirstName']."|".$_POST['_LastName']."|".$_POST['_Login']."|".$_POST['_Password']."|".$_POST['_Mail']."|".$_POST['_Data']."|".$_POST['_O_Sebe']."|".$_POST['_Vopros']."|".$_POST['_Otvet'];
		if ( !$file )
		{
			echo("Ошибка открытия файла");
		}
		else
		{
			if($_POST['_Password'] == $_POST['_RPassword'])
			{
				if(!empty($_POST['_Password']))
				{
					if(filter_var($_POST['_Mail'], FILTER_VALIDATE_EMAIL))
					{
						$tmp = file_get_contents($file, true);
						$line = explode("\n", $tmp);
						$index = lines($file);
						for($i = 0; $i < $index; $i++)
						{
							$cell = explode("|", $line[$i]);
							//echo "Массив строки: ".$line[$i]." ";
							//echo "Значение ячейки: ".$cell[2]." ";
							//echo "Кол-во строк: ".$index."<br>";
							if(@$cell[2] == $_POST['_Login'])
							{
								$ErrorLog = $ErrorLog + 1;
							}
							echo $ErrorLog." ";
						
						}
						if($ErrorLog > 0)
						{
							echo "Такой логин уже зарегистрирован.";
						}
						else
						{
							file_put_contents($file, $str."\n", FILE_APPEND);
							echo "Вы успешно зарегистрировались.<br>"; 
							echo "<a href=\"http://domenpracticaka.esy.es\">Вам сюда</a>"; 
							
						}
					}
					else
					{
						echo "Не верный мэил.";	
					}
				}
				else
				{
					echo "Вы ввели пустой пароль.";
				}
			}				
			else
				{
					echo "Пароли не совпадают.";
				}
		}
	}
?>