<?php
  /* Функция для удаления лишних файлов: сюда, помимо удаления текущей и родительской директории, так же можно добавить файлы, не являющиеся картинкой (проверяя расширение) */
  function excess($files) {
    $result = array();
    for ($i = 0; $i < count($files); $i++) {
      if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
    }
    return $result;
  }
  $dir = "images"; // Путь к директории, в которой лежат изображения
  $files = scandir($dir); // Получаем список файлов из этой директории
  $files = excess($files); // Удаляем лишние файлы
  /* Дальше происходит вывод изображений на страницу сайта (по 4 штуки на одну строку) */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Домашняя выпечка пряников и печенья</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script src="js/linkeffects.js"></script>
</head>
<body>
<div id="header-wrapper">
<div id="header" class="container">
	<div id="logo">
        <h1><a href="index.html"><strong style="text-shadow: #32251B 1px 1px 2px;background: #32251B;padding: 20px;">ПРЯНИКИ И ПЕЧЕНЬЯ</strong></a></h1>
	</div>
	<div id="menu">
		<ul>
			<li><a href="index.html" accesskey="1" title="">О нас</a></li>
			<li><a href="reviews.html" accesskey="2" title="">Отзывы</a></li>
            <li class="current_page_item"><a href="gallery.php" accesskey="3" title="">Галерея</a></li>
			<li><a href="products.html" accesskey="4" title="">Продукция</a></li>
			<li><a href="contact.html" accesskey="5" title="">Контакты</a></li>
		</ul>
	</div>
</div></div>
<div class="all">
<div id="page" class="container">
    <div class="gallery">
        <div class="title">
            <h2>Наши изделия</h2>
            <span class="byline">Роман Король.</span> </div>
        <p>Вы можете увидеть все наши изделия на фотографиях представленных ниже. Все эти чудесные и очень вкусные изделия вы можете заказать в разделе "<a href="products.html">ПРОДУКЦИИ</a>"</p>
    <ul >
        <?php for ($i = 0; $i < count($files); $i++) { ?>
            <li><div class="pic"><img src="<?=$dir."/".$files[$i]?>" alt="" /></div></li>
        <?php } ?>
    </ul>
    </div>
</div>
<div id="copyright">
    <div style="float: left; width: 390px;">
        <div align="center">
            <img src=" images/pic01.jpg" alt="" title="" style="max-width: 370px; margin: 0 auto;"/>
        </div>
        <p>Телефон доставки: 8 (900) 700-40-30</p>
    </div>
    <div style="float: left; width: 390px;">
        <div align="center">
            <img src=" images/pic01.jpg" alt="" title="" style="max-width: 370px; margin: 0 auto;"/>
        </div>
        <p>Роман Король</p>
    </div>
    <div style="float: left; width: 390px;">
        <div align="center">
            <img src=" images/pic01.jpg" alt="" title="" style="max-width: 370px; margin: 0 auto;"/>
        </div>
        <p>Всегда вкусные и ароматные</p>
    </div>
</div>
<p style="background: #32251B; width: 1200px; margin: 0 auto; text-align: center;font-family: 'Source Sans Pro', sans-serif;font-size: 12pt;letter-spacing: 0.20em;text-align: center;text-transform: uppercase;font-size: 0.80em;color: #FFF;">&copy; Домашняя выпечка. Все права защищены.</p>
</div>
</body>
</html>
