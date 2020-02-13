<div class="flex main">
	<div class="flex-1 border-right aside">
		<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, quis, quos? Laborum deserunt, quidem harum cumque quas! Nostrum ad doloribus, placeat? Ipsum ullam omnis quae praesentium iste debitis ut sequi!</div>
		<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, blanditiis!</div>
	</div>
	<div class="flex-3 information">
		<div class="flex-1">
			<button class="button one">Личная информация</button>
			<button class="button two">Информация по записям</button>
			<button class="button three">Запись на игру</button>
		</div>
		<div class="flex-4 btn-one">
			<form action="" name="personal">
							<fieldset>
								<legend></legend>
								<div class="group">
									<label for="email" class="label">Ваш email: </label>
									<input name='email' type="email" id="email" placeholder="email@email.com" required="">
									<p class="info"></p>
								</div>
								<div class="group">
									<label for="tel" class="label">Номер телефона: </label>
									<input name='tel' type="tel" id="tel" placeholder="Phone number" required="" autofocus="">
									<p class="info"></p>
								</div>
								
								<div class="group">
									<label for="surname" class="label">Фамилия: </label>	
									<input name='surname' type="text" id="surname" placeholder="Фамилия" required="">
									<p class="info"></p>
								</div>
								<div class="group">
									<label for="name" class="label">Имя: </label>	
									<input name='name' type="text" id="name" placeholder="Имя" required="">
									<p class="info"></p>
								</div>

								
								<button class="button1" type="submit">Внести изменения</button>
							</fieldset>
			</form>
		</div>
		<div class="flex-4 btn-two">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt suscipit reprehenderit totam distinctio voluptatum eligendi, quisquam magnam non numquam debitis? Modi nesciunt nobis iste cum inventore praesentium, exercitationem quaerat quam?</div>

		<div class="flex-4 btn-three">
			<form action="">
			<fieldset>
			<legend align="center">Данные для записи</legend>
			
			<label for="date" class="label">Дата для записи</label>
				<input type="date" required="" id="date" min="2020-02-22" step="7">
			
			<div class="select">
				<p>Выбор игры:</p>
				<select class="select1" name="game" id="">
				<option value="1">Хару Ичибан</option>
				<option value="2">Антимонополия</option>
				<option value="3" selected="">Photosynthesis</option>
				<option value="4">Otys</option>
				<option value="5">Magic the Gathering</option>
			</select>
			<p>Выбор места:</p>
				<select class="select2" name="place" id="">
				<option value="1">Цифербург</option>
				<option value="2">Циферблат</option>
				<option value="3" selected="">Типичный Питер</option>
				<option value="4">«О’Лень!»</option>
				<option value="5">"Freak-zone"</option>
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