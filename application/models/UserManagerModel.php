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
        $sql = "select A.DoctorId as DoctorId, A.DoctorName as DoctorName, A.DoctorAddress as DoctorAddress from doctor as A, usermanager as B where B.DoctorId != A.DoctorId;";
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
        $result = $this->db->insert('usermanager',$data);
        return $result;
    }
}
?>
