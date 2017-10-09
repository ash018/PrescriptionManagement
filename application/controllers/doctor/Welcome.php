<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//welcome
class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
        
        public function doctorList()
        {
            $data = array();
            $this->load->model('DoctorListModel');
            $data = $this->DoctorListModel->selectDoctorList();
            $this->load->view('doctor/doctorList',$data);
        }
}
