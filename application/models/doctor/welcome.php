<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class DoctorListModel extends CI_Model{
    function selectDoctorList(){
        $sql = "Select * from doctor";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
