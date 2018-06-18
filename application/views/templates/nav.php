<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	<a class="navbar-brand" href="/">Autoby</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
			aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="/">Главная<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/adverts">Объявления</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/news">Новости</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/contacts">Контакты</a>
			</li>
		</ul>
		<?php
		if (!$logged) {
			?>
			<ul class="navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="/auth/login">Авторизация</a>
				</li>
			</ul>
		<?php } else { ?>

			<ul class="navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="/adverts/create">Добавить объявление</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/news/create">Добавить новость</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="/auth/logout">Выход</a>
				</li>
			</ul>

		<?php } ?>
	</div>
</nav>
