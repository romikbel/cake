<?
	$array = array(
		'/'=>'Главная',
		'about'=>'О нас',
		'services'=>'Услуги',
		'contact'=>'Контакты',
	);
	$mix = array("first","second","third","fourth","fifth");
	$count=count($array);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>ITCake - мы делаем интернет ВКУСНЕЕ</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript" src="/js/script.js"></script>
	<link rel="stylesheet" href="/css/style.css" type="text/css">

	<!--[if lt IE 9]>
	  <link rel="stylesheet" type="text/css" href="css/ie/ie.css" />
	  <link href="css/ie/style_block.css" rel="stylesheet" type="text/css" />
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<noscript>
<div class="error">
  Пожалуйста, включите JavaScript! 
  <a href="http://www.google.ru/support/bin/answer.py?answer=23852">Как?</a>
</div>
</noscript>

	<header>
		<a href="#" id="logo"><img src="/images/logo.png"></a>
        <nav>
            <ul>
				<?
					$y=0;
					foreach($array as $key=>$val):
						?><li class="<?=$mix[$y]?> <?=$key=="services" ? "left" : ""?>"><a href='<?=strpos($key,$_REQUEST['request'])===FALSE ? ($key!="/" ? "/" : "" ).$key."'" : "#' id=\"select\"" ;?>><?=$val?></a></li><br><?
						$y++;
					endforeach; ?>
     <!--           <li class="first"><a href="#" id="select">Главная</a></li><br>
                <li class="second"><a href="about.html">О нас</a></li><br>
                <li class="third left"><a href="#">Услуги</a></li><br>
                <li class="fourth"><a href="portfolio.html">Портфолио</a></li><br>
                <li class="fifth left"><a href="#">Контакты</a></li>-->
            </ul>
        </nav>
	</header>