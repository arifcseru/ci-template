<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : EmployeeSeparation (EmployeeSeparation Controller)
 * Employee Separation Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class EmployeeSeparation extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('EmployeeSeparationModel');
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
				$this->global['pageName'] = 'employeeSeparation';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['employeeSeparationList'] = $this->EmployeeSeparationModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'employeeSeparation';
				$this->loadMaterialViews("employeeSeparation/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'employeeSeparation';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['employeeSeparationList'] = $this->EmployeeSeparationModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'employeeSeparation';
				$this->loadForm("employeeSeparation/employeeSeparationList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'employeeSeparation';
			//$data['roles'] = $this->user_model->getUserRoles();
			

			/*$employeeSeparation = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'name'=>'',

'separationMessage'=>'',

'separationDate'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$employeeSeparation = array();
				try {
					$employeeSeparation = $this->EmployeeSeparationModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$employeeSeparation = $this->read($id);
				$data['employeeSeparation'] = $employeeSeparation;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$employeeSeparation = new EmployeeSeparationModel();
				$employeeSeparation->createdDate  = date('Y-m-d H:i:s');
				$employeeSeparation->updatedDate  = date('Y-m-d H:i:s');

				//$employeeSeparation->field1 = "";
				$employeeSeparation->name = "";
$employeeSeparation->separationMessage = "";
$employeeSeparation->separationDate = "";

				

				$employeeSeparation->createdBy = $this->vendorId;
				$employeeSeparation->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['employeeSeparation'] = $employeeSeparation;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'employeeSeparation';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("employeeSeparation/employeeSeparationForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New EmployeeSeparation';
			$this->global['pageName'] = 'employeeSeparation';
			
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$employeeSeparation = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'name'=>'',

'separationMessage'=>'',

'separationDate'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$employeeSeparation = array();
				try {
					$employeeSeparation = $this->EmployeeSeparationModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$employeeSeparation = $this->read($id);
				$data['employeeSeparation'] = $employeeSeparation;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$employeeSeparation = new EmployeeSeparationModel();
				// $employeeSeparation->field1 = "";
				
				$employeeSeparation->name = "";
$employeeSeparation->separationMessage = "";
$employeeSeparation->separationDate = "";


				$data['employeeSeparation'] = $employeeSeparation;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'employeeSeparation';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("employeeSeparation/employeeSeparationFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$employeeSeparationList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$employeeSeparation = $this->input->post();

		$this->load->model('EmployeeSeparationModel');

		try {
			$id = $employeeSeparation['id'];


			//print_r($employeeSeparation['entityDetails']);

			if ($id != NULL || $id != '') {
				$employeeSeparation['createdBy'] = $this->vendorId;
				$employeeSeparation['updatedBy'] = $this->vendorId;

				$id = $this->EmployeeSeparationModel->update($employeeSeparation);
				

			} else {
				$employeeSeparation['createdBy'] = $this->vendorId;
				$employeeSeparation['updatedBy'] = $this->vendorId;

				$id = $this->EmployeeSeparationModel->create($employeeSeparation);
				

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
			$this->global['pageName'] = 'employeeSeparation';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['employeeSeparationList'] = $this->EmployeeSeparationModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully EmployeeSeparation Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'employeeSeparation';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("employeeSeparation/employeeSeparationList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$employeeSeparationList = array();
		$limit = 10;
		$this->load->model('EmployeeSeparationModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$employeeSeparation = $this->EmployeeSeparationModel->findOne($id);

				if ($employeeSeparation != null) {
					$employeeSeparation->isApproved = "1";
					$id = $this->EmployeeSeparationModel->approve($employeeSeparation);
					
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
			$this->global['pageName'] = 'employeeSeparation';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['employeeSeparationList'] = $this->EmployeeSeparationModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully EmployeeSeparation Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'employeeSeparation';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("employeeSeparation/employeeSeparationList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('EmployeeSeparationModel');
		$this->load->helper('url');
		$employeeSeparation = array();
		try {
			$employeeSeparation = $this->EmployeeSeparationModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($employeeSeparation);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $employeeSeparation;
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
				$this->global['pageName'] = 'employeeSeparation';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'employeeSeparationReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				

				$employeeSeparation = array();
				try {
					$employeeSeparation = $this->EmployeeSeparationModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$employeeSeparation = $this->read($id);
				$data['employeeSeparation'] = $employeeSeparation;
				

				$this->loadReport("employeeSeparation/employeeSeparationReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("EmployeeSeparation_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('EmployeeSeparationModel');
		$this->load->helper('url');
		try {
			$employeeSeparationList = $this->EmployeeSeparationModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($employeeSeparationList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $employeeSeparationList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'employeeSeparation';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('EmployeeSeparationModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully EmployeeSeparation Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'employeeSeparation';

			$data['employeeSeparationList'] = $this->EmployeeSeparationModel->getAll();
			$this->loadForm("employeeSeparation/employeeSeparationListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("EmployeeSeparation_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'employeeSeparation';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('EmployeeSeparationModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$employeeSeparations = array();

				$employeeSeparations = $this->EmployeeSeparationModel->findOne($id);
				$this->EmployeeSeparationModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("employeeSeparationId",$id);
				

				$employeeSeparationList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['employeeSeparationList'] = $this->EmployeeSeparationModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully EmployeeSeparation Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("employeeSeparation/employeeSeparationList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
