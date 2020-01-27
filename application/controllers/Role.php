<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : Role (Role Controller)
 * Role Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class Role extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('RoleModel');
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
				$this->global['pageName'] = 'role';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['roleList'] = $this->RoleModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'role';
				$this->loadMaterialViews("role/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'role';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['roleList'] = $this->RoleModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'role';
				$this->loadForm("role/roleList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'role';
			//$data['roles'] = $this->user_model->getUserRoles();
			

			/*$role = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'name'=>'',

'description'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$role = array();
				try {
					$role = $this->RoleModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$role = $this->read($id);
				$data['role'] = $role;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$role = new RoleModel();
				$role->createdDate  = date('Y-m-d H:i:s');
				$role->updatedDate  = date('Y-m-d H:i:s');

				//$role->field1 = "";
				$role->name = "";
$role->description = "";

				

				$role->createdBy = $this->vendorId;
				$role->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['role'] = $role;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'role';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("role/roleForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New Role';
			$this->global['pageName'] = 'role';
			
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$role = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'name'=>'',

'description'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$role = array();
				try {
					$role = $this->RoleModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$role = $this->read($id);
				$data['role'] = $role;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$role = new RoleModel();
				// $role->field1 = "";
				
				$role->name = "";
$role->description = "";


				$data['role'] = $role;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'role';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("role/roleFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$roleList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$role = $this->input->post();

		$this->load->model('RoleModel');

		try {
			$id = $role['id'];


			//print_r($role['entityDetails']);

			if ($id != NULL || $id != '') {
				$role['createdBy'] = $this->vendorId;
				$role['updatedBy'] = $this->vendorId;

				$id = $this->RoleModel->update($role);
				

			} else {
				$role['createdBy'] = $this->vendorId;
				$role['updatedBy'] = $this->vendorId;

				$id = $this->RoleModel->create($role);
				

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
			$this->global['pageName'] = 'role';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['roleList'] = $this->RoleModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully Role Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'role';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("role/roleList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$roleList = array();
		$limit = 10;
		$this->load->model('RoleModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$role = $this->RoleModel->findOne($id);

				if ($role != null) {
					$role->isApproved = "1";
					$id = $this->RoleModel->approve($role);
					
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
			$this->global['pageName'] = 'role';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['roleList'] = $this->RoleModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully Role Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'role';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("role/roleList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('RoleModel');
		$this->load->helper('url');
		$role = array();
		try {
			$role = $this->RoleModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($role);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $role;
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
				$this->global['pageName'] = 'role';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'roleReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				

				$role = array();
				try {
					$role = $this->RoleModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$role = $this->read($id);
				$data['role'] = $role;
				

				$this->loadReport("role/roleReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("Role_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('RoleModel');
		$this->load->helper('url');
		try {
			$roleList = $this->RoleModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($roleList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $roleList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'role';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('RoleModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully Role Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'role';
			$data['role'] = $this->role;

			$data['roleList'] = $this->RoleModel->getAll();
			$this->loadForm("role/roleListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("Role_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'role';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('RoleModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$roles = array();

				$roles = $this->RoleModel->findOne($id);
				$this->RoleModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("roleId",$id);
				

				$roleList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['roleList'] = $this->RoleModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully Role Deleted.';
				$data['searchText'] = '';
				$data['role'] = $this->role;
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("role/roleList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
