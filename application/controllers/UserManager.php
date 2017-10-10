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
        
        $data['header'] = 'User Create';
        $data['Header'] = $this->load->view('templates/header', $data,TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu','',TRUE);
        $data['footer'] = $this->load->view('templates/footer', '',TRUE);
        $data['allDoctor'] = $this->UserManagerModel->getAllDoctor();
        
        $this->load->view('user_manager/user_create',$data);
    }
    
    public function userSave(){
        //UserId,Password,
        //UserName,UserEmail,
        //UserPhone,UserAddress,
        //IsAdmin,DoctorId,
        
        $userId = $this->input->post('UserId',TRUE);
        $password = $this->input->post('Password',TRUE);
        $userName = $this->input->post('UserName',TRUE);
        $userEmail = $this->input->post('UserEmail',TRUE);
        $userPhone = $this->input->post('UserPhone',TRUE);
        $userAddress = $this->input->post('UserAddress',TRUE);
        $isAdmin = $this->input->post('IsAdmin',TRUE) ? '' : 0;
        $doctorId = $this->input->post('DoctorId',TRUE);
        $entryBy = $this->session->userdata('UserId');
        
        $data = array(
            'UserId' => $userId,
            'Password' => md5($password),
            'UserName' => $userName,
            'UserEmail' => $userEmail,
            'UserPhone' => $userPhone,
            'UserAddress'  => $userAddress,
            'IsAdmin'  => $isAdmin,
            'DoctorId'  => $doctorId,
            'EntryBy' => $entryBy,
            'EditedBy' => '0'
        );
        $result = $this->UserManagerModel->saveUser($data);
        $notice = array();
        if($result){
           $notice = array(
                'type' => 1,
                'message' => 'User Creation Success'
            ); 
        }
        else{
           $notice = array(
                'type' => 0,
                'message' => 'User Creation Fail'
            ); 
           $this->session->set_userdata('userdata',$data);
        }
        $this->session->set_userdata('notifyuser',$notice);
        
        $this->userCreate();
    }
    
    public function checkUserName(){
        $checkUser = $this->input->get("userName");
        $checkUser = $this->UserManagerModel->checkUserId($checkUser);
        if(sizeof($checkUser)> 0){
            echo 0;
        }
        else{
            echo 1;
        }
    }
}
?>



