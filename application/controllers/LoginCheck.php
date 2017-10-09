<?php
class LoginCheck extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
       
    }

    public function index() {
        $this->load->view('login_page');
    }
    
     public function check_user_login($username){
         
        $CI =& get_instance();       
        $CI->db = $this->load->database('default',true);
       
	$sql = "SELECT * FROM UserManager WHERE UserId = '$username';" ;
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function user_login_check() {
       
        $userName = $this->input->post('username');
        $password = $this->input->post('password');
        $remember = $this->input->post('remember');
        
   
       
       $result = $this->check_user_login($userName);        
       //print_r($result); exit();UserEmail,UserPhone,UserAddress,DoctorId,
       $login_data = array();
       if ($result) {
           $login_data['UserId'] = $result[0]['UserId'];
           $login_data['UserName'] = $result[0]['UserName'];
           $login_data['UserEmail'] = $result[0]['UserEmail'];
           $login_data['UserPhone'] = $result[0]['UserPhone'];
           $login_data['UserAddress'] = $result[0]['UserAddress'];
           $login_data['DoctorId'] = $result[0]['DoctorId'];
           $login_data['is_log_user'] = TRUE;

           $dbPassword = $result[0]['Password'];
                
           if ($dbPassword == md5($password)) {
               
               $user = $result[0]['UserId'];
               $IpAddress = $_SERVER['REMOTE_ADDR'];
               
               $this->session->set_userdata($login_data);
               redirect('Dashboard');
           } else {
               $data = array();
               $data['login_error'] = "Wrong email or password!!!";
               $this->load->view("login_page", $data);
           }
       } else {
           $data = array();
           $data['login_error'] = "Wrong email or password!!!";
           $this->load->view("login_page", $data);
       }
   }
   public function checkLogin(){
        if($this->session->userdata('is_log_user') != TRUE){
            redirect('LoginCheck','refresh'); 
        }
    }
    public function logOut(){
        $this->session->unset_userdata('is_log_user');
	$this->session->unset_userdata('UserId');
        $this->session->unset_userdata('UserName');
        $this->session->unset_userdata('UserEmail');
        $this->session->unset_userdata('UserPhone');
        $this->session->unset_userdata('DoctorId');
        
       
        $data = array();
        $data['message'] = "Successfully logged out";
        $this->session->set_userdata($data);
	 
        redirect('Dashboard','refresh');
		exit();
        
    }
    
}
?>

