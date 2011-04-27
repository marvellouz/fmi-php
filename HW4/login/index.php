<?php

session_start();

require_once("../libs/Smarty.class.php"); 
require_once("../settings.php"); 
require_once("../helpers.php"); 

function check_login($email, $password) {
  $user_results = $mysqli->query("select * from User where E-mail='$email' and Password='MD5($password)' limit 1");
  $user = table_content($user_results);
  if ($user->num_rows == 0) return false;
  return $user[0];
}

function logout() {
  if (isset($_GET['logout']))
    session_destroy();
}

function login() {
  if(isset ($_POST['login'])) {
    $user = check_login(db_escape($_POST['email']), db_escape($_POST['password']));
    if($user) {
      $_SESSION['uid'] = $user['id'];
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['FirstName'] = $user['FirstName'];
      $_SESSION['LastName'] = $user['LastName'];
      header("Location: index.php");
      $_SESSION['flash'] = "Успешно влязохте като ".$_SESSION['email']."!";
      exit;
    }
    $_SESSION['flash'] = "Грешно потребителско име или парола!";
  }
}


$smarty = new Smarty;

$smarty->assign('categories', $categories);

// display it
$smarty->display('../templates_c/login.tpl');

$mysqli->close();
?>
