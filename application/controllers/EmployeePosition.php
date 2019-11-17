<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : EmployeePosition (EmployeePosition Controller)
 * Employee Position Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class EmployeePosition extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('EmployeePositionModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('EmployeeModel');$this->load->model('JobPositionModel');
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
				$this->global['pageName'] = 'employeePosition';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['employeePositionList'] = $this->EmployeePositionModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'employeePosition';
				$this->loadMaterialViews("employeePosition/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'employeePosition';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['employeePositionList'] = $this->EmployeePositionModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'employeePosition';
				$this->loadForm("employeePosition/employeePositionList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'employeePosition';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['employees'] = $this->EmployeeModel->getAll();$data['jobPositions'] = $this->JobPositionModel->getAll();

			/*$employeePosition = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'jobPositionId'=>'',

'description'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$employeePosition = array();
				try {
					$employeePosition = $this->EmployeePositionModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$employeePosition = $this->read($id);
				$data['employeePosition'] = $employeePosition;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$employeePosition = new EmployeePositionModel();
				$employeePosition->createdDate  = date('Y-m-d H:i:s');
				$employeePosition->updatedDate  = date('Y-m-d H:i:s');

				//$employeePosition->field1 = "";
				$employeePosition->employeeId = "";
$employeePosition->jobPositionId = "";
$employeePosition->description = "";

				

				$employeePosition->createdBy = $this->vendorId;
				$employeePosition->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['employeePosition'] = $employeePosition;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'employeePosition';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("employeePosition/employeePositionForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New EmployeePosition';
			$this->global['pageName'] = 'employeePosition';
			$data['employees'] = $this->EmployeeModel->getAll();$data['jobPositions'] = $this->JobPositionModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$employeePosition = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'jobPositionId'=>'',

'description'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$employeePosition = array();
				try {
					$employeePosition = $this->EmployeePositionModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$employeePosition = $this->read($id);
				$data['employeePosition'] = $employeePosition;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$employeePosition = new EmployeePositionModel();
				// $employeePosition->field1 = "";
				
				$employeePosition->employeeId = "";
$employeePosition->jobPositionId = "";
$employeePosition->description = "";


				$data['employeePosition'] = $employeePosition;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'employeePosition';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("employeePosition/employeePositionFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$employeePositionList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$employeePosition = $this->input->post();

		$this->load->model('EmployeePositionModel');

		try {
			$id = $employeePosition['id'];


			//print_r($employeePosition['entityDetails']);

			if ($id != NULL || $id != '') {
				$employeePosition['createdBy'] = $this->vendorId;
				$employeePosition['updatedBy'] = $this->vendorId;

				$id = $this->EmployeePositionModel->update($employeePosition);
				

			} else {
				$employeePosition['createdBy'] = $this->vendorId;
				$employeePosition['updatedBy'] = $this->vendorId;

				$id = $this->EmployeePositionModel->create($employeePosition);
				

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
			$this->global['pageName'] = 'employeePosition';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['employeePositionList'] = $this->EmployeePositionModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully EmployeePosition Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'employeePosition';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("employeePosition/employeePositionList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$employeePositionList = array();
		$limit = 10;
		$this->load->model('EmployeePositionModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$employeePosition = $this->EmployeePositionModel->findOne($id);

				if ($employeePosition != null) {
					$employeePosition->isApproved = "1";
					$id = $this->EmployeePositionModel->approve($employeePosition);
					
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
			$this->global['pageName'] = 'employeePosition';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['employeePositionList'] = $this->EmployeePositionModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully EmployeePosition Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'employeePosition';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("employeePosition/employeePositionList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('EmployeePositionModel');
		$this->load->helper('url');
		$employeePosition = array();
		try {
			$employeePosition = $this->EmployeePositionModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($employeePosition);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $employeePosition;
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
				$this->global['pageName'] = 'employeePosition';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'employeePositionReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['employees'] = $this->EmployeeModel->getAll();$data['jobPositions'] = $this->JobPositionModel->getAll();

				$employeePosition = array();
				try {
					$employeePosition = $this->EmployeePositionModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$employeePosition = $this->read($id);
				$data['employeePosition'] = $employeePosition;
				

				$this->loadReport("employeePosition/employeePositionReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("EmployeePosition_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('EmployeePositionModel');
		$this->load->helper('url');
		try {
			$employeePositionList = $this->EmployeePositionModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($employeePositionList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $employeePositionList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'employeePosition';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('EmployeePositionModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully EmployeePosition Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'employeePosition';

			$data['employeePositionList'] = $this->EmployeePositionModel->getAll();
			$this->loadForm("employeePosition/employeePositionListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("EmployeePosition_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'employeePosition';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('EmployeePositionModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$employeePositions = array();

				$employeePositions = $this->EmployeePositionModel->findOne($id);
				$this->EmployeePositionModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("employeePositionId",$id);
				

				$employeePositionList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['employeePositionList'] = $this->EmployeePositionModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully EmployeePosition Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("employeePosition/employeePositionList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
