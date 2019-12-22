<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : UserPreference (UserPreference Controller)
 * User Preference Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class UserPreference extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('UserPreferenceModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('UserModel');$this->load->model('CompanyProfileModel');$this->load->model('RoleModel');
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
				$this->global['pageName'] = 'userPreference';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['userPreferenceList'] = $this->UserPreferenceModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'userPreference';
				$this->loadMaterialViews("userPreference/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'userPreference';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['userPreferenceList'] = $this->UserPreferenceModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'userPreference';
				$this->loadForm("userPreference/userPreferenceList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'userPreference';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['users'] = $this->UserModel->getAll();$data['companyProfiles'] = $this->CompanyProfileModel->getAll();$data['roles'] = $this->RoleModel->getAll();

			/*$userPreference = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'applicationTitle'=>'',

'metaTags'=>'',

'userId'=>'',

'activeCompanyId'=>'',

'language'=>'',

'activeRole'=>'',

'showNotification'=>'',

'showEmail'=>'',

'showTask'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$userPreference = array();
				try {
					$userPreference = $this->UserPreferenceModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$userPreference = $this->read($id);
				$data['userPreference'] = $userPreference;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$userPreference = new UserPreferenceModel();
				$userPreference->createdDate  = date('Y-m-d H:i:s');
				$userPreference->updatedDate  = date('Y-m-d H:i:s');

				//$userPreference->field1 = "";
				$userPreference->applicationTitle = "";
$userPreference->metaTags = "";
$userPreference->userId = "";
$userPreference->activeCompanyId = "";
$userPreference->language = "";
$userPreference->activeRole = "";
$userPreference->showNotification = "";
$userPreference->showEmail = "";
$userPreference->showTask = "";

				

				$userPreference->createdBy = $this->vendorId;
				$userPreference->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['userPreference'] = $userPreference;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'userPreference';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("userPreference/userPreferenceForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New UserPreference';
			$this->global['pageName'] = 'userPreference';
			$data['users'] = $this->UserModel->getAll();$data['companyProfiles'] = $this->CompanyProfileModel->getAll();$data['roles'] = $this->RoleModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$userPreference = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'applicationTitle'=>'',

'metaTags'=>'',

'userId'=>'',

'activeCompanyId'=>'',

'language'=>'',

'activeRole'=>'',

'showNotification'=>'',

'showEmail'=>'',

'showTask'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$userPreference = array();
				try {
					$userPreference = $this->UserPreferenceModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$userPreference = $this->read($id);
				$data['userPreference'] = $userPreference;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$userPreference = new UserPreferenceModel();
				// $userPreference->field1 = "";
				
				$userPreference->applicationTitle = "";
$userPreference->metaTags = "";
$userPreference->userId = "";
$userPreference->activeCompanyId = "";
$userPreference->language = "";
$userPreference->activeRole = "";
$userPreference->showNotification = "";
$userPreference->showEmail = "";
$userPreference->showTask = "";


				$data['userPreference'] = $userPreference;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'userPreference';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("userPreference/userPreferenceFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$userPreferenceList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->input->post();

		$this->load->model('UserPreferenceModel');

		try {
			$id = $userPreference['id'];


			//print_r($userPreference['entityDetails']);

			if ($id != NULL || $id != '') {
				$userPreference['createdBy'] = $this->vendorId;
				$userPreference['updatedBy'] = $this->vendorId;

				$id = $this->UserPreferenceModel->update($userPreference);
				

			} else {
				$userPreference['createdBy'] = $this->vendorId;
				$userPreference['updatedBy'] = $this->vendorId;

				$id = $this->UserPreferenceModel->create($userPreference);
				

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
			$this->global['pageName'] = 'userPreference';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['userPreferenceList'] = $this->UserPreferenceModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully UserPreference Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'userPreference';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("userPreference/userPreferenceList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$userPreferenceList = array();
		$limit = 10;
		$this->load->model('UserPreferenceModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$userPreference = $this->UserPreferenceModel->findOne($id);

				if ($userPreference != null) {
					$userPreference->isApproved = "1";
					$id = $this->UserPreferenceModel->approve($userPreference);
					
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
			$this->global['pageName'] = 'userPreference';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['userPreferenceList'] = $this->UserPreferenceModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully UserPreference Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'userPreference';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("userPreference/userPreferenceList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('UserPreferenceModel');
		$this->load->helper('url');
		$userPreference = array();
		try {
			$userPreference = $this->UserPreferenceModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($userPreference);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $userPreference;
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
				$this->global['pageName'] = 'userPreference';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'userPreferenceReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['users'] = $this->UserModel->getAll();$data['companyProfiles'] = $this->CompanyProfileModel->getAll();$data['roles'] = $this->RoleModel->getAll();

				$userPreference = array();
				try {
					$userPreference = $this->UserPreferenceModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$userPreference = $this->read($id);
				$data['userPreference'] = $userPreference;
				

				$this->loadReport("userPreference/userPreferenceReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("UserPreference_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('UserPreferenceModel');
		$this->load->helper('url');
		try {
			$userPreferenceList = $this->UserPreferenceModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($userPreferenceList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $userPreferenceList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'userPreference';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('UserPreferenceModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully UserPreference Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'userPreference';
			$data['role'] = $this->role;

			$data['userPreferenceList'] = $this->UserPreferenceModel->getAll();
			$this->loadForm("userPreference/userPreferenceListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("UserPreference_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'userPreference';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('UserPreferenceModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$userPreferences = array();

				$userPreferences = $this->UserPreferenceModel->findOne($id);
				$this->UserPreferenceModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("userPreferenceId",$id);
				

				$userPreferenceList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['userPreferenceList'] = $this->UserPreferenceModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully UserPreference Deleted.';
				$data['searchText'] = '';
				$data['role'] = $this->role;
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("userPreference/userPreferenceList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
