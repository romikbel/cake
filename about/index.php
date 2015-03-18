<?$url = (explode("/",$_SERVER["REQUEST_URI"]))?>
<?=file_get_contents("http://".$_SERVER["HTTP_HOST"]."/header.php?request=".$url[1]);?>
	<div id="content" class="second">
        <div class="block">
            <img src="/images/about/sun.png">
            <h3>Lorem ipsum dolor sit amet,</h3>
            <p> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>
			in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. <br><br>
			Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div><div class="block">
            <div class="people">
				<img src="/images/about/people/roma.png">
				<p>Женя</p>
			</div>
            <div class="people">
				<img src="/images/about/people/olia.png">
				<p>Оля</p>
			</div>
            <div class="people">
				<img src="/images/about/people/egor.png">
				<p>Егор</p>
			</div>
            <div class="people">
				<img src="/images/about/people/pasha.png">
				<p>Паша</p>
			</div>
        </div>
    </div>
<?=file_get_contents("http://".$_SERVER["HTTP_HOST"]."/footer.php");?>