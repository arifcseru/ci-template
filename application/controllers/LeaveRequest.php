<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : LeaveRequest (LeaveRequest Controller)
 * Leave Request Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class LeaveRequest extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('LeaveRequestModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('EmployeeModel');$this->load->model('LeaveTypeModel');
		$this->isLoggedIn();
	}
	public function index()
	{
		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			//$searchText = $this->security->xss_clean($this->input->post('searchText'));
			$data['createdByUserName'] = $this->name;

			$this->load->library('pagination');

			//$count = $this->user_model->userListingCount($searchText);

			//$returns = $this->paginationCompress ( "userListing/", $count, 10 );

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'leaveRequest';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['leaveRequestList'] = $this->LeaveRequestModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'leaveRequest';
				$this->loadMaterialViews("leaveRequest/index", $this->global, $data, NULL);
			}
		}
	}
	public function list()
	{
		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$data['createdByUserName'] = $this->name;
			//$searchText = $this->security->xss_clean($this->input->post('searchText'));
			//$data['searchText'] = $searchText;

			$this->load->library('pagination');

			//$count = $this->user_model->userListingCount($searchText);

			//$returns = $this->paginationCompress ( "userListing/", $count, 10 );

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'leaveRequest';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['leaveRequestList'] = $this->LeaveRequestModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'leaveRequest';
				$this->loadForm("leaveRequest/leaveRequestList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'leaveRequest';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['employees'] = $this->EmployeeModel->getAll();$data['leaveTypes'] = $this->LeaveTypeModel->getAll();

			/*$leaveRequest = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'leaveTypeId'=>'',

'fromDate'=>'',

'thruDate'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$leaveRequest = array();
				try {
					$leaveRequest = $this->LeaveRequestModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$leaveRequest = $this->read($id);
				$data['leaveRequest'] = $leaveRequest;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$leaveRequest = new LeaveRequestModel();
				$leaveRequest->createdDate  = date('Y-m-d H:i:s');
				$leaveRequest->updatedDate  = date('Y-m-d H:i:s');

				//$leaveRequest->field1 = "";
				$leaveRequest->employeeId = "";
$leaveRequest->leaveTypeId = "";
$leaveRequest->fromDate = "";
$leaveRequest->thruDate = "";

				

				$leaveRequest->createdBy = $this->vendorId;
				$leaveRequest->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['leaveRequest'] = $leaveRequest;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'leaveRequest';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("leaveRequest/leaveRequestForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New LeaveRequest';
			$this->global['pageName'] = 'leaveRequest';
			$data['employees'] = $this->EmployeeModel->getAll();$data['leaveTypes'] = $this->LeaveTypeModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$leaveRequest = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'leaveTypeId'=>'',

'fromDate'=>'',

'thruDate'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$leaveRequest = array();
				try {
					$leaveRequest = $this->LeaveRequestModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$leaveRequest = $this->read($id);
				$data['leaveRequest'] = $leaveRequest;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$leaveRequest = new LeaveRequestModel();
				// $leaveRequest->field1 = "";
				
				$leaveRequest->employeeId = "";
$leaveRequest->leaveTypeId = "";
$leaveRequest->fromDate = "";
$leaveRequest->thruDate = "";


				$data['leaveRequest'] = $leaveRequest;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'leaveRequest';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("leaveRequest/leaveRequestFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$leaveRequestList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$leaveRequest = $this->input->post();

		$this->load->model('LeaveRequestModel');

		try {
			$id = $leaveRequest['id'];


			//print_r($leaveRequest['entityDetails']);

			if ($id != NULL || $id != '') {
				$leaveRequest['createdBy'] = $this->vendorId;
				$leaveRequest['updatedBy'] = $this->vendorId;

				$id = $this->LeaveRequestModel->update($leaveRequest);
				

			} else {
				$leaveRequest['createdBy'] = $this->vendorId;
				$leaveRequest['updatedBy'] = $this->vendorId;

				$id = $this->LeaveRequestModel->create($leaveRequest);
				

			}
		} catch (Exception $e) {
			echo 'error to create data';
		}

		$this->load->library('pagination');
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['userId'] = $this->vendorId;
			$this->global['bodyClass'] = '';
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'leaveRequest';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['leaveRequestList'] = $this->LeaveRequestModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully LeaveRequest Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'leaveRequest';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("leaveRequest/leaveRequestList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$leaveRequestList = array();
		$limit = 10;
		$this->load->model('LeaveRequestModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$leaveRequest = $this->LeaveRequestModel->findOne($id);

				if ($leaveRequest != null) {
					$leaveRequest->isApproved = "1";
					$id = $this->LeaveRequestModel->approve($leaveRequest);
					
				} else {
					echo "not Found!";
				}
			}
		} catch (Exception $e) {
			echo 'error to update data';
		}

		$this->load->library('pagination');
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['userId'] = $this->vendorId;
			$this->global['bodyClass'] = '';
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'leaveRequest';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['leaveRequestList'] = $this->LeaveRequestModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully LeaveRequest Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'leaveRequest';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("leaveRequest/leaveRequestList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('LeaveRequestModel');
		$this->load->helper('url');
		$leaveRequest = array();
		try {
			$leaveRequest = $this->LeaveRequestModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($leaveRequest);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $leaveRequest;
	}
	public function report($id)
	{
		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$data['createdByUserName'] = $this->name;
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'leaveRequest';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'leaveRequestReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['employees'] = $this->EmployeeModel->getAll();$data['leaveTypes'] = $this->LeaveTypeModel->getAll();

				$leaveRequest = array();
				try {
					$leaveRequest = $this->LeaveRequestModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$leaveRequest = $this->read($id);
				$data['leaveRequest'] = $leaveRequest;
				

				$this->loadReport("leaveRequest/leaveRequestReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("LeaveRequest_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('LeaveRequestModel');
		$this->load->helper('url');
		try {
			$leaveRequestList = $this->LeaveRequestModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($leaveRequestList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $leaveRequestList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'leaveRequest';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('LeaveRequestModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully LeaveRequest Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'leaveRequest';

			$data['leaveRequestList'] = $this->LeaveRequestModel->getAll();
			$this->loadForm("leaveRequest/leaveRequestListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("LeaveRequest_List_1022322.pdf", array("Attachment" => 0));
		}
	}

	public function delete($id)
	{
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['userId'] = $this->vendorId;
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'leaveRequest';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('LeaveRequestModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$leaveRequests = array();

				$leaveRequests = $this->LeaveRequestModel->findOne($id);
				$this->LeaveRequestModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("leaveRequestId",$id);
				

				$leaveRequestList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['leaveRequestList'] = $this->LeaveRequestModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully LeaveRequest Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("leaveRequest/leaveRequestList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
