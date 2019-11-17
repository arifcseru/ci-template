<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : JobApplication (JobApplication Controller)
 * Job Application Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class JobApplication extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('JobApplicationModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('ApplicantInfoModel');
$this->load->model('JobPostingModel');
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
				$this->global['pageName'] = 'jobApplication';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['jobApplicationList'] = $this->JobApplicationModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'jobApplication';
				$this->loadMaterialViews("jobApplication/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'jobApplication';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['jobApplicationList'] = $this->JobApplicationModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'jobApplication';
				$this->loadForm("jobApplication/jobApplicationList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'jobApplication';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['jobPostings'] = $this->JobPostingModel->getAll();

			/*$jobApplication = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'jobPositionId'=>'',

'firstName'=>'',

'lastName'=>'',

'applicantPhoneNo'=>'',

'email'=>'',

'expectedSalary'=>'',

'message'=>'',

'skills'=>'',

'resumeFileAddress'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$jobApplication = array();
				try {
					$jobApplication = $this->JobApplicationModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$jobApplication = $this->read($id);
				$data['jobApplication'] = $jobApplication;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$jobApplication = new JobApplicationModel();
				$jobApplication->createdDate  = date('Y-m-d H:i:s');
				$jobApplication->updatedDate  = date('Y-m-d H:i:s');

				//$jobApplication->field1 = "";
				$jobApplication->jobPositionId = "";
$jobApplication->firstName = "";
$jobApplication->lastName = "";
$jobApplication->applicantPhoneNo = "";
$jobApplication->email = "";
$jobApplication->expectedSalary = "";
$jobApplication->message = "";
$jobApplication->skills = "";
$jobApplication->resumeFileAddress = "";

				

				$jobApplication->createdBy = $this->vendorId;
				$jobApplication->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['jobApplication'] = $jobApplication;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'jobApplication';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("jobApplication/jobApplicationForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New JobApplication';
			$this->global['pageName'] = 'jobApplication';
			$data['jobPostings'] = $this->JobPostingModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$jobApplication = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'jobPositionId'=>'',

'firstName'=>'',

'lastName'=>'',

'applicantPhoneNo'=>'',

'email'=>'',

'expectedSalary'=>'',

'message'=>'',

'skills'=>'',

'resumeFileAddress'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$jobApplication = array();
				try {
					$jobApplication = $this->JobApplicationModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$jobApplication = $this->read($id);
				$data['jobApplication'] = $jobApplication;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$jobApplication = new JobApplicationModel();
				// $jobApplication->field1 = "";
				
				$jobApplication->jobPositionId = "";
$jobApplication->firstName = "";
$jobApplication->lastName = "";
$jobApplication->applicantPhoneNo = "";
$jobApplication->email = "";
$jobApplication->expectedSalary = "";
$jobApplication->message = "";
$jobApplication->skills = "";
$jobApplication->resumeFileAddress = "";


				$data['jobApplication'] = $jobApplication;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'jobApplication';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("jobApplication/jobApplicationFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$jobApplicationList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$jobApplication = $this->input->post();

		$this->load->model('JobApplicationModel');

		try {
			$id = $jobApplication['id'];


			//print_r($jobApplication['entityDetails']);

			if ($id != NULL || $id != '') {
				$jobApplication['createdBy'] = $this->vendorId;
				$jobApplication['updatedBy'] = $this->vendorId;

				$id = $this->JobApplicationModel->update($jobApplication);
				

			} else {
				$jobApplication['createdBy'] = $this->vendorId;
				$jobApplication['updatedBy'] = $this->vendorId;

				$id = $this->JobApplicationModel->create($jobApplication);
				

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
			$this->global['pageName'] = 'jobApplication';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['jobApplicationList'] = $this->JobApplicationModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully JobApplication Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'jobApplication';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("jobApplication/jobApplicationList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$jobApplicationList = array();
		$limit = 10;
		$this->load->model('JobApplicationModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$jobApplication = $this->JobApplicationModel->findOne($id);

				if ($jobApplication != null) {
					$jobApplication->isApproved = "1";
					$id = $this->JobApplicationModel->approve($jobApplication);
					$applicantInfo = $this->ApplicantInfoModel->findOneBy('ApplicantInfo',$jobApplication->ApplicantInfo);
if($applicantInfo !=null) {
$applicantInfo = (array) $applicantInfo;
} else {
$applicantInfo = array();
}
$applicantInfo['jobApplicationId'] = null;
$applicantInfo['enrollmentId'] = null;
$applicantInfo['firstName'] = null;
$applicantInfo['lastName'] = null;
$applicantInfo['fatherName'] = null;
$applicantInfo['motherName'] = null;
$applicantInfo['spouseName'] = null;
$applicantInfo['nationality'] = null;
$applicantInfo['gender'] = null;
$applicantInfo['age'] = null;
$applicantInfo['profilePic'] = null;
$applicantInfo['signature'] = null;
$applicantInfo['nidImage'] = null;
$applicantInfo['eduQualification'] = null;
$applicantInfo['bloodGroup'] = null;
$applicantInfo['religion'] = null;
$applicantInfo['address'] = null;
$applicantInfo['streetAddress'] = null;
$applicantInfo['district'] = null;
$applicantInfo['policeStation'] = null;
$applicantInfo['postCode'] = null;
$applicantInfo['chairmanName'] = null;
$applicantInfo['contactNo'] = null;
$applicantInfo['InterviewInfo'] = null;
$applicantInfo['TraineeCourses'] = null;
$applicantInfo['postingId'] = null;
$applicantInfo['email'] = null;
$applicantInfo['password'] = null;
$applicantInfo['isJoined'] = null;
$applicantInfo['ApplicantInfo'] = $jobApplication->ApplicantInfo;
$applicantInfo['createdBy'] = $this->vendorId;
				$applicantInfo['updatedBy'] = $this->vendorId;
	            $applicantInfo['jobApplicationId'] = $jobApplication->id;
	            $this->ApplicantInfoModel->create($applicantInfo);

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
			$this->global['pageName'] = 'jobApplication';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['jobApplicationList'] = $this->JobApplicationModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully JobApplication Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'jobApplication';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("jobApplication/jobApplicationList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('JobApplicationModel');
		$this->load->helper('url');
		$jobApplication = array();
		try {
			$jobApplication = $this->JobApplicationModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($jobApplication);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $jobApplication;
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
				$this->global['pageName'] = 'jobApplication';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'jobApplicationReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['jobPostings'] = $this->JobPostingModel->getAll();

				$jobApplication = array();
				try {
					$jobApplication = $this->JobApplicationModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$jobApplication = $this->read($id);
				$data['jobApplication'] = $jobApplication;
				

				$this->loadReport("jobApplication/jobApplicationReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("JobApplication_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('JobApplicationModel');
		$this->load->helper('url');
		try {
			$jobApplicationList = $this->JobApplicationModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($jobApplicationList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $jobApplicationList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'jobApplication';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('JobApplicationModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully JobApplication Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'jobApplication';

			$data['jobApplicationList'] = $this->JobApplicationModel->getAll();
			$this->loadForm("jobApplication/jobApplicationListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("JobApplication_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'jobApplication';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('JobApplicationModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$jobApplications = array();

				$jobApplications = $this->JobApplicationModel->findOne($id);
				$this->JobApplicationModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("jobApplicationId",$id);
				

				$jobApplicationList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['jobApplicationList'] = $this->JobApplicationModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully JobApplication Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("jobApplication/jobApplicationList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
