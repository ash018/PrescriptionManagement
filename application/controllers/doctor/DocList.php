<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DocList extends CI_Controller {

    public function __construct(){
         parent::__construct();

         $this->load->model('DoctorListModel'); //Load the Model here   
    }
	
    
    public function index()
    {
            $this->load->view('welcome_message');
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
}
