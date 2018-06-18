<div class="container">
	<div class="card">
		<div class="row">
			<aside class="col-sm-5 border-right">
				<article class="gallery-wrap">
					<div class="img-big-wrap">
						<div><?php echo '<img class="img-fluid" src="' . $advert_item['image'] . '">'; ?></div>
					</div>
					<!-- slider-product.// -->
				</article>
				<!-- gallery-wrap .end// -->
			</aside>
			<aside class="col-sm-7">
				<article class="card-body p-5">
					<h3 class="title mb-3"><?php echo $advert_item['model']; ?></h3>

					<p class="price-detail-wrap">
	<span class="price h3 text-warning">
		<span class="currency">US $</span><span class="num"><?php echo $advert_item['price']; ?></span>
	</span>
					</p> <!-- price-detail-wrap .// -->
					<dl class="item-property">
						<dt>Описание</dt>
						<dd><p><?php echo $advert_item['description']; ?></p></dd>
					</dl>
					<!-- item-property-hor .// -->
					<dl class="param param-feature">
						<dt>Цвет</dt>
						<dd><?php echo $advert_item['color']; ?></dd>
					</dl>
					<!-- item-property-hor .// -->
					<dl class="param param-feature">
						<dt>Местонахождение</dt>
						<dd><?php echo $advert_item['location']; ?></dd>
					</dl>
					<!-- item-property-hor .// -->

					<hr>
					<dt>Контакты: <?php echo $advert_item['contact']; ?></dt>
				</article>
				<!-- card-body.// -->
			</aside>
			<!-- col.// -->
		</div>
		<!-- row.// -->
	</div>
	<!-- card.// -->
