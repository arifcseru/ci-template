<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : ApplicantInfo (ApplicantInfo Controller)
 * Applicant Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class ApplicantInfo extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('ApplicantInfoModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('JobApplicationModel');$this->load->model('InterviewInfoModel');$this->load->model('EmployeeModel');$this->load->model('TraineeCoursesModel');$this->load->model('CourseModel');$this->load->model('JobPostingModel');
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
				$this->global['pageName'] = 'applicantInfo';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['applicantInfoList'] = $this->ApplicantInfoModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'applicantInfo';
				$this->loadMaterialViews("applicantInfo/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'applicantInfo';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['applicantInfoList'] = $this->ApplicantInfoModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'applicantInfo';
				$this->loadForm("applicantInfo/applicantInfoList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'applicantInfo';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['jobApplications'] = $this->JobApplicationModel->getAll();$data['jobPostings'] = $this->JobPostingModel->getAll();

			/*$applicantInfo = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'jobApplicationId'=>'',

'enrollmentId'=>'',

'firstName'=>'',

'lastName'=>'',

'fatherName'=>'',

'motherName'=>'',

'spouseName'=>'',

'nationality'=>'',

'gender'=>'',

'age'=>'',

'profilePic'=>'',

'signature'=>'',

'nidImage'=>'',

'eduQualification'=>'',

'bloodGroup'=>'',

'religion'=>'',

'address'=>'',

'streetAddress'=>'',

'district'=>'',

'policeStation'=>'',

'postCode'=>'',

'chairmanName'=>'',

'contactNo'=>'',

'InterviewInfo'=>'',

'TraineeCourses'=>'',

'postingId'=>'',

'email'=>'',

'password'=>'',

'isJoined'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$applicantInfo = array();
				try {
					$applicantInfo = $this->ApplicantInfoModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$applicantInfo = $this->read($id);
				$data['applicantInfo'] = $applicantInfo;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['interviewInfos'] = $this->InterviewInfoModel->findBy('applicantInfoId',$id);$data['employees'] = $this->EmployeeModel->getAll();$data['traineeCoursess'] = $this->TraineeCoursesModel->findBy('applicantInfoId',$id);$data['courses'] = $this->CourseModel->getAll();
			} else {
				$applicantInfo = new ApplicantInfoModel();
				$applicantInfo->createdDate  = date('Y-m-d H:i:s');
				$applicantInfo->updatedDate  = date('Y-m-d H:i:s');

				//$applicantInfo->field1 = "";
				$applicantInfo->jobApplicationId = "";
$applicantInfo->enrollmentId = "";
$applicantInfo->firstName = "";
$applicantInfo->lastName = "";
$applicantInfo->fatherName = "";
$applicantInfo->motherName = "";
$applicantInfo->spouseName = "";
$applicantInfo->nationality = "";
$applicantInfo->gender = "";
$applicantInfo->age = "";
$applicantInfo->profilePic = "";
$applicantInfo->signature = "";
$applicantInfo->nidImage = "";
$applicantInfo->eduQualification = "";
$applicantInfo->bloodGroup = "";
$applicantInfo->religion = "";
$applicantInfo->address = "";
$applicantInfo->streetAddress = "";
$applicantInfo->district = "";
$applicantInfo->policeStation = "";
$applicantInfo->postCode = "";
$applicantInfo->chairmanName = "";
$applicantInfo->contactNo = "";
$applicantInfo->InterviewInfo = "";
$applicantInfo->TraineeCourses = "";
$applicantInfo->postingId = "";
$applicantInfo->email = "";
$applicantInfo->password = "";
$applicantInfo->isJoined = "";

				$data['interviewInfos'] = $this->InterviewInfoModel->findBy('applicantInfoId',$id);$data['employees'] = $this->EmployeeModel->getAll();$data['traineeCoursess'] = $this->TraineeCoursesModel->findBy('applicantInfoId',$id);$data['courses'] = $this->CourseModel->getAll();

				$applicantInfo->createdBy = $this->vendorId;
				$applicantInfo->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['applicantInfo'] = $applicantInfo;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'applicantInfo';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("applicantInfo/applicantInfoForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New ApplicantInfo';
			$this->global['pageName'] = 'applicantInfo';
			$data['jobApplications'] = $this->JobApplicationModel->getAll();$data['jobPostings'] = $this->JobPostingModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$applicantInfo = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'jobApplicationId'=>'',

'enrollmentId'=>'',

'firstName'=>'',

'lastName'=>'',

'fatherName'=>'',

'motherName'=>'',

'spouseName'=>'',

'nationality'=>'',

'gender'=>'',

'age'=>'',

'profilePic'=>'',

'signature'=>'',

'nidImage'=>'',

'eduQualification'=>'',

'bloodGroup'=>'',

'religion'=>'',

'address'=>'',

'streetAddress'=>'',

'district'=>'',

'policeStation'=>'',

'postCode'=>'',

'chairmanName'=>'',

'contactNo'=>'',

'InterviewInfo'=>'',

'TraineeCourses'=>'',

'postingId'=>'',

'email'=>'',

'password'=>'',

'isJoined'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$applicantInfo = array();
				try {
					$applicantInfo = $this->ApplicantInfoModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$applicantInfo = $this->read($id);
				$data['applicantInfo'] = $applicantInfo;
				$data['interviewInfos'] = $this->InterviewInfoModel->findBy('applicantInfoId',$id);$data['employees'] = $this->EmployeeModel->getAll();$data['traineeCoursess'] = $this->TraineeCoursesModel->findBy('applicantInfoId',$id);$data['courses'] = $this->CourseModel->getAll();
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$applicantInfo = new ApplicantInfoModel();
				// $applicantInfo->field1 = "";
				$data['interviewInfos'] = $this->InterviewInfoModel->findBy('applicantInfoId',$id);$data['employees'] = $this->EmployeeModel->getAll();$data['traineeCoursess'] = $this->TraineeCoursesModel->findBy('applicantInfoId',$id);$data['courses'] = $this->CourseModel->getAll();
				$applicantInfo->jobApplicationId = "";
$applicantInfo->enrollmentId = "";
$applicantInfo->firstName = "";
$applicantInfo->lastName = "";
$applicantInfo->fatherName = "";
$applicantInfo->motherName = "";
$applicantInfo->spouseName = "";
$applicantInfo->nationality = "";
$applicantInfo->gender = "";
$applicantInfo->age = "";
$applicantInfo->profilePic = "";
$applicantInfo->signature = "";
$applicantInfo->nidImage = "";
$applicantInfo->eduQualification = "";
$applicantInfo->bloodGroup = "";
$applicantInfo->religion = "";
$applicantInfo->address = "";
$applicantInfo->streetAddress = "";
$applicantInfo->district = "";
$applicantInfo->policeStation = "";
$applicantInfo->postCode = "";
$applicantInfo->chairmanName = "";
$applicantInfo->contactNo = "";
$applicantInfo->InterviewInfo = "";
$applicantInfo->TraineeCourses = "";
$applicantInfo->postingId = "";
$applicantInfo->email = "";
$applicantInfo->password = "";
$applicantInfo->isJoined = "";


				$data['applicantInfo'] = $applicantInfo;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'applicantInfo';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("applicantInfo/applicantInfoFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$applicantInfoList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$applicantInfo = $this->input->post();

		$this->load->model('ApplicantInfoModel');

		try {
			$id = $applicantInfo['id'];


			//print_r($applicantInfo['entityDetails']);

			if ($id != NULL || $id != '') {
				$applicantInfo['createdBy'] = $this->vendorId;
				$applicantInfo['updatedBy'] = $this->vendorId;

				$id = $this->ApplicantInfoModel->update($applicantInfo);
				$interviewInfoList = $applicantInfo['interviewInfo'];
	            $this->InterviewInfoModel->deleteBy("applicantInfoId",$id);
	            if(!empty($interviewInfoList)){
	                foreach ($interviewInfoList as $key => $interviewInfo) {
						$interviewInfo['createdBy'] = $this->vendorId;						$interviewInfo['updatedBy'] = $this->vendorId;	                    $interviewInfo['applicantInfoId'] = $id;
	                    $this->InterviewInfoModel->create($interviewInfo);
	                }
	            }$traineeCoursesList = $applicantInfo['traineeCourses'];
	            $this->TraineeCoursesModel->deleteBy("applicantInfoId",$id);
	            if(!empty($traineeCoursesList)){
	                foreach ($traineeCoursesList as $key => $traineeCourses) {
						$traineeCourses['createdBy'] = $this->vendorId;						$traineeCourses['updatedBy'] = $this->vendorId;	                    $traineeCourses['applicantInfoId'] = $id;
	                    $this->TraineeCoursesModel->create($traineeCourses);
	                }
	            }

			} else {
				$applicantInfo['createdBy'] = $this->vendorId;
				$applicantInfo['updatedBy'] = $this->vendorId;

				$id = $this->ApplicantInfoModel->create($applicantInfo);
				$interviewInfoList = $applicantInfo['interviewInfo'];
	            
	            if(!empty($interviewInfoList)){
	                foreach ($interviewInfoList as $key => $interviewInfo) {
						$interviewInfo['createdBy'] = $this->vendorId;						$interviewInfo['updatedBy'] = $this->vendorId;	                    $interviewInfo['applicantInfoId'] = $id;
	                    $this->InterviewInfoModel->create($interviewInfo);
	                }
	            }$traineeCoursesList = $applicantInfo['traineeCourses'];
	            
	            if(!empty($traineeCoursesList)){
	                foreach ($traineeCoursesList as $key => $traineeCourses) {
						$traineeCourses['createdBy'] = $this->vendorId;						$traineeCourses['updatedBy'] = $this->vendorId;	                    $traineeCourses['applicantInfoId'] = $id;
	                    $this->TraineeCoursesModel->create($traineeCourses);
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
			$this->global['pageName'] = 'applicantInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['applicantInfoList'] = $this->ApplicantInfoModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully ApplicantInfo Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'applicantInfo';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("applicantInfo/applicantInfoList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$applicantInfoList = array();
		$limit = 10;
		$this->load->model('ApplicantInfoModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$applicantInfo = $this->ApplicantInfoModel->findOne($id);

				if ($applicantInfo != null) {
					$applicantInfo->isApproved = "1";
					$id = $this->ApplicantInfoModel->approve($applicantInfo);
					
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
			$this->global['pageName'] = 'applicantInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['applicantInfoList'] = $this->ApplicantInfoModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully ApplicantInfo Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'applicantInfo';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("applicantInfo/applicantInfoList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('ApplicantInfoModel');
		$this->load->helper('url');
		$applicantInfo = array();
		try {
			$applicantInfo = $this->ApplicantInfoModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($applicantInfo);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $applicantInfo;
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
				$this->global['pageName'] = 'applicantInfo';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'applicantInfoReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['jobApplications'] = $this->JobApplicationModel->getAll();$data['jobPostings'] = $this->JobPostingModel->getAll();

				$applicantInfo = array();
				try {
					$applicantInfo = $this->ApplicantInfoModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$applicantInfo = $this->read($id);
				$data['applicantInfo'] = $applicantInfo;
				$data['interviewInfos'] = $this->InterviewInfoModel->findBy('applicantInfoId',$id);$data['employees'] = $this->EmployeeModel->getAll();$data['traineeCoursess'] = $this->TraineeCoursesModel->findBy('applicantInfoId',$id);$data['courses'] = $this->CourseModel->getAll();

				$this->loadReport("applicantInfo/applicantInfoReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("ApplicantInfo_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('ApplicantInfoModel');
		$this->load->helper('url');
		try {
			$applicantInfoList = $this->ApplicantInfoModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($applicantInfoList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $applicantInfoList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'applicantInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('ApplicantInfoModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully ApplicantInfo Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'applicantInfo';

			$data['applicantInfoList'] = $this->ApplicantInfoModel->getAll();
			$this->loadForm("applicantInfo/applicantInfoListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("ApplicantInfo_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'applicantInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('ApplicantInfoModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$applicantInfos = array();

				$applicantInfos = $this->ApplicantInfoModel->findOne($id);
				$this->ApplicantInfoModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("applicantInfoId",$id);
				$this->InterviewInfoModel->deleteBy("applicantInfoId",$id);$this->TraineeCoursesModel->deleteBy("applicantInfoId",$id);

				$applicantInfoList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['applicantInfoList'] = $this->ApplicantInfoModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully ApplicantInfo Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("applicantInfo/applicantInfoList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
