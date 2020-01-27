<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : User (User Controller)
 * User Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class User extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('UserModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('RoleModel');$this->load->model('CompanyProfileModel');
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
				$this->global['pageName'] = 'user';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['userList'] = $this->UserModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'user';
				$this->loadMaterialViews("user/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'user';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['userList'] = $this->UserModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'user';
				$this->loadForm("user/userList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'user';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['roles'] = $this->RoleModel->getAll();

			/*$user = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'fullName'=>'',

'email'=>'',

'password'=>'',

'confirmPassword'=>'',

'roleId'=>'',

'CompanyProfile'=>'',

'mobileNumber'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$user = array();
				try {
					$user = $this->UserModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$user = $this->read($id);
				$data['user'] = $user;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['companyProfiles'] = $this->CompanyProfileModel->findBy('userId',$id);
			} else {
				$user = new UserModel();
				$user->createdDate  = date('Y-m-d H:i:s');
				$user->updatedDate  = date('Y-m-d H:i:s');

				//$user->field1 = "";
				$user->fullName = "";
$user->email = "";
$user->password = "";
$user->confirmPassword = "";
$user->roleId = "";
$user->CompanyProfile = "";
$user->mobileNumber = "";

				$data['companyProfiles'] = $this->CompanyProfileModel->findBy('userId',$id);

				$user->createdBy = $this->vendorId;
				$user->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['user'] = $user;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'user';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("user/userForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New User';
			$this->global['pageName'] = 'user';
			$data['roles'] = $this->RoleModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$user = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'fullName'=>'',

'email'=>'',

'password'=>'',

'confirmPassword'=>'',

'roleId'=>'',

'CompanyProfile'=>'',

'mobileNumber'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$user = array();
				try {
					$user = $this->UserModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$user = $this->read($id);
				$data['user'] = $user;
				$data['companyProfiles'] = $this->CompanyProfileModel->findBy('userId',$id);
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$user = new UserModel();
				// $user->field1 = "";
				$data['companyProfiles'] = $this->CompanyProfileModel->findBy('userId',$id);
				$user->fullName = "";
$user->email = "";
$user->password = "";
$user->confirmPassword = "";
$user->roleId = "";
$user->CompanyProfile = "";
$user->mobileNumber = "";


				$data['user'] = $user;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'user';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("user/userFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$userList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$user = $this->input->post();

		$this->load->model('UserModel');

		try {
			$id = $user['id'];


			//print_r($user['entityDetails']);

			if ($id != NULL || $id != '') {
				$user['createdBy'] = $this->vendorId;
				$user['updatedBy'] = $this->vendorId;

				$id = $this->UserModel->update($user);
				$companyProfileList = $user['companyProfile'];
	            $this->CompanyProfileModel->deleteBy("userId",$id);
	            if(!empty($companyProfileList)){
	                foreach ($companyProfileList as $key => $companyProfile) {
						$companyProfile['createdBy'] = $this->vendorId;						$companyProfile['updatedBy'] = $this->vendorId;	                    $companyProfile['userId'] = $id;
	                    $this->CompanyProfileModel->create($companyProfile);
	                }
	            }

			} else {
				$user['createdBy'] = $this->vendorId;
				$user['updatedBy'] = $this->vendorId;

				$id = $this->UserModel->create($user);
				$companyProfileList = $user['companyProfile'];
	            
	            if(!empty($companyProfileList)){
	                foreach ($companyProfileList as $key => $companyProfile) {
						$companyProfile['createdBy'] = $this->vendorId;						$companyProfile['updatedBy'] = $this->vendorId;	                    $companyProfile['userId'] = $id;
	                    $this->CompanyProfileModel->create($companyProfile);
	                }
	            }

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
			$this->global['pageName'] = 'user';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['userList'] = $this->UserModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully User Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'user';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("user/userList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$userList = array();
		$limit = 10;
		$this->load->model('UserModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$user = $this->UserModel->findOne($id);

				if ($user != null) {
					$user->isApproved = "1";
					$id = $this->UserModel->approve($user);
					
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
			$this->global['pageName'] = 'user';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['userList'] = $this->UserModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully User Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'user';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("user/userList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('UserModel');
		$this->load->helper('url');
		$user = array();
		try {
			$user = $this->UserModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($user);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $user;
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
				$this->global['pageName'] = 'user';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'userReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['roles'] = $this->RoleModel->getAll();

				$user = array();
				try {
					$user = $this->UserModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$user = $this->read($id);
				$data['user'] = $user;
				$data['companyProfiles'] = $this->CompanyProfileModel->findBy('userId',$id);

				$this->loadReport("user/userReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("User_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('UserModel');
		$this->load->helper('url');
		try {
			$userList = $this->UserModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($userList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $userList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'user';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('UserModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully User Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'user';
			$data['role'] = $this->role;

			$data['userList'] = $this->UserModel->getAll();
			$this->loadForm("user/userListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("User_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'user';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('UserModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$users = array();

				$users = $this->UserModel->findOne($id);
				$this->UserModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("userId",$id);
				$this->CompanyProfileModel->deleteBy("userId",$id);

				$userList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['userList'] = $this->UserModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully User Deleted.';
				$data['searchText'] = '';
				$data['role'] = $this->role;
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("user/userList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
