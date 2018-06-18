<div class="col-md-12"><h2><?php echo $title; ?></h2></div>
<style>

	.row{
		padding:10px;

	}
	.thumbnail {
		opacity: 0.70;
		-webkit-transition: all 0.5s;
		transition: all 0.5s;
	}

	.thumbnail:hover {
		opacity: 1.00;
		box-shadow: 0px 0px 10px #4bc6ff;
	}
</style>

<?php
$count = 0;
foreach ($adverts as $advert_item):
	$count++;
	if ($count > 4) {
		$count = 0;
		?>
		</div><div class="row">
	<?php
	}
	?>
	<div class="col-md-3 col-sm-6">
		<div style="min-height: 170px;">
			<?php echo '<img class="thumbnail img-fluid" src="' . $advert_item['image'] . '"/>'; ?>
		</div>
		<h4><?php echo $advert_item['model'] ?></h4>

		<p><?php echo $advert_item['description'] ?></p>
		<hr class="line">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<p class="price">$<?php echo $advert_item['price'] ?></p>
			</div>
			<div class="col-md-6 col-sm-6">
				<a href="adverts/<?php echo $advert_item['id'] ?>">
					<button class="btn btn-success right">Просмотреть</button>
				</a>
			</div>
		</div>

	</div>
	<?php endforeach; ?>