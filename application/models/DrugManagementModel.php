<?php
class DrugManagementModel extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database('default', true);
    }
    
    public function getAllDrugType(){
        $sql = "SELECT DrugTypeId, DrugTypeName, DrugTypeIsActive, DATE_FORMAT(EntryDate,'%d/%m/%Y') as EntryDate FROM drugtype;" ;
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function checkDtypeName($dTypeName){
        $sql = "SELECT * FROM drugtype where DrugTypeName = '$dTypeName';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
     public function saveDtype($data){
        if($this->db->insert('drugtype',$data)){
            return true;
        }
        else{
            return false; 
        }
    }
    
    public function getDrugTypeData($dTypeId){
        $sql = "SELECT DrugTypeId, DrugTypeName, DrugTypeIsActive FROM drugtype where DrugTypeId = '$dTypeId';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function updateDtype($data,$dTypeId){
        $this->db->where('DrugTypeId', $dTypeId);
        
        if($this->db->update('drugtype', $data)){
            return true; 
        }
        else{
            return false; 
        }
    }
    
    public function getAllDrugCategory(){
        $sql = "SELECT DrugCategoryId, DrugCategoryName, DrugCategoryIsActive, DATE_FORMAT(EntryDate,'%d/%m/%Y') as EntryDate FROM drugcategory;";
        
        $query=$this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
    
    public function checkDcategoryName($drugCategroyName){
        $sql = "SELECT * FROM drugcategory where DrugCategoryName = '$drugCategroyName';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function saveDcategory($data){
        if($this->db->insert('drugcategory',$data)){
            return true;
        }
        else{
            return false; 
        }
    }
    
    public function getDrugCategoryData($dCategoryId){
        $sql = "SELECT DrugCategoryId, DrugCategoryName, DrugCategoryIsActive  FROM drugcategory where DrugCategoryId = '$dCategoryId';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function updateDcategory($data,$dCategoryId){
        $this->db->where('DrugCategoryId', $dCategoryId);
        
        if($this->db->update('drugcategory', $data)){
            return true; 
        }
        else{
            return false; 
        }
    }
}
?>
