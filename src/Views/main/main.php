
<section id="slider">
		
		<div class="main">
      <div class="page_container">
        <div id="immersive_slider">
          <? foreach($slider as $slide):?>
          <div class="slide" data-blurred="static/img/<?echo $slide['pic']?>">
            <div class="content">
              <h2><a href="/games/<?echo $slide['idpurchase']?>" target="_blank"><?echo $slide['title']?></a></h2>
              <p><?echo $slide['shortdescription']?></p>
            </div>
            <div class="image">
              <a href="/games/<?echo $slide['idpurchase']?>" target="_blank">
                <img src="static/img/<?echo $slide['pic']?>" alt="Slider" width="100%" height="auto">
              </a>
            </div>
          </div>
          <?endforeach?>
          
          <a href="#" class="is-prev">&laquo;</a>
          <a href="#" class="is-next">&raquo;</a>
        </div>
      </div>
  	</div>
  	<div class="benefits">
      <div class="page_container">

  	  </div>
  	</div>
  	<script type="text/javascript">
  	  $(document).ready( function() {
  	    $("#immersive_slider").immersive_slider({
  	      container: ".main"
  	    });
  	  });

    </script>
		
	</section>
		
	
<div class="head">Список настольных игр</div>

	<div class="flex border">
			<aside class="flex-1">
		<ul class="menu">
			<li class="menu_list"><a class="show" href="#">Настольные игры</a>
				<ul class="menu_drop">
					<li><a href="#">Стратегии</a></li>
					<li><a href="#">Для вечеринок</a></li>
					<li><a href="#">Подойдет детям</a></li>
					<li><a href="#">Быстрые и простые</a></li>
					<li><a href="#">Семейные</a></li>
				</ul>
			</li>
			<li class="menu_list"><a class="show" href="#">Число игкроков</a>
				<ul class="menu_drop">
					<li><a href="/filternum2">2</a></li>
					<li><a href="/filternum3">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6 и более</a></li>
				</ul>
			</li>
			<li class="menu_list"><a class="show" href="#">Акции</a>
				<ul class="menu_drop">
					<li><a href="#">Скидки</a></li>
					<li><a href="#">Подарочные наборы</a></li>
					<li><a href="#">Акции партнеров</a></li>
				</ul>
			</li>
			<li class="menu_list"><a class="show" href="#">Место сбора</a>
				<ul class="menu_drop">
					<li><a href="#">"Цифербург"</a></li>
					<li><a href="#">"Циферблат"</a></li>
					<li><a href="#">"Типичный Питер"</a></li>
					<li><a href="#">«О’Лень!»</a></li>
					<li><a href="#">"Freak-zone"</a></li>
				</ul>
			</li>
			<li><a href="#">О нас</a></li>
		</ul>
		</aside>



		<main class="flex-4">
			<section class="flex merch container flex-xs-column">
															
					<? foreach($games as $game):?>
					<div class="item">
						<? if($_SESSION['login'] == 'Admin'):?>
					<a class="cross" href="/remove/<?echo $game['idpurchase']?>"></a>
						<?endif?>
						<img src="static/img/<?echo $game['pic']?>" alt="<?echo $game['pic']?>">
						<p><?echo $game['shortdescription']?></p>
						<a class="text-center" href="/games/<?echo $game['idpurchase']?>"><?echo $game['title']?></a>
					</div>
					<?endforeach?>
			</section>
				
				<div class="entry_form">
						 <p id="error"></p>
						<form action="/login" name="entry" method="POST">
							<fieldset>
								<button class="close" type="reset"></button>
								<legend>Введите данные</legend>
								<label for="login" class="label">Логин: </label>
								<input name="login" type="text" id="login" placeholder="Login" required="" autofocus="">
								<p class="info"></p>
								<label for="pwd" class="label">Пароль: </label>	
								<input name="pwd" type="password" id="pwd" placeholder="Password" required="">
								<p class="info"></p>
								<button type="submit" class="button1">Login</button>
								
							</fieldset>
						</form>
	</div>	
					
			
		</main>
	</div>
	<script type="text/javascript" src="/static/js/page1.js"></script>