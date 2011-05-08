<?php
require_once("view_interface.php");
require_once("./libs/Smarty.class.php");

$smarty = new Smarty();

class View implements IView {

  public function display($pageName) {
    global $smarty;
    $smarty->display($pageName);
  }

  public function assignTemplateVariable($varName, $varValue) {
    global $smarty;
    $smarty->assign($varName, $varValue);
  }

  public function setPageTitle($title) {
    global $smarty;
    $smarty->assign('title', $title);
  }

  public function setJavascriptFolder($jsFolder) {
    global $smarty;
    $smarty->assign('jsFolder', $jsFolder);
  }

  public function addJavascriptFiles($js /* array */) {
    global $smarty;
    $smarty->assign('js', $js);
  }
  
  public function setCSSFolder($cssFolder) {
    global $smarty;
    $smarty->assign('cssFolder', $cssFolder);
  }

  public function addCSSFiles($css /* array */) {
    global $smarty;
    $smarty->assign('css', $css);
  }

}

?>
