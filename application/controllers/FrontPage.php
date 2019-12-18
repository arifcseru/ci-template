<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : FrontPage (FrontPage Controller)
 * Front Page Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class FrontPage extends BaseController
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('FrontPageModel');
		$this->load->model('UserPreferenceModel');
		$this->load->model('FeaturesModel');$this->load->model('CharacteristicsModel');$this->load->model('ProjectsModel');$this->load->model('PricingPlanModel');$this->load->model('TeamModel');
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
				$this->global['pageName'] = 'frontPage';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$data['frontPageList'] = $this->FrontPageModel->getAll();
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;
				
				$this->global['pageName'] = 'frontPage';
				$this->loadMaterialViews("frontPage/index", $this->global, $data, NULL);
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
				$this->global['pageName'] = 'frontPage';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				$data['frontPageList'] = $this->FrontPageModel->getAll();
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['pageName'] = 'frontPage';
				$this->loadForm("frontPage/frontPageList", $this->global, $data, NULL);
			}
		}
	}
	public function form($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageName'] = 'frontPage';
			//$data['roles'] = $this->user_model->getUserRoles();
			

			/*$frontPage = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'title'=>'',

'heading'=>'',

'headline'=>'',

'description'=>'',

'specialLink'=>'',

'linkType'=>'',

'detailsLink'=>'',

'detailsLinkText'=>'',

'contactUsHeadline'=>'',

'footerMessage'=>'',

'footerLink'=>'',

'facebookLink'=>'',

'githubLink'=>'',

'twitterLink'=>'',

'linkedInLink'=>'',

'Features'=>'',

'Characteristics'=>'',

'Projects'=>'',

'PricingPlan'=>'',

'Team'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$frontPage = array();
				try {
					$frontPage = $this->FrontPageModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$frontPage = $this->read($id);
				$data['frontPage'] = $frontPage;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['featuress'] = $this->FeaturesModel->findBy('frontPageId',$id);$data['characteristicss'] = $this->CharacteristicsModel->findBy('frontPageId',$id);$data['projectss'] = $this->ProjectsModel->findBy('frontPageId',$id);$data['pricingPlans'] = $this->PricingPlanModel->findBy('frontPageId',$id);$data['teams'] = $this->TeamModel->findBy('frontPageId',$id);
			} else {
				$frontPage = new FrontPageModel();
				$frontPage->createdDate  = date('Y-m-d H:i:s');
				$frontPage->updatedDate  = date('Y-m-d H:i:s');

				//$frontPage->field1 = "";
				$frontPage->title = "";
$frontPage->heading = "";
$frontPage->headline = "";
$frontPage->description = "";
$frontPage->specialLink = "";
$frontPage->linkType = "";
$frontPage->detailsLink = "";
$frontPage->detailsLinkText = "";
$frontPage->contactUsHeadline = "";
$frontPage->footerMessage = "";
$frontPage->footerLink = "";
$frontPage->facebookLink = "";
$frontPage->githubLink = "";
$frontPage->twitterLink = "";
$frontPage->linkedInLink = "";
$frontPage->Features = "";
$frontPage->Characteristics = "";
$frontPage->Projects = "";
$frontPage->PricingPlan = "";
$frontPage->Team = "";

				$data['featuress'] = $this->FeaturesModel->findBy('frontPageId',$id);$data['characteristicss'] = $this->CharacteristicsModel->findBy('frontPageId',$id);$data['projectss'] = $this->ProjectsModel->findBy('frontPageId',$id);$data['pricingPlans'] = $this->PricingPlanModel->findBy('frontPageId',$id);$data['teams'] = $this->TeamModel->findBy('frontPageId',$id);

				$frontPage->createdBy = $this->vendorId;
				$frontPage->updatedBy = $this->vendorId;

				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;

				$data['frontPage'] = $frontPage;
			}
			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'frontPage';
				
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['userId'] = $this->vendorId;
				$data['role'] = $this->role;
				//$this->global['pageTitle'] = $userPreference->applicationTitle;
				//$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				
				$this->loadForm("frontPage/frontPageForm", $this->global, $data, NULL);
			}
		}
	}
	public function view($id = NULL)
	{

		if ($this->isAdmin() == TRUE && $this->isApproverAdmin() == TRUE) {
			$this->loadThis();
		} else {
			$this->global['pageTitle'] = 'Company Limited : Add New FrontPage';
			$this->global['pageName'] = 'frontPage';
			
			$date_val = date('m/d/Y h:i:s a', time());
			$currentDate = date_create($date_val);

			/*$frontPage = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'title'=>'',

'heading'=>'',

'headline'=>'',

'description'=>'',

'specialLink'=>'',

'linkType'=>'',

'detailsLink'=>'',

'detailsLinkText'=>'',

'contactUsHeadline'=>'',

'footerMessage'=>'',

'footerLink'=>'',

'facebookLink'=>'',

'githubLink'=>'',

'twitterLink'=>'',

'linkedInLink'=>'',

'Features'=>'',

'Characteristics'=>'',

'Projects'=>'',

'PricingPlan'=>'',

'Team'=>'',

	            
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
			if ($id != NULL) {
				$frontPage = array();
				try {
					$frontPage = $this->FrontPageModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}
				//$frontPage = $this->read($id);
				$data['frontPage'] = $frontPage;
				$data['featuress'] = $this->FeaturesModel->findBy('frontPageId',$id);$data['characteristicss'] = $this->CharacteristicsModel->findBy('frontPageId',$id);$data['projectss'] = $this->ProjectsModel->findBy('frontPageId',$id);$data['pricingPlans'] = $this->PricingPlanModel->findBy('frontPageId',$id);$data['teams'] = $this->TeamModel->findBy('frontPageId',$id);
				$data['createdByUserName'] = $this->name;
				$data['updatedByUserName'] = $this->name;
			} else {
				$frontPage = new FrontPageModel();
				// $frontPage->field1 = "";
				$data['featuress'] = $this->FeaturesModel->findBy('frontPageId',$id);$data['characteristicss'] = $this->CharacteristicsModel->findBy('frontPageId',$id);$data['projectss'] = $this->ProjectsModel->findBy('frontPageId',$id);$data['pricingPlans'] = $this->PricingPlanModel->findBy('frontPageId',$id);$data['teams'] = $this->TeamModel->findBy('frontPageId',$id);
				$frontPage->title = "";
$frontPage->heading = "";
$frontPage->headline = "";
$frontPage->description = "";
$frontPage->specialLink = "";
$frontPage->linkType = "";
$frontPage->detailsLink = "";
$frontPage->detailsLinkText = "";
$frontPage->contactUsHeadline = "";
$frontPage->footerMessage = "";
$frontPage->footerLink = "";
$frontPage->facebookLink = "";
$frontPage->githubLink = "";
$frontPage->twitterLink = "";
$frontPage->linkedInLink = "";
$frontPage->Features = "";
$frontPage->Characteristics = "";
$frontPage->Projects = "";
$frontPage->PricingPlan = "";
$frontPage->Team = "";


				$data['frontPage'] = $frontPage;
			}

			$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
			if ($userPreference == null) {
				$this->global['createdByUserName'] = $this->name;
				$this->global['bodyClass'] = '';
				$this->global['pageTitle'] = 'User Preference Needed!!!';
				$this->global['pageName'] = 'frontPage';
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->loadForm("frontPage/frontPageFormView", $this->global, $data, NULL);
			}
		}
	}

	public function create()
	{
		$isValid = false;
		$message = "";
		$frontPageList = array();
		$limit = 10;
		$id = NULL;
		$data['createdByUserName'] = $this->name;
		$frontPage = $this->input->post();

		$this->load->model('FrontPageModel');

		try {
			$id = $frontPage['id'];


			//print_r($frontPage['entityDetails']);

			if ($id != NULL || $id != '') {
				$frontPage['createdBy'] = $this->vendorId;
				$frontPage['updatedBy'] = $this->vendorId;

				$id = $this->FrontPageModel->update($frontPage);
				$featuresList = $frontPage['features'];
	            $this->FeaturesModel->deleteBy("frontPageId",$id);
	            if(!empty($featuresList)){
	                foreach ($featuresList as $key => $features) {
						$features['createdBy'] = $this->vendorId;						$features['updatedBy'] = $this->vendorId;	                    $features['frontPageId'] = $id;
	                    $this->FeaturesModel->create($features);
	                }
	            }$characteristicsList = $frontPage['characteristics'];
	            $this->CharacteristicsModel->deleteBy("frontPageId",$id);
	            if(!empty($characteristicsList)){
	                foreach ($characteristicsList as $key => $characteristics) {
						$characteristics['createdBy'] = $this->vendorId;						$characteristics['updatedBy'] = $this->vendorId;	                    $characteristics['frontPageId'] = $id;
	                    $this->CharacteristicsModel->create($characteristics);
	                }
	            }$projectsList = $frontPage['projects'];
	            $this->ProjectsModel->deleteBy("frontPageId",$id);
	            if(!empty($projectsList)){
	                foreach ($projectsList as $key => $projects) {
						$projects['createdBy'] = $this->vendorId;						$projects['updatedBy'] = $this->vendorId;	                    $projects['frontPageId'] = $id;
	                    $this->ProjectsModel->create($projects);
	                }
	            }$pricingPlanList = $frontPage['pricingPlan'];
	            $this->PricingPlanModel->deleteBy("frontPageId",$id);
	            if(!empty($pricingPlanList)){
	                foreach ($pricingPlanList as $key => $pricingPlan) {
						$pricingPlan['createdBy'] = $this->vendorId;						$pricingPlan['updatedBy'] = $this->vendorId;	                    $pricingPlan['frontPageId'] = $id;
	                    $this->PricingPlanModel->create($pricingPlan);
	                }
	            }$teamList = $frontPage['team'];
	            $this->TeamModel->deleteBy("frontPageId",$id);
	            if(!empty($teamList)){
	                foreach ($teamList as $key => $team) {
						$team['createdBy'] = $this->vendorId;						$team['updatedBy'] = $this->vendorId;	                    $team['frontPageId'] = $id;
	                    $this->TeamModel->create($team);
	                }
	            }

			} else {
				$frontPage['createdBy'] = $this->vendorId;
				$frontPage['updatedBy'] = $this->vendorId;

				$id = $this->FrontPageModel->create($frontPage);
				$featuresList = $frontPage['features'];
	            
	            if(!empty($featuresList)){
	                foreach ($featuresList as $key => $features) {
						$features['createdBy'] = $this->vendorId;						$features['updatedBy'] = $this->vendorId;	                    $features['frontPageId'] = $id;
	                    $this->FeaturesModel->create($features);
	                }
	            }$characteristicsList = $frontPage['characteristics'];
	            
	            if(!empty($characteristicsList)){
	                foreach ($characteristicsList as $key => $characteristics) {
						$characteristics['createdBy'] = $this->vendorId;						$characteristics['updatedBy'] = $this->vendorId;	                    $characteristics['frontPageId'] = $id;
	                    $this->CharacteristicsModel->create($characteristics);
	                }
	            }$projectsList = $frontPage['projects'];
	            
	            if(!empty($projectsList)){
	                foreach ($projectsList as $key => $projects) {
						$projects['createdBy'] = $this->vendorId;						$projects['updatedBy'] = $this->vendorId;	                    $projects['frontPageId'] = $id;
	                    $this->ProjectsModel->create($projects);
	                }
	            }$pricingPlanList = $frontPage['pricingPlan'];
	            
	            if(!empty($pricingPlanList)){
	                foreach ($pricingPlanList as $key => $pricingPlan) {
						$pricingPlan['createdBy'] = $this->vendorId;						$pricingPlan['updatedBy'] = $this->vendorId;	                    $pricingPlan['frontPageId'] = $id;
	                    $this->PricingPlanModel->create($pricingPlan);
	                }
	            }$teamList = $frontPage['team'];
	            
	            if(!empty($teamList)){
	                foreach ($teamList as $key => $team) {
						$team['createdBy'] = $this->vendorId;						$team['updatedBy'] = $this->vendorId;	                    $team['frontPageId'] = $id;
	                    $this->TeamModel->create($team);
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
			$this->global['pageName'] = 'frontPage';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['frontPageList'] = $this->FrontPageModel->getAll();
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully FrontPage Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'frontPage';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("frontPage/frontPageList", $this->global, $data, NULL);
		}
	}
	public function approve($id = NULL)
	{
		$isValid = false;
		$message = "";
		$frontPageList = array();
		$limit = 10;
		$this->load->model('FrontPageModel');
		$data['createdByUserName'] = $this->name;
		try {
			if ($id != NULL || $id != '') {
				$frontPage = $this->FrontPageModel->findOne($id);

				if ($frontPage != null) {
					$frontPage->isApproved = "1";
					$id = $this->FrontPageModel->approve($frontPage);
					
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
			$this->global['pageName'] = 'frontPage';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$data['frontPageList'] = $this->FrontPageModel->getAll();

			$data['error'] = '';
			$data['success'] = 'Successfully FrontPage Published.';
			$data['searchText'] = '';
			$this->global['userId'] = $this->vendorId;
			$this->global['createdByUserName'] = $this->name;
			$this->global['pageTitle'] = $userPreference->applicationTitle;
			$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
			$this->global['pageName'] = 'frontPage';
			$this->global['bodyClass'] = $userPreference->metaTags;
			$this->loadForm("frontPage/frontPageList", $this->global, $data, NULL);
		}
	}
	public function read($id)
	{
		$this->load->model('FrontPageModel');
		$this->load->helper('url');
		$frontPage = array();
		try {
			$frontPage = $this->FrontPageModel->findOne($id);
			header('Content-type: application/json');
			echo json_encode($frontPage);
		} catch (Exception $e) {
			echo 'error to fetch data';
		}
		
		return $frontPage;
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
				$this->global['pageName'] = 'frontPage';
				$this->global['createdByUserName'] = $this->name;
				$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
			} else {
				//print_r($userPreference); 
				$data['pageTitle'] = $userPreference->applicationTitle;
				$data['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['createdByUserName'] = $this->name;
				$data['pageName'] = 'frontPageReport';
				$data['createdByUserName'] = $this->name;
				//$data['roles'] = $this->user_model->getUserRoles();
				

				$frontPage = array();
				try {
					$frontPage = $this->FrontPageModel->findOne($id);
				} catch (Exception $e) {
					echo 'error to fetch data';
				}

				//$frontPage = $this->read($id);
				$data['frontPage'] = $frontPage;
				$data['featuress'] = $this->FeaturesModel->findBy('frontPageId',$id);$data['characteristicss'] = $this->CharacteristicsModel->findBy('frontPageId',$id);$data['projectss'] = $this->ProjectsModel->findBy('frontPageId',$id);$data['pricingPlans'] = $this->PricingPlanModel->findBy('frontPageId',$id);$data['teams'] = $this->TeamModel->findBy('frontPageId',$id);

				$this->loadReport("frontPage/frontPageReport", $this->global, $data, NULL);
				$html = $this->output->get_output();
				$this->load->library('pdf');

				$this->dompdf->loadHtml($html);
				$this->dompdf->setPaper('A4', 'landscape');
				$this->dompdf->render();
				$this->dompdf->stream("FrontPage_".$id."_report.pdf", array("Attachment" => 0));
			}
		}
	}

	public function get($start,$limit)
	{
		$this->load->model('FrontPageModel');
		$this->load->helper('url');
		try {
			$frontPageList = $this->FrontPageModel->getPaginated($start,$limit);
			header('Content-type: application/json');
			echo json_encode($frontPageList);
		} catch (Exception $e) {
			echo 'error to insert data';
		}

		return $frontPageList;
	}
	public function allData()
	{
		$data_user = array();
		$data['createdByUserName'] = $this->name;
		$userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
		if ($userPreference == null) {
			$this->global['bodyClass'] = '';
			$this->global['pageTitle'] = 'User Preference Needed!!!';
			$this->global['pageName'] = 'frontPage';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->model('FrontPageModel');
			$this->global['createdByUserName'] = $this->name;
			$data['error'] = '';
			$data['success'] = 'Successfully FrontPage Published.';
			$data['searchText'] = '';
			$data['pageTitle'] = $userPreference->applicationTitle;
			$data['activeCompanyId'] = $userPreference->activeCompanyId;
			$data['createdByUserName'] = $this->name;
			$data['pageName'] = 'frontPage';

			$data['frontPageList'] = $this->FrontPageModel->getAll();
			$this->loadForm("frontPage/frontPageListReport", $this->global, $data, NULL);

			$html = $this->output->get_output();
			$this->load->library('pdf');

			$this->dompdf->loadHtml($html);

			$this->dompdf->setPaper('A4', 'landscape');
			$this->dompdf->render();
			$this->dompdf->stream("FrontPage_List_1022322.pdf", array("Attachment" => 0));
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
			$this->global['pageName'] = 'frontPage';
			$this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
		} else {
			$this->load->database();
			$this->load->model('FrontPageModel');
			$post = $this->input->post();
			try {
				$post = $this->input->post();
				$frontPages = array();

				$frontPages = $this->FrontPageModel->findOne($id);
				$this->FrontPageModel->delete($id);
				//$this->EntityDetailsModel->deleteBy("frontPageId",$id);
				$this->FeaturesModel->deleteBy("frontPageId",$id);$this->CharacteristicsModel->deleteBy("frontPageId",$id);$this->ProjectsModel->deleteBy("frontPageId",$id);$this->PricingPlanModel->deleteBy("frontPageId",$id);$this->TeamModel->deleteBy("frontPageId",$id);

				$frontPageList = array();
				$limit = 10;
				$this->load->library('pagination');
				$data['frontPageList'] = $this->FrontPageModel->getAll();
				$data['error'] = '';
				$data['success'] = 'Successfully FrontPage Deleted.';
				$data['searchText'] = '';
				$this->global['userId'] = $this->vendorId;
				$this->global['createdByUserName'] = $this->name;
				$this->global['pageTitle'] = $userPreference->applicationTitle;
				$this->global['activeCompanyId'] = $userPreference->activeCompanyId;
				$this->global['bodyClass'] = $userPreference->metaTags;

				$this->loadForm("frontPage/frontPageList", $this->global, $data, NULL);
			} catch (Exception $e) {
				echo 'error to delete data';
			}
		}
	}
}
