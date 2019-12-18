<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : JobPosting (JobPosting Controller)
 * Job Posting Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class JobPosting extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('JobPostingModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('JobPositionModel');
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
				$this->global['pageName'] = 'jobPosting';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['jobPostingList'] = $this->JobPostingModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'jobPosting';
				$this->loadMaterialViews("jobPosting/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'jobPosting';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['jobPostingList'] = $this->JobPostingModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'jobPosting';
				$this->loadForm("jobPosting/jobPostingList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'jobPosting';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['jobPositions'] = $this->JobPositionModel->getAll();

			/*$jobPosting = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'positionName'=>'',

'shortCode'=>'',

'description'=>'',

'jobPositionId'=>'',

'postingDate'=>'',

'expireDate'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$jobPosting = array();
				try {
					$jobPosting = $this->JobPostingModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$jobPosting = $this->read($id);
				$data['jobPosting'] = $jobPosting;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$jobPosting = new JobPostingModel();
				$jobPosting->createdDate  = date('Y-m-d H:i:s');
				$jobPosting->updatedDate  = date('Y-m-d H:i:s');

				//$jobPosting->field1 = "";
				$jobPosting->positionName = "";
$jobPosting->shortCode = "";
$jobPosting->description = "";
$jobPosting->jobPositionId = "";
$jobPosting->postingDate = "";
$jobPosting->expireDate = "";

				

				$jobPosting->createdBy = $this->vendorId;
				$jobPosting->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['jobPosting'] = $jobPosting;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'jobPosting';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("jobPosting/jobPostingForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New JobPosting';
			$this->global['pageName'] = 'jobPosting';
			$data['jobPositions'] = $this->JobPositionModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$jobPosting = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'positionName'=>'',

'shortCode'=>'',

'description'=>'',

'jobPositionId'=>'',

'postingDate'=>'',

'expireDate'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$jobPosting = array();
				try {
					$jobPosting = $this->JobPostingModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$jobPosting = $this->read($id);
				$data['jobPosting'] = $jobPosting;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$jobPosting = new JobPostingModel();
				// $jobPosting->field1 = "";
				
				$jobPosting->positionName = "";
$jobPosting->shortCode = "";
$jobPosting->description = "";
$jobPosting->jobPositionId = "";
$jobPosting->postingDate = "";
$jobPosting->expireDate = "";


				$data['jobPosting'] = $jobPosting;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'jobPosting';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("jobPosting/jobPostingFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$jobPostingList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$jobPosting = $this->input->post();

		$this->load->model('JobPostingModel');

		try {
			$id = $jobPosting['id'];


			//print_r($jobPosting['entityDetails']);

			if ($id != NULL || $id != '') {
				$jobPosting['createdBy'] = $this->vendorId;
				$jobPosting['updatedBy'] = $this->vendorId;

				$id = $this->JobPostingModel->update($jobPosting);
				

			} else {
				$jobPosting['createdBy'] = $this->vendorId;
				$jobPosting['updatedBy'] = $this->vendorId;

				$id = $this->JobPostingModel->create($jobPosting);
				

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
			$this->global['pageName'] = 'jobPosting';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['jobPostingList'] = $this->JobPostingModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully JobPosting Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'jobPosting';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("jobPosting/jobPostingList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$jobPostingList = array();
		$limit = 10;
		$this->load->model('JobPostingModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$jobPosting = $this->JobPostingModel->findOne($id);

				if ($jobPosting != null) {
					$jobPosting->isApproved = "1";
					$id = $this->JobPostingModel->approve($jobPosting);
					
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
			$this->global['pageName'] = 'jobPosting';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['jobPostingList'] = $this->JobPostingModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully JobPosting Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'jobPosting';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("jobPosting/jobPostingList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('JobPostingModel');
		$this->load->helper('url');
		$jobPosting = array();
		try {
			$jobPosting = $this->JobPostingModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($jobPosting);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $jobPosting;
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
				$this->global['pageName'] = 'jobPosting';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'jobPostingReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['jobPositions'] = $this->JobPositionModel->getAll();

				$jobPosting = array();
				try {
					$jobPosting = $this->JobPostingModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$jobPosting = $this->read($id);
				$data['jobPosting'] = $jobPosting;
				

				$this->loadReport("jobPosting/jobPostingReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("JobPosting_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('JobPostingModel');
		$this->load->helper('url');
		try {
			$jobPostingList = $this->JobPostingModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($jobPostingList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $jobPostingList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'jobPosting';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('JobPostingModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully JobPosting Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'jobPosting';

			$data['jobPostingList'] = $this->JobPostingModel->getAll();
			$this->loadForm("jobPosting/jobPostingListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("JobPosting_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'jobPosting';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('JobPostingModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$jobPostings = array();

				$jobPostings = $this->JobPostingModel->findOne($id);
				$this->JobPostingModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("jobPostingId",$id);
				

				$jobPostingList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['jobPostingList'] = $this->JobPostingModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully JobPosting Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("jobPosting/jobPostingList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
