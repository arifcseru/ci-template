<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : PfLoan (PfLoan Controller)
 * Pf Loan Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class PfLoan extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('PfLoanModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('EmployeeModel');$this->load->model('PfLoanInstallmentModel');
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
				$this->global['pageName'] = 'pfLoan';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['pfLoanList'] = $this->PfLoanModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'pfLoan';
				$this->loadMaterialViews("pfLoan/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'pfLoan';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['pfLoanList'] = $this->PfLoanModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'pfLoan';
				$this->loadForm("pfLoan/pfLoanList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'pfLoan';
			//$data['roles'] = $this->user_model->getUserRoles();
			$data['employees'] = $this->EmployeeModel->getAll();

			/*$pfLoan = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'installment'=>'',

'transactionDate'=>'',

'installmentFrom'=>'',

'PfLoanInstallment'=>'',

'installmentTo'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$pfLoan = array();
				try {
					$pfLoan = $this->PfLoanModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$pfLoan = $this->read($id);
				$data['pfLoan'] = $pfLoan;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['pfLoanInstallments'] = $this->PfLoanInstallmentModel->findBy('pfLoanId',$id);
			} else {
				$pfLoan = new PfLoanModel();
				$pfLoan->createdDate  = date('Y-m-d H:i:s');
				$pfLoan->updatedDate  = date('Y-m-d H:i:s');

				//$pfLoan->field1 = "";
				$pfLoan->employeeId = "";
$pfLoan->installment = "";
$pfLoan->transactionDate = "";
$pfLoan->installmentFrom = "";
$pfLoan->PfLoanInstallment = "";
$pfLoan->installmentTo = "";

				$data['pfLoanInstallments'] = $this->PfLoanInstallmentModel->findBy('pfLoanId',$id);

				$pfLoan->createdBy = $this->vendorId;
				$pfLoan->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['pfLoan'] = $pfLoan;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'pfLoan';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("pfLoan/pfLoanForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New PfLoan';
			$this->global['pageName'] = 'pfLoan';
			$data['employees'] = $this->EmployeeModel->getAll();
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$pfLoan = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'employeeId'=>'',

'installment'=>'',

'transactionDate'=>'',

'installmentFrom'=>'',

'PfLoanInstallment'=>'',

'installmentTo'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$pfLoan = array();
				try {
					$pfLoan = $this->PfLoanModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$pfLoan = $this->read($id);
				$data['pfLoan'] = $pfLoan;
				$data['pfLoanInstallments'] = $this->PfLoanInstallmentModel->findBy('pfLoanId',$id);
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$pfLoan = new PfLoanModel();
				// $pfLoan->field1 = "";
				$data['pfLoanInstallments'] = $this->PfLoanInstallmentModel->findBy('pfLoanId',$id);
				$pfLoan->employeeId = "";
$pfLoan->installment = "";
$pfLoan->transactionDate = "";
$pfLoan->installmentFrom = "";
$pfLoan->PfLoanInstallment = "";
$pfLoan->installmentTo = "";


				$data['pfLoan'] = $pfLoan;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'pfLoan';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("pfLoan/pfLoanFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$pfLoanList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$pfLoan = $this->input->post();

		$this->load->model('PfLoanModel');

		try {
			$id = $pfLoan['id'];


			//print_r($pfLoan['entityDetails']);

			if ($id != NULL || $id != '') {
				$pfLoan['createdBy'] = $this->vendorId;
				$pfLoan['updatedBy'] = $this->vendorId;

				$id = $this->PfLoanModel->update($pfLoan);
				$pfLoanInstallmentList = $pfLoan['pfLoanInstallment'];
	            $this->PfLoanInstallmentModel->deleteBy("pfLoanId",$id);
	            if(!empty($pfLoanInstallmentList)){
	                foreach ($pfLoanInstallmentList as $key => $pfLoanInstallment) {
						$pfLoanInstallment['createdBy'] = $this->vendorId;						$pfLoanInstallment['updatedBy'] = $this->vendorId;	                    $pfLoanInstallment['pfLoanId'] = $id;
	                    $this->PfLoanInstallmentModel->create($pfLoanInstallment);
	                }
	            }

			} else {
				$pfLoan['createdBy'] = $this->vendorId;
				$pfLoan['updatedBy'] = $this->vendorId;

				$id = $this->PfLoanModel->create($pfLoan);
				$pfLoanInstallmentList = $pfLoan['pfLoanInstallment'];
	            
	            if(!empty($pfLoanInstallmentList)){
	                foreach ($pfLoanInstallmentList as $key => $pfLoanInstallment) {
						$pfLoanInstallment['createdBy'] = $this->vendorId;						$pfLoanInstallment['updatedBy'] = $this->vendorId;	                    $pfLoanInstallment['pfLoanId'] = $id;
	                    $this->PfLoanInstallmentModel->create($pfLoanInstallment);
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
			$this->global['pageName'] = 'pfLoan';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['pfLoanList'] = $this->PfLoanModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully PfLoan Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'pfLoan';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("pfLoan/pfLoanList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$pfLoanList = array();
		$limit = 10;
		$this->load->model('PfLoanModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$pfLoan = $this->PfLoanModel->findOne($id);

				if ($pfLoan != null) {
					$pfLoan->isApproved = "1";
					$id = $this->PfLoanModel->approve($pfLoan);
					
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
			$this->global['pageName'] = 'pfLoan';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['pfLoanList'] = $this->PfLoanModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully PfLoan Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'pfLoan';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("pfLoan/pfLoanList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('PfLoanModel');
		$this->load->helper('url');
		$pfLoan = array();
		try {
			$pfLoan = $this->PfLoanModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($pfLoan);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $pfLoan;
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
				$this->global['pageName'] = 'pfLoan';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'pfLoanReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				$data['employees'] = $this->EmployeeModel->getAll();

				$pfLoan = array();
				try {
					$pfLoan = $this->PfLoanModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$pfLoan = $this->read($id);
				$data['pfLoan'] = $pfLoan;
				$data['pfLoanInstallments'] = $this->PfLoanInstallmentModel->findBy('pfLoanId',$id);

				$this->loadReport("pfLoan/pfLoanReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("PfLoan_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('PfLoanModel');
		$this->load->helper('url');
		try {
			$pfLoanList = $this->PfLoanModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($pfLoanList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $pfLoanList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'pfLoan';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('PfLoanModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully PfLoan Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'pfLoan';

			$data['pfLoanList'] = $this->PfLoanModel->getAll();
			$this->loadForm("pfLoan/pfLoanListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("PfLoan_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'pfLoan';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('PfLoanModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$pfLoans = array();

				$pfLoans = $this->PfLoanModel->findOne($id);
				$this->PfLoanModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("pfLoanId",$id);
				$this->PfLoanInstallmentModel->deleteBy("pfLoanId",$id);

				$pfLoanList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['pfLoanList'] = $this->PfLoanModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully PfLoan Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("pfLoan/pfLoanList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
