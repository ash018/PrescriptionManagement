<?php
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
       //$this->no_cache();
        $this->load->model('Authentication');
    }
	
    public function index(){
         //$this->load->view('login_page');
         $this->load->view('home');
//        if($this->Authentication->checkDBConnection()){
//            $this->Authentication->usermanager_insert();
//            $this->load->view('welcome_message');
//        }
    }
}
?>
