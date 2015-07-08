<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'third_party/smarty/Smarty.class.php');

class Custom_smarty extends Smarty {

  function __construct()
  {
    parent::__construct();
    $this->setTemplateDir(APPPATH.'views/templates/');   
    $this->setCompileDir(APPPATH.'views/templates_c/');
  }
}
?>