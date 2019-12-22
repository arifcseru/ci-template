<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : LeaveType (LeaveType Controller)
 * Leave Type Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class LeaveType extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('LeaveTypeModel');
		$this->load->model('UserPreferenceModel');
		
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
				$this->global['pageName'] = 'leaveType';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['leaveTypeList'] = $this->LeaveTypeModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'leaveType';
				$this->loadMaterialViews("leaveType/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'leaveType';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['leaveTypeList'] = $this->LeaveTypeModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'leaveType';
				$this->loadForm("leaveType/leaveTypeList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'leaveType';
			//$data['roles'] = $this->user_model->getUserRoles();
			

			/*$leaveType = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'name'=>'',

'description'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$leaveType = array();
				try {
					$leaveType = $this->LeaveTypeModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$leaveType = $this->read($id);
				$data['leaveType'] = $leaveType;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$leaveType = new LeaveTypeModel();
				$leaveType->createdDate  = date('Y-m-d H:i:s');
				$leaveType->updatedDate  = date('Y-m-d H:i:s');

				//$leaveType->field1 = "";
				$leaveType->name = "";
$leaveType->description = "";

				

				$leaveType->createdBy = $this->vendorId;
				$leaveType->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['leaveType'] = $leaveType;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'leaveType';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("leaveType/leaveTypeForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New LeaveType';
			$this->global['pageName'] = 'leaveType';
			
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$leaveType = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'name'=>'',

'description'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$leaveType = array();
				try {
					$leaveType = $this->LeaveTypeModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$leaveType = $this->read($id);
				$data['leaveType'] = $leaveType;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$leaveType = new LeaveTypeModel();
				// $leaveType->field1 = "";
				
				$leaveType->name = "";
$leaveType->description = "";


				$data['leaveType'] = $leaveType;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'leaveType';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("leaveType/leaveTypeFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$leaveTypeList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$leaveType = $this->input->post();

		$this->load->model('LeaveTypeModel');

		try {
			$id = $leaveType['id'];


			//print_r($leaveType['entityDetails']);

			if ($id != NULL || $id != '') {
				$leaveType['createdBy'] = $this->vendorId;
				$leaveType['updatedBy'] = $this->vendorId;

				$id = $this->LeaveTypeModel->update($leaveType);
				

			} else {
				$leaveType['createdBy'] = $this->vendorId;
				$leaveType['updatedBy'] = $this->vendorId;

				$id = $this->LeaveTypeModel->create($leaveType);
				

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
			$this->global['pageName'] = 'leaveType';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['leaveTypeList'] = $this->LeaveTypeModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully LeaveType Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'leaveType';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("leaveType/leaveTypeList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$leaveTypeList = array();
		$limit = 10;
		$this->load->model('LeaveTypeModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$leaveType = $this->LeaveTypeModel->findOne($id);

				if ($leaveType != null) {
					$leaveType->isApproved = "1";
					$id = $this->LeaveTypeModel->approve($leaveType);
					
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
			$this->global['pageName'] = 'leaveType';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['leaveTypeList'] = $this->LeaveTypeModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully LeaveType Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'leaveType';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("leaveType/leaveTypeList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('LeaveTypeModel');
		$this->load->helper('url');
		$leaveType = array();
		try {
			$leaveType = $this->LeaveTypeModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($leaveType);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $leaveType;
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
				$this->global['pageName'] = 'leaveType';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'leaveTypeReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				

				$leaveType = array();
				try {
					$leaveType = $this->LeaveTypeModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$leaveType = $this->read($id);
				$data['leaveType'] = $leaveType;
				

				$this->loadReport("leaveType/leaveTypeReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("LeaveType_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('LeaveTypeModel');
		$this->load->helper('url');
		try {
			$leaveTypeList = $this->LeaveTypeModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($leaveTypeList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $leaveTypeList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'leaveType';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('LeaveTypeModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully LeaveType Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'leaveType';
			$data['role'] = $this->role;

			$data['leaveTypeList'] = $this->LeaveTypeModel->getAll();
			$this->loadForm("leaveType/leaveTypeListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("LeaveType_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'leaveType';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('LeaveTypeModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$leaveTypes = array();

				$leaveTypes = $this->LeaveTypeModel->findOne($id);
				$this->LeaveTypeModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("leaveTypeId",$id);
				

				$leaveTypeList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['leaveTypeList'] = $this->LeaveTypeModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully LeaveType Deleted.';
				$data['searchText'] = '';
				$data['role'] = $this->role;
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("leaveType/leaveTypeList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
