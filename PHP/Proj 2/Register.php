<!DOCTYPE HTML>
<Html>
    <Head>
    <Title>Шифры</Title>
        <Meta charset="utf-8">
        <Link rel="stylesheet" type="text/css" href="CSS/Style.css">
    </Head>
<Body>
	<Div class="Logo"><A name="0" class="Bookmark"></A>
		<Img src="Img/logo.png" />
	</Div>
	
	<Div class="Menu Delimiter">
		<Div class="Block_Head">Навигация по сайту</Div>
		<Div class="Block_Body">
			<Ul>
				<Li><A href="http://domenpracticaka.esy.es">Главная</A></Li>
				<Li><A href="http://domenpracticaka.esy.es/Register.php">Регистрация</A></Li>
			</Ul>
		</Div>
		
		<Div class="Block_Head">Навигация по странице</Div>
		<Div class="Block_Body">
			<Ul>
				<Li><A href="#0">В верх</A></Li>
				<Li><A href="#1">Закладка 1</A></Li>
				<Li><A href="#2">Закладка 1</A></Li>
			</Ul>
		</Div>
		
		<Div class="Block_Head">Оповещения</Div>
		<Div class="Block_Body">
			<?php include 'PHP/Reg.php'; ?>
		</Div>
	</Div>
	
	
	<Div class="General">	
		<Div class="Block_Head">Регистрация <A name="1" class="Bookmark">#1</A></Div>
		<Div class="Block_Body">	
			<Form  method="post" >
				<Table>
					<Tr>
						<Td>
							<P class="P_Null" style="margin-top: 0;">Имя</P>
							<Input type="text" required name="_FirstName" class="Type_Text"></Input>
						</Td>
						
						<Td>
							<P class="P_Null">Фимилия</P>
							<Input type="text" required name="_LastName" class="Type_Text"></Input>
						</Td>
					</Tr>
					
					<Tr>
						<Td>
							<P class="P_Null">Логин</P>
							<Input type="text" required name="_Login" class="Type_Text"></Input>
						</Td>
						
						<Td>
							&NBSP
						</Td>
					</Tr>
					
					<Tr>
						<Td>
							<P class="P_Null">Пароль</P>
							<Input type="password" required name="_Password" class="Type_Text"></Input>
						</Td>
						
						<Td>
							<P class="P_Null">Пароль</P>
							<Input type="password" required name="_RPassword" class="Type_Text"></Input>
						</Td>
					</Tr>
					
					<Tr>
						<Td>
							<P class="P_Null">Электронная почта</P>
							<Input type="text" name="_Mail" class="Type_Text"></Input>
						</Td>
						
						<Td>
							<P class="P_Null">Дата рождения</P>
							<Input type="text" name="_Data" class="Type_Text"></Input>
						</Td>
					</Tr>
					
					<Tr>
						<Td>
							<P class="P_Null">Секретный вопрос</P>
							<select class="Type_Text" reqyred name="_Vopros">
								<option disabled>Выберите сектретный вопрос</option>
								<option value="1">Кто есть грут?</option>
								<option value="2">Кто любит сыр?</option>
								<option value="2">Когда нужно писать код?</option>
							</select>
						</Td>
						
						<Td>
							<P class="P_Null">Секретный ответ</P>
							<Input type="text" name="_Otvet" class="Type_Text"></Input>
						</Td>
					</Tr>
					
					<Tr>
						<Td colspan="2">
							<P class="P_Null">О себе</P>
							<textarea name="_O_Sebe" class="Type_Text_Area"></textarea>
						</Td>
					</Tr>
					
					<Tr>
						<Td colspan="2">
							<Input type="submit" value="OK" class="Type_Button" style="padding: 2px 5px 2px 5px; margin-top: 10px;"></Input>
						</Td>
					</Tr>
					
				</Table>
			</Form>
		</Div>
		<Div class="Clear"></Div>
	</Div>
	
</Body>
</Html>