<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : PublicMenu (PublicMenu Controller)
 * Public Menu Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class PublicMenu extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('PublicMenuModel');
		$this->load->model('UserPreferenceModel');
		
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
				$this->global['pageName'] = 'publicMenu';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['publicMenuList'] = $this->PublicMenuModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'publicMenu';
				$this->loadMaterialViews("publicMenu/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'publicMenu';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['publicMenuList'] = $this->PublicMenuModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'publicMenu';
				$this->loadForm("publicMenu/publicMenuList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'publicMenu';
			//$data['roles'] = $this->user_model->getUserRoles();
			

			/*$publicMenu = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'menuText'=>'',

'linkType'=>'',

'menuLinkUrl'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$publicMenu = array();
				try {
					$publicMenu = $this->PublicMenuModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$publicMenu = $this->read($id);
				$data['publicMenu'] = $publicMenu;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				
			} else {
				$publicMenu = new PublicMenuModel();
				$publicMenu->createdDate  = date('Y-m-d H:i:s');
				$publicMenu->updatedDate  = date('Y-m-d H:i:s');

				//$publicMenu->field1 = "";
				$publicMenu->menuText = "";
$publicMenu->linkType = "";
$publicMenu->menuLinkUrl = "";

				

				$publicMenu->createdBy = $this->vendorId;
				$publicMenu->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['publicMenu'] = $publicMenu;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'publicMenu';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("publicMenu/publicMenuForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New PublicMenu';
			$this->global['pageName'] = 'publicMenu';
			
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$publicMenu = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'menuText'=>'',

'linkType'=>'',

'menuLinkUrl'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$publicMenu = array();
				try {
					$publicMenu = $this->PublicMenuModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$publicMenu = $this->read($id);
				$data['publicMenu'] = $publicMenu;
				
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$publicMenu = new PublicMenuModel();
				// $publicMenu->field1 = "";
				
				$publicMenu->menuText = "";
$publicMenu->linkType = "";
$publicMenu->menuLinkUrl = "";


				$data['publicMenu'] = $publicMenu;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'publicMenu';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("publicMenu/publicMenuFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$publicMenuList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$publicMenu = $this->input->post();

		$this->load->model('PublicMenuModel');

		try {
			$id = $publicMenu['id'];


			//print_r($publicMenu['entityDetails']);

			if ($id != NULL || $id != '') {
				$publicMenu['createdBy'] = $this->vendorId;
				$publicMenu['updatedBy'] = $this->vendorId;

				$id = $this->PublicMenuModel->update($publicMenu);
				

			} else {
				$publicMenu['createdBy'] = $this->vendorId;
				$publicMenu['updatedBy'] = $this->vendorId;

				$id = $this->PublicMenuModel->create($publicMenu);
				

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
			$this->global['pageName'] = 'publicMenu';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['publicMenuList'] = $this->PublicMenuModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully PublicMenu Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'publicMenu';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("publicMenu/publicMenuList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$publicMenuList = array();
		$limit = 10;
		$this->load->model('PublicMenuModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$publicMenu = $this->PublicMenuModel->findOne($id);

				if ($publicMenu != null) {
					$publicMenu->isApproved = "1";
					$id = $this->PublicMenuModel->approve($publicMenu);
					
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
			$this->global['pageName'] = 'publicMenu';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['publicMenuList'] = $this->PublicMenuModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully PublicMenu Published.';
			$data['searchText'] = '';
			$data['role'] = $this->role;
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'publicMenu';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("publicMenu/publicMenuList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('PublicMenuModel');
		$this->load->helper('url');
		$publicMenu = array();
		try {
			$publicMenu = $this->PublicMenuModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($publicMenu);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $publicMenu;
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
				$this->global['pageName'] = 'publicMenu';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'publicMenuReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				

				$publicMenu = array();
				try {
					$publicMenu = $this->PublicMenuModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$publicMenu = $this->read($id);
				$data['publicMenu'] = $publicMenu;
				

				$this->loadReport("publicMenu/publicMenuReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("PublicMenu_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('PublicMenuModel');
		$this->load->helper('url');
		try {
			$publicMenuList = $this->PublicMenuModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($publicMenuList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $publicMenuList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'publicMenu';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('PublicMenuModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully PublicMenu Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'publicMenu';
			$data['role'] = $this->role;

			$data['publicMenuList'] = $this->PublicMenuModel->getAll();
			$this->loadForm("publicMenu/publicMenuListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("PublicMenu_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'publicMenu';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('PublicMenuModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$publicMenus = array();

				$publicMenus = $this->PublicMenuModel->findOne($id);
				$this->PublicMenuModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("publicMenuId",$id);
				

				$publicMenuList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['publicMenuList'] = $this->PublicMenuModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully PublicMenu Deleted.';
				$data['searchText'] = '';
				$data['role'] = $this->role;
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("publicMenu/publicMenuList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
