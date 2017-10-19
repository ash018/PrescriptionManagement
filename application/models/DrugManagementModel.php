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
    
    public function getAllDrugStrength(){
        $sql = "SELECT DrugStrengthUnitId, DrugStrengthUnitName, DrugStrengthUnitCode, DrugStrengthUnitIsActive,  DATE_FORMAT(EntryDate,'%d/%m/%Y') as EntryDate FROM drugstrengthunit;";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function checkDstrengthName($drugStrengthName){
        $sql = "SELECT * FROM drugstrengthunit where DrugStrengthUnitName = '$drugStrengthName';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function saveDstrengrh($data){
        if($this->db->insert('drugstrengthunit',$data)){
            return true;
        }
        else{
            return false; 
        }
    }
    
    public function getDrugStrengthData($dStrengthId){
        $sql = "SELECT DrugStrengthUnitId, DrugStrengthUnitName, DrugStrengthUnitCode, DrugStrengthUnitIsActive FROM drugstrengthunit where DrugStrengthUnitId = '$dStrengthId';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function updateDstrengrh($data,$dCategoryId){
        $this->db->where('DrugStrengthUnitId', $dCategoryId);
        
        if($this->db->update('drugstrengthunit', $data)){
            return true; 
        }
        else{
            return false; 
        } 
    }
    
    public function getAllCountry(){
        $sql = "SELECT DrugFormId, DrugFormName, DrugFormIsActive,  DATE_FORMAT(EntryDate,'%d/%m/%Y') as EntryDate FROM drugform;";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function checkCountryName($dCountry){
        $sql = "SELECT DrugFormId, DrugFormName, DrugFormIsActive,  DATE_FORMAT(EntryDate,'%d/%m/%Y') as EntryDate FROM drugform where DrugFormName = '$dCountry';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function saveCountry($data){
        if($this->db->insert('drugform',$data)){
            return true;
        }
        else{
            return false; 
        }
    }
    
    public function getCountryData($countryId){
        $sql = "SELECT DrugFormId, DrugFormName, DrugFormIsActive  FROM drugform where DrugFormId = '$countryId';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    public function updateCountry($data,$dCategoryId){
        $this->db->where('DrugFormId', $dCategoryId);
        
        if($this->db->update('drugform', $data)){
            return true; 
        }
        else{
            return false; 
        } 
    }
    
    public function getAllSubCategory(){
        $sql = "SELECT A.DrugSubcategoryId as DrugSubcategoryId, A.DrugSubcategoryName as DrugSubcategoryName, B.DrugCategoryName as DrugCategoryName, A.DrugSubcategoryIsActive as DrugSubcategoryIsActive, DATE_FORMAT(A.EntryDate,'%d/%m/%Y') as EntryDate FROM drugsubcategory as A, drugcategory as B where A.DrugCategoryId = B.DrugCategoryId;";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
        
    }
    
    public function getAllCategory(){
        $sql = "select DrugCategoryId, DrugCategoryName from drugcategory order  by DrugCategoryId asc ;";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function checkDrugSubCategory($subCategoryName,$categoryId){
        $sql = "select * from drugsubcategory where DrugSubcategoryName = '$subCategoryName' and DrugCategoryId = '$categoryId';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function saveSubCategory($data){
        if($this->db->insert('drugsubcategory',$data)){
            return true;
        }
        else{
            return false; 
        }
    }
    
    public function getSubCategoryData($subCategoryId){
        $sql = "select DrugSubcategoryId, DrugSubcategoryName, DrugCategoryId, DrugSubcategoryIsActive from drugsubcategory where DrugSubcategoryId = '$subCategoryId';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function updateSubCategory($data,$dCategoryId){
        $this->db->where('DrugSubcategoryId', $dCategoryId);
        if($this->db->update('drugsubcategory', $data)){
            return true; 
        }
        else{
            return false; 
        }
    }
    
    public function getAllManufacturer(){
        $sql = "SELECT ManufacturerId, ManufacturerName, ManufacturerPhone, ManufacturerEmail, ManufacturerWebsite, ManufacturerIsActive, DATE_FORMAT(EntryDate,'%d/%m/%Y') as EntryDate FROM manufacturer;";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function checkManufacturerName($manufacturerName){
        $sql = "SELECT ManufacturerId, ManufacturerName, ManufacturerPhone, ManufacturerEmail, ManufacturerWebsite, ManufacturerIsActive FROM manufacturer where ManufacturerName = '$manufacturerName';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function saveManufacturer($data){
        if($this->db->insert('manufacturer',$data)){
            return true;
        }
        else{
            return false; 
        }
    }
    
    public function getManufacturerIdData($manufacturerId){
        $sql = "SELECT ManufacturerId, ManufacturerName, ManufacturerPhone, ManufacturerEmail, ManufacturerWebsite, ManufacturerAddress, ManufacturerIsActive FROM manufacturer where ManufacturerId = '$manufacturerId';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function updateManufacturer($data,$dCategoryId){
        $this->db->where('ManufacturerId', $dCategoryId);
        if($this->db->update('manufacturer', $data)){
            return true; 
        }
        else{
            return false; 
        }
    }
    
    public function getAllDrugAppliactionMethod(){
        $sql = "SELECT DrugApplicationMethodId,DrugApplicationMethodName,DrugApplicationMethodIsActive, DATE_FORMAT(EntryDate,'%d/%m/%Y') as EntryDate FROM drugapplicationmethod;";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function checkDrugApplicationMethod($dAppName){
        $sql = "SELECT DrugApplicationMethodId,DrugApplicationMethodName,DrugApplicationMethodIsActive FROM drugapplicationmethod where DrugApplicationMethodName = '$dAppName';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function saveDrugAppMethod($data){
        if($this->db->insert('drugapplicationmethod',$data)){
            return true;
        }
        else{
            return false; 
        }
    }
    
    public function getDrugAppMethodData($dAppMethodId){
        $sql = "SELECT DrugApplicationMethodId,DrugApplicationMethodName,DrugApplicationMethodIsActive FROM drugapplicationmethod where DrugApplicationMethodId = '$dAppMethodId';";
        
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function updateDrugAppMethod($data,$dCategoryId){
        $this->db->where('DrugApplicationMethodId', $dCategoryId);
        if($this->db->update('drugapplicationmethod', $data)){
            return true; 
        }
        else{
            return false; 
        }
    }
    
    public function getAllDrug(){
        $sql = "SELECT A.DrugId as DrugId, A.DrugName as DrugName, A.DrugIsActive as DrugIsActive,  DATE_FORMAT(A.EntryDate,'%d/%m/%Y') as EntryDate, B.DrugSubcategoryName as DrugSubcategoryName FROM drug A , drugsubcategory as B where A.DrugSubcategoryId = B.DrugSubcategoryId;";
        
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function getAllActiveCategoiry(){
        $sql = "select DrugCategoryId, DrugCategoryName from drugcategory where DrugCategoryIsActive = '1';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result; 
    }
    
    public function getAllActiveSubCategoiry(){
        $sql = "select DrugSubcategoryId, DrugSubcategoryName from drugsubcategory where DrugSubcategoryIsActive = '1';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function activeSubCategoiryToCategory($categoryId){
        $sql = "select DrugSubcategoryId, DrugSubcategoryName from drugsubcategory where DrugSubcategoryIsActive = '1' and DrugCategoryId = '$categoryId';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
        
    }
    
    public function saveDrug($data){
        if($this->db->insert('drug',$data)){
            return true;
        }
        else{
            return false; 
        }
    }
    
    public function checkDrugName($dName, $dSunCategory){
        $sql = "select * from drug where DrugName = '$dName' and DrugSubcategoryId = '$dSunCategory';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function getDrugData($drugId){
        $sql = "select A.DrugId as DrugId, A.DrugName as DrugName, A.DrugSubcategoryId as DrugSubcategoryId, B.DrugCategoryId as DrugCategoryId, A.DrugIsActive as DrugIsActive  from drug as A, drugcategory as B, drugsubcategory as C where  A.DrugSubcategoryId = C.DrugSubcategoryId and C.DrugCategoryId = B.DrugCategoryId and A.DrugId = '$drugId'; ";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function drugUpdate($data, $drugId){
        $this->db->where('DrugId', $drugId);
        if($this->db->update('drug', $data)){
            return true; 
        }
        else{
            return false; 
        }
    }
    
    public function allManufacturer(){
        $sql = "SELECT ManufacturerId, ManufacturerName FROM manufacturer  where ManufacturerIsActive = '1' ;";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function allDrugType(){
        $sql = "SELECT DrugTypeId, DrugTypeName FROM drugtype where DrugTypeIsActive = '1';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function allDrugForm(){
        $sql = "SELECT DrugFormId, DrugFormName FROM drugform where DrugFormIsActive = '1' ;";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function allDrugStrengthUnit(){
        $sql = "SELECT DrugStrengthUnitId, DrugStrengthUnitName, DrugStrengthUnitCode FROM drugstrengthunit where DrugStrengthUnitIsActive = '1' ;";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
    }
    
    public function saveDrugManufacturer($data){
        if($this->db->insert('manufacturerdrug',$data)){
            return true;
        }
        else{
            return false; 
        }
    }
    
    public function drugWiseManufacturerList($drugId){
        
        $sql = "SELECT A.ManufacturerDrugId as ManufacturerDrugId, F.ManufacturerName as ManufacturerName,
                C.DrugTypeName as  DrugTypeName, D.DrugFormName as DrugFormName, B.DrugName as DrugName, 
                A.ManufacturerDrugName as ManufacturerDrugName, A.DrugStrengthUnit as DrugStrengthUnit, 
                E.DrugStrengthUnitCode as DrugStrengthUnitCode,  DATE_FORMAT(A.EntryDate,'%d/%m/%Y') as EntryDate FROM manufacturerdrug as A, 
                drug as B, drugtype as C, drugform as D,
                drugstrengthunit as E, manufacturer as F where A.DrugId = B.DrugId 
                and B.DrugId = '$drugId' and A.ManufacturerDrugId = F.ManufacturerId 
                and A.DrugStrengthUnitID = E.DrugStrengthUnitId and A.DrugFormId = D.DrugFormId 
                and A.DrugTypeId = C.DrugTypeId;";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
      }
      
      public function drugManufecturereEdit($dManufeId){
        $sql = "SELECT ManufacturerDrugId, ManufacturerId, DrugTypeId, DrugFormId, DrugId, ManufacturerDrugName, DrugStrengthUnitID, DrugStrengthUnit FROM manufacturerdrug where ManufacturerDrugId = '$dManufeId';";
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
      }
      
      public function getDrugAccordingToManufecturer($drugManuId){
        $sql = "select A.DrugId as DrugId, 
                A.DrugName as DrugName, A.DrugSubcategoryId as DrugSubcategoryId, 
                B.DrugCategoryId as DrugCategoryId, A.DrugIsActive as DrugIsActive  
                from drug as A, drugcategory as B, drugsubcategory as C 
                where  A.DrugSubcategoryId = C.DrugSubcategoryId and 
                C.DrugCategoryId = B.DrugCategoryId and A.DrugId = ( SELECT DrugId FROM manufacturerdrug where ManufacturerDrugId = '$drugManuId' limit 1); ";
        
        $query=$this->db->query($sql);

        $result = $query->result_array();
        return $result;
      }
      
      public function drugManufacturerUpdate($data, $drugId){
           $this->db->where('ManufacturerDrugId', $drugId);
        if($this->db->update('manufacturerdrug', $data)){
            return true; 
        }
        else{
            return false; 
        }
      }
}
?>
