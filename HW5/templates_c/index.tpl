<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="bg" lang="bg">
  <head>
    <title> </title>
    <meta http-equiv="content-type" 
    content="text/html;charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" href="/xampp/fmi-php/HW5/site_media/style.css" type="text/css" media="screen" />
    <script type="text/javascript" src="/xampp/fmi-php/HW5/site_media/js/external.js">  
    </script>
    <!--[if lte IE 6]>
    <p bgcolor = "#7A0900">
    <em>Сайтът изглежда по този начин, защото използвате internet explorer 6 или по-стара версия. Моля използвайте <a href = "http://www.mozilla.com/">browser</a>.
    </em></p>
    <![endif]-->

  </head>
  <body>
    <div id = "menu">
      <map id = "coffee" name="menu">
        <area alt = "начало" shape="poly" title="начало" href="/xampp/fmi-php/HW5/" coords="84,269,87,268,90,268,92,267,98,267,102,265,105,265,107,264,110,264,114,263,120,263,128,261,143,256,153,256,156,255,159,255,165,253,169,252,172,252,176,251,182,251,185,252,187,253,187,256,188,258,188,267,186,269,184,270,182,272,180,273,177,273,175,274,171,275,169,276,166,277,163,277,159,279,156,280,152,282,144,284,140,286,137,287,131,287,129,288,122,288,120,289,83,289,79,285,79,276,80,274,82,272,83,270,87,268,102,268" />
      </map>
      <img id = "menu_cup" usemap = "#menu" src="/xampp/fmi-php/HW5/site_media/images/menu1.png" alt = "меню"/>
      <div id = "mouse"></div>
    </div>
    <div id = "main">
      <div id = "header">
        <ul id = "hmenu">
        <li><a href = "/xampp/fmi-php/HW5/">Начало</a></li>
        <li><a href = "/xampp/fmi-php/HW5/search/">Търсене</a></li>
        </ul>
        <ul id = "hmenu2">
	{if $is_logged_user}
          <li id="hello">Здравейте, {$user_name}! </li>
          <li><a href="/xampp/fmi-php/HW5/logout/">[изход]</a></li>
	{else}
          <li id="login"><a href="/xampp/fmi-php/HW5/login/">Вход</a></li>
          <li id="register"><a href="/xampp/fmi-php/HW5/register/">Регистрация</a></li>
	{/if}
        </ul>
	{if $isset_flash}
	<div id="flash">
	  {$flash}
	</div>
	{/if}
      </div>
      <div id = "content">

      {block name=content}
        <div id = "images">
	{if $is_logged_user}
	{foreach from=$wishes item=wish}
          <div class = "image"><a href = "/xampp/fmi-php/HW5/" ><img src = "{$wish['Image']}" alt = "{$wish['Name']}"/></a>
            <div class = "description"><h1>{$wish["Name"]}</h1>
            </div>
          </div>
	{/foreach}
	{if !$categories}
	<div class="container"></div>
	{/if}
	{else}
	<div class="container"></div>
	{/if}
        </div>
        {/block} 
        <div id = "footer">Валентина Динкова</div>
      </div>
    </div>
  </body>
</html>
