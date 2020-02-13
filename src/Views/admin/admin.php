<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<div class="container-fluid">
	<h2 class="text-center">Админская часть</h2>
	<h3 class="text-center">Добавление/удаление игры</h3>
	<div class="row">
		<div class="col-md-12 border">
			<form action="/addgame" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label for="title">Введите название игры</label>	
				<input name="title" class="form-control" type="text" id="name" placeholder="Название игры" required="">
			<label for="number_min">Минимальное число игроков</label>
				<input name="number_min" type="number" placeholder="min" maxlength="2"  required="" id="number_min" size="2">
			<label for="number_max">Максимальное число игроков</label>
				<input name="number_max" type="number" placeholder="max" maxlength="2"  required="" id="number_max" size="2">
			<div class="input-group mb-3">
  				<div class="input-group-prepend">
    				<span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
 				</div>
  				<div class="custom-file">
    				<input name="picture" type="file" accept="image/*"  id="picture" aria-describedby="inputGroupFileAddon01">
    				<label class="custom-file-label" for="picture">Choose image</label>
  				</div>

			</div>
			<p><? echo $file['picture']['name']?> </p>
    		
  				
			</div>
			<div class="input-group">
  				<div class="input-group-prepend">
    				<span class="input-group-text">Краткое описание игры</span>
  				</div>
  				<textarea name="shortdescription" class="form-control" aria-label="With textarea"></textarea>
			</div>
			<div class="input-group">
  				<div class="input-group-prepend">
    				<span class="input-group-text">Описание игры</span>
  				</div>
  				<textarea name="description" class="form-control" aria-label="With textarea"></textarea>
			</div>
			
			<div class="form-group">
    			<label for="genre">Выберите жанры игры </label>
    			<select class="form-control" id="genre" name="type">
      				<option value="1">Cтратегия</option>
      				<option value="2">Для вечеринок</option>
     				<option value="3">Подойдет детям</option>
      				<option value="4">Быстрые и простые</option>
      				<option value="5">Семейные</option>
    			</select>
  			</div>
			<input class="btn btn-primary" type="submit" value="Accept">
			<input class="btn btn-secondary" type="reset" value="Сбросить данные">
			<button type="submit" class="btn btn-danger">Удалить с сайта </button>
			</form>
		</div>
		
		
		<!-- форма для таблицы на странице 2 -->
		<h3 class="text-center">Добавление/удаление строк таблицы</h3>
		<form action="/addrow" name="table" method="POST">
			<div class="form-group">
				<label for="date" class="label">Дата для записи</label>
				<input type="date" required="" id="date" min="2020-02-22" step="7" name="date">
			
			<div class="select">
				<p>Выбор игры:</p>
				<!-- через сессию добвляем данные или куки -->
				<!-- wrap overflow -->
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
				<input class="btn btn-primary" type="submit" value="Accept">
				<input class="btn btn-secondary" type="reset" value="Сбросить данные">
				<button type="submit" class="btn btn-danger">Удалить с сайта </button>
			</div>

		</form>
		</div>
	</div>
	
	</div>
	