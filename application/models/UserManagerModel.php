<?php
class UserManagerModel extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database('default', true);
    }
    
    public function getAllUser(){
        $sql = "SELECT UserId, UserName, UserEmail, UserPhone, IsAdmin, DoctorId, DATE_FORMAT(EntryDate,'%d/%m/%Y') as EntryDate  FROM usermanager;" ;
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
        
    }
    
    public function getAllDoctor(){
        $sql = "select  DoctorId, DoctorName, DoctorAddress from doctor where DoctorId not in (select DoctorId from usermanager);";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function checkUserId($userId){
       $sql = "SELECT * FROM usermanager where UserId = '$userId';";
       $query=$this->db->query($sql);

       $result = $query->result_array();
       return $result;
    }
    
    public function saveUser($data){
        //$this->db->_error_number();
        if($this->db->insert('usermanager',$data)){
            return true; 
        }
        else{
            return false; 
        }
    }
}
?>
