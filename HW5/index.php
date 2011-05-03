<?php
session_start();
require_once("./libs/Smarty.class.php"); 
require_once("./helpers.php"); 

if($is_logged_user) {
  //$wishes_results = "select * from Wish where User_ID=" . $_SESSION['uid'] . " order by Priority";
  //$wishes = table_content($wishes_results);

}
// display it
$smarty->display('templates_c/index.tpl');

$mysqli->close();
?>
