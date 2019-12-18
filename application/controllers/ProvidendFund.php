<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : ProvidendFund (ProvidendFund Controller)
 * Providend Fund Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class ProvidendFund extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('ProvidendFundModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('EmployeeModel');$this->load->model('PfDetailsModel');$this->load->model('EmployeeModel');
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
				$this->global['pageName'] = 'providendFund';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['providendFundList'] = $this->ProvidendFundModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'providendFund';
				$this->loadMaterialViews("providendFund/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'providendFund';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['providendFundList'] = $this->ProvidendFundModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'providendFund';
				$this->loadForm("providendFund/providendFundList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'providendFund';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['employees'] = $this->EmployeeModel->getAll();

			/*$providendFund = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'monthlyAmount'=>'',

'installmentMonths'=>'',

'PfDetails'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$providendFund = array();
				try {
					$providendFund = $this->ProvidendFundModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$providendFund = $this->read($id);
				$data['providendFund'] = $providendFund;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['pfDetailss'] = $this->PfDetailsModel->findBy('providendFundId',$id);$data['employees'] = $this->EmployeeModel->getAll();
			} else {
				$providendFund = new ProvidendFundModel();
				$providendFund->createdDate  = date('Y-m-d H:i:s');
				$providendFund->updatedDate  = date('Y-m-d H:i:s');

				//$providendFund->field1 = "";
				$providendFund->employeeId = "";
$providendFund->monthlyAmount = "";
$providendFund->installmentMonths = "";
$providendFund->PfDetails = "";

				$data['pfDetailss'] = $this->PfDetailsModel->findBy('providendFundId',$id);$data['employees'] = $this->EmployeeModel->getAll();

				$providendFund->createdBy = $this->vendorId;
				$providendFund->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['providendFund'] = $providendFund;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'providendFund';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("providendFund/providendFundForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New ProvidendFund';
			$this->global['pageName'] = 'providendFund';
			$data['employees'] = $this->EmployeeModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$providendFund = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'monthlyAmount'=>'',

'installmentMonths'=>'',

'PfDetails'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$providendFund = array();
				try {
					$providendFund = $this->ProvidendFundModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$providendFund = $this->read($id);
				$data['providendFund'] = $providendFund;
				$data['pfDetailss'] = $this->PfDetailsModel->findBy('providendFundId',$id);$data['employees'] = $this->EmployeeModel->getAll();
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$providendFund = new ProvidendFundModel();
				// $providendFund->field1 = "";
				$data['pfDetailss'] = $this->PfDetailsModel->findBy('providendFundId',$id);$data['employees'] = $this->EmployeeModel->getAll();
				$providendFund->employeeId = "";
$providendFund->monthlyAmount = "";
$providendFund->installmentMonths = "";
$providendFund->PfDetails = "";


				$data['providendFund'] = $providendFund;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'providendFund';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("providendFund/providendFundFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$providendFundList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$providendFund = $this->input->post();

		$this->load->model('ProvidendFundModel');

		try {
			$id = $providendFund['id'];


			//print_r($providendFund['entityDetails']);

			if ($id != NULL || $id != '') {
				$providendFund['createdBy'] = $this->vendorId;
				$providendFund['updatedBy'] = $this->vendorId;

				$id = $this->ProvidendFundModel->update($providendFund);
				$pfDetailsList = $providendFund['pfDetails'];
	            $this->PfDetailsModel->deleteBy("providendFundId",$id);
	            if(!empty($pfDetailsList)){
	                foreach ($pfDetailsList as $key => $pfDetails) {
						$pfDetails['createdBy'] = $this->vendorId;						$pfDetails['updatedBy'] = $this->vendorId;	                    $pfDetails['providendFundId'] = $id;
	                    $this->PfDetailsModel->create($pfDetails);
	                }
	            }

			} else {
				$providendFund['createdBy'] = $this->vendorId;
				$providendFund['updatedBy'] = $this->vendorId;

				$id = $this->ProvidendFundModel->create($providendFund);
				$pfDetailsList = $providendFund['pfDetails'];
	            
	            if(!empty($pfDetailsList)){
	                foreach ($pfDetailsList as $key => $pfDetails) {
						$pfDetails['createdBy'] = $this->vendorId;						$pfDetails['updatedBy'] = $this->vendorId;	                    $pfDetails['providendFundId'] = $id;
	                    $this->PfDetailsModel->create($pfDetails);
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
			$this->global['pageName'] = 'providendFund';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['providendFundList'] = $this->ProvidendFundModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully ProvidendFund Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'providendFund';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("providendFund/providendFundList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$providendFundList = array();
		$limit = 10;
		$this->load->model('ProvidendFundModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$providendFund = $this->ProvidendFundModel->findOne($id);

				if ($providendFund != null) {
					$providendFund->isApproved = "1";
					$id = $this->ProvidendFundModel->approve($providendFund);
					
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
			$this->global['pageName'] = 'providendFund';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['providendFundList'] = $this->ProvidendFundModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully ProvidendFund Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'providendFund';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("providendFund/providendFundList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('ProvidendFundModel');
		$this->load->helper('url');
		$providendFund = array();
		try {
			$providendFund = $this->ProvidendFundModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($providendFund);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $providendFund;
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
				$this->global['pageName'] = 'providendFund';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'providendFundReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['employees'] = $this->EmployeeModel->getAll();

				$providendFund = array();
				try {
					$providendFund = $this->ProvidendFundModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$providendFund = $this->read($id);
				$data['providendFund'] = $providendFund;
				$data['pfDetailss'] = $this->PfDetailsModel->findBy('providendFundId',$id);$data['employees'] = $this->EmployeeModel->getAll();

				$this->loadReport("providendFund/providendFundReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("ProvidendFund_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('ProvidendFundModel');
		$this->load->helper('url');
		try {
			$providendFundList = $this->ProvidendFundModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($providendFundList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $providendFundList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'providendFund';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('ProvidendFundModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully ProvidendFund Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'providendFund';

			$data['providendFundList'] = $this->ProvidendFundModel->getAll();
			$this->loadForm("providendFund/providendFundListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("ProvidendFund_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'providendFund';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('ProvidendFundModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$providendFunds = array();

				$providendFunds = $this->ProvidendFundModel->findOne($id);
				$this->ProvidendFundModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("providendFundId",$id);
				$this->PfDetailsModel->deleteBy("providendFundId",$id);

				$providendFundList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['providendFundList'] = $this->ProvidendFundModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully ProvidendFund Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("providendFund/providendFundList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
