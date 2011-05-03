<?php

session_start();

require_once("../libs/Smarty.class.php"); 
require_once("../helpers.php"); 

function is_valid_email($Email) {
  return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $Email);
}

function is_free($Email) {
  $query = "select * from User where Email='$Email'";
  $result = table_content($query);
  if(count($result) == 0) return true;
  else return false;
}

function register($FirstName, $LastName, $Email, $Password) {
  if ($FirstName && $LastName && $Email && $Password) {
    if(is_valid_email($Email)) {
      if(is_free($Email)){
	$user_add = "INSERT INTO mydb.User (FirstName, LastName, Email, Password, IsAdmin) VALUES ('$FirstName', '$LastName', '$Email', '$Password', 0)";
	execute_query($user_add);
	$_SESSION['flash']="Успешна регистрация!";
	header("Location: ../");
      }
      else {
	$_SESSION['flash']="E-mail-ът, който сте въвели, е вече зает!";
	header("Location: ./");
      }

    }
    else {
      $_SESSION['flash']="Невалиден e-mail!";
      header("Location: ./");
    }
  }
  else { 
    $_SESSION['flash']="Моля, попълнете всички полета!";
    header("Location: ./");
  }
}

function get_data($field) {
  return mysql_real_escape_string($_POST[$field]);
}

if(isset ($_POST['register'])) {
  register( get_data('FirstName'), 
	    get_data('LastName'), 
	    get_data('Email'),
	    get_data('Password') );
}

// display it
$smarty->display('../templates_c/register.tpl');

$mysqli->close();
?>
