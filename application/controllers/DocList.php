<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DocList extends MY_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('DoctorListModel'); //Load the Model here   
    }

    public function index() {
        $data['header'] = 'Doctor List';
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $this->load->view('doctor/docInfoCreation', $data);
    }

    public function checkDoctorName() {
        $checkDoctor = $this->input->get("regisId");
        //echo $checkDoctor;
        $checkDoctor = $this->DoctorListModel->checkDoctorRegistration($checkDoctor);

        if (sizeof($checkDoctor) > 0) {
            echo 0;
        } else {
            echo 1;
        }
    }
    
    public function checkClinicReg() {
        $checkClinic = $this->input->get("regisId");
       // echo $checkClinic;
        $checkClinic = $this->DoctorListModel->checkClinicRegistration($checkClinic);

        if (sizeof($checkClinic) > 0) {
            echo 0;
        } else {
            echo 1;
        }
    }
    
    public function checkDoctorContactNo() {
        $checkDoctor = $this->input->get("contactNo");

        $checkDoctor = $this->DoctorListModel->checkDoctorContactNo($checkDoctor);

        if (sizeof($checkDoctor) > 0) {
            echo 0;
        } else {
            echo 1;
        }
    }

    public function doctorList() {
        //$data = array();
        $data['header'] = "Doctor List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);

        $data['listView'] = $this->DoctorListModel->selectDoctorList();

        $this->load->view('doctor/doctorList', $data);
    }
    
    public function clinicTypeList() {
        //$data = array();
        $data['header'] = "Clinic Type List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);

        $data['listView'] = $this->DoctorListModel->selectClinicTypeList();

        $this->load->view('doctor/clinicTypeList', $data);
    }
    
    public function clinicList() {
        //$data = array();
        $data['header'] = "Clinic List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);

        $data['listView'] = $this->DoctorListModel->selectClinicList();

        $this->load->view('doctor/clinicList', $data);
    }

    public function getDoctorData() {
        $doctorId = $this->input->get("doctorId", TRUE);
        $data['doctorData'] = $this->DoctorListModel->checkDoctorId($doctorId);
        $data['allDoctor'] = $this->DoctorListModel->getAllDoctor();
        $doctorEditFrom = $this->load->view('doctor/doctor_edit', $data, TRUE);

        echo $doctorEditFrom;
    }
    
    public function getClinicData2() {
        $clinicId = $this->input->get("clinicId", TRUE);
        $data['clinicData'] = $this->DoctorListModel->checkClinicId2($clinicId);
        //$data['allDoctor'] = $this->DoctorListModel->getAllDoctor();
        $clinicEditFrom = $this->load->view('doctor/clinic_edit', $data, TRUE);

        echo $clinicEditFrom;
    }
    
    public function getClinicTypeData2() {
        $clinicId = $this->input->get("clinicId", TRUE);
        $data['clinicData'] = $this->DoctorListModel->checkClinicTypeId2($clinicId);
        //$data['allDoctor'] = $this->DoctorListModel->getAllDoctor();
        $clinicTypeEditFrom = $this->load->view('doctor/clinic_type_edit', $data, TRUE);

        echo $clinicTypeEditFrom;
    }
    
     public function getClinicData() {
        $clinicId = $this->input->get("clinicId", TRUE);
        
        $data['clinicData'] = $this->DoctorListModel->checkClinicId($clinicId);
       $data['allClinic'] = $this->DoctorListModel->getAllClinic();
        
        $clinicEditFrom = $this->load->view('doctor/clinic_edit', $data, TRUE);

        echo $clinicEditFrom;
    }

    public function getDoctorDataDelete() {
        $doctorId = $this->input->get("doctorId", TRUE);
        $data['doctorData'] = $this->DoctorListModel->checkDoctorId($doctorId);
        $data['allDoctor'] = $this->DoctorListModel->getAllDoctor();

        $doctorDeleteFrom = $this->load->view('doctor/doctor_delete', $data, TRUE);

        echo $doctorDeleteFrom;
    }
    
    public function getClinicDataDelete() {
        $clinicId =  $this->input->get("clinicId", TRUE);
        //echo $clinicId;
        $data['clinicData'] = $this->DoctorListModel->checkClinicId($clinicId);
        $clinicDeleteFrom = $this->load->view('doctor/clinic_delete', $data, TRUE);
        echo $clinicDeleteFrom;
        
    }

    public function doctorInfo() {
        $doctorSave = array(
            'DoctorName' => $this->input->post('DoctorName'),
            'DoctorAddress' => $this->input->post('DoctorAddress'),
            'DoctorEmailAddress' => $this->input->post('DoctorEmailAddress'),
            'DoctorRegistrationNo' => $this->input->post('DoctorRegistrationNo'),
            'DoctorContactNo' => $this->input->post('DoctorContactNo'),
            'EntryBy' => $this->session->userdata()['UserId'],
        );

        $data = array();
        $data['page_title'] = "Doctor List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->insertDoctor($doctorSave);
        $this->load->view('doctor/doctorList', $data);
    }

    public function updateDoctor() {
        $updateDoctorSave = array(
            'DoctorId' => $this->input->post('DoctorId'),
            'DoctorName' => $this->input->post('DoctorName'),
            'DoctorRegistrationNo' => $this->input->post('DoctorRegistrationNo'),
            'DoctorAddress' => $this->input->post('DoctorAddress'),
            'DoctorContactNo' => $this->input->post('DoctorContactNo'),
            'DoctorEmailAddress' => $this->input->post('DoctorEmailAddress'),
            'EntryBy' => $this->input->post('EntryBy'),
            'EditedBy' => $this->session->userdata()['UserId']
        );


        $data = array();
        $data['header'] = "Doctor List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->updateDoctor($updateDoctorSave);

        $this->load->view('doctor/doctorList', $data);
    }
    
    public function updateClinic() {
        $updateClinicSave = array(
            'ClinicId' => $this->input->post('ClinicId'),
            'ClinicName' => $this->input->post('ClinicName'),
            'ClinicRegistrationNo' => $this->input->post('ClinicRegistrationNo'),
            'ClinicAddress' => $this->input->post('ClinicAddress'),
            'ClinicContactNumber' => $this->input->post('ClinicContactNumber'),
            'ClinicEmailAddress' => $this->input->post('ClinicEmailAddress'),
            'EntryBy' => $this->input->post('EntryBy'),
            'EditedBy' => $this->session->userdata()['UserId']
        );


        $data = array();
        $data['header'] = "Doctor List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->updateClinic($updateClinicSave);

        $this->load->view('doctor/clinicList', $data);
    }
    
    public function updateClinicType() {
        $updateClinicTypeSave = array(
            'ClinicTypeId' => $this->input->post('ClinicTypeId'),
            'ClinicType' => $this->input->post('ClinicType'),
            'EditedBy' => $this->session->userdata()['UserId']
        );


        $data = array();
        $data['header'] = "Doctor List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->updateClinicType($updateClinicTypeSave);

        $this->load->view('doctor/clinicTypeList', $data);
    }

    public function deleteDoctor() {

        $deleteDoctorSave = array(
            'DoctorId' => $this->input->post('DoctorId')
        );
        $data = array();
        $data['header'] = "Doctor List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->deleteDoctor($deleteDoctorSave);

        $this->load->view('doctor/doctorList', $data);
    }
    
    public function deleteClinic() {

        $deleteClinicSave = array(
            'ClinicId' => $this->input->post('ClinicId')
        );
        $data = array();
        $data['header'] = "Clinic List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->deleteClinic($deleteClinicSave);
        
        $this->load->view('doctor/clinicList', $data);
    }
    
    public function clinicInfoCreate(){
        $data['header'] = 'Clinic Info';
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $this->load->view('doctor/clinicInfoCreation', $data);
    }
    
    public function clinicInfo() {
        $clinicSave = array(
            'ClinicName' => $this->input->post('ClinicName'),
            'ClinicAddress' => $this->input->post('ClinicAddress'),
            'ClinicEmailAddress' => $this->input->post('ClinicEmailAddress'),
            'ClinicContactNumber' => $this->input->post('ClinicContactNumber'),
            'EntryBy' => $this->session->userdata()['UserId']
        );

        $data = array();
        $data['header'] = "Clinic Info";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->insertClinic($clinicSave);
       
        $this->load->view('doctor/clinicList', $data);
    }
    
    public function clinicTypeCreate(){
        $data['header'] = "Clinic Type Create";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['typeAdd'] = 0;
        $this->load->view('doctor/clinicType', $data);
    }
    
     public function clinicTypeSave(){
        
       $typedata = array(
            'ClinicType' => $this->input->post('ClinicType', TRUE),
            'EntryBy' => $this->session->userdata()['UserId'],
            'EditedBy' => '0'
        );
        $result = $this->DoctorListModel->saveClinicType($typedata);
        $notice = array();
         if ($result) {
             $notice = array(
                 'type' => 1,
                 'message' => 'Clinic Type Creation Success'
             );
         } else {
             $notice = array(
                 'type' => 0,
                 'message' => 'Clinic Type Already Exists, Please Give New Type'
             );
         }
         $this->session->set_userdata('notifyuser', $notice);

         redirect('DocList/clinicTypeCreate');
    }
    
    public function checkClinicType(){
        $checkClinicType = $this->input->get("regisId");
        //echo $checkDoctor;
        $checkClinicType = $this->DoctorListModel->checkClinicType2($checkClinicType);

        if (sizeof($checkClinicType) > 0) {
            echo 0;
        } else {
            echo 1;
        }
    }

}
