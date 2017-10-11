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
        
        $nsize =sizeof($result);
        $result['size'] = $nsize;
        $result['editCheck'] = 0;
//        var_dump($result);
//        exit();
        
        return $result;
    }
    
    public function checkDoctorId($doctorId){
       $sql = "SELECT * FROM doctor where DoctorId = '$doctorId';";
       $query=$this->db->query($sql);

       $result = $query->result_array();
       return $result;
    }
    
    public function getAllDoctor(){
        $sql = "select  DoctorId, DoctorName,DoctorRegistrationNo ,DoctorAddress,DoctorContactNo, DoctorEmailAddress, EntryBy from doctor";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        
        return $result;
    }
    
    public function insertDoctor($data){
        
        $DoctorName =  $data['DoctorName'];
        $DoctorAddress = $data['DoctorAddress'];
        $DoctorEmailAddress = $data['DoctorEmailAddress'];
        $DoctorRegistrationNo = $data['DoctorRegistrationNo'];
        $DoctorContactNo = $data['DoctorContactNo'];
        $EntryBy = $data['EntryBy'];
        
        $EditedBy = null;
//        $EditedDate = null;
        
//        var_dump($data);
//        echo $EntryBy;
//        exit();
        $sql = "INSERT into doctor (DoctorName,DoctorRegistrationNo,DoctorAddress,DoctorContactNo,DoctorEmailAddress,EntryBy,EditedBy,EditedDate) values('$DoctorName','$DoctorRegistrationNo','$DoctorAddress','$DoctorContactNo','$DoctorEmailAddress','$EntryBy','$EditedBy','$EditedDate')";
        $query = $this->db->query($sql);
        $this->load->view('welcome_message');
    }
    
    public function updateDoctor($data){
        
        $DoctorId = $data['DoctorId'];
        $DoctorName =  $data['DoctorName'];
        $DoctorAddress = $data['DoctorAddress'];
        $DoctorEmailAddress = $data['DoctorEmailAddress'];
        $DoctorRegistrationNo = $data['DoctorRegistrationNo'];
        $DoctorContactNo = $data['DoctorContactNo'];
        $EntryBy = $data['EntryBy'];
        
        $EditedBy = $data['EditedBy'];
//        $EditedDate = null;
        
//        var_dump($data);
//        echo $EntryBy;
//        exit();
        $sql = "UPDATE doctor SET DoctorName='$DoctorName',DoctorRegistrationNo='$DoctorRegistrationNo',DoctorAddress='$DoctorAddress',DoctorContactNo='$DoctorContactNo',DoctorEmailAddress='$DoctorEmailAddress',EntryBy='$EntryBy',EditedBy='$EditedBy' where DoctorId='$DoctorId'" ;
        $query = $this->db->query($sql);
        $ndata = $this->DoctorListModel->getAllDoctor();
        $nsize =sizeof($ndata);
        
        $ndata['size'] = $nsize;
        $ndata['editCheck'] = 1;
//        var_dump($ndata);
//        exit();
        return $ndata;
    }
}
