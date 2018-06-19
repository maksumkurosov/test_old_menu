<?php include_once "model/Station.php"?>
<div id="main">

	<div id="metro-text">
		<div id="metro-text-in">
			<a href="" id="show-all-st">показать все станции</a>
			<h1 id="metro-h1" class="h1-line-2">Станция &laquo;Маяковская&raquo;</h1>
			<div id="metro-pic">
				<!-- картинка должна быть не больше 333 px в ширину -->
				<img src="i/metro-pikcha.jpg" alt="Фотография станции &laquo;Маяковская&raquo;" />
			</div>
            <?php $lines = array();
            $lines = Station::getStationList(); ?>


			<p><strong>Дата открытия:</strong> <?php echo $linesDirection['date'] ?>
                <?php var_dump($linesDirection['date']) ?>
<br/>Открыта в составе второй очереди строительства Московского метрополитена.
			<br/>Проектные названия: Триумфальная площадь (1935), Площадь Маяковского (1936)</p>

			<p>Конструкция станции - колонная трехсводчатая глубокого заложения.
			<br/>Первая в мире колонная станция глубокого заложения. Свод станционного зала опирается на стальные колонны, покоящиеся на массивной железобетонной плите основания. Поперек центрального зала колонны расперты фигурными стальными ригелями. Обделка свода и боковых залов - сборная чугунная.</p>

			<p><strong>Архитектор:</strong> Алексей Николаевич Душкин
<br/><strong>Инженеры-конструкторы:</strong> Е.М.Гринзайд, Р.А.Шейнфайн</p>

			<p>Названа в честь советского поэта Владимира Владимировича Маяковского (1893-1930).<br/>
Конструкция подземного зала уникальна. Массивные пилоны заменены сравнительно тонкими колоннами, покрытыми рифленой нержавеющей сталью. Угловые части колонн на высоту человеческого роста выложены пластинами уральского камня "орлец" и садахлинского мраморовидного известняка. В оформлении вестибюля был использован светло-серый мрамор "уфалей" и шрошинский известняк из Грузии. Путевые стены станции облицованы мрамором "уфалей" (вверху) и диоритом (внизу). Пол выложен белым мрамором, серым и розовым гранитом. Свод центрального зала украшают овальные ниши, в которых размещены светильники и великолепные мозаичные панно из смальты, выполненные по эскизам Народного художника СССР Александра Александровича Дейнеки
<br/><a href="">история станции</a></p>

			<div id="metro-tmbs">
				<!-- картинки должны быть 133 x 102 px -->
				<a href=""><img src="i/metro-tmbs-left.gif" alt="<" /></a>
				<a href=""><img src="i/metro-tmb-1.jpg" class="tmb" alt="" /></a>
				<a href=""><img src="i/metro-tmb-2.jpg" class="tmb"  alt="" /></a>
				<a href=""><img src="i/metro-tmb-3.jpg" class="tmb"  alt="" /></a>
				<a href=""><img src="i/metro-tmbs-right.gif" alt=">" /></a>
				<div class="clear"><a href="">добавить фото</a></div>
			</div>

<!--			<h4>Здесь находятся:</h4>-->

