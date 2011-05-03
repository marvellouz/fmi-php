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

// display it
$smarty->display('../templates_c/index.tpl');

$mysqli->close();
?>
