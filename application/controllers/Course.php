<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : Course (Course Controller)
 * Course Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class Course extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('CourseModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('SubjectModel');$this->load->model('EmployeeModel');$this->load->model('ApplicantInfoModel');$this->load->model('EmployeeModel');
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
				$this->global['pageName'] = 'course';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['courseList'] = $this->CourseModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'course';
				$this->loadMaterialViews("course/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'course';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['courseList'] = $this->CourseModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'course';
				$this->loadForm("course/courseList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'course';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['applicantInfos'] = $this->ApplicantInfoModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();

			/*$course = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'Subject'=>'',

'shortCode'=>'',

'description'=>'',

'applicantInfoId'=>'',

'supervisorId'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$course = array();
				try {
					$course = $this->CourseModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$course = $this->read($id);
				$data['course'] = $course;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['subjects'] = $this->SubjectModel->findBy('courseId',$id);$data['employees'] = $this->EmployeeModel->getAll();
			} else {
				$course = new CourseModel();
				$course->createdDate  = date('Y-m-d H:i:s');
				$course->updatedDate  = date('Y-m-d H:i:s');

				//$course->field1 = "";
				$course->Subject = "";
$course->shortCode = "";
$course->description = "";
$course->applicantInfoId = "";
$course->supervisorId = "";

				$data['subjects'] = $this->SubjectModel->findBy('courseId',$id);$data['employees'] = $this->EmployeeModel->getAll();

				$course->createdBy = $this->vendorId;
				$course->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['course'] = $course;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'course';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("course/courseForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New Course';
			$this->global['pageName'] = 'course';
			$data['applicantInfos'] = $this->ApplicantInfoModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$course = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'Subject'=>'',

'shortCode'=>'',

'description'=>'',

'applicantInfoId'=>'',

'supervisorId'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$course = array();
				try {
					$course = $this->CourseModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$course = $this->read($id);
				$data['course'] = $course;
				$data['subjects'] = $this->SubjectModel->findBy('courseId',$id);$data['employees'] = $this->EmployeeModel->getAll();
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$course = new CourseModel();
				// $course->field1 = "";
				$data['subjects'] = $this->SubjectModel->findBy('courseId',$id);$data['employees'] = $this->EmployeeModel->getAll();
				$course->Subject = "";
$course->shortCode = "";
$course->description = "";
$course->applicantInfoId = "";
$course->supervisorId = "";


				$data['course'] = $course;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'course';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("course/courseFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$courseList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$course = $this->input->post();

		$this->load->model('CourseModel');

		try {
			$id = $course['id'];


			//print_r($course['entityDetails']);

			if ($id != NULL || $id != '') {
				$course['createdBy'] = $this->vendorId;
				$course['updatedBy'] = $this->vendorId;

				$id = $this->CourseModel->update($course);
				$subjectList = $course['subject'];
	            $this->SubjectModel->deleteBy("courseId",$id);
	            if(!empty($subjectList)){
	                foreach ($subjectList as $key => $subject) {
						$subject['createdBy'] = $this->vendorId;						$subject['updatedBy'] = $this->vendorId;	                    $subject['courseId'] = $id;
	                    $this->SubjectModel->create($subject);
	                }
	            }

			} else {
				$course['createdBy'] = $this->vendorId;
				$course['updatedBy'] = $this->vendorId;

				$id = $this->CourseModel->create($course);
				$subjectList = $course['subject'];
	            
	            if(!empty($subjectList)){
	                foreach ($subjectList as $key => $subject) {
						$subject['createdBy'] = $this->vendorId;						$subject['updatedBy'] = $this->vendorId;	                    $subject['courseId'] = $id;
	                    $this->SubjectModel->create($subject);
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
			$this->global['pageName'] = 'course';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['courseList'] = $this->CourseModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully Course Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'course';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("course/courseList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$courseList = array();
		$limit = 10;
		$this->load->model('CourseModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$course = $this->CourseModel->findOne($id);

				if ($course != null) {
					$course->isApproved = "1";
					$id = $this->CourseModel->approve($course);
					
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
			$this->global['pageName'] = 'course';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['courseList'] = $this->CourseModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully Course Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'course';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("course/courseList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('CourseModel');
		$this->load->helper('url');
		$course = array();
		try {
			$course = $this->CourseModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($course);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $course;
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
				$this->global['pageName'] = 'course';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'courseReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['applicantInfos'] = $this->ApplicantInfoModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();

				$course = array();
				try {
					$course = $this->CourseModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$course = $this->read($id);
				$data['course'] = $course;
				$data['subjects'] = $this->SubjectModel->findBy('courseId',$id);$data['employees'] = $this->EmployeeModel->getAll();

				$this->loadReport("course/courseReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("Course_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('CourseModel');
		$this->load->helper('url');
		try {
			$courseList = $this->CourseModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($courseList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $courseList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'course';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('CourseModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully Course Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'course';

			$data['courseList'] = $this->CourseModel->getAll();
			$this->loadForm("course/courseListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("Course_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'course';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('CourseModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$courses = array();

				$courses = $this->CourseModel->findOne($id);
				$this->CourseModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("courseId",$id);
				$this->SubjectModel->deleteBy("courseId",$id);

				$courseList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['courseList'] = $this->CourseModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully Course Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("course/courseList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
