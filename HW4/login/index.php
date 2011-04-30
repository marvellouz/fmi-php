<?php

session_start();

require_once("../libs/Smarty.class.php"); 
require_once("../settings.php"); 
require_once("../helpers.php"); 

function check_login($email, $password) {
  $user_results = "select * from User where Email='$email' and Password='$password' limit 1";
  $user = table_content($user_results);
  if (count($user) == 0) return false;
  return $user;
}

function logout() {
  if (isset($_GET['logout']))
    session_destroy();
}

function login() {
  if(isset ($_POST['login'])) {
    $user = check_login(mysql_real_escape_string($_POST['email']), mysql_real_escape_string($_POST['password']));
    if($user) {
      $_SESSION['uid'] = $user['id'];
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['FirstName'] = $user['FirstName'];
      $_SESSION['LastName'] = $user['LastName'];
      $_SESSION['flash'] = "Успешно влязохте като ".$_SESSION['email']."!";
      header("Location: ../");
      exit;
    }
    $_SESSION['flash'] = "Грешно потребителско име или парола!";
  }
    $_SESSION['flash'] = "Грешно потребителско име или парола!";
}

login();

$smarty->assign('categories', $categories);


// display it
$smarty->display('../templates_c/login.tpl');

$mysqli->close();
?>
