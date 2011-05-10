<?php
require_once("view_interface.php");
require_once("./libs/Smarty.class.php");

class View implements IView {
  private $smarty;

  function __construct() {
    $this->smarty = new Smarty();
  }

  public function display($pageName) {
    $this->smarty->display($pageName);
  }

  public function assignTemplateVariable($varName, $varValue) {
    $this->smarty->assign($varName, $varValue);
  }

  public function setPageTitle($title) {
    $this->smarty->assign('title', $title);
  }

  public function setJavascriptFolder($jsFolder) {
    $this->smarty->assign('jsFolder', $jsFolder);
  }

  public function addJavascriptFiles($js /* array */) {
    $this->smarty->assign('js', $js);
  }
  
  public function setCSSFolder($cssFolder) {
    $this->smarty->assign('cssFolder', $cssFolder);
  }

  public function addCSSFiles($css /* array */) {
    $this->smarty->assign('css', $css);
  }

}

?>
