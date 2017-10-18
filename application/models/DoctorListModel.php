<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DoctorListModel extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function selectDoctorList() {

        $sql = "Select * FROM doctor";

        $query = $this->db->query($sql);

        $result = $query->result_array();

        $nsize = sizeof($result);
        $result['size'] = $nsize;
        $result['editCheck'] = 0;


        return $result;
    }
    
    public function selectDoctorWithId($doctorId) {
        $sql = "Select * FROM doctor where DoctorId='$doctorId'";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function selectDoctorEducationList() {

        $sql = "Select * FROM education";

        $query = $this->db->query($sql);

        $result = $query->result_array();

        $nsize = sizeof($result);
        $result['size'] = $nsize;
        $result['editCheck'] = 0;
        return $result;
    }
    
    public function selectDoctorEducationGradeList(){
        
        $sql = "Select * FROM educationgrade";

        $query = $this->db->query($sql);

        $result = $query->result_array();

        $nsize = sizeof($result);
        $result['size'] = $nsize;
        $result['editCheck'] = 0;
        return $result;
    }
    
    public function selectDoctorEducationInstituteList(){
        
        $sql = "Select * FROM educationinstitute";

        $query = $this->db->query($sql);

        $result = $query->result_array();

        $nsize = sizeof($result);
        //$result['size'] = $nsize;
        //$result['editCheck'] = 0;
        return $result;
    }

    public function selectClinicTypeList() {

        $sql = "Select * FROM clinictype";

        $query = $this->db->query($sql);

        $result = $query->result_array();

        $nsize = sizeof($result);
        $result['size'] = $nsize;
        $result['editCheck'] = 0;

        return $result;
    }

    public function selectClinicList() {

        $sql = "Select * FROM clinic";

        $query = $this->db->query($sql);

        $result = $query->result_array();

        $nsize = sizeof($result);
        $result['size'] = $nsize;
        $result['editCheck'] = 0;


        return $result;
    }

    public function checkDoctorId($doctorId) {

        $sql = "SELECT * FROM doctor where DoctorId = '$doctorId';";
        $query = $this->db->query($sql);

        $result = $query->result_array();



        return $result;
    }
    
    public function checkDoctorGradeId($doctorId) {
        $sql = "SELECT * FROM educationgrade where EducationGradeId = '$doctorId';";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function checkDoctorEducationId($EducationId) {
        $sql = "SELECT * FROM education where EducationId = '$EducationId';";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
    
    public function checkDoctorEducationDetails($DoctorId) {
        $sql = "SELECT * FROM doctoreducation where DoctorId = '$DoctorId';";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
    
    public function checkDoctorInstituteId($EducationId) {
        $sql = "SELECT * FROM educationinstitute where EducationInstituteId = '$EducationId';";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function checkClinicId2($doctorId) {

        $sql = "SELECT * FROM clinic where ClinicId = '$doctorId';";
        $query = $this->db->query($sql);

        $result = $query->result_array();



        return $result;
    }

    public function checkClinicTypeId2($clinictypeId) {
        $sql = "SELECT * FROM clinictype where ClinicTypeId = '$clinictypeId';";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function checkClinicId($clinicId) {

        $sql = "SELECT * FROM clinic where ClinicId = '$clinicId';";
        $query = $this->db->query($sql);

        $result = $query->result_array();



        return $result;
    }

    public function checkDoctorRegistration($doctorRegId) {

        $sql = "SELECT * FROM doctor where DoctorRegistrationNo = '$doctorRegId';";
        $query = $this->db->query($sql);

        $result = $query->result_array();

        return $result;
    }
    
    public function checkDoctorInstitute($doctorRegId) {

        $sql = "SELECT * FROM educationinstitute where EducationInstituteName LIKE '%$doctorRegId%';";
        $query = $this->db->query($sql);

        $result = $query->result_array();

        return $result;
    }

    public function checkClinicRegistration($clinicRegId) {

        $sql = "SELECT * FROM clinic where ClinicRegistrationNo = '$clinicRegId';";
        $query = $this->db->query($sql);

        $result = $query->result_array();

        return $result;
    }

    public function checkClinicType2($clinicRegId) {

        $sql = "SELECT * FROM clinictype where ClinicType = '$clinicRegId';";
        $query = $this->db->query($sql);

        $result = $query->result_array();

        return $result;
    }

    public function checkDoctorContactNo($doctorContactNo) {
        $sql = "SELECT * FROM doctor where DoctorContactNo = '$doctorContactNo';";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function getAllDoctor() {
        $sql = "select  DoctorId, DoctorName,DoctorRegistrationNo ,DoctorAddress,DoctorContactNo, DoctorEmailAddress, EntryBy from doctor";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function getAllDoctorEducation() {
        $sql = "select * from education";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function getAllClinic() {
        $sql = "select  ClinicId, ClinicName, ClinicRegistrationNo ,ClinicAddress,ClinicContactNumber, ClinicEmailAddress, EntryBy from clinic";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function getAllClinicType() {
        $sql = "select  ClinicTypeId, ClinicType, EntryBy, EntryDate from clinictype";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function insertDoctor($data) {
        $DoctorName = $data['DoctorName'];
        $DoctorAddress = $data['DoctorAddress'];
        $DoctorEmailAddress = $data['DoctorEmailAddress'];
        $DoctorRegistrationNo = $data['DoctorRegistrationNo'];
        $DoctorContactNo = $data['DoctorContactNo'];
        $EntryBy = $data['EntryBy'];
        $EditedBy = null;
        $EditedDate = null;
        $sql = "INSERT into doctor (DoctorName,DoctorRegistrationNo,DoctorAddress,DoctorContactNo,DoctorEmailAddress,EntryBy,EditedBy,EditedDate) values('$DoctorName','$DoctorRegistrationNo','$DoctorAddress','$DoctorContactNo','$DoctorEmailAddress','$EntryBy','$EditedBy','$EditedDate')";
        $query = $this->db->query($sql);
        $ndata = $this->DoctorListModel->getAllDoctor();
        $nsize = sizeof($ndata);
        $ndata['size'] = $nsize;
        $ndata['editCheck'] = 2;
        return $ndata;
    }

    public function updateDoctor($data) {
        $DoctorId = $data['DoctorId'];
        $DoctorName = $data['DoctorName'];
        $DoctorAddress = $data['DoctorAddress'];
        $DoctorEmailAddress = $data['DoctorEmailAddress'];
        $DoctorRegistrationNo = $data['DoctorRegistrationNo'];
        $DoctorContactNo = $data['DoctorContactNo'];
        $EntryBy = $data['EntryBy'];
        $EditedBy = $data['EditedBy'];
        $sql = "UPDATE doctor SET DoctorName='$DoctorName',DoctorRegistrationNo='$DoctorRegistrationNo',DoctorAddress='$DoctorAddress',DoctorContactNo='$DoctorContactNo',DoctorEmailAddress='$DoctorEmailAddress',EntryBy='$EntryBy',EditedBy='$EditedBy' where DoctorId='$DoctorId'";
        $query = $this->db->query($sql);
        $ndata = $this->DoctorListModel->getAllDoctor();
        $nsize = sizeof($ndata);
        $ndata['size'] = $nsize;
        $ndata['editCheck'] = 1;
        return $ndata;
    }

    public function updateDoctorEducation($data) {
        $EducationId = $data['EducationId'];
        $EducationName = $data['EducationName'];
        $EducationShortName = $data['EducationShortName'];
        $EducationWeight = $data['EducationWeight'];
        $EditedBy = $data['EditedBy'];
        $sql = "UPDATE education SET EducationName='$EducationName',EducationShortName='$EducationShortName',EducationWeight='$EducationWeight',EditedBy='$EditedBy' where EducationId='$EducationId'";
        $query = $this->db->query($sql);
        $ndata = $this->DoctorListModel->getAllDoctorEducation();
        $nsize = sizeof($ndata);
        $ndata['size'] = $nsize;
        $ndata['editCheck'] = 1;
        return $ndata;
    }
    
    public function updateDoctorEducationGrade($data) {
        $EducationGradeId = $data['EducationGradeId'];
        $EducationMaxGrade = $data['EducationMaxGrade'];
        $EducationMinGrade = $data['EducationMinGrade'];
        $EducationShortName = $data['EducationShortName'];
        $EditedBy = $data['EditedBy'];
        $sql = "UPDATE educationgrade SET EducationMaxGrade='$EducationMaxGrade',EducationMinGrade='$EducationMinGrade',EducationShortName='$EducationShortName',EditedBy='$EditedBy' where EducationGradeId='$EducationGradeId'";
        $query = $this->db->query($sql);
        $ndata = $this->DoctorListModel->selectDoctorEducationGradeList();
        $nsize = sizeof($ndata);
        $ndata['size'] = $nsize;
        $ndata['editCheck'] = 1;
        return $ndata;
    }
    
    public function updateDoctorEducationInstitute($data) {
        $EducationInstituteId = $data['EducationInstituteId'];
        $EducationInstituteName = $data['EducationInstituteName'];
        $EducationInstituteAddress = $data['EducationInstituteAddress'];
        $EducationInstituteContactNo = $data['EducationInstituteContactNo'];
        $EducationInstituteEmail = $data['EducationInstituteEmail'];
        $EditedBy = $data['EditedBy'];
        $sql = "UPDATE educationinstitute SET EducationInstituteName='$EducationInstituteName',EducationInstituteAddress='$EducationInstituteAddress',EducationInstituteContactNo='$EducationInstituteContactNo',EditedBy='$EditedBy' where EducationInstituteId='$EducationInstituteId'";
        $query = $this->db->query($sql);
        $ndata = $this->DoctorListModel->selectDoctorEducationInstituteList();
        $nsize = sizeof($ndata);
        $ndata['size'] = $nsize;
        $ndata['editCheck'] = 1;
        return $ndata;
    }

    public function updateClinic($data) {
        $ClinicId = $data['ClinicId'];
        $ClinicName = $data['ClinicName'];
        $ClinicRegistrationNo = $data['ClinicRegistrationNo'];
        $ClinicAddress = $data['ClinicAddress'];
        $ClinicEmailAddress = $data['ClinicEmailAddress'];
        $ClinicContactNumber = $data['ClinicContactNumber'];
        $EntryBy = $data['EntryBy'];
        $EditedBy = $data['EditedBy'];
        $sql = "UPDATE clinic SET ClinicName='$ClinicName',ClinicRegistrationNo='$ClinicRegistrationNo',ClinicAddress='$ClinicAddress',ClinicContactNumber='$ClinicContactNumber',ClinicEmailAddress='$ClinicEmailAddress',EntryBy='$EntryBy',EditedBy='$EditedBy' where ClinicId='$ClinicId'";
        $query = $this->db->query($sql);

        $ndata = $this->DoctorListModel->getAllClinic();

        $nsize = sizeof($ndata);

        $ndata['size'] = $nsize;
        $ndata['editCheck'] = 1;
        return $ndata;
    }

    public function updateClinicType($data) {
        $ClinicTypeId = $data['ClinicTypeId'];
        $ClinicType = $data['ClinicType'];

        $EditedBy = $data['EditedBy'];
        $sql = "UPDATE clinictype SET ClinicType='$ClinicType',EditedBy='$EditedBy' where ClinicTypeId='$ClinicTypeId'";
        $query = $this->db->query($sql);

        $ndata = $this->DoctorListModel->getAllClinicType();

        $nsize = sizeof($ndata);

        $ndata['size'] = $nsize;
        $ndata['editCheck'] = 1;
        return $ndata;
    }

    public function deleteDoctor($data) {
        $DoctorId = $data['DoctorId'];
        $sql = "Delete FROM doctor where DoctorId='$DoctorId'";
        $query = $this->db->query($sql);

        $ndata = $this->DoctorListModel->getAllDoctor();
        $nsize = sizeof($ndata);

        $ndata['size'] = $nsize;
        $ndata['editCheck'] = 3;
        return $ndata;
    }

    public function deleteClinic($data) {
        $ClinicId = $data['ClinicId'];
        $sql = "Delete FROM clinic where ClinicId='$ClinicId'";
        $query = $this->db->query($sql);

        $ndata = $this->DoctorListModel->getAllClinic();
        $nsize = sizeof($ndata);

        $ndata['size'] = $nsize;
        $ndata['editCheck'] = 3;
        return $ndata;
    }

    public function insertClinic($data) {


        if ($this->db->insert('clinic', $data)) {


            $ndata = $this->DoctorListModel->getAllClinic();
            $nsize = sizeof($ndata);
            $ndata['size'] = $nsize;
            $ndata['editCheck'] = 4;
            return $ndata;
            
        } else {
            return false;
        }
    }

    public function saveClinicType($data) {
        if ($this->db->insert('clinictype', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function saveDoctorEducation($data) {
        if ($this->db->insert('education', $data)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function saveDoctorEducationData($data) {
        if ($this->db->insert('doctoreducation', $data)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function saveDoctorEducationGrade($data) {
        if ($this->db->insert('educationgrade', $data)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function saveDoctorEducationInstitute($data) {
        if ($this->db->insert('educationinstitute', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function checkClinicType($clinicType) {
        $sql = "SELECT * FROM clinictype where ClinicType = '$clinicType';";
        $query = $this->db->query($sql);

        $result = $query->result_array();

        return $result;
    }
    
    

}
