<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function __construct() {
        parent::__construct();
   }
	
    public function index(){
  
        $data['header'] = 'Home';
        
        $data['Header'] = $this->load->view('templates/header', $data,TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu','',TRUE);
        $data['footer'] = $this->load->view('templates/footer', '',TRUE);
        $this->load->view('home',$data);

    }
    
    
}


?>
