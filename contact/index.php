<?$url = (explode("/",$_SERVER["REQUEST_URI"]))?>
<?=file_get_contents("http://".$_SERVER["HTTP_HOST"]."/header.php?request=".$url[1]);?>
	<div id="content" class="second">
        <div class="block">
            <div class="write_to_us">
				<h2>Позвоните нам</h2>
				<p>+375 29 365 65 58<br>+375 44 758 89 89</p>
				<a href="mailto:info@itcake.by">info@itcake.by</a>
				<p>Время работы:<br>пн-пт: 9.00 - 21.00<br>сб-вс: 10.00 - 18.00</p>
			</div>
			<form action="/mail/" method="POST" class="contacts">
				<img src="/images/contact/stamp.png" class="stamp">
				<h2>Напишите нам</h2>
				<p>Обратная связь</p>
				<input type="text" name="name" placeholder="Имя:"> <input type="email" name="mail" placeholder="E-mail:"><br>
				<textarea placeholder="Сообщение" name="message"></textarea><br>
				<input type="button" value="Отправить" id="posting" class="sub">
				<div class="mailSend"></div>
			</form>
        </div>
    </div>
<?=file_get_contents("http://".$_SERVER["HTTP_HOST"]."/footer.php");?>