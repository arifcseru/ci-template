<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : AttendanceInfo (AttendanceInfo Controller)
 * Attendance Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class AttendanceInfo extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('AttendanceInfoModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('EmployeeModel');$this->load->model('EmployeeModel');
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
				$this->global['pageName'] = 'attendanceInfo';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['attendanceInfoList'] = $this->AttendanceInfoModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'attendanceInfo';
				$this->loadMaterialViews("attendanceInfo/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'attendanceInfo';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['attendanceInfoList'] = $this->AttendanceInfoModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'attendanceInfo';
				$this->loadForm("attendanceInfo/attendanceInfoList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'attendanceInfo';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['employees'] = $this->EmployeeModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();

			/*$attendanceInfo = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'attendanceDate'=>'',

'description'=>'',

'supervisorId'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$attendanceInfo = array();
				try {
					$attendanceInfo = $this->AttendanceInfoModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$attendanceInfo = $this->read($id);
				$data['attendanceInfo'] = $attendanceInfo;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$attendanceInfo = new AttendanceInfoModel();
				$attendanceInfo->createdDate  = date('Y-m-d H:i:s');
				$attendanceInfo->updatedDate  = date('Y-m-d H:i:s');

				//$attendanceInfo->field1 = "";
				$attendanceInfo->employeeId = "";
$attendanceInfo->attendanceDate = "";
$attendanceInfo->description = "";
$attendanceInfo->supervisorId = "";

				

				$attendanceInfo->createdBy = $this->vendorId;
				$attendanceInfo->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['attendanceInfo'] = $attendanceInfo;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'attendanceInfo';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("attendanceInfo/attendanceInfoForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New AttendanceInfo';
			$this->global['pageName'] = 'attendanceInfo';
			$data['employees'] = $this->EmployeeModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$attendanceInfo = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'attendanceDate'=>'',

'description'=>'',

'supervisorId'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$attendanceInfo = array();
				try {
					$attendanceInfo = $this->AttendanceInfoModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$attendanceInfo = $this->read($id);
				$data['attendanceInfo'] = $attendanceInfo;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$attendanceInfo = new AttendanceInfoModel();
				// $attendanceInfo->field1 = "";
				
				$attendanceInfo->employeeId = "";
$attendanceInfo->attendanceDate = "";
$attendanceInfo->description = "";
$attendanceInfo->supervisorId = "";


				$data['attendanceInfo'] = $attendanceInfo;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'attendanceInfo';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("attendanceInfo/attendanceInfoFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$attendanceInfoList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$attendanceInfo = $this->input->post();

		$this->load->model('AttendanceInfoModel');

		try {
			$id = $attendanceInfo['id'];


			//print_r($attendanceInfo['entityDetails']);

			if ($id != NULL || $id != '') {
				$attendanceInfo['createdBy'] = $this->vendorId;
				$attendanceInfo['updatedBy'] = $this->vendorId;

				$id = $this->AttendanceInfoModel->update($attendanceInfo);
				

			} else {
				$attendanceInfo['createdBy'] = $this->vendorId;
				$attendanceInfo['updatedBy'] = $this->vendorId;

				$id = $this->AttendanceInfoModel->create($attendanceInfo);
				

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
			$this->global['pageName'] = 'attendanceInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['attendanceInfoList'] = $this->AttendanceInfoModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully AttendanceInfo Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'attendanceInfo';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("attendanceInfo/attendanceInfoList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$attendanceInfoList = array();
		$limit = 10;
		$this->load->model('AttendanceInfoModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$attendanceInfo = $this->AttendanceInfoModel->findOne($id);

				if ($attendanceInfo != null) {
					$attendanceInfo->isApproved = "1";
					$id = $this->AttendanceInfoModel->approve($attendanceInfo);
					
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
			$this->global['pageName'] = 'attendanceInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['attendanceInfoList'] = $this->AttendanceInfoModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully AttendanceInfo Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'attendanceInfo';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("attendanceInfo/attendanceInfoList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('AttendanceInfoModel');
		$this->load->helper('url');
		$attendanceInfo = array();
		try {
			$attendanceInfo = $this->AttendanceInfoModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($attendanceInfo);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $attendanceInfo;
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
				$this->global['pageName'] = 'attendanceInfo';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'attendanceInfoReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['employees'] = $this->EmployeeModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();

				$attendanceInfo = array();
				try {
					$attendanceInfo = $this->AttendanceInfoModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$attendanceInfo = $this->read($id);
				$data['attendanceInfo'] = $attendanceInfo;
				

				$this->loadReport("attendanceInfo/attendanceInfoReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("AttendanceInfo_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('AttendanceInfoModel');
		$this->load->helper('url');
		try {
			$attendanceInfoList = $this->AttendanceInfoModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($attendanceInfoList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $attendanceInfoList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'attendanceInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('AttendanceInfoModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully AttendanceInfo Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'attendanceInfo';

			$data['attendanceInfoList'] = $this->AttendanceInfoModel->getAll();
			$this->loadForm("attendanceInfo/attendanceInfoListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("AttendanceInfo_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'attendanceInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('AttendanceInfoModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$attendanceInfos = array();

				$attendanceInfos = $this->AttendanceInfoModel->findOne($id);
				$this->AttendanceInfoModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("attendanceInfoId",$id);
				

				$attendanceInfoList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['attendanceInfoList'] = $this->AttendanceInfoModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully AttendanceInfo Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("attendanceInfo/attendanceInfoList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
