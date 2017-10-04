<?php

class Authentication extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database('default', true);
    }
    
    public function checkDBConnection(){
        $CI = & get_instance();
        $CI->db = $this->load->database('default', true);
        return true;     
    }
    public function usermanager_insert(){
        $data = array(
            'UserId' => 'admin',
            'Password' => md5('admin123'),
            'UserName' => 'Shakil Ahammad',
            'UserEmail' => 'shakil.ahammad@aci-bd.com',
            'UserPhone' => '01556804442',
            'UserAddress'  => '245,Tejgon Industrial Area, Dhaka-1208.',
            'IsAdmin'  => '1',
            'DoctorId'  => '1',
            'EntryBy' => '0',
            'EditedBy' => '0'
        );

        $this->db->insert('usermanager',$data);
    }
    
    public function check_user_login($username,$password) 
    {
        $sql = "SELECT * FROM UserManager WHERE UserId = '$username' limit 1" ;
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }

}
?>
