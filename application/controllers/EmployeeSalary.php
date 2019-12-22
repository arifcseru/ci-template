<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : EmployeeSalary (EmployeeSalary Controller)
 * Employee Salary Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class EmployeeSalary extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('EmployeeSalaryModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('EmployeeModel');
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
				$this->global['pageName'] = 'employeeSalary';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['employeeSalaryList'] = $this->EmployeeSalaryModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'employeeSalary';
				$this->loadMaterialViews("employeeSalary/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'employeeSalary';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['employeeSalaryList'] = $this->EmployeeSalaryModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'employeeSalary';
				$this->loadForm("employeeSalary/employeeSalaryList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'employeeSalary';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['employees'] = $this->EmployeeModel->getAll();

			/*$employeeSalary = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'amount'=>'',

'taxPercent'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$employeeSalary = array();
				try {
					$employeeSalary = $this->EmployeeSalaryModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$employeeSalary = $this->read($id);
				$data['employeeSalary'] = $employeeSalary;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$employeeSalary = new EmployeeSalaryModel();
				$employeeSalary->createdDate  = date('Y-m-d H:i:s');
				$employeeSalary->updatedDate  = date('Y-m-d H:i:s');

				//$employeeSalary->field1 = "";
				$employeeSalary->employeeId = "";
$employeeSalary->amount = "";
$employeeSalary->taxPercent = "";

				

				$employeeSalary->createdBy = $this->vendorId;
				$employeeSalary->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['employeeSalary'] = $employeeSalary;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'employeeSalary';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("employeeSalary/employeeSalaryForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New EmployeeSalary';
			$this->global['pageName'] = 'employeeSalary';
			$data['employees'] = $this->EmployeeModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$employeeSalary = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'amount'=>'',

'taxPercent'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$employeeSalary = array();
				try {
					$employeeSalary = $this->EmployeeSalaryModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$employeeSalary = $this->read($id);
				$data['employeeSalary'] = $employeeSalary;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$employeeSalary = new EmployeeSalaryModel();
				// $employeeSalary->field1 = "";
				
				$employeeSalary->employeeId = "";
$employeeSalary->amount = "";
$employeeSalary->taxPercent = "";


				$data['employeeSalary'] = $employeeSalary;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'employeeSalary';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("employeeSalary/employeeSalaryFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$employeeSalaryList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$employeeSalary = $this->input->post();

		$this->load->model('EmployeeSalaryModel');

		try {
			$id = $employeeSalary['id'];


			//print_r($employeeSalary['entityDetails']);

			if ($id != NULL || $id != '') {
				$employeeSalary['createdBy'] = $this->vendorId;
				$employeeSalary['updatedBy'] = $this->vendorId;

				$id = $this->EmployeeSalaryModel->update($employeeSalary);
				

			} else {
				$employeeSalary['createdBy'] = $this->vendorId;
				$employeeSalary['updatedBy'] = $this->vendorId;

				$id = $this->EmployeeSalaryModel->create($employeeSalary);
				

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
			$this->global['pageName'] = 'employeeSalary';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['employeeSalaryList'] = $this->EmployeeSalaryModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully EmployeeSalary Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'employeeSalary';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("employeeSalary/employeeSalaryList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$employeeSalaryList = array();
		$limit = 10;
		$this->load->model('EmployeeSalaryModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$employeeSalary = $this->EmployeeSalaryModel->findOne($id);

				if ($employeeSalary != null) {
					$employeeSalary->isApproved = "1";
					$id = $this->EmployeeSalaryModel->approve($employeeSalary);
					
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
			$this->global['pageName'] = 'employeeSalary';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['employeeSalaryList'] = $this->EmployeeSalaryModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully EmployeeSalary Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'employeeSalary';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("employeeSalary/employeeSalaryList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('EmployeeSalaryModel');
		$this->load->helper('url');
		$employeeSalary = array();
		try {
			$employeeSalary = $this->EmployeeSalaryModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($employeeSalary);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $employeeSalary;
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
				$this->global['pageName'] = 'employeeSalary';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'employeeSalaryReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['employees'] = $this->EmployeeModel->getAll();

				$employeeSalary = array();
				try {
					$employeeSalary = $this->EmployeeSalaryModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$employeeSalary = $this->read($id);
				$data['employeeSalary'] = $employeeSalary;
				

				$this->loadReport("employeeSalary/employeeSalaryReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("EmployeeSalary_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('EmployeeSalaryModel');
		$this->load->helper('url');
		try {
			$employeeSalaryList = $this->EmployeeSalaryModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($employeeSalaryList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $employeeSalaryList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'employeeSalary';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('EmployeeSalaryModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully EmployeeSalary Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'employeeSalary';
			$data['role'] = $this->role;

			$data['employeeSalaryList'] = $this->EmployeeSalaryModel->getAll();
			$this->loadForm("employeeSalary/employeeSalaryListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("EmployeeSalary_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'employeeSalary';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('EmployeeSalaryModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$employeeSalarys = array();

				$employeeSalarys = $this->EmployeeSalaryModel->findOne($id);
				$this->EmployeeSalaryModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("employeeSalaryId",$id);
				

				$employeeSalaryList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['employeeSalaryList'] = $this->EmployeeSalaryModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully EmployeeSalary Deleted.';
				$data['searchText'] = '';
				$data['role'] = $this->role;
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("employeeSalary/employeeSalaryList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
