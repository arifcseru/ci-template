<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : DisciplinaryCases (DisciplinaryCases Controller)
 * Disciplinary Cases Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class DisciplinaryCases extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('DisciplinaryCasesModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('EmployeeModel');
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
				$this->global['pageName'] = 'disciplinaryCases';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['disciplinaryCasesList'] = $this->DisciplinaryCasesModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'disciplinaryCases';
				$this->loadMaterialViews("disciplinaryCases/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'disciplinaryCases';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['disciplinaryCasesList'] = $this->DisciplinaryCasesModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'disciplinaryCases';
				$this->loadForm("disciplinaryCases/disciplinaryCasesList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'disciplinaryCases';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['employees'] = $this->EmployeeModel->getAll();

			/*$disciplinaryCases = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'caseName'=>'',

'description'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$disciplinaryCases = array();
				try {
					$disciplinaryCases = $this->DisciplinaryCasesModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$disciplinaryCases = $this->read($id);
				$data['disciplinaryCases'] = $disciplinaryCases;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$disciplinaryCases = new DisciplinaryCasesModel();
				$disciplinaryCases->createdDate  = date('Y-m-d H:i:s');
				$disciplinaryCases->updatedDate  = date('Y-m-d H:i:s');

				//$disciplinaryCases->field1 = "";
				$disciplinaryCases->employeeId = "";
$disciplinaryCases->caseName = "";
$disciplinaryCases->description = "";

				

				$disciplinaryCases->createdBy = $this->vendorId;
				$disciplinaryCases->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['disciplinaryCases'] = $disciplinaryCases;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'disciplinaryCases';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("disciplinaryCases/disciplinaryCasesForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New DisciplinaryCases';
			$this->global['pageName'] = 'disciplinaryCases';
			$data['employees'] = $this->EmployeeModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$disciplinaryCases = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'caseName'=>'',

'description'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$disciplinaryCases = array();
				try {
					$disciplinaryCases = $this->DisciplinaryCasesModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$disciplinaryCases = $this->read($id);
				$data['disciplinaryCases'] = $disciplinaryCases;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$disciplinaryCases = new DisciplinaryCasesModel();
				// $disciplinaryCases->field1 = "";
				
				$disciplinaryCases->employeeId = "";
$disciplinaryCases->caseName = "";
$disciplinaryCases->description = "";


				$data['disciplinaryCases'] = $disciplinaryCases;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'disciplinaryCases';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("disciplinaryCases/disciplinaryCasesFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$disciplinaryCasesList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$disciplinaryCases = $this->input->post();

		$this->load->model('DisciplinaryCasesModel');

		try {
			$id = $disciplinaryCases['id'];


			//print_r($disciplinaryCases['entityDetails']);

			if ($id != NULL || $id != '') {
				$disciplinaryCases['createdBy'] = $this->vendorId;
				$disciplinaryCases['updatedBy'] = $this->vendorId;

				$id = $this->DisciplinaryCasesModel->update($disciplinaryCases);
				

			} else {
				$disciplinaryCases['createdBy'] = $this->vendorId;
				$disciplinaryCases['updatedBy'] = $this->vendorId;

				$id = $this->DisciplinaryCasesModel->create($disciplinaryCases);
				

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
			$this->global['pageName'] = 'disciplinaryCases';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['disciplinaryCasesList'] = $this->DisciplinaryCasesModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully DisciplinaryCases Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'disciplinaryCases';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("disciplinaryCases/disciplinaryCasesList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$disciplinaryCasesList = array();
		$limit = 10;
		$this->load->model('DisciplinaryCasesModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$disciplinaryCases = $this->DisciplinaryCasesModel->findOne($id);

				if ($disciplinaryCases != null) {
					$disciplinaryCases->isApproved = "1";
					$id = $this->DisciplinaryCasesModel->approve($disciplinaryCases);
					
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
			$this->global['pageName'] = 'disciplinaryCases';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['disciplinaryCasesList'] = $this->DisciplinaryCasesModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully DisciplinaryCases Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'disciplinaryCases';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("disciplinaryCases/disciplinaryCasesList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('DisciplinaryCasesModel');
		$this->load->helper('url');
		$disciplinaryCases = array();
		try {
			$disciplinaryCases = $this->DisciplinaryCasesModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($disciplinaryCases);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $disciplinaryCases;
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
				$this->global['pageName'] = 'disciplinaryCases';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'disciplinaryCasesReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['employees'] = $this->EmployeeModel->getAll();

				$disciplinaryCases = array();
				try {
					$disciplinaryCases = $this->DisciplinaryCasesModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$disciplinaryCases = $this->read($id);
				$data['disciplinaryCases'] = $disciplinaryCases;
				

				$this->loadReport("disciplinaryCases/disciplinaryCasesReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("DisciplinaryCases_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('DisciplinaryCasesModel');
		$this->load->helper('url');
		try {
			$disciplinaryCasesList = $this->DisciplinaryCasesModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($disciplinaryCasesList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $disciplinaryCasesList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'disciplinaryCases';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('DisciplinaryCasesModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully DisciplinaryCases Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'disciplinaryCases';

			$data['disciplinaryCasesList'] = $this->DisciplinaryCasesModel->getAll();
			$this->loadForm("disciplinaryCases/disciplinaryCasesListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("DisciplinaryCases_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'disciplinaryCases';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('DisciplinaryCasesModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$disciplinaryCasess = array();

				$disciplinaryCasess = $this->DisciplinaryCasesModel->findOne($id);
				$this->DisciplinaryCasesModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("disciplinaryCasesId",$id);
				

				$disciplinaryCasesList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['disciplinaryCasesList'] = $this->DisciplinaryCasesModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully DisciplinaryCases Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("disciplinaryCases/disciplinaryCasesList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
