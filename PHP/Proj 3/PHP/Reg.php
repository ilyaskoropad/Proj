<?php 
	function lines($file) 
	{ 
		if(!file_exists($file))exit("Файл не найден"); 
		$file_arr = file($file); 
		$lines = count($file_arr); 
		return $lines; 
	} 

	$file = './PHP/login.txt';
	if(	
		!empty($_POST['_FirstName']) &&
		!empty($_POST['_LastName']) &&
		!empty($_POST['_Login']) &&
		!empty($_POST['_Password']) &&
		!empty($_POST['_RPassword']) &&
		!empty($_POST['_Mail']) &&
		!empty($_POST['_Data']) &&
		!empty($_POST['_O_Sebe']) &&
		!empty($_POST['_Vopros']) &&
		!empty($_POST['_Otvet']))
	{
		$patternName = "/[А-Яа-я]/iu";
		
		$flag = 0;
		
		if(preg_match($patternName, $_POST['_FirstName']))
		{
			
			$NameError = "Имя прошло проверку.";
		}
		else
		{
			$flagb = $flag + 1;
			$NameError = "Не правильное имя!";
		}
		if(preg_match("/[A-Za-z]/", $_POST['_Login']))
		{
			
			$LoginError = "Логин прошел проверку.";
		}
		else
		{
			$flag = $flag + 1;
			$LoginError = "Не правильный логин!";
		}
		if(preg_match($patternName, $_POST['_LastName']))
		{
			
			$LastNameError = "Фамилия прошла проверку.";
		}
		else
		{
			$flagb = $flag + 1;
			$LastNameError = "Не правильная фамилия!";
		}
		if(preg_match("/[A-Za-z0-9-_.]+@[A-Za-z]+\.[a-zA-Z_.]{2,6}+$/", $_POST['_Mail']))
		{
			
			$MailError = "Мэил прошел проверку.";
		}
		else
		{
			$flagb = $flag + 1;
			$MailError = "Не правильный мэил!";
		}
		if(preg_match("/[A-Za-z0-9-_.]/", $_POST['_Password']))
		{
			$PasswordError = "Пароль прошел проверку.";
		}
		else
		{
			$flagb = $flag + 1;
			$PasswordError = "Не правильный пароль!";
		}
		if($_POST['_Password'] == $_POST['_RPassword'])
		{
			$PasswordError = $PasswordError." Пароли совпадают.";
		}
		else
		{
			$flagb = $flag + 1;
			$PasswordError = $PasswordError."Пароли не совпадают!";
		}
		if(preg_match($patternName, $_POST['_O_Sebe']))
		{
			
			$OError = "Поле о себе зпаолнено правильно.";
		}
		else
		{
			$flagb = $flag + 1;
			$OError = "Поле о себе заполнено не правильно!";
		}
		if(preg_match($patternName, $_POST['_Otvet']))
		{
			
			$SekretError = "Поле секретный ответ заполнено правильно.";
		}
		else
		{
			$flagb = $flag + 1;
			$SekretError = "Поле секретный ответ заполнено не правильно!";
		}
		
		$tmp = file_get_contents($file, true); 
		$line = explode("\n", $tmp); 
		$index = lines($file); 
		for($i = 0; $i < $index; $i++) 
		{ 
			$cell = explode("|", $line[$i]); 
			if(@$cell[5] != $_POST['login']) 
			{ 
				$flagb = $flag + 1; 
				$LoginError = $LoginError."Такой логин свободен.";
				break; 
			}
			else
			{
				$LoginError = $LoginError."Такой логин уже зарегистрирован.";
				break;
			}
		} 
		
		
		
		
		if($flag == 0)
		{
			$str = $_POST['_FirstName']."|".$_POST['_LastName']."|".$_POST['_Login']."|".$_POST['_Password']."|".$_POST['_Mail']."|".$_POST['_Data']."|".$_POST['_O_Sebe']."|".$_POST['_Vopros']."|".$_POST['_Otvet'];
			$current = file_get_contents($file);
			$current .=$str."\n";
			file_put_contents($file,$current);
			echo "Все записанно.";
		}
	}
?>