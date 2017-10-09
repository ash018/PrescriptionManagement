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
}
?>
