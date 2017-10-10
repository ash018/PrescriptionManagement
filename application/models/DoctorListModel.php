<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class DoctorListModel extends CI_Model{
    
    
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
		$this->load->library('session');
		
    }
    
    public function selectDoctorList(){
        
        $sql = "Select * FROM doctor";
       
        $query = $this->db->query($sql);
        
        $result = $query->result_array();
        
        return $query->result_array();
    }
    
    public function insertDoctor($data){
        
        $DoctorName =  $data['DoctorName'];
        $DoctorAddress = $data['DoctorAddress'];
        $DoctorEmailAddress = $data['DoctorEmailAddress'];
        $DoctorRegistrationNo = $data['DoctorRegistrationNo'];
        $DoctorContactNo = $data['DoctorContactNo'];
        $EntryBy = $data['EntryBy'];
        
        $EditedBy = null;
        $EditedDate = null;
        
//        var_dump($data);
//        echo $EntryBy;
//        exit();
        $sql = "INSERT into doctor (DoctorName,DoctorRegistrationNo,DoctorAddress,DoctorContactNo,DoctorEmailAddress,EntryBy,EditedBy,EditedDate) values('$DoctorName','$DoctorRegistrationNo','$DoctorAddress','$DoctorContactNo','$DoctorEmailAddress','$EntryBy','$EditedBy','$EditedDate')";
        $query = $this->db->query($sql);
        $this->load->view('welcome_message');
    }
}
