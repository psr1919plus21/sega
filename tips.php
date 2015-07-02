<?php 
	$target = "tips";
	include('header.php'); 
?>

<div class="l-page">
	<div class="l-wrapper ">
		<h1 class="blog_title">Tips</h1>
		<ul class="blog_posts-list">
			
			<li id="tips_ai" class="blog_posts-list_item">
				<p class="blog_post-title"><a href="#php-ai">Установка compass + autoprefixer-rails на ubuntu 14.04</a></p>
				<span class="blog_post-date">16.02.2015</span>
				<div class="blog_post-content">
					<p class="blog_post-text">
						Открываем терминал и делаем:
					</p>
					
					<ol class="console">
						<li>sudo apt-get install ruby
						<li>sudo apt-get install ruby-dev
						<li>sudo gem install compass
						<li>sudo gem install autoprefixer-rails
					</ol>
						
					
					

					<div class="fb-comments" data-href="http://wholecat.zz.mu/tips.php#php-ai" data-numposts="5" data-colorscheme="light"></div>
				</div>

			<li id="tips_parsing" class="blog_posts-list_item">
				<p class="blog_post-title"><a href="#php-in-html">Парсинг php внутри html. Apache2 ubuntu</a></p>
				<span class="blog_post-date">12.08.2014</span>
				<div class="blog_post-content">
					<p class="blog_post-text">
						Если php код на странице автоматически закоменчивается тегами комментирования <span class="emphasis">html</span>, то скорее всего проблема в том, что веб-сервер не настоен бля выполнения <span class="emphasis">php</span> внутри <span class="emphasis">html</span> файлов.
					</p>
					<p class="blog_post-text">
						Решить проблему можно либо сменив расширение файла с <span class="emphasis">*.html</span> на <span class="emphasis">*.php</span>, либо настроив веб сервер.
					</p>

					<p class="blog_post-text">
						Для <strong>Ubuntu</strong> это делается следующим образом &mdash; идем в <strong>/etc/apache2/apache2.conf</strong> и добавляем туда следующий код:
					</p>
					<p class="code">
						RemoveHandler .html .htm<br>
						AddType application/x-httpd-php .php .htm .html
					</p>
					<p class="blog_post-text">после чего перезапускаем апач командой: </p>
					<p class="console">sudo /etc/init.d/apache2 restart</p>

					<div class="fb-comments" data-href="http://wholecat.zz.mu/tips.php#php-in-html" data-numposts="5" data-colorscheme="light"></div>
				</div>


			<li id="tips_chained" class="blog_posts-list_item">
				<p class="blog_post-title"><a href="#chained">jQuery плагин для создания зависимых select — chained.js</a></p>
				<span class="blog_post-date">28.08.2014</span>
				<div class="blog_post-content">
					<p class="blog_post-text">
						Плагин <span class="emphasis">chained.js</span> позволяет легко создавать зависимые селекты.
					</p>
					<p class="blog_post-text">Пример:</p>
					<ul class="blog-list">
						<li class="blog-list_item">
							<label class="blog-post_label" for="kind_vehicle">Тип транспорта:</label>
							<select class="blog-post_select blog-post_kind-vehicle" name="kind_vehicle" id="kind_vehicle">
								<option value="land">Сухопутный</option>
								<option value="water">Водный</option>
								<option value="air">Воздушный</option>
								<option value="space">Космический</option>
							</select>
						<li class="blog-list_item">
							<label class="blog-post_label" for="vehicle">Транспорт:</label>
							<select class="blog-post_select blog-post_vehicle" name="vehicle" id="vehicle">
								<option class="land" value="car">Автомобиль</option>
								<option class="land" value="bus">Автобус</option>
								<option class="land" value="bike">Велосипед</option>
								<option class="water" value="ship">Корабль</option>
								<option class="water" value="yacht">Яхта</option>
								<option class="water" value="catamaran">Катамаран</option>
								<option class="air" value="plane">Самолет</option>
								<option class="air" value="balloon">Воздушный шар</option>
								<option class="space" value="shuttle">Шатл</option>
								<option class="space" value="brain">Мозг</option>
							</select>
					</ul>
					<p class="blog_post-text">
						<a class="blog_post-link" href="http://www.appelsiini.net/projects/chained">Chained Selects Plugin for jQuery and Zepto</a> &mdash; официальный сайт проекта
					</p>
					<p class="blog_post-text">
						<a class="blog_post-link" href="https://github.com/tuupola/jquery_chained">jquery_chained</a> &mdash; гитхаб проекта
					</p>
				
					<div id="blog_hello-world" class="fb-comments" data-href="http://wholecat.zz.mu/tips.php#chained" data-numposts="5" data-colorscheme="light"></div>
				</div>


			<li id="tips_phpshortopen" class="blog_posts-list_item">
				<p class="blog_post-title"><a href="#phpshortopen">Короткий синтаксис php в apache2 &mdash; &lt;? [php code] ?&gt;</a></p>
				<span class="blog_post-date">16.02.2015</span>
				<div class="blog_post-content">
					<p class="blog_post-text">
						Чтобы сокращенный синтаксис интерпретировался апачем как php идем в  <span class="emphasis">/etc/php5/apache2/php.ini,</span> ищем там строчку <span class="emphasis">short_open_tag = Off</span> и меняем ее на <span class="emphasis">short_open_tag = On.</span>
					</p>
					
				
					<div id="blog_phpshortopen" class="fb-comments" data-href="http://wholecat.zz.mu/tips.php#phpshortopen" data-numposts="5" data-colorscheme="light"></div>
				</div>



		</ul>
	</div>
</div>