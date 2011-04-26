<?php

require_once("../libs/Smarty.class.php"); 
require_once("../settings.php"); 

$mysqli=new mysqli($host, $user, $password, $schema);

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

function table_content($res) {
  $result = array();
  while ($row = $res->fetch_assoc()) {
    array_push($result, $row);
  }
  return $result;
} 

$wishes_results = $mysqli->query("select * from Wish where ID in (select Wish_ID from Wish_has_Category where Category_ID =". $_GET['id'] .")");
$wishes_from_cat = table_content($wishes_results);

$smarty = new Smarty;

$smarty->assign('wishes', $wishes_from_cat);

// display it
$smarty->display('../templates_c/index.tpl');

$mysqli->close();
?>
