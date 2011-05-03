<?php /* Smarty version Smarty-3.0.7, created on 2011-05-03 21:57:03
         compiled from "../templates_c/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5433754004dc05e0f2c7303-30493000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd675114bef8f9b91a9fc8dfc3138f509139ad85' => 
    array (
      0 => '../templates_c/search.tpl',
      1 => 1304452585,
      2 => 'file',
    ),
    '660999d210f74d28ee46d5b2195450c1dd93e26b' => 
    array (
      0 => '../templates_c/index.tpl',
      1 => 1304416311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5433754004dc05e0f2c7303-30493000',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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
	<?php if ($_smarty_tpl->getVariable('is_logged_user')->value){?>
	<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
?>
          <li><a href = "/xampp/fmi-php/HW5/categories/?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value["Name"];?>
</a></li>
	<?php }} ?>
	<?php }?>
        </ul>
        <ul id = "hmenu2">
	<?php if ($_smarty_tpl->getVariable('is_logged_user')->value){?>
          <li id="hello">Здравейте, <?php echo $_smarty_tpl->getVariable('user_name')->value;?>
! </li>
          <li><a href="/xampp/fmi-php/HW5/logout/">[изход]</a></li>
	<?php }else{ ?>
          <li id="login"><a href="/xampp/fmi-php/HW5/login/">Вход</a></li>
          <li id="register"><a href="/xampp/fmi-php/HW5/register/">Регистрация</a></li>
	<?php }?>
        </ul>
	<?php if ($_smarty_tpl->getVariable('isset_flash')->value){?>
	<div id="flash">
	  <?php echo $_smarty_tpl->getVariable('flash')->value;?>

	</div>
	<?php }?>
      </div>
      <div id = "content">

      



<div class = "container">

<form action="." method="POST">
<label for="fileName">Въведете име на файл:</label>
<br />
<input type="text" name="fileName" />
<br />
<br />
<input type="submit" name="submit" value="Търси" />
</form>
<p id="search_result">
<?php echo $_smarty_tpl->getVariable('search_result')->value;?>

</p>
</div>

 
        <div id = "footer">Валентина Динкова</div>
      </div>
    </div>
  </body>
</html>
