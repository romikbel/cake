$(document).ready(function(){

	$('.web .service').hover(
		function(){
			$(this).children('.block_img').children('img').attr('src',"/images/services/web/"+$(this).children('.block_img').children('img').attr('class')+'_hover.jpg')
		},
		function(){
			$(this).children('.block_img').children('img').attr('src',"/images/services/web/"+$(this).children('.block_img').children('img').attr('class')+'.jpg')
		}
	)
	
	function sendMail(){
		$('.mailSend').html('<img src="/images/contact/send.png" class="sendImg" width="200%">');
		$('.sendImg').animate({width:"70%"},200);
	}
	
	$('#posting').click(function(){
		$.getJSON("../mail/index.php", { name: $('input[name=name]').val(),  mail: $('input[name=mail]').val(), message: $('textarea').val()},
			function (jsonData){
				if(jsonData.error == 0)
				{
					if(jsonData.mail.error == 0)
					{
						sendMail();
					}
				}
				else
				{
					$.each(jsonData.fields, function(i,j){
						if(i!='message')
						{
							$('input[name='+i+']').css('border','1px solid red');
						}
						else
						{
							$('textarea').css('border','1px solid red');
						}
					})
				}
			}
		);
	})
	
	$('form.contacts input, form.contacts textarea').keyup(function(){
		if($(this).attr('style'))
		{
			$(this).removeAttr('style');
		}
	})
	
	$('.slider .sl img:not(.view .info img)').click(function(){
		if($(this).attr('class')!='arrow blocked')
		{
			$(this).addClass('blocked')
			var i = $(this).parent().children('.view').children('.info').children('#select').index();
			var count = $('.slider .sl .view .info img').length;
			count--;
			if(i<=count)
			{
				if($(this).attr('id')=='right')
				{
					if(i!=count)
					{
						setTimeout(function(){jQuery('.slider .sl .view .info img:eq('+parseInt(i-1)+')').removeAttr('id')},1000);
						$('.slider .sl .view .info img:eq('+i+')').animate({width:parseInt($('.slider .sl .view .info img:eq('+i+')').css('width'))-200+'px',top:30,opacity:0.3},1000);
						i++;
						$('.slider .sl .view .info img:eq('+i+')').animate({width:parseInt($('.slider .sl .view .info img:eq('+i+')').css('width'))+200+'px',top:-50,opacity:1},1000);
						$('.info').animate({marginLeft:parseInt(parseInt($('.info').css('margin-left'))-250)+'px'},1000);
						$('.text').animate({left:parseInt(parseInt($('.text').css('left'))-215)},1000);
						setTimeout(function(){jQuery('.slider .sl .view .info img:eq('+i+')').attr('id','select')},1000);
					}
				}
				else
				{
					if(i!=0)
					{
						setTimeout(function(){jQuery('.slider .sl .view .info img:eq('+parseInt(i+1)+')').removeAttr('id')},650);
						$('.info').animate({marginLeft:parseInt(parseInt($('.info').css('margin-left'))+250)+'px'},1000);
						$('.slider .sl .view .info img:eq('+i+')').animate({width:parseInt($('.slider .sl .view .info img:eq('+i+')').css('width'))-200+'px',top:30,opacity:0.3},1000);
						i--;
						$('.slider .sl .view .info img:eq('+i+')').animate({width:parseInt($('.slider .sl .view .info img:eq('+i+')').css('width'))+200+'px',top:-50,opacity:1},1000);
						$('.text').animate({left:parseInt(parseInt($('.text').css('left'))+215)},1000);
						setTimeout(function(){jQuery('.slider .sl .view .info img:eq('+i+')').attr('id','select')},650);
					}
				}
			}
			setTimeout(function(){jQuery('.slider .sl img').removeClass('blocked')},1200);
		}
	})
	
})
