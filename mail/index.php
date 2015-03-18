<?
	$arr = array("error"=>0,"mail"=>array("error"=>0));
	$message = '<html><head></head><body>';
	foreach($_REQUEST as $key=>$val)
	{
		if(isset($val) && !empty($val))
			$message .= "<p><b>".$key.":</b> ".$val." </p>";
		else
		{
			$arr["error"] = 1;
			$arr["fields"][$key] = $val;
		}	
	}
	if($arr['error']!=1)
	{
		$message .= '</body></html>';
		$subject = "Отправка письма с формы \"Контакты\".";
		$header = "From: \"\" <info@domen.ru>\n";
		$header .= "Content-type: text/html; charset=\"utf-8\"";
		$to = 'ren@web-softica.by';
		if(@mail($to,$subject,$message,$header))
			$arr["mail"]["error"] = 0;
		else
		{
			$arr["mail"]["error"] = 1;
			$arr["mail"]["text"] = 'Письмо не отправлено';
		}
	}
	echo json_encode($arr);
?>