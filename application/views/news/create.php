<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
			<legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Добавить
				новость

				<?php echo validation_errors(); ?>
			</legend>
			<?php echo form_open('news/create') ?>
			<input class="form-control" name="title" placeholder="Название" type="text" /><br />
			<textarea name="shorttext" id="shorttext" class="form-control" rows="4" cols="15" required="required"
					  placeholder="Текст краткой новости"></textarea><br/>
			<textarea name="text" id="text" class="form-control" rows="7" cols="25" required="required"
					  placeholder="Текст новости"></textarea>
			<button class="btn btn-lg btn-primary btn-block" type="submit">
				Добавить
			</button>
			</form>
		</div>
	</div>