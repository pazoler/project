<div class="flex main">
	<div class="flex-1 border-right aside">
					<? foreach($games as $game):?>

					<div class="item-side">
						<img src="static/img/<?echo $game['pic']?>" alt="<?echo $game['pic']?>">
						<p><?echo $game['shortdescription']?></p>
						<a class="text-center" href="/games/<?echo $game['idpurchase']?>"><?echo $game['title']?></a>
					</div>
					<?endforeach?>
	</div>
	<div class="flex-3 information">
		<div class="flex-1">
			<button class="button one">Личная информация</button>
			<button class="button two">Информация по записям</button>
			<button class="button three">Запись на игру</button>
		</div>
		<div class="flex-4 btn-one">
			<form action="/userInfo" name="personal" method="POST">
							<fieldset>
								<legend></legend>
								<div class="group">
									<label for="email" class="label">Ваш email: </label>
									<input name='email' type="email" id="email" placeholder="email@email.com" required="" value="<?echo $info['email']?>">
									<p class="info"></p>
								</div>
								<div class="group">
									<label for="tel" class="label">Номер телефона: </label>
									<input name='tel' type="tel" id="tel" placeholder="Phone number" required="" autofocus="" value="<?echo $info['phone']?>">
									<p class="info"></p>
								</div>
								
								<div class="group">
									<label for="surname" class="label">Фамилия: </label>	
									<input name='surname' type="text" id="surname" placeholder="Фамилия" required="" value="<?echo $info['surname']?>">
									<p class="info"></p>
								</div>
								<div class="group">
									<label for="name" class="label">Имя: </label>	
									<input name='name' type="text" id="name" placeholder="Имя" required="" value="<?echo $info['name']?>">
									<p class="info"></p>
								</div>

								
								<button class="button1" type="submit">Внести изменения</button>
							</fieldset>
			</form>
		</div>
		<div class="flex-4 btn-two"> 
			<h3>Данные по записям: <?echo $notes['place']?></h3>
		 <? if(isset($notes)):?>
		 <table>
			<tr>
				<th>Место сбора</th>
				<th>Игра</th>
				<th>Дата/время</th>
			</tr>
			
			<? foreach($notes as $note):?>
			<tr>
				<td><?echo $note['place']?></td>
				<td><?echo $note['game']?></td>
				<td><?echo $note['date']?><a class="cross" href="/regremove/<?echo $note['date']?>"></a></td>
			</tr>
			<?endforeach?>
		</table>
		<?else:?>
		<h4>Записи отсутствуют.</h4>
		<?endif?>
     	
     </div>

		<div class="flex-4 btn-three">
			<form action="/addNote" method="POST">
			<fieldset>
			<legend align="center">Данные для записи</legend>
			
			<label for="date" class="label">Дата для записи</label>
				<input name="date" type="date" required="" id="date" min="2020-02-22" step="7">
			<? if($result):?>
				<h3><?echo $result?></h3>
				 <?endif?>
			<div class="select">
				<p>Выбор игры:</p>
				<select class="select1" name="game" id="">
				<option value="Хару Ичибан">Хару Ичибан</option>
				<option value="Антимонополия">Антимонополия</option>
				<option value="Photosynthesis" selected="">Photosynthesis</option>
				<option value="Otys">Otys</option>
				<option value="Magic the Gathering">Magic the Gathering</option>
			</select>
			<p>Выбор места:</p>
				<select class="select2" name="place" id="">
				<option value="Цифербург">Цифербург</option>
				<option value="Циферблат">Циферблат</option>
				<option value="Типичный Питер" selected="">Типичный Питер</option>
				<option value="«О’Лень!»">«О’Лень!»</option>
				<option value="Freak-zone">"Freak-zone"</option>
			</select>

			</div>
			

			<button class="button1" type="submit">Записаться</button>
			<button class="button1" type="reset">Сбросить данные</button>
			</fieldset>
			</form></div>
	</div>
	
	</div>
</div>
</div>
<script src="/static/js/personal.js"></script>