<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DocList extends MY_Controller {

    public function __construct(){
         parent::__construct();
         
         $this->load->model('DoctorListModel'); //Load the Model here   
    }
	
    
    public function index()
    {
        $data['header'] = 'Doctor List';
        //$data['Header'] = $this->load->view('templates/header', $data,TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu','',TRUE);
        $data['footer'] = $this->load->view('templates/footer', '',TRUE);   
        $this->load->view('doctor/docInfoCreation',$data);
    }
    
     public function checkDoctorName(){
        $checkDoctor = $this->input->get("regisId");
        //echo $checkDoctor;
        $checkDoctor = $this->DoctorListModel->checkDoctorRegistration($checkDoctor);
        
        if(sizeof($checkDoctor)> 0){
            echo 0;
        }
        else{
            echo 1;
        }
    }
    
    public function checkDoctorContactNo(){
        $checkDoctor = $this->input->get("contactNo");
        
        $checkDoctor = $this->DoctorListModel->checkDoctorContactNo($checkDoctor);
        
        if(sizeof($checkDoctor)> 0){
            echo 0;
        }
        else{
            echo 1;
        }
    }

    public function doctorList()
    {
        //$data = array();
        $data['page_title'] = "Doctor List";
        $data['Header'] = $this->load->view('templates/header', $data,TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu','',TRUE);
        $data['footer'] = $this->load->view('templates/footer', '',TRUE); 

        $data['listView'] = $this->DoctorListModel->selectDoctorList();

        $this->load->view('doctor/doctorList',$data);
    }
    
    public function getDoctorData(){
       $doctorId = $this->input->get("doctorId",TRUE); 
       $data['doctorData']=$this->DoctorListModel->checkDoctorId($doctorId);
       $data['allDoctor'] = $this->DoctorListModel->getAllDoctor();
       $doctorEditFrom = $this->load->view('doctor/doctor_edit',$data,TRUE);

       echo $doctorEditFrom;
    }
    
    public function getDoctorDataDelete(){
       $doctorId = $this->input->get("doctorId",TRUE); 
       $data['doctorData']=$this->DoctorListModel->checkDoctorId($doctorId);
       $data['allDoctor'] = $this->DoctorListModel->getAllDoctor();
       
       $doctorDeleteFrom = $this->load->view('doctor/doctor_delete',$data,TRUE);

       echo $doctorDeleteFrom;
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
        $data = array();
        $data['page_title'] = "Doctor List";
        $data['Header'] = $this->load->view('templates/header', $data,TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu','',TRUE);
        $data['footer'] = $this->load->view('templates/footer', '',TRUE); 
        $data['listView'] = $this->DoctorListModel->insertDoctor($doctorSave);
        $this->load->view('doctor/doctorList',$data);
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
        $data['page_title'] = "Doctor List";
        $data['Header'] = $this->load->view('templates/header', $data,TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu','',TRUE);
        $data['footer'] = $this->load->view('templates/footer', '',TRUE); 
        $data['listView'] = $this->DoctorListModel->updateDoctor($updateDoctorSave);
//        var_dump($this->data);
//        exit();
        $this->load->view('doctor/doctorList',$data);
        
    }
    
    public function deleteDoctor(){
        
        $deleteDoctorSave = array(
         
			'DoctorId'  => $this->input->post('DoctorId'),
			
        
	);
        
//        var_dump($updateDoctorSave);
//        exit();
        
        $data = array();
        $data['page_title'] = "Doctor List";
        $data['Header'] = $this->load->view('templates/header', $data,TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu','',TRUE);
        $data['footer'] = $this->load->view('templates/footer', '',TRUE); 
        $data['listView'] = $this->DoctorListModel->deleteDoctor($deleteDoctorSave);
//        var_dump($this->data);
//        exit();
        $this->load->view('doctor/doctorList',$data);
        
    }
   
}
