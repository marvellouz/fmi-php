<?php
session_start();
require_once("./libs/Smarty.class.php"); 
require_once("./helpers.php"); 

if($is_logged_user) {
  //$wishes_results = "select * from Wish where User_ID=" . $_SESSION['uid'] . " order by Priority";
  //$wishes = table_content($wishes_results);
  $doc = new DOMDocument;

  // We don't want to bother with white spaces
  $doc->preserveWhiteSpace = false;

  $doc->Load('/opt/lampp/htdocs/xampp/fmi-php/HW5/db/mydb.xml');

  $xpath = new DOMXPath($doc);

  // We starts from the root element

  $query = '/mysqldump/database/table_data[@name="Wish"]/row/field[@name="User_ID"][. ='. $_SESSION['uid'] .']/parent::*/field';

  $wishes = array();
  $entries = $xpath->query($query);
  $results = array();
  $images = array();
  //print_r($entries);
  foreach ($entries as $element) {
    if($element->getAttribute("name") == "Name") {
      array_push($results, $element->nodeValue);
    }
    if($element->getAttribute("name") == "Image") {
      array_push($images, $element->nodeValue);
    }
  }

  for ($i=0; $i<count($results); $i++) {
      $wishes[$i] = array("Name" => $results[$i], "Image" => $images[$i]);
  }

}
else $wishes = array();
$smarty->assign('wishes', $wishes);
// display it
$smarty->display('templates_c/index.tpl');

$mysqli->close();
?>
