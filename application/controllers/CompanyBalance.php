<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : CompanyBalance (CompanyBalance Controller)
 * Company Balance Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class CompanyBalance extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('CompanyBalanceModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('CompanyProfileModel');
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
				$this->global['pageName'] = 'companyBalance';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['companyBalanceList'] = $this->CompanyBalanceModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'companyBalance';
				$this->loadMaterialViews("companyBalance/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'companyBalance';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['companyBalanceList'] = $this->CompanyBalanceModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'companyBalance';
				$this->loadForm("companyBalance/companyBalanceList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'companyBalance';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['companyProfiles'] = $this->CompanyProfileModel->getAll();

			/*$companyBalance = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'companyProfileId'=>'',

'initialBalance'=>'',

'currentBalance'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$companyBalance = array();
				try {
					$companyBalance = $this->CompanyBalanceModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$companyBalance = $this->read($id);
				$data['companyBalance'] = $companyBalance;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$companyBalance = new CompanyBalanceModel();
				$companyBalance->createdDate  = date('Y-m-d H:i:s');
				$companyBalance->updatedDate  = date('Y-m-d H:i:s');

				//$companyBalance->field1 = "";
				$companyBalance->companyProfileId = "";
$companyBalance->initialBalance = "";
$companyBalance->currentBalance = "";

				

				$companyBalance->createdBy = $this->vendorId;
				$companyBalance->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['companyBalance'] = $companyBalance;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'companyBalance';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("companyBalance/companyBalanceForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New CompanyBalance';
			$this->global['pageName'] = 'companyBalance';
			$data['companyProfiles'] = $this->CompanyProfileModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$companyBalance = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'companyProfileId'=>'',

'initialBalance'=>'',

'currentBalance'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$companyBalance = array();
				try {
					$companyBalance = $this->CompanyBalanceModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$companyBalance = $this->read($id);
				$data['companyBalance'] = $companyBalance;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$companyBalance = new CompanyBalanceModel();
				// $companyBalance->field1 = "";
				
				$companyBalance->companyProfileId = "";
$companyBalance->initialBalance = "";
$companyBalance->currentBalance = "";


				$data['companyBalance'] = $companyBalance;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'companyBalance';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("companyBalance/companyBalanceFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$companyBalanceList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$companyBalance = $this->input->post();

		$this->load->model('CompanyBalanceModel');

		try {
			$id = $companyBalance['id'];


			//print_r($companyBalance['entityDetails']);

			if ($id != NULL || $id != '') {
				$companyBalance['createdBy'] = $this->vendorId;
				$companyBalance['updatedBy'] = $this->vendorId;

				$id = $this->CompanyBalanceModel->update($companyBalance);
				

			} else {
				$companyBalance['createdBy'] = $this->vendorId;
				$companyBalance['updatedBy'] = $this->vendorId;

				$id = $this->CompanyBalanceModel->create($companyBalance);
				

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
			$this->global['pageName'] = 'companyBalance';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['companyBalanceList'] = $this->CompanyBalanceModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully CompanyBalance Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'companyBalance';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("companyBalance/companyBalanceList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$companyBalanceList = array();
		$limit = 10;
		$this->load->model('CompanyBalanceModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$companyBalance = $this->CompanyBalanceModel->findOne($id);

				if ($companyBalance != null) {
					$companyBalance->isApproved = "1";
					$id = $this->CompanyBalanceModel->approve($companyBalance);
					
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
			$this->global['pageName'] = 'companyBalance';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['companyBalanceList'] = $this->CompanyBalanceModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully CompanyBalance Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'companyBalance';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("companyBalance/companyBalanceList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('CompanyBalanceModel');
		$this->load->helper('url');
		$companyBalance = array();
		try {
			$companyBalance = $this->CompanyBalanceModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($companyBalance);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $companyBalance;
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
				$this->global['pageName'] = 'companyBalance';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'companyBalanceReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['companyProfiles'] = $this->CompanyProfileModel->getAll();

				$companyBalance = array();
				try {
					$companyBalance = $this->CompanyBalanceModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$companyBalance = $this->read($id);
				$data['companyBalance'] = $companyBalance;
				

				$this->loadReport("companyBalance/companyBalanceReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("CompanyBalance_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('CompanyBalanceModel');
		$this->load->helper('url');
		try {
			$companyBalanceList = $this->CompanyBalanceModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($companyBalanceList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $companyBalanceList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'companyBalance';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('CompanyBalanceModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully CompanyBalance Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'companyBalance';
			$data['role'] = $this->role;

			$data['companyBalanceList'] = $this->CompanyBalanceModel->getAll();
			$this->loadForm("companyBalance/companyBalanceListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("CompanyBalance_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'companyBalance';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('CompanyBalanceModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$companyBalances = array();

				$companyBalances = $this->CompanyBalanceModel->findOne($id);
				$this->CompanyBalanceModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("companyBalanceId",$id);
				

				$companyBalanceList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['companyBalanceList'] = $this->CompanyBalanceModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully CompanyBalance Deleted.';
				$data['searchText'] = '';
				$data['role'] = $this->role;
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("companyBalance/companyBalanceList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
