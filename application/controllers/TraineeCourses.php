<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : TraineeCourses (TraineeCourses Controller)
 * Trainee Courses Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class TraineeCourses extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('TraineeCoursesModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('CourseModel');$this->load->model('ApplicantInfoModel');
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
				$this->global['pageName'] = 'traineeCourses';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['traineeCoursesList'] = $this->TraineeCoursesModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'traineeCourses';
				$this->loadMaterialViews("traineeCourses/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'traineeCourses';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['traineeCoursesList'] = $this->TraineeCoursesModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'traineeCourses';
				$this->loadForm("traineeCourses/traineeCoursesList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'traineeCourses';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['courses'] = $this->CourseModel->getAll();$data['applicantInfos'] = $this->ApplicantInfoModel->getAll();

			/*$traineeCourses = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'courseId'=>'',

'applicantInfoId'=>'',

'shortCode'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$traineeCourses = array();
				try {
					$traineeCourses = $this->TraineeCoursesModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$traineeCourses = $this->read($id);
				$data['traineeCourses'] = $traineeCourses;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$traineeCourses = new TraineeCoursesModel();
				$traineeCourses->createdDate  = date('Y-m-d H:i:s');
				$traineeCourses->updatedDate  = date('Y-m-d H:i:s');

				//$traineeCourses->field1 = "";
				$traineeCourses->courseId = "";
$traineeCourses->applicantInfoId = "";
$traineeCourses->shortCode = "";

				

				$traineeCourses->createdBy = $this->vendorId;
				$traineeCourses->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['traineeCourses'] = $traineeCourses;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'traineeCourses';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("traineeCourses/traineeCoursesForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New TraineeCourses';
			$this->global['pageName'] = 'traineeCourses';
			$data['courses'] = $this->CourseModel->getAll();$data['applicantInfos'] = $this->ApplicantInfoModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$traineeCourses = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'courseId'=>'',

'applicantInfoId'=>'',

'shortCode'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$traineeCourses = array();
				try {
					$traineeCourses = $this->TraineeCoursesModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$traineeCourses = $this->read($id);
				$data['traineeCourses'] = $traineeCourses;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$traineeCourses = new TraineeCoursesModel();
				// $traineeCourses->field1 = "";
				
				$traineeCourses->courseId = "";
$traineeCourses->applicantInfoId = "";
$traineeCourses->shortCode = "";


				$data['traineeCourses'] = $traineeCourses;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'traineeCourses';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("traineeCourses/traineeCoursesFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$traineeCoursesList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$traineeCourses = $this->input->post();

		$this->load->model('TraineeCoursesModel');

		try {
			$id = $traineeCourses['id'];


			//print_r($traineeCourses['entityDetails']);

			if ($id != NULL || $id != '') {
				$traineeCourses['createdBy'] = $this->vendorId;
				$traineeCourses['updatedBy'] = $this->vendorId;

				$id = $this->TraineeCoursesModel->update($traineeCourses);
				

			} else {
				$traineeCourses['createdBy'] = $this->vendorId;
				$traineeCourses['updatedBy'] = $this->vendorId;

				$id = $this->TraineeCoursesModel->create($traineeCourses);
				

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
			$this->global['pageName'] = 'traineeCourses';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['traineeCoursesList'] = $this->TraineeCoursesModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully TraineeCourses Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'traineeCourses';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("traineeCourses/traineeCoursesList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$traineeCoursesList = array();
		$limit = 10;
		$this->load->model('TraineeCoursesModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$traineeCourses = $this->TraineeCoursesModel->findOne($id);

				if ($traineeCourses != null) {
					$traineeCourses->isApproved = "1";
					$id = $this->TraineeCoursesModel->approve($traineeCourses);
					
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
			$this->global['pageName'] = 'traineeCourses';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['traineeCoursesList'] = $this->TraineeCoursesModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully TraineeCourses Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'traineeCourses';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("traineeCourses/traineeCoursesList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('TraineeCoursesModel');
		$this->load->helper('url');
		$traineeCourses = array();
		try {
			$traineeCourses = $this->TraineeCoursesModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($traineeCourses);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $traineeCourses;
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
				$this->global['pageName'] = 'traineeCourses';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'traineeCoursesReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['courses'] = $this->CourseModel->getAll();$data['applicantInfos'] = $this->ApplicantInfoModel->getAll();

				$traineeCourses = array();
				try {
					$traineeCourses = $this->TraineeCoursesModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$traineeCourses = $this->read($id);
				$data['traineeCourses'] = $traineeCourses;
				

				$this->loadReport("traineeCourses/traineeCoursesReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("TraineeCourses_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('TraineeCoursesModel');
		$this->load->helper('url');
		try {
			$traineeCoursesList = $this->TraineeCoursesModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($traineeCoursesList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $traineeCoursesList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'traineeCourses';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('TraineeCoursesModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully TraineeCourses Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'traineeCourses';

			$data['traineeCoursesList'] = $this->TraineeCoursesModel->getAll();
			$this->loadForm("traineeCourses/traineeCoursesListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("TraineeCourses_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'traineeCourses';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('TraineeCoursesModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$traineeCoursess = array();

				$traineeCoursess = $this->TraineeCoursesModel->findOne($id);
				$this->TraineeCoursesModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("traineeCoursesId",$id);
				

				$traineeCoursesList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['traineeCoursesList'] = $this->TraineeCoursesModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully TraineeCourses Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("traineeCourses/traineeCoursesList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
