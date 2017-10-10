<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DocList extends MY_Controller {

    public function __construct(){
         parent::__construct();
         
         $this->load->model('DoctorListModel'); //Load the Model here   
    }
	
    
    public function index()
    {
         $this->load->view('doctor/docInfoCreation');
    }

    public function doctorList()
    {
        $data = array();
        $data['page_title'] = "Doctor List";
        $doctorList = array();
        #$this->load->model('DoctorListModel');
        $this->data['listView'] = $this->DoctorListModel->selectDoctorList();
        $dataSize =  sizeof($this->data['listView']);
//        var_dump($this->data['listView']);
//        exit();
        $this->data['size'] = $dataSize;
        $this->load->view('doctor/doctorList',$this->data);
    }
    
    public function doctorInfo()
    {
        $doctorSave = array(
            'DoctorName' => $this->input->post('DoctorName'),
            'DoctorAddress' => $this->input->post('DoctorAddress'),
            'DoctorEmailAddress' => $this->input->post('DoctorEmailAddress'),
            'DoctorRegistrationNo' => $this->input->post('DoctorRegistrationNo'),
            'DoctorContactNo' => $this->input->post('DoctorContactNo'),
            'EntryBy' => $this->session->userdata()['UserId'],
            
        
        );
        
//        var_dump($doctorSave);
//        exit();
        $this->DoctorListModel->insertDoctor($doctorSave);
    }
   
}
