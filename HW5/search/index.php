<?php

session_start();

require_once("../libs/Smarty.class.php"); 
require_once("../helpers.php"); 

function search() {
  if (isset($_POST['submit']) && isset($_POST['fileName'])) {
    $start_dir = realpath('../');

    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($start_dir), RecursiveIteratorIterator::SELF_FIRST);
    foreach($files as $file) {
      if($file->getFilename() === $_POST['fileName']) {
	return $file->getPathname();
      }
    }
    return "Файлът, който търсите не беше намерен!";
  }
}

$smarty->assign('search_result', search());

// display it
$smarty->display('../templates_c/search.tpl');

$mysqli->close();
?>
