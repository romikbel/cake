<?	
	include_once('_autoload.php');
	$array = array(
		'/'=>'Главная',
		'about'=>'Обо мне',
		'services'=>'Услуги',
		'blog'=>'Блог',		
		'contact'=>'Контакты',
	);
	$i=0;
	$count=count($array);
	$db = new Block;
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Татьяна Тютюнова</title>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript" src="/js/transition.js"></script>
	<script type="text/javascript" src="/js/script.js"></script>
	<link rel="stylesheet" href="/css/style.css" type="text/css">
</head>
<body>

<div id="mask" class="contact">
	<form>
		<p>Заполните форму ниже, чтобы задать вопрос:</p>
		<p id="close" class="contact">x</p>
		<input type="text" name="name" placeholder="Ваше имя*"> <br>
		<input type="email" name="mail" placeholder="Ваш E-mail*"><br>
		<input type="telephone" name="phone" placeholder="Ваш телефон*"><br>
		<input type="hidden" name="meeting" value="Meeting">
		<textarea placeholder="Текст сообщения*" name="message"></textarea><br>
		<p class="star">* Поля обязательные для заполне</p>
		<input type="button" value="Отправить" id="posting" class="sub">
		<div class="photo"></div>
	</form>
</div>
	<header>
		<div class="line"></div>
		<div class="page">
			<img src="/images/logo.png" class="logo">
		</div>
		<nav>
			<ul class="page">
				<?
				foreach($array as $key=>$val):
					?><li><a href='<?=strpos($key,$_REQUEST['request'])===FALSE ? ($key!="/" ? "/" : "" ).$key."'" : "#' id=\"active\"" ;?> <?=$i==0 ? "class=\"first\"" : ""?>><?=$val?></a></li><?
					$i++;
				endforeach;?><li><a href="#quest" id="modal" class="last">Задать вопрос</a></li>
			</ul>
			<? $slider = $db->GetList(1);
				$i = 0;?>
			<? if($_REQUEST['request']==='/' && count($slider)>3):?>
			<div class="slider page">
				<?foreach($slider as $key=>$val):?>
					<? switch($i)
					{
						case 0:?>
							<img src="/images/article/<?=$val['VALUE_IMAGES']?>" class="left">
							<?break;
						case 1:?>
							<img src="/images/article/<?=$val['VALUE_IMAGES']?>" class="view">
							<?break;
						case 2:?>
							<img src="/images/article/<?=$val['VALUE_IMAGES']?>" class="right">
							<?break;
						case 4:?>
							<img src="/images/article/<?=$val['VALUE_IMAGES']?>" style="-webkit-transform: translateX(-400px) rotateY(-100deg) translateX(-790px);">
							<?break;
						default:?>
							<img src="/images/article/<?=$val['VALUE_IMAGES']?>"  style="-webkit-transform: translateX(770px) rotateY(-72deg) translateX(-790px);"><?
							break;
					}
					$i++;
				endforeach;?>
			</div>
			<? else:?>
				&nbsp;
			<? endif;?>
		</nav>
	</header>