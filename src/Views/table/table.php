<div class="flex border">
		<aside class="flex-1 left">
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, quis, quos? Laborum deserunt, quidem harum cumque quas! Nostrum ad doloribus, placeat? Ipsum ullam omnis quae praesentium iste debitis ut sequi!</div>
		<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, blanditiis!</div>
		</aside>
		<main class="flex-4 container flex column">
		<div>Доброго дня!
			Мы собираемся поиграть вместе и отлично провести время. Если у тебя есть сомнения по-поводу настольных игр, то это отличная возможность все решить для себя.
			Приходите, будет весело!
			Игры проводятся каждую субботу, запись в личном кабинете.
		</div>
		<div>
		<table>
			<tr>
				<th>Место сбора</th>
				<th>Игра</th>
				<th>Дата/время</th>
			</tr>
			<? foreach($games as $game):?>
			<tr>
				<td><?echo $game['place']?></td>
				<td><?echo $game['game']?></td>
				<td><?echo $game['date']?></td>
			</tr>
			<?endforeach?>
		</table>
		</div>
			
				
		</main>
		<aside class="flex-1 flex column right">
			<p>Отзывы по последним играм</p>
			
			<form name="comments">
   			 <div>
        			<textarea name="commText"></textarea>
    			</div>
   			 <input type="submit" value="Добавить комментарий">
			</form>

			<div id="comments"></div>
		</aside>
	</div>
	<script src="/static/js/page2.js"></script>