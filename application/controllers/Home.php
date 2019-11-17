<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Home extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('PublicMenuModel');
        $this->load->model('FrontPageModel');
        $this->load->model('UserPreferenceModel');
        $this->load->model('ApplicantInfoModel');
        $this->load->model('FeaturesModel');
        $this->load->model('CharacteristicsModel');
        $this->load->model('ProjectsModel');
        $this->load->model('PricingPlanModel');
        $this->load->model('TeamModel');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->isLoggedIn();
    }

    /**
     * This function used to check the user is logged in or not
     */
    function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');

        if (!isset($isLoggedIn) || $isLoggedIn != TRUE) {
            $frontPage = array();
            try {
                $frontPage = $this->FrontPageModel->findOne(1);
                if($frontPage!=null) {
                    $id = $frontPage->id;
                    //$frontPage = $this->read($id);
                    $data['frontPage'] = $frontPage;
                    $data['publicMenuList'] = $this->PublicMenuModel->getAll();
                    $data['featuress'] = $this->FeaturesModel->findBy('frontPageId', $id);
                    $data['characteristicss'] = $this->CharacteristicsModel->findBy('frontPageId', $id);
                    $data['projectss'] = $this->ProjectsModel->findBy('frontPageId', $id);
                    $data['pricingPlans'] = $this->PricingPlanModel->findBy('frontPageId', $id);
                    $data['teams'] = $this->TeamModel->findBy('frontPageId', $id);
                    $this->load->view('public/home', $data);
                } else {
                    $this->load->view('public/404');
                }
            } catch (Exception $e) {
                echo 'error to fetch data';
            }
            
        } else {
            $frontPage = array();
            try {
                $frontPage = $this->FrontPageModel->findOne(1);
                if($frontPage!=null) {
                    $id = $frontPage->id;
                    //$frontPage = $this->read($id);
                    $data['frontPage'] = $frontPage;
                    $data['publicMenuList'] = $this->PublicMenuModel->getAll();
                    $data['featuress'] = $this->FeaturesModel->findBy('frontPageId', $id);
                    $data['characteristicss'] = $this->CharacteristicsModel->findBy('frontPageId', $id);
                    $data['projectss'] = $this->ProjectsModel->findBy('frontPageId', $id);
                    $data['pricingPlans'] = $this->PricingPlanModel->findBy('frontPageId', $id);
                    $data['teams'] = $this->TeamModel->findBy('frontPageId', $id);
                    $this->load->view('public/home', $data);
                } else {
                    $this->load->view('public/404');
                }
            } catch (Exception $e) {
                echo 'error to fetch data';
            }
            //redirect('/adminpanel');
        }
    }
}
