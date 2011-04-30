<?php
session_start();
require_once("../libs/Smarty.class.php"); 
require_once("../settings.php"); 
require_once("../helpers.php"); 


$wishes_results = "select * from Wish where ID in (select Wish_ID from Wish_has_Category where Category_ID =". $_GET['id'] .")";
$wishes_from_cat = table_content($wishes_results); 
    
$smarty->assign('wishes', $wishes_from_cat);

// display it
$smarty->display('../templates_c/index.tpl');

$mysqli->close();
?>
