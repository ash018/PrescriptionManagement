<?php
class UserManager extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('UserManagerModel');
    }
    public function index(){
        $data['header'] = 'User List';
        $data['Header'] = $this->load->view('templates/header', $data,TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu','',TRUE);
        $data['footer'] = $this->load->view('templates/footer', '',TRUE);
        $data['allUser'] = $this->UserManagerModel->getAllUser();
        $this->load->view('user_manager/user_list',$data);
    }
    public function userCreate(){
        
    }
}
?>



