<?

class Home extends CI_controller {
  public function index() {
    $data = array(
     // 'headerContent' => $this->load->view('header', array(), TRUE),
      //'mainContent' => $this->load->view('main', array(), TRUE),
      //'footerContent' => $this->load->view('footer', array(), TRUE),
    );
   $this->custom_smarty->display('home.tpl');
  } 
  
}

?>