<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : Attendance (Attendance Controller)
 * Attendance Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class Attendance extends BaseController {

	public function __construct(){
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('AttendanceModel');
		$this->load->model('EmployeeModel');
		$this->isLoggedIn(); 
	}
	public function index(){
	    if($this->isAdmin() == TRUE){
	        $this->loadThis();
	    }
	    else{
	        //$searchText = $this->security->xss_clean($this->input->post('searchText'));
	        //$data['searchText'] = $searchText;
	        
	        $this->load->library('pagination');
	        
	        //$count = $this->user_model->userListingCount($searchText);
	        
	        //$returns = $this->paginationCompress ( "userListing/", $count, 10 );
	        
	        $data['attendanceList'] = $this->AttendanceModel->getAll();
	        
	        $this->global['pageTitle'] = 'Company Limited : Attendance';
	        $this->global['pageName'] = 'attendance';
	        $this->loadMaterialViews("attendance/index", $this->global, $data , NULL);
	    }
	    
	}
	public function list(){
	    if($this->isAdmin() == TRUE){
	        $this->loadThis();
	    }
	    else{
	        //$searchText = $this->security->xss_clean($this->input->post('searchText'));
	        //$data['searchText'] = $searchText;
	        
	        $this->load->library('pagination');
	        
	        //$count = $this->user_model->userListingCount($searchText);
	        
	        //$returns = $this->paginationCompress ( "userListing/", $count, 10 );
	        
	        $data['attendanceList'] = $this->AttendanceModel->getAll();
	        
	        $this->global['pageTitle'] = 'Company Limited : Attendance';
	        $this->global['pageName'] = 'attendance';
	        $this->loadForm("attendance/attendanceList", $this->global, $data , NULL);
	    }
	    
	}
	public function form($id = NULL){
	    
	    if($this->isAdmin() == TRUE){
	        $this->loadThis();
	    }
	    else {
	        $this->global['pageTitle'] = 'Company Limited : Add New Attendance';
	        $this->global['pageName'] = 'attendance';
	        //$data['roles'] = $this->user_model->getUserRoles();
	        $data['employees'] = $this->EmployeeModel->getAll();
	        
	        /*$attendance = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'attendanceType'=>'',

'attendanceDate'=>'',

'attendanceTime'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
	        if ($id!=NULL) {
	            $attendance = $this->read($id);
				$data['attendance'] = $attendance;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

	            
	        }else{
	            $attendance = new AttendanceModel();
				$attendance->createdDate  = date('Y-m-d H:i:s');
				$attendance->updatedDate  = date('Y-m-d H:i:s');
				
	            //$attendance->field1 = "";
	            $attendance->employeeId = "";
$attendance->attendanceType = "";
$attendance->attendanceDate = "";
$attendance->attendanceTime = "";

	            
	            
	            $attendance->createdBy = $this->vendorId;
	            $attendance->updatedBy = $this->vendorId;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
				
	            $data['attendance'] = $attendance;
	        }
			
	        $this->loadForm("attendance/attendanceForm", $this->global, $data, NULL);
	    }
	    
	}
	public function view($id = NULL){
	    
	    if($this->isAdmin() == TRUE){
	        $this->loadThis();
	    } else {
	        $this->global['pageTitle'] = 'Company Limited : Add New Attendance';
	        $this->global['pageName'] = 'attendance';
	        $data['employees'] = $this->EmployeeModel->getAll();
	        $date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

	        /*$attendance = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'attendanceType'=>'',

'attendanceDate'=>'',

'attendanceTime'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
	        if ($id!=NULL) {
	            $attendance = $this->read($id);
	            $data['attendance'] = $attendance;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
	        }else{
	            $attendance = new AttendanceModel();
	            // $attendance->field1 = "";
	            
	            $attendance->employeeId = "";
$attendance->attendanceType = "";
$attendance->attendanceDate = "";
$attendance->attendanceTime = "";

	            
	            $data['attendance'] = $attendance;
	        }
	        
	        
	        $this->loadForm("attendance/attendanceFormView", $this->global, $data, NULL);
	    }
	    
	}
	
	public function create(){
	    $isValid = false;
	    $message = "";
	    $attendanceList = array();
	    $limit = 10;
	    $id = NULL;
	    
	    $attendance = $this->input->post();
	    
	    $this->load->model('AttendanceModel');
	    
	    try {
	        $id = $attendance['id'];
	        

	        //print_r($attendance['entityDetails']);
			
	        if ($id!=NULL || $id!='') {
				$attendance['createdBy'] = $this->vendorId;
				$attendance['updatedBy'] = $this->vendorId;

	            $id = $this->AttendanceModel->update($attendance);
	            
	            
	        }else{
				$attendance['createdBy'] = $this->vendorId;
				$attendance['updatedBy'] = $this->vendorId;
				
	            $id = $this->AttendanceModel->create($attendance);
	            
	            
	        }
	        
	    } catch (Exception $e) {
	        echo 'error to create data';
	    }
	    
	    $this->load->library('pagination');
	    $data['attendanceList'] = $this->AttendanceModel->getAll();
	    
	    $data['error'] = '';
	    $data['success'] = 'Successfully Attendance Published.';
	    $data['searchText'] = '';
	    $this->global['pageTitle'] = 'Company Limited : Attendance Listing';
	    $this->global['pageName'] = 'attendance';
	    $this->loadForm("attendance/attendanceList", $this->global, $data, NULL);
	}
	public function approve($id = NULL){
	    $isValid = false;
	    $message = "";
	    $attendanceList = array();
	    $limit = 10;
	    $this->load->model('AttendanceModel');
	    
	    try {
	        if ($id!=NULL || $id!='') {
	            $attendance = $this->AttendanceModel->findOne($id);
	            
	            if ($attendance!=null) {
	                $attendance->isApproved = "1";
	                $id = $this->AttendanceModel->approve($attendance);
	            }else{
	                echo "not Found!";
	            }
	            
	        }
	        
	    } catch (Exception $e) {
	        echo 'error to update data';
	    }
	    
	    $this->load->library('pagination');
	    $data['attendanceList'] = $this->AttendanceModel->getAll();
	    
	    $data['error'] = '';
	    $data['success'] = 'Successfully Attendance Published.';
	    $data['searchText'] = '';
	    $this->global['pageTitle'] = 'Company Limited : Attendance Listing';
	    $this->global['pageName'] = 'attendance';
	    $this->loadForm("attendance/attendanceList", $this->global, $data, NULL);
	}
	public function read($id){
		$this->load->model('AttendanceModel');
		$this->load->helper('url');
		$attendance = array();
		try {
			$attendance = $this->AttendanceModel->findOne($id);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		return $attendance;
	}
	public function report($id){
	    if($this->isAdmin() == TRUE){
	        $this->loadThis();
	    } else {
	        $this->global['pageTitle'] = 'Attendance : Report';
	        $this->global['pageName'] = 'attendanceReport';
	        //$data['roles'] = $this->user_model->getUserRoles();
	        $data['employees'] = $this->EmployeeModel->getAll();
	        
	        $attendance = $this->read($id);
			$data['attendance'] = $attendance;
			
	        
			$this->loadForm("attendance/attendanceReport", $this->global, $data, NULL);
			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);
			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("Attendance_Report_1022322.pdf", array("Attachment"=>0));
	    }
	    
	}
	
	public function readList($limit){
		$this->load->model('AttendanceModel');
		$this->load->helper('url');
		try {
			$attendanceList = $this->AttendanceModel->get($limit);
		} catch (Exception $e) {
			echo 'error to insert data';
		}
	
		return $attendanceList;
	
	}
	public function allData(){
        $data_user = array();
		$this->load->model('AttendanceModel');
		
        $data['error'] = '';
	    $data['success'] = 'Successfully Attendance Published.';
	    $data['searchText'] = '';
	    $this->global['pageTitle'] = 'Company Limited : Attendance Listing';
		$this->global['pageName'] = 'attendance';
		
        $data['attendanceList'] = $this->AttendanceModel->getAll();
		$this->loadForm("attendance/attendanceListReport", $this->global, $data, NULL);
		
        $html = $this->output->get_output();
        $this->load->library('pdf');

        $this->dompdf->loadHtml($html);

        $this->dompdf->setPaper('A4', 'landscape');
        $this->dompdf->render();
        $this->dompdf->stream("Attendance_List_1022322.pdf", array("Attachment"=>0));
    }
	
	public function delete($id){
		$this->load->database();
		$this->load->model('AttendanceModel');
		$post = $this->input->post();
		try {
			$post = $this->input->post();
			$attendances = array();
			
			$attendances = $this->AttendanceModel->findOne($id);
			$this->AttendanceModel->delete($id);
			//$this->EntityDetailsModel->deleteBy("attendanceId",$id);
			
			
    		$attendanceList = array();
    		$limit = 10;
    		$this->load->library('pagination');	
    		$data['attendanceList'] = $this->AttendanceModel->getAll();
    		$data['error'] = '';
    		$data['success'] = 'Successfully Attendance Deleted.';
    		$data['searchText'] = '';
              	
    		$this->loadForm("attendance/attendanceList", $this->global, $data, NULL);
		  } catch (Exception $e) {
			echo 'error to delete data';
		 }
		
	}
	
}
