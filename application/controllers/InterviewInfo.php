<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : InterviewInfo (InterviewInfo Controller)
 * Interview Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class InterviewInfo extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('InterviewInfoModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('ApplicantInfoModel');$this->load->model('EmployeeModel');
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
				$this->global['pageName'] = 'interviewInfo';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['interviewInfoList'] = $this->InterviewInfoModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'interviewInfo';
				$this->loadMaterialViews("interviewInfo/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'interviewInfo';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['interviewInfoList'] = $this->InterviewInfoModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'interviewInfo';
				$this->loadForm("interviewInfo/interviewInfoList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'interviewInfo';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['applicantInfos'] = $this->ApplicantInfoModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();

			/*$interviewInfo = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'applicantInfoId'=>'',

'interviewType'=>'',

'shortCode'=>'',

'totalMarks'=>'',

'obtainedMarks'=>'',

'description'=>'',

'interviewerId'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$interviewInfo = array();
				try {
					$interviewInfo = $this->InterviewInfoModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$interviewInfo = $this->read($id);
				$data['interviewInfo'] = $interviewInfo;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$interviewInfo = new InterviewInfoModel();
				$interviewInfo->createdDate  = date('Y-m-d H:i:s');
				$interviewInfo->updatedDate  = date('Y-m-d H:i:s');

				//$interviewInfo->field1 = "";
				$interviewInfo->applicantInfoId = "";
$interviewInfo->interviewType = "";
$interviewInfo->shortCode = "";
$interviewInfo->totalMarks = "";
$interviewInfo->obtainedMarks = "";
$interviewInfo->description = "";
$interviewInfo->interviewerId = "";

				

				$interviewInfo->createdBy = $this->vendorId;
				$interviewInfo->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['interviewInfo'] = $interviewInfo;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'interviewInfo';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("interviewInfo/interviewInfoForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New InterviewInfo';
			$this->global['pageName'] = 'interviewInfo';
			$data['applicantInfos'] = $this->ApplicantInfoModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$interviewInfo = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'applicantInfoId'=>'',

'interviewType'=>'',

'shortCode'=>'',

'totalMarks'=>'',

'obtainedMarks'=>'',

'description'=>'',

'interviewerId'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$interviewInfo = array();
				try {
					$interviewInfo = $this->InterviewInfoModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$interviewInfo = $this->read($id);
				$data['interviewInfo'] = $interviewInfo;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$interviewInfo = new InterviewInfoModel();
				// $interviewInfo->field1 = "";
				
				$interviewInfo->applicantInfoId = "";
$interviewInfo->interviewType = "";
$interviewInfo->shortCode = "";
$interviewInfo->totalMarks = "";
$interviewInfo->obtainedMarks = "";
$interviewInfo->description = "";
$interviewInfo->interviewerId = "";


				$data['interviewInfo'] = $interviewInfo;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'interviewInfo';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("interviewInfo/interviewInfoFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$interviewInfoList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$interviewInfo = $this->input->post();

		$this->load->model('InterviewInfoModel');

		try {
			$id = $interviewInfo['id'];


			//print_r($interviewInfo['entityDetails']);

			if ($id != NULL || $id != '') {
				$interviewInfo['createdBy'] = $this->vendorId;
				$interviewInfo['updatedBy'] = $this->vendorId;

				$id = $this->InterviewInfoModel->update($interviewInfo);
				

			} else {
				$interviewInfo['createdBy'] = $this->vendorId;
				$interviewInfo['updatedBy'] = $this->vendorId;

				$id = $this->InterviewInfoModel->create($interviewInfo);
				

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
			$this->global['pageName'] = 'interviewInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['interviewInfoList'] = $this->InterviewInfoModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully InterviewInfo Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'interviewInfo';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("interviewInfo/interviewInfoList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$interviewInfoList = array();
		$limit = 10;
		$this->load->model('InterviewInfoModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$interviewInfo = $this->InterviewInfoModel->findOne($id);

				if ($interviewInfo != null) {
					$interviewInfo->isApproved = "1";
					$id = $this->InterviewInfoModel->approve($interviewInfo);
					
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
			$this->global['pageName'] = 'interviewInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['interviewInfoList'] = $this->InterviewInfoModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully InterviewInfo Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'interviewInfo';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("interviewInfo/interviewInfoList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('InterviewInfoModel');
		$this->load->helper('url');
		$interviewInfo = array();
		try {
			$interviewInfo = $this->InterviewInfoModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($interviewInfo);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $interviewInfo;
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
				$this->global['pageName'] = 'interviewInfo';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'interviewInfoReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['applicantInfos'] = $this->ApplicantInfoModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();

				$interviewInfo = array();
				try {
					$interviewInfo = $this->InterviewInfoModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$interviewInfo = $this->read($id);
				$data['interviewInfo'] = $interviewInfo;
				

				$this->loadReport("interviewInfo/interviewInfoReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("InterviewInfo_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('InterviewInfoModel');
		$this->load->helper('url');
		try {
			$interviewInfoList = $this->InterviewInfoModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($interviewInfoList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $interviewInfoList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'interviewInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('InterviewInfoModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully InterviewInfo Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'interviewInfo';
			$data['role'] = $this->role;

			$data['interviewInfoList'] = $this->InterviewInfoModel->getAll();
			$this->loadForm("interviewInfo/interviewInfoListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("InterviewInfo_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'interviewInfo';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('InterviewInfoModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$interviewInfos = array();

				$interviewInfos = $this->InterviewInfoModel->findOne($id);
				$this->InterviewInfoModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("interviewInfoId",$id);
				

				$interviewInfoList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['interviewInfoList'] = $this->InterviewInfoModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully InterviewInfo Deleted.';
				$data['searchText'] = '';
				$data['role'] = $this->role;
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("interviewInfo/interviewInfoList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
