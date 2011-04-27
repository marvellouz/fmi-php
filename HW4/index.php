<?php

require_once("./libs/Smarty.class.php"); 
require_once("./settings.php"); 
require_once("./helpers.php"); 

$wishes_results = $mysqli->query("select * from Wish order by Priority");
$wishes = table_content($wishes_results);


$smarty = new Smarty;

$smarty->assign('wishes', $wishes);
$smarty->assign('categories', $categories);

// display it
$smarty->display('templates_c/index.tpl');

$mysqli->close();
?>
