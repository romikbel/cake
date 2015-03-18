<?$url = (explode("/",$_SERVER["REQUEST_URI"]))?>
<?=file_get_contents("http://".$_SERVER["HTTP_HOST"]."/header.php?request=".$url[1]);?>

	
	<div class="page">
		<div class="breadcrumbs">
			Наши работы
		</div>
		<div class="block">
			<div class="left">
				<img src="/images/portfolio/2.jpg">
				<div class="portfolio_img">+</div>
			</div>
			<div class="right">
				<p>TEXT NAME</p>
				<p class="description">TEXT DESCRIPTION</p>
				<a href="#">LINK PROJECT</a>
			</div>
		</div>
		<div class="block">
			<div class="left">
				<img src="/images/portfolio/1.jpg">
				<div class="portfolio_img">+</div>
			</div>
			<div class="right">
				<p>TEXT NAME</p>
				<p class="description">TEXT DESCRIPTION</p>
				<a href="#">LINK PROJECT</a>
			</div>
		</div>
		<div class="block">
			<div class="left">
				<img src="/images/portfolio/3.jpg">
				<div class="portfolio_img">+</div>
			</div>
			<div class="right">
				<p>TEXT NAME</p>
				<p class="description">TEXT DESCRIPTION</p>
				<a href="#">LINK PROJECT</a>
			</div>
		</div>
		<div class="block">
			<div class="left">
				<img src="/images/portfolio/4.jpg">
				<div class="portfolio_img">+</div>
			</div>
			<div class="right">
				<p>TEXT NAME</p>
				<p class="description">TEXT DESCRIPTION</p>
				<a href="#">LINK PROJECT</a>
			</div>
		</div>
		<div class="block">
			<div class="left">
				<img src="/images/portfolio/5.jpg">
				<div class="portfolio_img">+</div>
			</div>
			<div class="right">
				<p>TEXT NAME</p>
				<p class="description">TEXT DESCRIPTION</p>
				<a href="#">LINK PROJECT</a>
			</div>
		</div>
	</div>
	
	
<?=file_get_contents("http://".$_SERVER["HTTP_HOST"]."/footer.php");?>