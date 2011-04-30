<?php

session_start();

require_once("../libs/Smarty.class.php"); 
require_once("../settings.php"); 
require_once("../helpers.php"); 


function logout() {
  session_destroy();
  session_start();
  $_SESSION['flash'] = "Успешно излязохте!";
  header("Location: ../");
}


logout();

$wishes_results = "select * from Wish order by Priority";
$wishes = table_content($wishes_results);

$smarty->assign('wishes', $wishes);

// display it
$smarty->display('../templates_c/index.tpl');

$mysqli->close();
?>
