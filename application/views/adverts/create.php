<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
			<legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Добавить
				новость

				<?php echo validation_errors(); ?>
			</legend>
			<?php echo form_open_multipart('adverts/create') ?>
			<input class="form-control" name="model" placeholder="Модель" type="text" /><br />
			<textarea name="description" id="description" class="form-control" rows="7" cols="25" required="required"
					  placeholder="Описание объявления"></textarea>
			<input class="form-control" name="color" placeholder="Цвет" type="text" /><br />
			<input class="form-control" name="price" placeholder="Цена" type="text" /><br />
			<input class="form-control" name="contact" placeholder="Контакты" type="text" /><br />
			<input class="form-control" name="location" placeholder="Местоположение" type="text" /><br />
			<input type="file" name="userfile" size="20" />

			<button class="btn btn-lg btn-primary btn-block" type="submit">
				Добавить
			</button>
			</form>
		</div>
	</div>