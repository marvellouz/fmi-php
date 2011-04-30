<?php

$mysqli=new mysqli($host, $user, $password, $schema);

$mysqli->set_charset("utf8");

/*
 * This is the "official" OO way to do it,
 * BUT $connect_error was broken until PHP 5.2.9 and 5.3.0.
 */
if ($mysqli->connect_error) {
  die('Connect Error (' . $mysqli->connect_errno . ') '
    . $mysqli->connect_error);
}

/*
 * Use this instead of $connect_error if you need to ensure
 * compatibility with PHP versions prior to 5.2.9 and 5.3.0.
 */
if (mysqli_connect_error()) {
  die('Connect Error (' . mysqli_connect_errno() . ') '
    . mysqli_connect_error());
}

function table_content($query_string) {
  global $mysqli;
  $query_result = $mysqli->query($query_string);
  $result = array();
  while ($row = $query_result->fetch_assoc()) {
    array_push($result, $row);
  }
  return $result;
}

$categories_results = "select * from Category"; 
$categories = table_content($categories_results); 

$smarty = new Smarty;

$smarty->assign('flash', $_SESSION['flash']);
$_SESSION['flash']="";

$is_logged_user = array_key_exists('uid', $_SESSION);

if ($is_logged_user) {
  $smarty->assign('user_name', $_SESSION['FirstName']);
}

$smarty->assign('categories', $categories);
$smarty->assign('is_logged_user', $is_logged_user);

?>
