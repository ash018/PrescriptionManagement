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
    
    public function doctorEducation(){
        $data['header'] = 'Doctor Education';
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $this->load->view('doctor/doctorEducation', $data);
    }

    public function checkDoctorName() {
        $checkDoctor = $this->input->get("regisId");
        $checkDoctor = $this->DoctorListModel->checkDoctorRegistration($checkDoctor);
        if (sizeof($checkDoctor) > 0) {
            echo 0;
        } else {
            echo 1;
        }
    }
    
    public function checkDoctorInstitute() {
        $checkDoctor = $this->input->get("regisId");
        $checkDoctor = $this->DoctorListModel->checkDoctorInstitute($checkDoctor);
        if (sizeof($checkDoctor) > 0) {
            echo 0;
        } else {
            echo 1;
        }
    }
    
    public function checkClinicReg() {
        $checkClinic = $this->input->get("regisId");
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
        $data['header'] = "Doctor List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->selectDoctorList();
        $this->load->view('doctor/doctorList', $data);
    }
    
    public function clinicTypeList() {
        $data['header'] = "Clinic Type List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->selectClinicTypeList();
        $this->load->view('doctor/clinicTypeList', $data);
    }
    
    public function clinicList() {
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
    
    public function getDoctorGradeData() {
        $doctorGradeId = $this->input->get("doctorGradeId", TRUE);
        $data['doctorData'] = $this->DoctorListModel->checkDoctorGradeId($doctorGradeId);
       // $data['allDoctor'] = $this->DoctorListModel->getAllDoctor();
        $doctorEditFrom = $this->load->view('doctor/doctor_grade_edit', $data, TRUE);
        echo $doctorEditFrom;
    }
    
    
    public function getDoctorInstituteData() {
        $doctorInstituteId = $this->input->get("doctorInstituteId", TRUE);
        $data['doctorData'] = $this->DoctorListModel->checkDoctorInstituteId($doctorInstituteId);
       // $data['allDoctor'] = $this->DoctorListModel->getAllDoctor();
        $doctorEditFrom = $this->load->view('doctor/doctor_institute_edit', $data, TRUE);
        echo $doctorEditFrom;
    }
    
    public function getDoctorEducationData() {
        $doctorId = $this->input->get("doctorId", TRUE);
        $data['doctorEducationData'] = $this->DoctorListModel->checkDoctorEducationId($doctorId);
        //$data['allDoctor'] = $this->DoctorListModel->getAllDoctor();
        $doctorEducationEditFrom = $this->load->view('doctor/doctor_education_edit', $data, TRUE);
        echo $doctorEducationEditFrom;
    }
    
    public function getClinicData2() {
        $clinicId = $this->input->get("clinicId", TRUE);
        $data['clinicData'] = $this->DoctorListModel->checkClinicId2($clinicId);
        $clinicEditFrom = $this->load->view('doctor/clinic_edit', $data, TRUE);
        echo $clinicEditFrom;
    }
    
    public function getClinicTypeData2() {
        $clinicId = $this->input->get("clinicId", TRUE);
        $data['clinicData'] = $this->DoctorListModel->checkClinicTypeId2($clinicId);
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
        $data['educationData'] = $this->DoctorListModel->getAllDoctorEducation();
        $data['educationGradeData'] = $this->DoctorListModel->selectDoctorEducationGradeList();
        $data['educationInstituteData'] = $this->DoctorListModel->selectDoctorEducationInstituteList();
        $data['allDoctor'] = $this->DoctorListModel->getAllDoctor();
        $doctorDeleteFrom = $this->load->view('doctor/doctor_delete', $data, TRUE);
        echo $doctorDeleteFrom;
    }
    
    public function getDoctorDataEducation() {
        $doctorId = $this->input->get("doctorId", TRUE);
        $data['doctorData'] = $this->DoctorListModel->checkDoctorId($doctorId);
        $data['doctorEducation'] = $this->DoctorListModel->checkDoctorEducation($doctorId);
        $data['educationData'] = $this->DoctorListModel->getAllDoctorEducation();
        $data['educationGradeData'] = $this->DoctorListModel->selectDoctorEducationGradeList();
        $data['educationInstituteData'] = $this->DoctorListModel->selectDoctorEducationInstituteList();
        $data['allDoctor'] = $this->DoctorListModel->getAllDoctor();
        $doctorDeleteFrom = $this->load->view('doctor/doctor_delete', $data, TRUE);
        echo $doctorDeleteFrom;
    }
    
    public function getClinicDataDelete() {
        $clinicId =  $this->input->get("clinicId", TRUE);
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
    
    public function updateDoctorEducation() {
        $updateDoctorEducationSave = array(
            'EducationId' => $this->input->post('EducationId'),
            'EducationName' => $this->input->post('EducationName'),
            'EducationShortName' => $this->input->post('EducationShortName'),
            'EducationWeight' => $this->input->post('EducationWeight'),
            'EditedBy' => $this->session->userdata()['UserId']
        );
        $data = array();
        $data['header'] = "Doctor List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->updateDoctorEducation($updateDoctorEducationSave);
        $result = $this->DoctorListModel->updateDoctorEducation($updateDoctorEducationSave);
        //$this->load->view('doctor/doctorEducationList', $data);
        $notice = array();
         if ($result) {
             $notice = array(
                 'type' => 1,
                 'message' => 'Education Updated Successfully'
             );
         } else {
             $notice = array(
                 'type' => 0,
                 'message' => 'Error Has Occurred, Please Insert Right Info'
             );
         }
         $this->session->set_userdata('notifyuser', $notice);
         redirect('DocList/showDoctorEducation');
    }
    
    public function updateDoctorEducationGrade() {
        $updateDoctorEducationGradeSave = array(
            'EducationGradeId' => $this->input->post('EducationGradeId'),
            'EducationMaxGrade' => $this->input->post('EducationMaxGrade'),
            'EducationMinGrade' => $this->input->post('EducationMinGrade'),
            'EducationShortName' => $this->input->post('EducationShortName'),
            'EditedBy' => $this->session->userdata()['UserId']
        );
        $data = array();
        $data['header'] = "Doctor Education Grade List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->updateDoctorEducationGrade($updateDoctorEducationGradeSave);
        $result = $this->DoctorListModel->updateDoctorEducationGrade($updateDoctorEducationGradeSave);
        //$this->load->view('doctor/doctorEducationList', $data);
        $notice = array();
         if ($result) {
             $notice = array(
                 'type' => 1,
                 'message' => 'Education Grade Updated Successfully'
             );
         } else {
             $notice = array(
                 'type' => 0,
                 'message' => 'Error Has Occurred, Please Insert Right Info'
             );
         }
         $this->session->set_userdata('notifyuser', $notice);
         redirect('DocList/doctorEducationGradeList');
    }
    
    public function updateDoctorEducationInstitute() {
        $updateDoctorEducationInstituteSave = array(
            'EducationInstituteId' => $this->input->post('EducationInstituteId'),
            'EducationInstituteName' => $this->input->post('EducationInstituteName'),
            'EducationInstituteAddress' => $this->input->post('EducationInstituteAddress'),
            'EducationInstituteContactNo' => $this->input->post('EducationInstituteContactNo'),
            'EducationInstituteEmail' => $this->input->post('EducationInstituteEmail'),
            'EditedBy' => $this->session->userdata()['UserId']
        );
        $data = array();
        $data['header'] = "Doctor Education Grade List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->updateDoctorEducationInstitute($updateDoctorEducationInstituteSave);
        $result = $this->DoctorListModel->updateDoctorEducationInstitute($updateDoctorEducationInstituteSave);
        //$this->load->view('doctor/doctorEducationList', $data);
        $notice = array();
         if ($result) {
             $notice = array(
                 'type' => 1,
                 'message' => 'Education Institute Updated Successfully'
             );
         } else {
             $notice = array(
                 'type' => 0,
                 'message' => 'Error Has Occurred, Please Insert Right Info'
             );
         }
         $this->session->set_userdata('notifyuser', $notice);
         redirect('DocList/doctorEducationInstituteList');
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
    
    public function doctorEducationInfo(){ 
       $typedata = array(
            'EducationName' => $this->input->post('EducationName', TRUE),
            'EducationShortName' => $this->input->post('EducationShortName', TRUE),
            'EducationWeight' =>  $this->input->post('EducationWeight', TRUE),
            'EntryBy' => $this->session->userdata()['UserId'],
            'EditedBy' => '0'
        );
        $result = $this->DoctorListModel->saveDoctorEducation($typedata);
        $notice = array();
         if ($result) {
             $notice = array(
                 'type' => 1,
                 'message' => 'Education Insertion Success'
             );
         } else {
             $notice = array(
                 'type' => 0,
                 'message' => 'Error Has Occurred, Please Insert Right Info'
             );
         }
         $this->session->set_userdata('notifyuser', $notice);
         redirect('DocList/doctorEducation');
    }
    
    public function checkClinicType(){
        $checkClinicType = $this->input->get("regisId");
        $checkClinicType = $this->DoctorListModel->checkClinicType2($checkClinicType);
        if (sizeof($checkClinicType) > 0) {
            echo 0;
        } else {
            echo 1;
        }
    }
    
    public function showDoctorEducation(){
        $data['header'] = "Doctor Education List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->selectDoctorEducationList();
        $this->load->view('doctor/doctorEducationList', $data);
    }
    
    public function doctorEducationList(){
        $data['header'] = "Doctor Education List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->selectDoctorEducationList();
        $result = $this->DoctorListModel->selectDoctorEducationList();
        redirect('DocList/showDoctorEducation');
    }
    
    public function doctorEducationGrade(){
        $data['header'] = "Doctor Education Grade";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        
        $this->load->view('doctor/doctorEducationGrade',$data);
    }
    
    public function doctorGrade(){
        $typedata = array(
            'EducationMaxGrade' => $this->input->post('EducationMaxGrade', TRUE),
            'EducationMinGrade' => $this->input->post('EducationMinGrade', TRUE),
            'EducationShortName' =>  $this->input->post('EducationShortName', TRUE),
            'EntryBy' => $this->session->userdata()['UserId'],
            'EditedBy' => '0'
        );
        
        $result = $this->DoctorListModel->saveDoctorEducationGrade($typedata);
        
        $notice = array();
         if ($result) {
             $notice = array(
                 'type' => 1,
                 'message' => 'Education Grade Insertion Success'
             );
         } else {
             $notice = array(
                 'type' => 0,
                 'message' => 'Error Has Occurred, Please Insert Right Info'
             );
         }
         $this->session->set_userdata('notifyuser', $notice);
         redirect('DocList/doctorEducationGrade');
    }
    
    public function doctorEducationInstitute(){
        $data['header'] = "Doctor Education Institute";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        
        $this->load->view('doctor/doctorEducationInstitute',$data);
    }
    
    public function doctorInstitute(){
        $typedata = array(
            'EducationInstituteName' => $this->input->post('EducationInstituteName', TRUE),
            'EducationInstituteAddress' => $this->input->post('EducationInstituteAddress', TRUE),
            'EducationInstituteContactNo' =>  $this->input->post('EducationInstituteContactNo', TRUE),
            'EducationInstituteEmail' =>  $this->input->post('EducationInstituteEmail', TRUE),
            'EntryBy' => $this->session->userdata()['UserId'],
            'EditedBy' => '0'
        );
        
        $result = $this->DoctorListModel->saveDoctorEducationInstitute($typedata);
        
        $notice = array();
         if ($result) {
             $notice = array(
                 'type' => 1,
                 'message' => 'Education Institute Insertion Success'
             );
         } else {
             $notice = array(
                 'type' => 0,
                 'message' => 'Error Has Occurred, Please Insert Right Info'
             );
         }
         $this->session->set_userdata('notifyuser', $notice);
         redirect('DocList/doctorEducationInstitute');
    }
    
    public function doctorEducationGradeList(){
        $data['header'] = "Doctor Education Grade List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->selectDoctorEducationGradeList();
        $this->load->view('doctor/doctorEducationGradeList',$data);
    }
    
    public function doctorEducationInstituteList(){
        $data['header'] = "Doctor Education Institute List";
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['listView'] = $this->DoctorListModel->selectDoctorEducationInstituteList();
        $this->load->view('doctor/doctorEducationInstituteList',$data);
    }
    
    public function enterDoctorEducation(){
        $typedata = array(
            'DoctorId' => $this->input->post('DoctorId', TRUE),
            'EducationId' => $this->input->post('EducationId', TRUE),
            'EducationGradeId' =>  $this->input->post('EducationGradeId', TRUE),
            'EducationInstituteId' =>  $this->input->post('EducationInstituteId', TRUE),
            'PassingYear' => $this->input->post('PassingYear',TRUE),
            'Campus' => $this->input->post('Campus',TRUE),
            'DoctorGrade' => $this->input->post('DoctorGrade',TRUE),
            'EntryBy' => $this->session->userdata()['UserId'],
            'EditedBy' => '0'
        );
        
        
        
        $result = $this->DoctorListModel->saveDoctorEducationData($typedata);
        
        $notice = array();
         if ($result) {
             $notice = array(
                 'type' => 1,
                 'message' => 'Doctor Education Insertion Success'
             );
         } else {
             $notice = array(
                 'type' => 0,
                 'message' => 'Error Has Occurred, Please Insert Right Info'
             );
         }
         $this->session->set_userdata('notifyuser', $notice);
         redirect('DocList/doctorList');
    }

}
