<?php

require_once("../libs/Smarty.class.php"); 
require_once("../settings.php"); 
require_once("../helpers.php"); 


$wishes_results = $mysqli->query("select * from Wish where ID in (select Wish_ID from Wish_has_Category where Category_ID =". $_GET['id'] .")");
$wishes_from_cat = table_content($wishes_results); 
    
    
$smarty = new Smarty;

$smarty->assign('wishes', $wishes_from_cat);

$smarty->assign('categories', $categories);


// display it
$smarty->display('../templates_c/index.tpl');

$mysqli->close();
?>
