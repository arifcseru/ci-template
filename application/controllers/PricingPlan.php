<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : PricingPlan (PricingPlan Controller)
 * Pricing Plan Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class PricingPlan extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('PricingPlanModel');
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
				$this->global['pageName'] = 'pricingPlan';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['pricingPlanList'] = $this->PricingPlanModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'pricingPlan';
				$this->loadMaterialViews("pricingPlan/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'pricingPlan';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['pricingPlanList'] = $this->PricingPlanModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'pricingPlan';
				$this->loadForm("pricingPlan/pricingPlanList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'pricingPlan';
			//$data['roles'] = $this->user_model->getUserRoles();
			

			/*$pricingPlan = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'type'=>'',

'rate'=>'',

'unit'=>'',

'buyLink'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$pricingPlan = array();
				try {
					$pricingPlan = $this->PricingPlanModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$pricingPlan = $this->read($id);
				$data['pricingPlan'] = $pricingPlan;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$pricingPlan = new PricingPlanModel();
				$pricingPlan->createdDate  = date('Y-m-d H:i:s');
				$pricingPlan->updatedDate  = date('Y-m-d H:i:s');

				//$pricingPlan->field1 = "";
				$pricingPlan->type = "";
$pricingPlan->rate = "";
$pricingPlan->unit = "";
$pricingPlan->buyLink = "";

				

				$pricingPlan->createdBy = $this->vendorId;
				$pricingPlan->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['pricingPlan'] = $pricingPlan;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'pricingPlan';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("pricingPlan/pricingPlanForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New PricingPlan';
			$this->global['pageName'] = 'pricingPlan';
			
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$pricingPlan = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'type'=>'',

'rate'=>'',

'unit'=>'',

'buyLink'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$pricingPlan = array();
				try {
					$pricingPlan = $this->PricingPlanModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$pricingPlan = $this->read($id);
				$data['pricingPlan'] = $pricingPlan;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$pricingPlan = new PricingPlanModel();
				// $pricingPlan->field1 = "";
				
				$pricingPlan->type = "";
$pricingPlan->rate = "";
$pricingPlan->unit = "";
$pricingPlan->buyLink = "";


				$data['pricingPlan'] = $pricingPlan;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'pricingPlan';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("pricingPlan/pricingPlanFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$pricingPlanList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$pricingPlan = $this->input->post();

		$this->load->model('PricingPlanModel');

		try {
			$id = $pricingPlan['id'];


			//print_r($pricingPlan['entityDetails']);

			if ($id != NULL || $id != '') {
				$pricingPlan['createdBy'] = $this->vendorId;
				$pricingPlan['updatedBy'] = $this->vendorId;

				$id = $this->PricingPlanModel->update($pricingPlan);
				

			} else {
				$pricingPlan['createdBy'] = $this->vendorId;
				$pricingPlan['updatedBy'] = $this->vendorId;

				$id = $this->PricingPlanModel->create($pricingPlan);
				

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
			$this->global['pageName'] = 'pricingPlan';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['pricingPlanList'] = $this->PricingPlanModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully PricingPlan Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'pricingPlan';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("pricingPlan/pricingPlanList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$pricingPlanList = array();
		$limit = 10;
		$this->load->model('PricingPlanModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$pricingPlan = $this->PricingPlanModel->findOne($id);

				if ($pricingPlan != null) {
					$pricingPlan->isApproved = "1";
					$id = $this->PricingPlanModel->approve($pricingPlan);
					
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
			$this->global['pageName'] = 'pricingPlan';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['pricingPlanList'] = $this->PricingPlanModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully PricingPlan Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'pricingPlan';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("pricingPlan/pricingPlanList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('PricingPlanModel');
		$this->load->helper('url');
		$pricingPlan = array();
		try {
			$pricingPlan = $this->PricingPlanModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($pricingPlan);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $pricingPlan;
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
				$this->global['pageName'] = 'pricingPlan';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'pricingPlanReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				

				$pricingPlan = array();
				try {
					$pricingPlan = $this->PricingPlanModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$pricingPlan = $this->read($id);
				$data['pricingPlan'] = $pricingPlan;
				

				$this->loadReport("pricingPlan/pricingPlanReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("PricingPlan_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('PricingPlanModel');
		$this->load->helper('url');
		try {
			$pricingPlanList = $this->PricingPlanModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($pricingPlanList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $pricingPlanList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'pricingPlan';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('PricingPlanModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully PricingPlan Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'pricingPlan';

			$data['pricingPlanList'] = $this->PricingPlanModel->getAll();
			$this->loadForm("pricingPlan/pricingPlanListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("PricingPlan_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'pricingPlan';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('PricingPlanModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$pricingPlans = array();

				$pricingPlans = $this->PricingPlanModel->findOne($id);
				$this->PricingPlanModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("pricingPlanId",$id);
				

				$pricingPlanList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['pricingPlanList'] = $this->PricingPlanModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully PricingPlan Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("pricingPlan/pricingPlanList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
