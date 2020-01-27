<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : Branch (Branch Controller)
 * Branch Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class Branch extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('BranchModel');
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
				$this->global['pageName'] = 'branch';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['branchList'] = $this->BranchModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->global['pageName'] = 'branch';
				$this->loadMaterialViews("branch/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'branch';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['branchList'] = $this->BranchModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'branch';
				$this->loadForm("branch/branchList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'branch';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['companyProfiles'] = $this->CompanyProfileModel->getAll();

			/*$branch = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'companyProfileId'=>'',

'name'=>'',

'address'=>'',

'establishedDate'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$branch = array();
				try {
					$branch = $this->BranchModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$branch = $this->read($id);
				$data['branch'] = $branch;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$branch = new BranchModel();
				$branch->createdDate  = date('Y-m-d H:i:s');
				$branch->updatedDate  = date('Y-m-d H:i:s');

				//$branch->field1 = "";
				$branch->companyProfileId = "";
				$branch->name = "";
				$branch->address = "";
				$branch->establishedDate = "";



				$branch->createdBy = $this->vendorId;
				$branch->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['branch'] = $branch;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'branch';

				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;

				$this->loadForm("branch/branchForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New Branch';
			$this->global['pageName'] = 'branch';
			$data['companyProfiles'] = $this->CompanyProfileModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$branch = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'companyProfileId'=>'',

'name'=>'',

'address'=>'',

'establishedDate'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$branch = array();
				try {
					$branch = $this->BranchModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$branch = $this->read($id);
				$data['branch'] = $branch;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$branch = new BranchModel();
				// $branch->field1 = "";

				$branch->companyProfileId = "";
				$branch->name = "";
				$branch->address = "";
				$branch->establishedDate = "";


				$data['branch'] = $branch;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'branch';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("branch/branchFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$branchList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$branch = $this->input->post();

		$this->load->model('BranchModel');

		try {
			$id = $branch['id'];


			//print_r($branch['entityDetails']);

			if ($id != NULL || $id != '') {
				$branch['createdBy'] = $this->vendorId;
				$branch['updatedBy'] = $this->vendorId;

				$id = $this->BranchModel->update($branch);
			} else {
				$branch['createdBy'] = $this->vendorId;
				$branch['updatedBy'] = $this->vendorId;

				$id = $this->BranchModel->create($branch);
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
			$this->global['pageName'] = 'branch';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['branchList'] = $this->BranchModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully Branch Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'branch';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("branch/branchList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$branchList = array();
		$limit = 10;
		$this->load->model('BranchModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$branch = $this->BranchModel->findOne($id);

				if ($branch != null) {
					$branch->isApproved = "1";
					$id = $this->BranchModel->approve($branch);
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
			$this->global['pageName'] = 'branch';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['branchList'] = $this->BranchModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully Branch Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'branch';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("branch/branchList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('BranchModel');
		$this->load->helper('url');
		$branch = array();
		try {
			$branch = $this->BranchModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($branch);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}

		return $branch;
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
				$this->global['pageName'] = 'branch';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'branchReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['companyProfiles'] = $this->CompanyProfileModel->getAll();

				$branch = array();
				try {
					$branch = $this->BranchModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$branch = $this->read($id);
				$data['branch'] = $branch;


				$this->loadReport("branch/branchReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("Branch_" . $id . "_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start, $limit)
	{
		$this->load->model('BranchModel');
		$this->load->helper('url');
		try {
			$branchList = $this->BranchModel->getPaginated($start, $limit);
			header('Content-type: application/json');
			echo json_encode($branchList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $branchList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'branch';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('BranchModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully Branch Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'branch';
			$data['role'] = $this->role;

			$data['branchList'] = $this->BranchModel->getAll();
			$this->loadForm("branch/branchListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("Branch_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'branch';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('BranchModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$branchs = array();

				$branchs = $this->BranchModel->findOne($id);
				$this->BranchModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("branchId",$id);


				$branchList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['branchList'] = $this->BranchModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully Branch Deleted.';
				$data['searchText'] = '';
				$data['role'] = $this->role;
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("branch/branchList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
