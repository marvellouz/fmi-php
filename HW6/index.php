<?php
require_once("view_class.php");

$v = new View(); // some class that implements the IView inteface
$v->setPageTitle("Use case for the homework");
$v->setJavascriptFolder("js");
$v->setCSSFolder("styles");

$v->addJavascriptFiles(array("jquery.js", "custom.js"));
$v->addCSSFiles(array("jquery.css", "custom.css"));

$v->assignTemplateVariable("message", "Hello!");
$v->assignTemplateVariable("message2", "Is there anybody in there?");

$v->display("templates_c/index.tpl");

?>

