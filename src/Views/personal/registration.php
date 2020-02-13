<div class="flex main">
	<div class="flex-1 border-right aside">
		<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, quis, quos? Laborum deserunt, quidem harum cumque quas! Nostrum ad doloribus, placeat? Ipsum ullam omnis quae praesentium iste debitis ut sequi!</div>
		<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, blanditiis!</div>
	</div>
	<div class="flex-3 information">
		<div class="flex-1">
			<button class="button registration">Регистрация</button>
		</div>
		<div class="flex-4 btn-oneR">
			<div>
			 <? if (isset($result)): ?>
    		<p class="success"><? echo $result; ?></p>
			<? endif; ?>
			<form action="/adduser" name="registration" method="POST">
							<fieldset>
								<legend>Введите данные</legend>
								<div class="group">
									<label for="loginR" class="label">Логин </label>
									<input name = "loginR" type="text" id="loginR" placeholder="Login" required="" autofocus="">
									<p class="info"></p>
								</div>
								
								<div class="group">
									<label for="password" class="label">Пароль: </label>	
									<input name ="password" type="password" id="password" placeholder="Password" required="">
									<p class="info"></p>
								</div>
								
								<button class="button1" type="submit">Зарегистрироваться</button>
							</fieldset>
			</form>
		</div>
	</div>
		
	</div>
</div>
<script type="text/javascript" src="/static/js/registration.js"></script>