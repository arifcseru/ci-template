<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : TrainingInfo (TrainingInfo Controller)
 * Training Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class TrainingInfo extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('TrainingInfoModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('EmployeeModel');$this->load->model('CourseModel');$this->load->model('EmployeeModel');
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
				$this->global['pageName'] = 'trainingInfo';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['trainingInfoList'] = $this->TrainingInfoModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'trainingInfo';
				$this->loadMaterialViews("trainingInfo/index", $this->global, $data, NULL);
			}
		}
	}
	public function listData()
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
				$this->global['pageName'] = 'trainingInfo';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['trainingInfoList'] = $this->TrainingInfoModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'trainingInfo';
				$this->loadForm("trainingInfo/trainingInfoList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'trainingInfo';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['employees'] = $this->EmployeeModel->getAll();$data['courses'] = $this->CourseModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();

			/*$trainingInfo = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'courseId'=>'',

'shortCode'=>'',

'description'=>'',

'supervisorId'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$trainingInfo = array();
				try {
					$trainingInfo = $this->TrainingInfoModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$trainingInfo = $this->read($id);
				$data['trainingInfo'] = $trainingInfo;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$trainingInfo = new TrainingInfoModel();
				$trainingInfo->createdDate  = date('Y-m-d H:i:s');
				$trainingInfo->updatedDate  = date('Y-m-d H:i:s');

				//$trainingInfo->field1 = "";
				$trainingInfo->employeeId = "";
$trainingInfo->courseId = "";
$trainingInfo->shortCode = "";
$trainingInfo->description = "";
$trainingInfo->supervisorId = "";

				

				$trainingInfo->createdBy = $this->vendorId;
				$trainingInfo->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['trainingInfo'] = $trainingInfo;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'trainingInfo';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("trainingInfo/trainingInfoForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New TrainingInfo';
			$this->global['pageName'] = 'trainingInfo';
			$data['employees'] = $this->EmployeeModel->getAll();$data['courses'] = $this->CourseModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$trainingInfo = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'courseId'=>'',

'shortCode'=>'',

'description'=>'',

'supervisorId'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$trainingInfo = array();
				try {
					$trainingInfo = $this->TrainingInfoModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$trainingInfo = $this->read($id);
				$data['trainingInfo'] = $trainingInfo;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$trainingInfo = new TrainingInfoModel();
				// $trainingInfo->field1 = "";
				
				$trainingInfo->employeeId = "";
$trainingInfo->courseId = "";
$trainingInfo->shortCode = "";
$trainingInfo->description = "";
$trainingInfo->supervisorId = "";


				$data['trainingInfo'] = $trainingInfo;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'trainingInfo';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("trainingInfo/trainingInfoFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$trainingInfoList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$trainingInfo = $this->input->post();

		$this->load->model('TrainingInfoModel');

		try {
			$id = $trainingInfo['id'];


			//print_r($trainingInfo['entityDetails']);

			if ($id != NULL || $id != '') {
				$trainingInfo['createdBy'] = $this->vendorId;
				$trainingInfo['updatedBy'] = $this->vendorId;

				$id = $this->TrainingInfoModel->update($trainingInfo);
				

			} else {
				$trainingInfo['createdBy'] = $this->vendorId;
				$trainingInfo['updatedBy'] = $this->vendorId;

				$id = $this->TrainingInfoModel->create($trainingInfo);
				

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
			$this->global['pageName'] = 'trainingInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['trainingInfoList'] = $this->TrainingInfoModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully TrainingInfo Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'trainingInfo';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("trainingInfo/trainingInfoList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$trainingInfoList = array();
		$limit = 10;
		$this->load->model('TrainingInfoModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$trainingInfo = $this->TrainingInfoModel->findOne($id);

				if ($trainingInfo != null) {
					$trainingInfo->isApproved = "1";
					$id = $this->TrainingInfoModel->approve($trainingInfo);
					
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
			$this->global['pageName'] = 'trainingInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['trainingInfoList'] = $this->TrainingInfoModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully TrainingInfo Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'trainingInfo';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("trainingInfo/trainingInfoList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('TrainingInfoModel');
		$this->load->helper('url');
		$trainingInfo = array();
		try {
			$trainingInfo = $this->TrainingInfoModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($trainingInfo);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $trainingInfo;
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
				$this->global['pageName'] = 'trainingInfo';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'trainingInfoReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['employees'] = $this->EmployeeModel->getAll();$data['courses'] = $this->CourseModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();

				$trainingInfo = array();
				try {
					$trainingInfo = $this->TrainingInfoModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$trainingInfo = $this->read($id);
				$data['trainingInfo'] = $trainingInfo;
				

				$this->loadReport("trainingInfo/trainingInfoReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("TrainingInfo_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('TrainingInfoModel');
		$this->load->helper('url');
		try {
			$trainingInfoList = $this->TrainingInfoModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($trainingInfoList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $trainingInfoList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'trainingInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('TrainingInfoModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully TrainingInfo Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'trainingInfo';
			$data['role'] = $this->role;

			$data['trainingInfoList'] = $this->TrainingInfoModel->getAll();
			$this->loadForm("trainingInfo/trainingInfoListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("TrainingInfo_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'trainingInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('TrainingInfoModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$trainingInfos = array();

				$trainingInfos = $this->TrainingInfoModel->findOne($id);
				$this->TrainingInfoModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("trainingInfoId",$id);
				

				$trainingInfoList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['trainingInfoList'] = $this->TrainingInfoModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully TrainingInfo Deleted.';
				$data['searchText'] = '';
				$data['role'] = $this->role;
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("trainingInfo/trainingInfoList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
