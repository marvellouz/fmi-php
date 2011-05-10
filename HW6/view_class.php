<?php
require_once("view_interface.php");
require_once("./libs/Smarty.class.php");

class View implements IView {
  private $smarty;
  private $title;
  private $jsFolder;
  private $js;
  private $cssFolder;
  private $css;
  private $varNameValue;

  function __construct() {
    $this->smarty = new Smarty();
  }

  public function display($pageName) {
    $this->smarty->assign('title', $this->title);
    $this->smarty->assign('jsFolder', $this->jsFolder);
    $this->smarty->assign('js', $this->js);
    $this->smarty->assign('cssFolder', $this->cssFolder);
    $this->smarty->assign('css', $this->css);

    foreach($this->varNameValue as $varName => $varValue) {
      $this->smarty->assign($varName, $varValue);
    }

    $this->smarty->display($pageName);
  }

  public function assignTemplateVariable($varName, $varValue) {
    $this->varNameValue[$varName] = $varValue;
  }

  public function setPageTitle($title) {
    $this->title = $title;
  }

  public function setJavascriptFolder($jsFolder) {
    $this->jsFolder = $jsFolder;
  }

  public function addJavascriptFiles($js /* array */) {
    foreach ($js as $j) {
      $this->js[] = $j;
    }
  }
  
  public function setCSSFolder($cssFolder) {
    $this->cssFolder=$cssFolder;
  }

  public function addCSSFiles($css /* array */) {
    foreach ($css as $c) {
      $this->css[] = $c;
    }
  }

}

?>
