<!DOCTYPE html>
<html>
	<head>
		<title>Lazytour</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">	
	</head>
	<body>
		<div id="wrapper">
			<header>
				<div class="top_menu">
					<div class="child_left">
						Ваш город: <span id="dashed_border">Москва</span>
					</div>
					<div class="child_center">
						<ul>
							<li><a href="">Турагентам</a></li>
							<li><a href="">Как это работает</a></li>
							<li><a href="">Отзывы</a></li>
						</ul>		
					</div>
					<div class="child_right">
						<ul>
							<li id="dashed_border"><a href="">Вход</a></li>
							<li id="separator"></li>
							<li><a href="">Регистрация</a></li>
						</ul>
					</div>
					<div class="protrusion"></div>		
				</div>				
				<div class="lazytour">
					<h1 class="logo">
						<a href="#">Lazytour</a>
					</h1>
					<div class="recreation">
						<p>Отдых начинается<br>с поиска отдыха</p>
					</div>
					<div class="left_shadow"></div>
					<div class="absolute"></div>
					<button type="button" name="" value="" class="button_claim">Оставить заявку</button>
				</div>
			</header>
			<div id="page_info">	
					<ul class="breadcrumbs">
						<li><a href="">Главная</a>&nbsp;/&nbsp;</li>
						<li><a href="">Все отзывы</a></li>
					</ul>
					<h1 class="page_name">Люди говорят</h1>
			</div>
			<div class="colored_line"></div>
			<div class="shadow_line"></div>

						
				<div id="feedback_form">
					<form action="" method="POST">
						<h2>Оставить комментирий</h2>
						<div class="email">
							<label for="check1">Электронная почта</label>
							<input type="text" name="email" id="check1" placeholder="Ваша почта">
							<label for="check2">Имя</label>
							<input type="text" name="name" id="check2" placeholder="Ваше имя">
							<label for="check3">Фото</label>
							<input type="text" name="photo" id="check3" placeholder="Выберите фото">
							<button class="select">Выбрать</button>								
						</div>
						<div class="question">
							<label for="check4">Вопрос</label>
							<textarea name="textarea" placeholder="Ваш вопрос" id="check4"></textarea>
							<input type="submit" name="submit" value="Отправить">
						</div>
					</form>
				</div>
				
				<div class="colored_line clear"></div>
				<div class="shadow_line"></div>
			</div>	
															
	<style>
.sticky {
  position: fixed;
  z-index: 101;
}
.stop {
  position: relative;
  z-index: 101;
}
</style>
<script>
(function(){
var a = document.querySelector('#feedback_form'), b = null, P = 0;
window.addEventListener('scroll', Ascroll, false);
document.body.addEventListener('scroll', Ascroll, false);
function Ascroll() {
  if (b == null) {
    var Sa = getComputedStyle(a, ''), s = '';
    for (var i = 0; i < Sa.length; i++) {
      if (Sa[i].indexOf('box-sizing') == 0 || Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('width') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
        s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
      }
    }
    a.innerHTML = '<div style="'+s+'">'+a.innerHTML+'</div>';
    b = a.children[0];
    a.style.height = b.getBoundingClientRect().height + 'px';
    a.style.padding = '0';
    a.style.border = '0';
  }
  var Ra = a.getBoundingClientRect(),
      R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('#comments').getBoundingClientRect().bottom);  // селектор блока, при достижении нижнего края которого нужно открепить прилипающий элемент
  if ((Ra.top - P) <= 0) {
    if ((Ra.top - P) <= R) {
      b.className = 'stop';
      b.style.top = - R +'px';
    } else {
      b.className = 'sticky';
      b.style.top = P + 'px';
    }
  } else {
    b.className = '';
    b.style.top = '';
  }
}
})()
</script>						
	</body>
</html>