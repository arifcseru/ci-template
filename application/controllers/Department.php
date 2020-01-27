<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : Department (Department Controller)
 * Department Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class Department extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('DepartmentModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('BranchModel');
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
				$this->global['pageName'] = 'department';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['departmentList'] = $this->DepartmentModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'department';
				$this->loadMaterialViews("department/index", $this->global, $data, NULL);
			}
		}
	}
	public function listData()
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
				$this->global['pageName'] = 'department';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['departmentList'] = $this->DepartmentModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'department';
				$this->loadForm("department/departmentList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'department';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['branchs'] = $this->BranchModel->getAll();

			/*$department = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'branchId'=>'',

'name'=>'',

'shortCode'=>'',

'description'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$department = array();
				try {
					$department = $this->DepartmentModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$department = $this->read($id);
				$data['department'] = $department;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$department = new DepartmentModel();
				$department->createdDate  = date('Y-m-d H:i:s');
				$department->updatedDate  = date('Y-m-d H:i:s');

				//$department->field1 = "";
				$department->branchId = "";
$department->name = "";
$department->shortCode = "";
$department->description = "";

				

				$department->createdBy = $this->vendorId;
				$department->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['department'] = $department;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'department';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("department/departmentForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New Department';
			$this->global['pageName'] = 'department';
			$data['branchs'] = $this->BranchModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$department = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'branchId'=>'',

'name'=>'',

'shortCode'=>'',

'description'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$department = array();
				try {
					$department = $this->DepartmentModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$department = $this->read($id);
				$data['department'] = $department;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$department = new DepartmentModel();
				// $department->field1 = "";
				
				$department->branchId = "";
$department->name = "";
$department->shortCode = "";
$department->description = "";


				$data['department'] = $department;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'department';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("department/departmentFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$departmentList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$department = $this->input->post();

		$this->load->model('DepartmentModel');

		try {
			$id = $department['id'];


			//print_r($department['entityDetails']);

			if ($id != NULL || $id != '') {
				$department['createdBy'] = $this->vendorId;
				$department['updatedBy'] = $this->vendorId;

				$id = $this->DepartmentModel->update($department);
				

			} else {
				$department['createdBy'] = $this->vendorId;
				$department['updatedBy'] = $this->vendorId;

				$id = $this->DepartmentModel->create($department);
				

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
			$this->global['pageName'] = 'department';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['departmentList'] = $this->DepartmentModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully Department Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'department';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("department/departmentList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$departmentList = array();
		$limit = 10;
		$this->load->model('DepartmentModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$department = $this->DepartmentModel->findOne($id);

				if ($department != null) {
					$department->isApproved = "1";
					$id = $this->DepartmentModel->approve($department);
					
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
			$this->global['pageName'] = 'department';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['departmentList'] = $this->DepartmentModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully Department Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'department';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("department/departmentList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('DepartmentModel');
		$this->load->helper('url');
		$department = array();
		try {
			$department = $this->DepartmentModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($department);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $department;
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
				$this->global['pageName'] = 'department';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'departmentReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['branchs'] = $this->BranchModel->getAll();

				$department = array();
				try {
					$department = $this->DepartmentModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$department = $this->read($id);
				$data['department'] = $department;
				

				$this->loadReport("department/departmentReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("Department_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('DepartmentModel');
		$this->load->helper('url');
		try {
			$departmentList = $this->DepartmentModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($departmentList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $departmentList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'department';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('DepartmentModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully Department Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'department';
			$data['role'] = $this->role;

			$data['departmentList'] = $this->DepartmentModel->getAll();
			$this->loadForm("department/departmentListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("Department_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'department';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('DepartmentModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$departments = array();

				$departments = $this->DepartmentModel->findOne($id);
				$this->DepartmentModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("departmentId",$id);
				

				$departmentList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['departmentList'] = $this->DepartmentModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully Department Deleted.';
				$data['searchText'] = '';
				$data['role'] = $this->role;
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("department/departmentList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
