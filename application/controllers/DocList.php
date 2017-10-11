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
       
//        var_dump($this->data);
//        exit();
       // $this->data['size'] = $dataSize;
        $this->load->view('doctor/doctorList',$this->data);
    }
    
    public function getDoctorData(){
       $doctorId = $this->input->get("doctorId",TRUE); 
       $data['doctorData']=$this->DoctorListModel->checkDoctorId($doctorId);
       $data['allDoctor'] = $this->DoctorListModel->getAllDoctor();
       $doctorEditFrom = $this->load->view('doctor/doctor_edit',$data,TRUE);
       
//       var_dump($data);
//       exit();
       
       echo $doctorEditFrom;
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
    
    public function updateDoctor(){
        
        $updateDoctorSave = array(
         
			'DoctorId'  => $this->input->post('DoctorId'),
			'DoctorName' => $this->input->post('DoctorName'),
                        'DoctorRegistrationNo' => $this->input->post('DoctorRegistrationNo'),
                        'DoctorAddress' => $this->input->post('DoctorAddress'),
                        'DoctorContactNo' => $this->input->post('DoctorContactNo'),
                        'DoctorEmailAddress' => $this->input->post('DoctorEmailAddress'),
                        'EntryBy' => $this->input->post('EntryBy'),
                        
                        'EditedBy' => $this->session->userdata()['UserId'],
        
	);
        
//        var_dump($updateDoctorSave);
//        exit();
        $data = array();
        $this->data['listView'] = $this->DoctorListModel->updateDoctor($updateDoctorSave);
//        var_dump($this->data);
//        exit();
        $this->load->view('doctor/doctorList',$this->data);
        
    }
   
}
