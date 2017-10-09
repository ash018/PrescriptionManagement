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
    
    function selectDoctorList(){
        
        $sql = "Select * FROM doctor";
       
        $query = $this->db->query($sql);
        
        $result = $query->result_array();
        
        return $query->result_array();
    }
}
