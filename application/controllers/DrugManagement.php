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
                'message' => 'Update Drug Type Success'
            );
        } else {
            $notice = array(
                'type' => 0,
                'message' => 'Drug Type Update Fail, Please Give All Informatoin'
            );
        }
        $this->session->set_userdata('notifyuser', $notice);
        redirect('DrugManagement/drugCategorylist');
    }
    
    public function drugStrengthList(){
        
    }
    
    public function drugStrengthCreate(){
        
    }
    
    public function checkDrugStrengthName(){
        
    }
    
    public function drugStrengthSave(){
        
    }
    
    public function drugStrengthEdit(){
        
    }
    
    public function drugStrengthUpdate(){
        
    }
}
?>

