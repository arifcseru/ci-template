<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : EmpTraining (EmpTraining Controller)
 * Emp Training Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class EmpTraining extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('EmpTrainingModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('CourseModel');$this->load->model('EmployeeModel');$this->load->model('TrainingDetailsModel');$this->load->model('SubjectModel');$this->load->model('EmployeeModel');
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
				$this->global['pageName'] = 'empTraining';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['empTrainingList'] = $this->EmpTrainingModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'empTraining';
				$this->loadMaterialViews("empTraining/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'empTraining';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['empTrainingList'] = $this->EmpTrainingModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'empTraining';
				$this->loadForm("empTraining/empTrainingList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'empTraining';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['courses'] = $this->CourseModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();

			/*$empTraining = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'courseId'=>'',

'employeeId'=>'',

'title'=>'',

'TrainingDetails'=>'',

'approverId'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$empTraining = array();
				try {
					$empTraining = $this->EmpTrainingModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$empTraining = $this->read($id);
				$data['empTraining'] = $empTraining;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['trainingDetailss'] = $this->TrainingDetailsModel->findBy('empTrainingId',$id);$data['subjects'] = $this->SubjectModel->getAll();
			} else {
				$empTraining = new EmpTrainingModel();
				$empTraining->createdDate  = date('Y-m-d H:i:s');
				$empTraining->updatedDate  = date('Y-m-d H:i:s');

				//$empTraining->field1 = "";
				$empTraining->courseId = "";
$empTraining->employeeId = "";
$empTraining->title = "";
$empTraining->TrainingDetails = "";
$empTraining->approverId = "";

				$data['trainingDetailss'] = $this->TrainingDetailsModel->findBy('empTrainingId',$id);$data['subjects'] = $this->SubjectModel->getAll();

				$empTraining->createdBy = $this->vendorId;
				$empTraining->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['empTraining'] = $empTraining;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'empTraining';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("empTraining/empTrainingForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New EmpTraining';
			$this->global['pageName'] = 'empTraining';
			$data['courses'] = $this->CourseModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$empTraining = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'courseId'=>'',

'employeeId'=>'',

'title'=>'',

'TrainingDetails'=>'',

'approverId'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$empTraining = array();
				try {
					$empTraining = $this->EmpTrainingModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$empTraining = $this->read($id);
				$data['empTraining'] = $empTraining;
				$data['trainingDetailss'] = $this->TrainingDetailsModel->findBy('empTrainingId',$id);$data['subjects'] = $this->SubjectModel->getAll();
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$empTraining = new EmpTrainingModel();
				// $empTraining->field1 = "";
				$data['trainingDetailss'] = $this->TrainingDetailsModel->findBy('empTrainingId',$id);$data['subjects'] = $this->SubjectModel->getAll();
				$empTraining->courseId = "";
$empTraining->employeeId = "";
$empTraining->title = "";
$empTraining->TrainingDetails = "";
$empTraining->approverId = "";


				$data['empTraining'] = $empTraining;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'empTraining';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("empTraining/empTrainingFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$empTrainingList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$empTraining = $this->input->post();

		$this->load->model('EmpTrainingModel');

		try {
			$id = $empTraining['id'];


			//print_r($empTraining['entityDetails']);

			if ($id != NULL || $id != '') {
				$empTraining['createdBy'] = $this->vendorId;
				$empTraining['updatedBy'] = $this->vendorId;

				$id = $this->EmpTrainingModel->update($empTraining);
				$trainingDetailsList = $empTraining['trainingDetails'];
	            $this->TrainingDetailsModel->deleteBy("empTrainingId",$id);
	            if(!empty($trainingDetailsList)){
	                foreach ($trainingDetailsList as $key => $trainingDetails) {
						$trainingDetails['createdBy'] = $this->vendorId;						$trainingDetails['updatedBy'] = $this->vendorId;	                    $trainingDetails['empTrainingId'] = $id;
	                    $this->TrainingDetailsModel->create($trainingDetails);
	                }
	            }

			} else {
				$empTraining['createdBy'] = $this->vendorId;
				$empTraining['updatedBy'] = $this->vendorId;

				$id = $this->EmpTrainingModel->create($empTraining);
				$trainingDetailsList = $empTraining['trainingDetails'];
	            
	            if(!empty($trainingDetailsList)){
	                foreach ($trainingDetailsList as $key => $trainingDetails) {
						$trainingDetails['createdBy'] = $this->vendorId;						$trainingDetails['updatedBy'] = $this->vendorId;	                    $trainingDetails['empTrainingId'] = $id;
	                    $this->TrainingDetailsModel->create($trainingDetails);
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
			$this->global['pageName'] = 'empTraining';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['empTrainingList'] = $this->EmpTrainingModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully EmpTraining Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'empTraining';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("empTraining/empTrainingList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$empTrainingList = array();
		$limit = 10;
		$this->load->model('EmpTrainingModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$empTraining = $this->EmpTrainingModel->findOne($id);

				if ($empTraining != null) {
					$empTraining->isApproved = "1";
					$id = $this->EmpTrainingModel->approve($empTraining);
					
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
			$this->global['pageName'] = 'empTraining';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['empTrainingList'] = $this->EmpTrainingModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully EmpTraining Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'empTraining';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("empTraining/empTrainingList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('EmpTrainingModel');
		$this->load->helper('url');
		$empTraining = array();
		try {
			$empTraining = $this->EmpTrainingModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($empTraining);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $empTraining;
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
				$this->global['pageName'] = 'empTraining';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'empTrainingReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['courses'] = $this->CourseModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();

				$empTraining = array();
				try {
					$empTraining = $this->EmpTrainingModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$empTraining = $this->read($id);
				$data['empTraining'] = $empTraining;
				$data['trainingDetailss'] = $this->TrainingDetailsModel->findBy('empTrainingId',$id);$data['subjects'] = $this->SubjectModel->getAll();

				$this->loadReport("empTraining/empTrainingReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("EmpTraining_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('EmpTrainingModel');
		$this->load->helper('url');
		try {
			$empTrainingList = $this->EmpTrainingModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($empTrainingList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $empTrainingList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'empTraining';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('EmpTrainingModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully EmpTraining Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'empTraining';

			$data['empTrainingList'] = $this->EmpTrainingModel->getAll();
			$this->loadForm("empTraining/empTrainingListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("EmpTraining_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'empTraining';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('EmpTrainingModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$empTrainings = array();

				$empTrainings = $this->EmpTrainingModel->findOne($id);
				$this->EmpTrainingModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("empTrainingId",$id);
				$this->TrainingDetailsModel->deleteBy("empTrainingId",$id);

				$empTrainingList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['empTrainingList'] = $this->EmpTrainingModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully EmpTraining Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("empTraining/empTrainingList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
