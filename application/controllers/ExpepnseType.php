<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : ExpepnseType (ExpepnseType Controller)
 * Expepnse Type Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class ExpepnseType extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('ExpepnseTypeModel');
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
				$this->global['pageName'] = 'expepnseType';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['expepnseTypeList'] = $this->ExpepnseTypeModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'expepnseType';
				$this->loadMaterialViews("expepnseType/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'expepnseType';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['expepnseTypeList'] = $this->ExpepnseTypeModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'expepnseType';
				$this->loadForm("expepnseType/expepnseTypeList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'expepnseType';
			//$data['roles'] = $this->user_model->getUserRoles();
			

			/*$expepnseType = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'name'=>'',

'description'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$expepnseType = array();
				try {
					$expepnseType = $this->ExpepnseTypeModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$expepnseType = $this->read($id);
				$data['expepnseType'] = $expepnseType;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$expepnseType = new ExpepnseTypeModel();
				$expepnseType->createdDate  = date('Y-m-d H:i:s');
				$expepnseType->updatedDate  = date('Y-m-d H:i:s');

				//$expepnseType->field1 = "";
				$expepnseType->name = "";
$expepnseType->description = "";

				

				$expepnseType->createdBy = $this->vendorId;
				$expepnseType->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['expepnseType'] = $expepnseType;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'expepnseType';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("expepnseType/expepnseTypeForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New ExpepnseType';
			$this->global['pageName'] = 'expepnseType';
			
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$expepnseType = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'name'=>'',

'description'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$expepnseType = array();
				try {
					$expepnseType = $this->ExpepnseTypeModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$expepnseType = $this->read($id);
				$data['expepnseType'] = $expepnseType;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$expepnseType = new ExpepnseTypeModel();
				// $expepnseType->field1 = "";
				
				$expepnseType->name = "";
$expepnseType->description = "";


				$data['expepnseType'] = $expepnseType;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'expepnseType';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("expepnseType/expepnseTypeFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$expepnseTypeList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$expepnseType = $this->input->post();

		$this->load->model('ExpepnseTypeModel');

		try {
			$id = $expepnseType['id'];


			//print_r($expepnseType['entityDetails']);

			if ($id != NULL || $id != '') {
				$expepnseType['createdBy'] = $this->vendorId;
				$expepnseType['updatedBy'] = $this->vendorId;

				$id = $this->ExpepnseTypeModel->update($expepnseType);
				

			} else {
				$expepnseType['createdBy'] = $this->vendorId;
				$expepnseType['updatedBy'] = $this->vendorId;

				$id = $this->ExpepnseTypeModel->create($expepnseType);
				

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
			$this->global['pageName'] = 'expepnseType';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['expepnseTypeList'] = $this->ExpepnseTypeModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully ExpepnseType Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'expepnseType';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("expepnseType/expepnseTypeList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$expepnseTypeList = array();
		$limit = 10;
		$this->load->model('ExpepnseTypeModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$expepnseType = $this->ExpepnseTypeModel->findOne($id);

				if ($expepnseType != null) {
					$expepnseType->isApproved = "1";
					$id = $this->ExpepnseTypeModel->approve($expepnseType);
					
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
			$this->global['pageName'] = 'expepnseType';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['expepnseTypeList'] = $this->ExpepnseTypeModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully ExpepnseType Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'expepnseType';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("expepnseType/expepnseTypeList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('ExpepnseTypeModel');
		$this->load->helper('url');
		$expepnseType = array();
		try {
			$expepnseType = $this->ExpepnseTypeModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($expepnseType);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $expepnseType;
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
				$this->global['pageName'] = 'expepnseType';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'expepnseTypeReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				

				$expepnseType = array();
				try {
					$expepnseType = $this->ExpepnseTypeModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$expepnseType = $this->read($id);
				$data['expepnseType'] = $expepnseType;
				

				$this->loadReport("expepnseType/expepnseTypeReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("ExpepnseType_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('ExpepnseTypeModel');
		$this->load->helper('url');
		try {
			$expepnseTypeList = $this->ExpepnseTypeModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($expepnseTypeList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $expepnseTypeList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'expepnseType';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('ExpepnseTypeModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully ExpepnseType Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'expepnseType';
			$data['role'] = $this->role;

			$data['expepnseTypeList'] = $this->ExpepnseTypeModel->getAll();
			$this->loadForm("expepnseType/expepnseTypeListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("ExpepnseType_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'expepnseType';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('ExpepnseTypeModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$expepnseTypes = array();

				$expepnseTypes = $this->ExpepnseTypeModel->findOne($id);
				$this->ExpepnseTypeModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("expepnseTypeId",$id);
				

				$expepnseTypeList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['expepnseTypeList'] = $this->ExpepnseTypeModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully ExpepnseType Deleted.';
				$data['searchText'] = '';
				$data['role'] = $this->role;
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("expepnseType/expepnseTypeList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
