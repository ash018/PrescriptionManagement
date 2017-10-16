<?php
class DrugManagement extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DrugManagementModel');
    }
    public function index() {
       
    }
    
    public function drugTypelist() {
        $data['header'] = 'Drug Type List';
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['allDrugType'] = $this->DrugManagementModel->getAllDrugType();
        $this->load->view('drug_management/drug_type/drug_type_list', $data);
    }
    
    public function drugTypeCreate(){
        $data['header'] = 'Create Drug Type';
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['allDrugType'] = $this->DrugManagementModel->getAllDrugType();
        $this->load->view('drug_management/drug_type/drug_type_create', $data);
        
    }
    
    public function checkDrugTypeName(){
        $checkDtypeName = $this->input->get("drugTypeName");
        $dTypename = $this->DrugManagementModel->checkDtypeName($checkDtypeName);
        if (sizeof($dTypename) > 0) {
            echo 0;
        } else {
            echo 1;
        }
    }
    
    public function drugTypeSave(){
        $drugTypeName = $this->input->post('DrugTypeName', TRUE);
        $drugTypeIsActive = $this->input->post('DrugTypeIsActive', TRUE);
        $entryBy = $this->session->userdata()['UserId'];

        $data = array(
            'DrugTypeName' => $drugTypeName,
            'DrugTypeIsActive' => $drugTypeIsActive,
            'EntryBy' => $entryBy,
            'EditedBy' => '0'
        );
        
        $result = $this->DrugManagementModel->saveDtype($data);
        $notice = array();
        if ($result) {
            $notice = array(
                'type' => 1,
                'message' => 'Drug Type Creation Success'
            );
        } else {
            $notice = array(
                'type' => 0,
                'message' => 'Drug Type Creation Fail, Please Give All Informatoin'
            );
        }
        $this->session->set_userdata('notifyuser', $notice);

        redirect('DrugManagement/drugTypeCreate');
    }
    
    public function drugTypeEdit(){
        $dTypeId = $this->input->get("dTypeId", TRUE);
        $data['dType'] = $this->DrugManagementModel->getDrugTypeData($dTypeId);
       
        $dTypeEditFrom = $this->load->view('drug_management/drug_type/drug_type_edit', $data, TRUE);

        echo $dTypeEditFrom;
    }
    
    public function drugTypeUpdate(){
        $dTypeId = $this->input->post('DrugTypeId', TRUE);
        $drugTypeName = $this->input->post('DrugTypeName', TRUE);
        $drugTypeIsActive = $this->input->post('DrugTypeIsActive', TRUE);
        $editedBy = $this->session->userdata()['UserId'];

        $data = array(
            'DrugTypeName' => $drugTypeName,
            'DrugTypeIsActive' => $drugTypeIsActive,
            'EditedBy' => $editedBy,
            'EditedDate' => date('Y-m-d H:i:s')
        );
        
        $result = $this->DrugManagementModel->updateDtype($data,$dTypeId);
        $notice = array();
        if ($result) {
            $notice = array(
                'type' => 1,
                'message' => 'Update Drug Type Success'
            );
        } else {
            $notice = array(
                'type' => 0,
                'message' => 'Drug Type Update Fail, Please Give All Informatoin'
            );
        }
        $this->session->set_userdata('notifyuser', $notice);
        redirect('DrugManagement/drugTypelist');
    }

    public function drugCategoryList(){
        $data['header'] = 'Drug Type List';
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['allDrugCategory'] = $this->DrugManagementModel->getAllDrugCategory();
        $this->load->view('drug_management/drug_category/drug_category_list', $data);
        
    }
    
    public function drugCategoryCreate(){
        $data['header'] = 'Create Drug Category';
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $this->load->view('drug_management/drug_category/drug_category_create', $data);
    }
    
    public function checkDrugCategoryName(){
        $checkDcategoryName = $this->input->get("drugCategoryName");
        $dCategoryName = $this->DrugManagementModel->checkDcategoryName($checkDcategoryName);
        if (sizeof($dCategoryName) > 0) {
            echo 0;
        } else {
            echo 1;
        }
    }
    
    public function drugCategorySave(){
        $drugCategoryName = $this->input->post('DrugCategoryName', TRUE);
        $drugCategoryIsActive = $this->input->post('DrugCategoryIsActive', TRUE);
        $entryBy = $this->session->userdata()['UserId'];

        $data = array(
            'DrugCategoryName' => $drugCategoryName,
            'DrugCategoryIsActive' => $drugCategoryIsActive,
            'EntryBy' => $entryBy,
            'EditedBy' => '0'
        );
        
        $result = $this->DrugManagementModel->saveDcategory($data);
        $notice = array();
        if ($result) {
            $notice = array(
                'type' => 1,
                'message' => 'Drug Category Creation Success'
            );
        } else {
            $notice = array(
                'type' => 0,
                'message' => 'Drug Category Creation Fail, Please Give All Informatoin'
            );
        }
        $this->session->set_userdata('notifyuser', $notice);

        redirect('DrugManagement/drugCategoryCreate');
    }
    
    public function drugCategoryEdit(){
        $dCategoryId = $this->input->get("dCategoryId", TRUE);
        $data['dCategory'] = $this->DrugManagementModel->getDrugCategoryData($dCategoryId);
       
        $dCategoryEditFrom = $this->load->view('drug_management/drug_category/drug_category_edit', $data, TRUE);

        echo $dCategoryEditFrom;
    }
    
    public function drugCategoryUpdate(){
        $dTypeId = $this->input->post('DrugCategoryId', TRUE);
        $drugTypeName = $this->input->post('DrugCategoryName', TRUE);
        $drugTypeIsActive = $this->input->post('DrugCategoryIsActive', TRUE);
        $editedBy = $this->session->userdata()['UserId'];

        $data = array(
            'DrugCategoryName' => $drugTypeName,
            'DrugCategoryIsActive' => $drugTypeIsActive,
            'EditedBy' => $editedBy,
            'EditedDate' => date('Y-m-d H:i:s')
        );
        
        $result = $this->DrugManagementModel->updateDcategory($data,$dTypeId);
        $notice = array();
        if ($result) {
            $notice = array(
                'type' => 1,
                'message' => 'Update Drug Category Success'
            );
        } else {
            $notice = array(
                'type' => 0,
                'message' => 'Drug Category Update Fail, Please Give All Informatoin'
            );
        }
        $this->session->set_userdata('notifyuser', $notice);
        redirect('DrugManagement/drugCategorylist');
    }
    
    public function drugStrengthList(){
        $data['header'] = 'Drug Strength List';
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['allDrugStrength'] = $this->DrugManagementModel->getAllDrugStrength();
        $this->load->view('drug_management/drug_strength/drug_strength_list', $data);
    }
    
    public function drugStrengthCreate(){
        $data['header'] = 'Create Drug Strength';
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        //$data['allDrugStrength'] = $this->DrugManagementModel->getAllDrugStrength();
        $this->load->view('drug_management/drug_strength/drug_strength_create', $data);
    }
    
    public function checkDrugStrengthName(){
        $drugStrengthName = $this->input->get("drugStrengthName",TRUE);
        $dCategoryName = $this->DrugManagementModel->checkDstrengthName($drugStrengthName);
        if (sizeof($dCategoryName) > 0) {
            echo 0;
        } else {
            echo 1;
        }
    }
    
    public function drugStrengthSave(){
        $drugStrengthName = $this->input->post('DrugStrengthUnitName', TRUE);
        $drugStrengthCode = $this->input->post('DrugStrengthUnitCode', TRUE);
        $drugStrengthIsActive = $this->input->post('DrugStrengthUnitIsActive', TRUE);
        $entryBy = $this->session->userdata()['UserId'];
        
        $data = array(
            'DrugStrengthUnitName' => $drugStrengthName,
            'DrugStrengthUnitCode' => $drugStrengthCode,
            'DrugStrengthUnitIsActive' => $drugStrengthIsActive,
            'EntryBy' => $entryBy,
            'EditedBy' => '0'
        );
        
        $result = $this->DrugManagementModel->saveDstrengrh($data);
        $notice = array();
        if ($result) {
            $notice = array(
                'type' => 1,
                'message' => 'Drug Strength Creation Success'
            );
        } else {
            $notice = array(
                'type' => 0,
                'message' => 'Drug Strength Creation Fail, Please Give All Informatoin'
            );
        }
        $this->session->set_userdata('notifyuser', $notice);
        redirect('DrugManagement/drugStrengthCreate');
    }
    
    public function drugStrengthEdit(){
        $dStrengthId = $this->input->get("dStrengthId", TRUE);
        $data['dStrength'] = $this->DrugManagementModel->getDrugStrengthData($dStrengthId);
       
        $dCategoryEditFrom = $this->load->view('drug_management/drug_strength/drug_strength_edit', $data, TRUE);

        echo $dCategoryEditFrom;
    }
    
    public function drugStrengthUpdate(){
        $dTypeId = $this->input->post('DrugStrengthUnitId', TRUE);
        $drugTypeName = $this->input->post('DrugStrengthUnitName', TRUE);
        $drugTypeCode = $this->input->post('DrugStrengthUnitCode', TRUE);
        $drugTypeIsActive = $this->input->post('DrugStrengthUnitIsActive', TRUE);
        $editedBy = $this->session->userdata()['UserId'];
        
        $data = array(
            'DrugStrengthUnitName' => $drugTypeName,
            'DrugStrengthUnitCode' => $drugTypeCode,
            'DrugStrengthUnitIsActive' => $drugTypeIsActive,
            'EditedBy' => $editedBy,
            'EditedDate' => date('Y-m-d H:i:s')
        );
        
        $result = $this->DrugManagementModel->updateDstrengrh($data,$dTypeId);
        $notice = array();
        if ($result) {
            $notice = array(
                'type' => 1,
                'message' => 'Update Strength Success'
            );
        } else {
            $notice = array(
                'type' => 0,
                'message' => 'Strength Update Fail, Please Give All Informatoin'
            );
        }
        $this->session->set_userdata('notifyuser', $notice);
        redirect('DrugManagement/drugStrengthlist');
    }
    
    public function drugFromList(){
        $data['header'] = 'Country List';
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['allCountry'] = $this->DrugManagementModel->getAllCountry();
        $this->load->view('drug_management/drug_country/drug_country_list', $data); 
    }
    
    public function drugFromCreate(){
        $data['header'] = 'New Country';
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $this->load->view('drug_management/drug_country/drug_country_create', $data); 
        
    }
    
    public function drugFromSave(){
        $drugStrengthName = $this->input->post('DrugFormName', TRUE);
        $drugStrengthIsActive = $this->input->post('DrugFormIsActive', TRUE);
        $entryBy = $this->session->userdata()['UserId'];
        
        $data = array(
            'DrugFormName' => $drugStrengthName,
            'DrugFormIsActive' => $drugStrengthIsActive,
            'EntryBy' => $entryBy,
            'EditedBy' => '0'
        );
        
        $result = $this->DrugManagementModel->saveCountry($data);
        $notice = array();
        if ($result) {
            $notice = array(
                'type' => 1,
                'message' => 'Country Creation Success'
            );
        } else {
            $notice = array(
                'type' => 0,
                'message' => 'Country Creation Fail, Please Give All Informatoin'
            );
        }
        $this->session->set_userdata('notifyuser', $notice);
        redirect('DrugManagement/drugFromCreate');
    }
    
    public function drugFromCheck(){
        $dCountryName = $this->input->get('dCountryName',TRUE);
        $coun = $this->DrugManagementModel->checkCountryName($dCountryName);
        if (sizeof($coun) > 0) {
            echo 0;
        } else {
            echo 1;
        }
    }
    
    public function drugFromEdit(){
        $dStrengthId = $this->input->get("dCountryId", TRUE);
        $data['dCountry'] = $this->DrugManagementModel->getCountryData($dStrengthId);
        $dCategoryEditFrom = $this->load->view('drug_management/drug_country/drug_country_edit', $data, TRUE);

        echo $dCategoryEditFrom;
    }
    
    public function drugFromUpdate(){
        $dTypeId = $this->input->post('DrugFormId', TRUE);
        $drugStrengthName = $this->input->post('DrugFormName', TRUE);
        $drugStrengthIsActive = $this->input->post('DrugFormIsActive', TRUE);
        $editedBy = $this->session->userdata()['UserId'];
        
        $data = array(
            'DrugFormName' => $drugStrengthName,
            'DrugFormIsActive' => $drugStrengthIsActive,
            'EditedBy' => $editedBy,
            'EditedDate' => date('Y-m-d H:i:s')
        );
        
        $result = $this->DrugManagementModel->updateCountry($data,$dTypeId);
        $notice = array();
        if ($result) {
            $notice = array(
                'type' => 1,
                'message' => 'Update Country Success'
            );
        } else {
            $notice = array(
                'type' => 0,
                'message' => 'Country Update Fail, Please Give All Informatoin'
            );
        }
        $this->session->set_userdata('notifyuser', $notice);
        redirect('DrugManagement/drugFromList');
    }
    
    public function drugSubCategoryList(){
        $data['header'] = 'Sub Category List';
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['allSubCategory'] = $this->DrugManagementModel->getAllSubCategory();
        $this->load->view('drug_management/sub_category/sub_category_list', $data); 
    }
    
    public function drugSubCategoryCreate(){
        $data['header'] = 'New Sub Category';
        $data['Header'] = $this->load->view('templates/header', $data, TRUE);
        $data['leftMenu'] = $this->load->view('templates/left_menu', '', TRUE);
        $data['footer'] = $this->load->view('templates/footer', '', TRUE);
        $data['allCategory'] = $this->DrugManagementModel->getAllCategory();
        $this->load->view('drug_management/sub_category/sub_category_create', $data); 
    }
    
    public function checkdrugSubCategoryName(){
        $dSubName = $this->input->get('subCategoryName',TRUE);
        $categoryId = $this->input->get('categoryId',TRUE);
        
        $coun = $this->DrugManagementModel->checkDrugSubCategory($dSubName,$categoryId);
        if (sizeof($coun) > 0) {
            echo 0;
        } else {
            echo 1;
        }
    }
    
    public function drugSubCategorySave(){
        $drugStrengthName = $this->input->post('DrugSubcategoryName', TRUE);
        $drugCatId = $this->input->post('DrugCategoryId', TRUE);
        $drugStrengthIsActive = $this->input->post('DrugSubcategoryIsActive', TRUE);
        $entryBy = $this->session->userdata()['UserId'];
        
        $data = array(
            'DrugSubcategoryName' => $drugStrengthName,
            'DrugCategoryId' => $drugCatId,
            'DrugSubcategoryIsActive' => $drugStrengthIsActive,
            'EntryBy' => $entryBy,
            'EditedBy' => '0'
        );
        
        $result = $this->DrugManagementModel->saveSubCategory($data);
        $notice = array();
        if ($result) {
            $notice = array(
                'type' => 1,
                'message' => 'Sub Category Creation Success'
            );
        } else {
            $notice = array(
                'type' => 0,
                'message' => 'Sub Category Creation Fail, Please Give All Informatoin'
            );
        }
        $this->session->set_userdata('notifyuser', $notice);
        redirect('DrugManagement/drugSubCategoryCreate');
    }
    
    public function drugSubCategoryEdit(){
        $subCategoryId = $this->input->get('dSubCatId',TRUE);
        $data['dSubCategory'] = $this->DrugManagementModel->getSubCategoryData($subCategoryId);
        $data['allCategory'] = $this->DrugManagementModel->getAllCategory();
        $dCategoryEditFrom = $this->load->view('drug_management/sub_category/sub_category_edit', $data, TRUE);

        echo $dCategoryEditFrom;
    }
    
    public function drugSubCategoryUpdate(){
        $dTypeId = $this->input->post('DrugSubcategoryId', TRUE);
        $drugStrengthName = $this->input->post('DrugSubcategoryName', TRUE);
        $drugCategoryId = $this->input->post('DrugCategoryId', TRUE);
        $drugStrengthIsActive = $this->input->post('DrugSubcategoryIsActive', TRUE);
        $editedBy = $this->session->userdata()['UserId'];
        
        $data = array(
            'DrugSubcategoryName' => $drugStrengthName,
            'DrugCategoryId' => $drugCategoryId,
            'DrugSubcategoryIsActive' => $drugStrengthIsActive,
            'EditedBy' => $editedBy,
            'EditedDate' => date('Y-m-d H:i:s')
        );
        
        $result = $this->DrugManagementModel->updateSubCategory($data,$dTypeId);
        $notice = array();
        if ($result) {
            $notice = array(
                'type' => 1,
                'message' => 'Update Sub Category Success'
            );
        } else {
            $notice = array(
                'type' => 0,
                'message' => 'Sub Category Update Fail, Please Give All Informatoin'
            );
        }
        $this->session->set_userdata('notifyuser', $notice);
        redirect('DrugManagement/drugSubCategoryList');
    }
 }
?>

