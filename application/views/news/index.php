<h2><?php echo $title ?></h2>
<style>
	.blogShort{ border-bottom:1px solid #ddd;}
	.add{background: #333; padding: 10%; height: 300px;}

	.nav-sidebar {
		width: 100%;
		padding: 8px 0;
		border-right: 1px solid #ddd;
	}
	.nav-sidebar a {
		color: #333;
		-webkit-transition: all 0.08s linear;
		-moz-transition: all 0.08s linear;
		-o-transition: all 0.08s linear;
		transition: all 0.08s linear;
	}
	.nav-sidebar .active a {
		cursor: default;
		background-color: #34ca78;
		color: #fff;
	}
	.nav-sidebar .active a:hover {
		background-color: #37D980;
	}
	.nav-sidebar .text-overflow a,
	.nav-sidebar .text-overflow .media-body {
		white-space: nowrap;
		overflow: hidden;
		-o-text-overflow: ellipsis;
		text-overflow: ellipsis;
	}

	.btn-blog {
		color: #ffffff;
		background-color: #37d980;
		border-color: #37d980;
		border-radius:0;
		margin-bottom:10px
	}
	.btn-blog:hover,
	.btn-blog:focus,
	.btn-blog:active,
	.btn-blog.active,
	.open .dropdown-toggle.btn-blog {
		color: white;
		background-color:#34ca78;
		border-color: #34ca78;
	}
	h2{color:#34ca78;}
	.margin10{margin-bottom:10px; margin-right:10px;}
</style>
<div class="container">
	<div id="blog" class="row">

		<?php foreach ($news as $news_item): ?>
		<div class="col-md-10 blogShort">
			<h1><?php echo $news_item['title'] ?></h1>
			<article><p>
					<?php echo $news_item['shorttext'] ?>
				</p></article>
			<a class="btn btn-blog pull-right marginBottom10" href="news/<?php echo $news_item['id'] ?>">Подробнее</a>
		</div>

		<?php endforeach; ?>
		<div class="col-md-12 gap10"></div>
	</div>
</div>