<!--			<ul id="zametro">-->
<!--				<li>-->
<!--					<a href="" class="plus"><img src="i/ul-zam-plus.gif" alt="+" /></a>-->
<!--					<a href="" class="title">ООО &laquo;Банк Русский Стандарт&raquo;</a>-->
<!--					<h5>офис Новослободская</h5>-->
<!--					<div class="location"><a href="" class="loc-l5">Новослободская</a>, <a href="" class="loc-l9">Менделеевская</a>, ул. Лесная, д. 17, офис 2, тел. (495) 748-00-22 </div>-->
<!--					<a href="" class="on-map">показать на карте</a>-->
<!--					<div class="clear"></div>-->
<!--					<div class="tags"><em>теги</em> <a href="">оплатить кредит</a>, <a href="">коммунальные платежи</a>, <a href="">инвестиции</a></div>-->
<!--					<a href="" class="full-desc">полное описание объекта</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="" class="plus"><img src="i/ul-zam-plus.gif" alt="+" /></a>-->
<!--					<a href="" class="title">ООО &laquo;Банк Русский Стандарт&raquo;</a>-->
<!--					<h5>офис Новослободская</h5>-->
<!--					<div class="location"><a href="" class="loc-l5">Новослободская</a>, <a href="" class="loc-l9">Менделеевская</a>, ул. Лесная, д. 17, офис 2, тел. (495) 748-00-22 </div>-->
<!--					<a href="" class="on-map">показать на карте</a>-->
<!--					<div class="clear"></div>-->
<!--					<div class="tags"><em>теги</em> <a href="">оплатить кредит</a>, <a href="">коммунальные платежи</a>, <a href="">инвестиции</a></div>-->
<!--					<a href="" class="full-desc">полное описание объекта</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="" class="plus"><img src="i/ul-zam-plus.gif" alt="+" /></a>-->
<!--					<a href="" class="title">ООО &laquo;Банк Русский Стандарт&raquo;</a>-->
<!--					<h5>офис Новослободская</h5>-->
<!--					<div class="location"><a href="" class="loc-l5">Новослободская</a>, <a href="" class="loc-l9">Менделеевская</a>, ул. Лесная, д. 17, офис 2, тел. (495) 748-00-22 </div>-->
<!--					<a href="" class="on-map">показать на карте</a>-->
<!--					<div class="clear"></div>-->
<!--					<div class="tags"><em>теги</em> <a href="">оплатить кредит</a>, <a href="">коммунальные платежи</a>, <a href="">инвестиции</a></div>-->
<!--					<a href="" class="full-desc">полное описание объекта</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="" class="plus"><img src="i/ul-zam-plus.gif" alt="+" /></a>-->
<!--					<a href="" class="title">ООО &laquo;Банк Русский Стандарт&raquo;</a>-->
<!--					<h5>офис Новослободская</h5>-->
<!--					<div class="location"><a href="" class="loc-l5">Новослободская</a>, <a href="" class="loc-l9">Менделеевская</a>, ул. Лесная, д. 17, офис 2, тел. (495) 748-00-22 </div>-->
<!--					<a href="" class="on-map">показать на карте</a>-->
<!--					<div class="clear"></div>-->
<!--					<div class="tags"><em>теги</em> <a href="">оплатить кредит</a>, <a href="">коммунальные платежи</a>, <a href="">инвестиции</a></div>-->
<!--					<a href="" class="full-desc">полное описание объекта</a>-->
<!--				</li>-->
<!--			</ul>-->

<!--			<div id="zam-more"><a href="">Больше объектов</a></div>-->

		</div>
	</div>

	<div id="main-left">
		<a href=""><img src="i/metro-scheme.png" style="margin-top:39px;" alt="Схема метро" /></a>
		<ul id="colored-lines">
			<li class="line-2"><a href="">Замоскворецкая линия</a>
				<ul>

                    <?php $lines = array();
                    $lines = Station::getStationList(); ?>
                    <?php foreach ($lines as $linesDirection):?>
                        <li><a href=""><?php echo $linesDirection['name'] ?></a></li>
                    <?php endforeach; ?>


<!--					<li><a href="">Речной вокзал</a></li>-->
<!--					<li><a href="">Водный стадион</a></li>-->
<!--					<li><a href="">Войковская</a></li>-->
<!--					<li><a href="">Сокол</a></li>-->
<!--					<li><a href="">Аэропорт</a></li>-->
<!--					<li><a href="">Динамо</a></li>-->
<!--					<li><a href="">Белорусская</a></li>-->
<!--<!--					<li class="current"><a href="">Маяковская</a></li>-->-->
<!--					<li><a href="">Тверская</a></li>-->
<!--					<li><a href="">Театральная</a></li>-->
<!--					<li><a href="">Новокузнецкая</a></li>-->
<!--					<li><a href="">Павелецкая</a></li>-->
<!--					<li><a href="">Автозаводская</a></li>-->
<!--					<li><a href="">Коломенская</a></li>-->
<!--					<li><a href="">Каширская</a></li>-->
<!--					<li><a href="">Кантемировская</a></li>-->
<!--					<li><a href="">Царицыно</a></li>-->
<!--					<li><a href="">Орехово</a></li>-->
<!--					<li><a href="">Домодедовская</a></li>-->
<!--					<li><a href="">Красногвардейская</a></li>-->
				</ul>
			</li>
			<li class="line-1"><a href="">Сокольническая</a></li>
			<li class="line-3"><a href="">Арбатско-Покровская</a></li>
			<li class="line-4"><a href="">Филевская</a></li>
			<li class="line-5"><a href="">Кольцевая</a></li>
			<li class="line-6"><a href="">Калужско-Рижская</a></li>
			<li class="line-7"><a href="">Таганско-Краснопресненская</a></li>
			<li class="line-8"><a href="">Калининская</a></li>
			<li class="line-9"><a href="">Серпуховско-Темирязевская</a></li>
			<li class="line-10"><a href="">Люблинская</a></li>
			<li class="line-11"><a href="">Каховская</a></li>
			<li class="line-12"><a href="">Бутовская</a></li>
		</ul>

		<div id="search-on-sts">
			<input type="text" value="найти в станциях" /><a href=""><img src="i/gofind.png" alt=">" /></a>
			<div class="clear"></div>
		</div>

<!--		<div id="left-adds">-->
<!--			<a href=""><img src="i/add-present.jpg" alt="" /></a>-->
<!--		</div>-->
	</div>

	<div class="clear"></div>
</div>