<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : JobPosition (JobPosition Controller)
 * Job Position Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class JobPosition extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('JobPositionModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('DepartmentModel');
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
				$this->global['pageName'] = 'jobPosition';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['jobPositionList'] = $this->JobPositionModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'jobPosition';
				$this->loadMaterialViews("jobPosition/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'jobPosition';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['jobPositionList'] = $this->JobPositionModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'jobPosition';
				$this->loadForm("jobPosition/jobPositionList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'jobPosition';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['departments'] = $this->DepartmentModel->getAll();

			/*$jobPosition = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'departmentId'=>'',

'positionName'=>'',

'shortCode'=>'',

'description'=>'',

'isActive'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$jobPosition = array();
				try {
					$jobPosition = $this->JobPositionModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$jobPosition = $this->read($id);
				$data['jobPosition'] = $jobPosition;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$jobPosition = new JobPositionModel();
				$jobPosition->createdDate  = date('Y-m-d H:i:s');
				$jobPosition->updatedDate  = date('Y-m-d H:i:s');

				//$jobPosition->field1 = "";
				$jobPosition->departmentId = "";
$jobPosition->positionName = "";
$jobPosition->shortCode = "";
$jobPosition->description = "";
$jobPosition->isActive = "";

				

				$jobPosition->createdBy = $this->vendorId;
				$jobPosition->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['jobPosition'] = $jobPosition;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'jobPosition';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("jobPosition/jobPositionForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New JobPosition';
			$this->global['pageName'] = 'jobPosition';
			$data['departments'] = $this->DepartmentModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$jobPosition = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'departmentId'=>'',

'positionName'=>'',

'shortCode'=>'',

'description'=>'',

'isActive'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$jobPosition = array();
				try {
					$jobPosition = $this->JobPositionModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$jobPosition = $this->read($id);
				$data['jobPosition'] = $jobPosition;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$jobPosition = new JobPositionModel();
				// $jobPosition->field1 = "";
				
				$jobPosition->departmentId = "";
$jobPosition->positionName = "";
$jobPosition->shortCode = "";
$jobPosition->description = "";
$jobPosition->isActive = "";


				$data['jobPosition'] = $jobPosition;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'jobPosition';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("jobPosition/jobPositionFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$jobPositionList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$jobPosition = $this->input->post();

		$this->load->model('JobPositionModel');

		try {
			$id = $jobPosition['id'];


			//print_r($jobPosition['entityDetails']);

			if ($id != NULL || $id != '') {
				$jobPosition['createdBy'] = $this->vendorId;
				$jobPosition['updatedBy'] = $this->vendorId;

				$id = $this->JobPositionModel->update($jobPosition);
				

			} else {
				$jobPosition['createdBy'] = $this->vendorId;
				$jobPosition['updatedBy'] = $this->vendorId;

				$id = $this->JobPositionModel->create($jobPosition);
				

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
			$this->global['pageName'] = 'jobPosition';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['jobPositionList'] = $this->JobPositionModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully JobPosition Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'jobPosition';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("jobPosition/jobPositionList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$jobPositionList = array();
		$limit = 10;
		$this->load->model('JobPositionModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$jobPosition = $this->JobPositionModel->findOne($id);

				if ($jobPosition != null) {
					$jobPosition->isApproved = "1";
					$id = $this->JobPositionModel->approve($jobPosition);
					
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
			$this->global['pageName'] = 'jobPosition';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['jobPositionList'] = $this->JobPositionModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully JobPosition Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'jobPosition';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("jobPosition/jobPositionList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('JobPositionModel');
		$this->load->helper('url');
		$jobPosition = array();
		try {
			$jobPosition = $this->JobPositionModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($jobPosition);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $jobPosition;
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
				$this->global['pageName'] = 'jobPosition';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'jobPositionReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['departments'] = $this->DepartmentModel->getAll();

				$jobPosition = array();
				try {
					$jobPosition = $this->JobPositionModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$jobPosition = $this->read($id);
				$data['jobPosition'] = $jobPosition;
				

				$this->loadReport("jobPosition/jobPositionReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("JobPosition_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('JobPositionModel');
		$this->load->helper('url');
		try {
			$jobPositionList = $this->JobPositionModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($jobPositionList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $jobPositionList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'jobPosition';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('JobPositionModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully JobPosition Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'jobPosition';
			$data['role'] = $this->role;

			$data['jobPositionList'] = $this->JobPositionModel->getAll();
			$this->loadForm("jobPosition/jobPositionListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("JobPosition_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'jobPosition';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('JobPositionModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$jobPositions = array();

				$jobPositions = $this->JobPositionModel->findOne($id);
				$this->JobPositionModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("jobPositionId",$id);
				

				$jobPositionList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['jobPositionList'] = $this->JobPositionModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully JobPosition Deleted.';
				$data['searchText'] = '';
				$data['role'] = $this->role;
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("jobPosition/jobPositionList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
