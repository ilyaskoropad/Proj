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
			</Ul>
		</Div>
		
		<Div class="Block_Head">Навигация по странице</Div>
		<Div class="Block_Body">
			<Ul>
				<Li><A href="#0">В верх</A></Li>
			</Ul>
		</Div>
		
		<Div class="Block_Head">Оповещения</Div>
		<Div class="Block_Body">
			Пока здесь пусто.
		</Div>
	</Div>
	
	<Div class="General">
		<Div class="Block_Head">О сайте.<A name="1" class="Bookmark">#1</A></Div>
		<Div class="Block_Body">
			Данный сайт поможет вам найти нужную информацию в большом обьеме текста.
		</Div>
		
		<Div class="Block_Head">Парсер<A name="2" class="Bookmark">#2</A></Div>
		<Div class="Block_Body">
			<Form action="PHP/Parser.php">
			<P class="P_Null">Url сайта.</P>
			<Input type="text" name="_URL" class="Type_Text"></Input>
		
			<P class="P_Null">Шаблон поиска</P>
			<select class="Type_Text" reqyred name="_Pattern">
				<option disabled>Выберите сектретный вопрос</option>
				<option value="1">Кто есть грут?</option>
				<option value="2">Кто любит сыр?</option>
				<option value="2">Когда нужно писать код?</option>
			</select>
			<Input type="submit" value="кнопка" class="Type_Button" />
		</Div>
		
		<Div class="Block_Head">Результат.<A name="1" class="Bookmark">#1</A></Div>
		<Div class="Block_Body">
			
		</Div>
		
		<Div class="Clear"></Div>
	</Div>
	
</Body>
</Html>