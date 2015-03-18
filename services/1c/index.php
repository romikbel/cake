<?=file_get_contents("http://".$_SERVER["HTTP_HOST"]."/header.php?request=".$_SERVER["REQUEST_URI"]);?>
	
	<div id="content" class="second">
        <div class="service ul">
			<ul>
				<li><a href="/services/web/"><img src="/images/service/webrazr.png"></a></li>
				<li><a href="/services/seo/"><img src="/images/service/seo.png"></a></li>
				<li><a href="/services/1c/"><img src="/images/service/avto_aktiv.png"></a></li>
				<li><a href="/services/design/"><img src="/images/service/design.png"></a></li>
				<li><a href="/services/administration/"><img src="/images/service/admin.png"></a></li>
			</ul>
			<div class="#1" id="select">
				ТЕКСТ ПО ВЕБ РАЗРАБОТКЕ
			</div>
        </div><div class="portfolio">
            <h3>Наши последние работы</h3>
            <a href="#"><img src="/images/portfolio/empty.jpg"></a>
            <a href="#"><img src="/images/portfolio/empty.jpg"></a>
            <a href="#"><img src="/images/portfolio/empty.jpg"></a>
        </div>
    </div>
<?=file_get_contents("http://".$_SERVER["HTTP_HOST"]."/footer.php");?>