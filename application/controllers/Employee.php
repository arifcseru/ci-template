<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : Employee (Employee Controller)
 * Employee Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class Employee extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('EmployeeModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('CompanyProfileModel');$this->load->model('TrainingInfoModel');$this->load->model('CourseModel');$this->load->model('EmployeeModel');$this->load->model('EmpDocInfoModel');$this->load->model('ApplicantInfoModel');$this->load->model('EmployeeModel');
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
				$this->global['pageName'] = 'employee';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['employeeList'] = $this->EmployeeModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'employee';
				$this->loadMaterialViews("employee/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'employee';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['employeeList'] = $this->EmployeeModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'employee';
				$this->loadForm("employee/employeeList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'employee';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['companyProfiles'] = $this->CompanyProfileModel->getAll();$data['applicantInfos'] = $this->ApplicantInfoModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();

			/*$employee = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'companyProfileId'=>'',

'TrainingInfo'=>'',

'EmpDocInfo'=>'',

'applicantId'=>'',

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

'email'=>'',

'managerId'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$employee = array();
				try {
					$employee = $this->EmployeeModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$employee = $this->read($id);
				$data['employee'] = $employee;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['trainingInfos'] = $this->TrainingInfoModel->findBy('employeeId',$id);$data['courses'] = $this->CourseModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();$data['empDocInfos'] = $this->EmpDocInfoModel->findBy('employeeId',$id);
			} else {
				$employee = new EmployeeModel();
				$employee->createdDate  = date('Y-m-d H:i:s');
				$employee->updatedDate  = date('Y-m-d H:i:s');

				//$employee->field1 = "";
				$employee->companyProfileId = "";
$employee->TrainingInfo = "";
$employee->EmpDocInfo = "";
$employee->applicantId = "";
$employee->firstName = "";
$employee->lastName = "";
$employee->fatherName = "";
$employee->motherName = "";
$employee->spouseName = "";
$employee->nationality = "";
$employee->gender = "";
$employee->age = "";
$employee->profilePic = "";
$employee->signature = "";
$employee->nidImage = "";
$employee->eduQualification = "";
$employee->bloodGroup = "";
$employee->religion = "";
$employee->address = "";
$employee->streetAddress = "";
$employee->district = "";
$employee->policeStation = "";
$employee->postCode = "";
$employee->chairmanName = "";
$employee->contactNo = "";
$employee->email = "";
$employee->managerId = "";

				$data['trainingInfos'] = $this->TrainingInfoModel->findBy('employeeId',$id);$data['courses'] = $this->CourseModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();$data['empDocInfos'] = $this->EmpDocInfoModel->findBy('employeeId',$id);

				$employee->createdBy = $this->vendorId;
				$employee->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['employee'] = $employee;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'employee';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("employee/employeeForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New Employee';
			$this->global['pageName'] = 'employee';
			$data['companyProfiles'] = $this->CompanyProfileModel->getAll();$data['applicantInfos'] = $this->ApplicantInfoModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$employee = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'companyProfileId'=>'',

'TrainingInfo'=>'',

'EmpDocInfo'=>'',

'applicantId'=>'',

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

'email'=>'',

'managerId'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$employee = array();
				try {
					$employee = $this->EmployeeModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$employee = $this->read($id);
				$data['employee'] = $employee;
				$data['trainingInfos'] = $this->TrainingInfoModel->findBy('employeeId',$id);$data['courses'] = $this->CourseModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();$data['empDocInfos'] = $this->EmpDocInfoModel->findBy('employeeId',$id);
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$employee = new EmployeeModel();
				// $employee->field1 = "";
				$data['trainingInfos'] = $this->TrainingInfoModel->findBy('employeeId',$id);$data['courses'] = $this->CourseModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();$data['empDocInfos'] = $this->EmpDocInfoModel->findBy('employeeId',$id);
				$employee->companyProfileId = "";
$employee->TrainingInfo = "";
$employee->EmpDocInfo = "";
$employee->applicantId = "";
$employee->firstName = "";
$employee->lastName = "";
$employee->fatherName = "";
$employee->motherName = "";
$employee->spouseName = "";
$employee->nationality = "";
$employee->gender = "";
$employee->age = "";
$employee->profilePic = "";
$employee->signature = "";
$employee->nidImage = "";
$employee->eduQualification = "";
$employee->bloodGroup = "";
$employee->religion = "";
$employee->address = "";
$employee->streetAddress = "";
$employee->district = "";
$employee->policeStation = "";
$employee->postCode = "";
$employee->chairmanName = "";
$employee->contactNo = "";
$employee->email = "";
$employee->managerId = "";


				$data['employee'] = $employee;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'employee';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("employee/employeeFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$employeeList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$employee = $this->input->post();

		$this->load->model('EmployeeModel');

		try {
			$id = $employee['id'];


			//print_r($employee['entityDetails']);

			if ($id != NULL || $id != '') {
				$employee['createdBy'] = $this->vendorId;
				$employee['updatedBy'] = $this->vendorId;

				$id = $this->EmployeeModel->update($employee);
				$trainingInfoList = $employee['trainingInfo'];
	            $this->TrainingInfoModel->deleteBy("employeeId",$id);
	            if(!empty($trainingInfoList)){
	                foreach ($trainingInfoList as $key => $trainingInfo) {
						$trainingInfo['createdBy'] = $this->vendorId;						$trainingInfo['updatedBy'] = $this->vendorId;	                    $trainingInfo['employeeId'] = $id;
	                    $this->TrainingInfoModel->create($trainingInfo);
	                }
	            }$empDocInfoList = $employee['empDocInfo'];
	            $this->EmpDocInfoModel->deleteBy("employeeId",$id);
	            if(!empty($empDocInfoList)){
	                foreach ($empDocInfoList as $key => $empDocInfo) {
						$empDocInfo['createdBy'] = $this->vendorId;						$empDocInfo['updatedBy'] = $this->vendorId;	                    $empDocInfo['employeeId'] = $id;
	                    $this->EmpDocInfoModel->create($empDocInfo);
	                }
	            }

			} else {
				$employee['createdBy'] = $this->vendorId;
				$employee['updatedBy'] = $this->vendorId;

				$id = $this->EmployeeModel->create($employee);
				$trainingInfoList = $employee['trainingInfo'];
	            
	            if(!empty($trainingInfoList)){
	                foreach ($trainingInfoList as $key => $trainingInfo) {
						$trainingInfo['createdBy'] = $this->vendorId;						$trainingInfo['updatedBy'] = $this->vendorId;	                    $trainingInfo['employeeId'] = $id;
	                    $this->TrainingInfoModel->create($trainingInfo);
	                }
	            }$empDocInfoList = $employee['empDocInfo'];
	            
	            if(!empty($empDocInfoList)){
	                foreach ($empDocInfoList as $key => $empDocInfo) {
						$empDocInfo['createdBy'] = $this->vendorId;						$empDocInfo['updatedBy'] = $this->vendorId;	                    $empDocInfo['employeeId'] = $id;
	                    $this->EmpDocInfoModel->create($empDocInfo);
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
			$this->global['pageName'] = 'employee';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['employeeList'] = $this->EmployeeModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully Employee Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'employee';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("employee/employeeList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$employeeList = array();
		$limit = 10;
		$this->load->model('EmployeeModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$employee = $this->EmployeeModel->findOne($id);

				if ($employee != null) {
					$employee->isApproved = "1";
					$id = $this->EmployeeModel->approve($employee);
					
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
			$this->global['pageName'] = 'employee';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['employeeList'] = $this->EmployeeModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully Employee Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'employee';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("employee/employeeList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('EmployeeModel');
		$this->load->helper('url');
		$employee = array();
		try {
			$employee = $this->EmployeeModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($employee);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $employee;
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
				$this->global['pageName'] = 'employee';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'employeeReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['companyProfiles'] = $this->CompanyProfileModel->getAll();$data['applicantInfos'] = $this->ApplicantInfoModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();

				$employee = array();
				try {
					$employee = $this->EmployeeModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$employee = $this->read($id);
				$data['employee'] = $employee;
				$data['trainingInfos'] = $this->TrainingInfoModel->findBy('employeeId',$id);$data['courses'] = $this->CourseModel->getAll();$data['employees'] = $this->EmployeeModel->getAll();$data['empDocInfos'] = $this->EmpDocInfoModel->findBy('employeeId',$id);

				$this->loadReport("employee/employeeReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("Employee_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('EmployeeModel');
		$this->load->helper('url');
		try {
			$employeeList = $this->EmployeeModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($employeeList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $employeeList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'employee';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('EmployeeModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully Employee Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'employee';

			$data['employeeList'] = $this->EmployeeModel->getAll();
			$this->loadForm("employee/employeeListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("Employee_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'employee';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('EmployeeModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$employees = array();

				$employees = $this->EmployeeModel->findOne($id);
				$this->EmployeeModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("employeeId",$id);
				$this->TrainingInfoModel->deleteBy("employeeId",$id);$this->EmpDocInfoModel->deleteBy("employeeId",$id);

				$employeeList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['employeeList'] = $this->EmployeeModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully Employee Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("employee/employeeList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
