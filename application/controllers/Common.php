<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
/**
 * Class : ApplicantInfo (ApplicantInfo Controller)
 * Applicant Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class Common extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        //$this->load->library('javascript');
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->model('ApplicantInfoModel');
        $this->load->model('UserPreferenceModel');
        $this->load->model('InterviewInfoModel');
        $this->load->model('EmployeeModel');
        $this->load->model('TraineeCoursesModel');
        $this->load->model('CourseModel');
        $this->load->model('JobPostingModel');
        $this->load->model('UserPreferenceModel');
        $this->load->model('UserModel');
        $this->load->model('CompanyProfileModel');
        $this->load->model('RoleModel');

        $this->isLoggedIn();
    }
    public function index()
    {
        if ($this->isAdmin() == TRUE) {
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
                $this->global['pageName'] = 'applicantInfo';
                $this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
            } else {
                $this->global['createdByUserName'] = $this->name;
                $this->global['updatedByUserName'] = $this->name;
                $this->global['createdDate'] = '';
                $this->global['updatedDate'] = '';
                $data['applicantInfoList'] = $this->ApplicantInfoModel->getAll();
                $this->global['userId'] = $this->vendorId;
                $this->global['pageTitle'] = $userPreference->applicationTitle;
                $this->global['activeCompanyId'] = $userPreference->activeCompanyId;
                $this->global['bodyClass'] = $userPreference->metaTags;

                $this->global['pageName'] = 'applicantInfo';
                $this->loadMaterialViews("common/index", $this->global, $data, NULL);
            }
        }
    }

    public function globalSettings($id = NULL)
    {
        $id = $this->vendorId;
        if ($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {
            $this->global['pageName'] = 'userPreference';
            //$data['roles'] = $this->user_model->getUserRoles();
            $data['users'] = $this->UserModel->getAll();
            $data['companyProfiles'] = $this->CompanyProfileModel->getAll();
            $data['roles'] = $this->RoleModel->getAll();

            /*$userPreference = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'userId'=>'',

'activeCompanyId'=>'',

'language'=>'',

'activeRole'=>'',

'showNotification'=>'',

'showEmail'=>'',

'showTask'=>'',

'applicationTitle'=>'',

'metaTags'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
            if ($id != NULL) {
                $userPreference = array();
                try {
                    $userPreference = $this->UserPreferenceModel->findOne($id);
                } catch (Exception $e) {
                    echo 'error to fetch data';
                }
                //$userPreference = $this->read($id);
                $data['userPreference'] = $userPreference;

                $data['createdByUserName'] = $this->name;
                $data['updatedByUserName'] = $this->name;
            } else {
                $userPreference = new UserPreferenceModel();
                $userPreference->createdDate  = date('Y-m-d H:i:s');
                $userPreference->updatedDate  = date('Y-m-d H:i:s');

                //$userPreference->field1 = "";
                $userPreference->userId = "";
                $userPreference->activeCompanyId = "";
                $userPreference->language = "";
                $userPreference->activeRole = "";
                $userPreference->showNotification = "";
                $userPreference->showEmail = "";
                $userPreference->showTask = "";
                $userPreference->applicationTitle = "";
                $userPreference->metaTags = "";



                $userPreference->createdBy = $this->vendorId;
                $userPreference->updatedBy = $this->vendorId;

                $data['createdByUserName'] = $this->name;
                $data['updatedByUserName'] = $this->name;

                $data['userPreference'] = $userPreference;
            }
            $userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
            if ($userPreference == null) {
                $this->global['createdByUserName'] = $this->name;
                $this->global['userId'] = $this->vendorId;
                $this->global['bodyClass'] = '';
                $this->global['pageTitle'] = 'User Preference Needed!!!';
                $this->global['pageName'] = 'userPreference';
                $this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
            } else {
                $this->global['createdByUserName'] = $this->name;
                $this->global['userId'] = $this->vendorId;
                $this->global['pageTitle'] = $userPreference->applicationTitle;
                $this->global['activeCompanyId'] = $userPreference->activeCompanyId;
                $this->global['bodyClass'] =  $userPreference->metaTags;
                $this->loadMaterialViews("common/globalSettings", $this->global, $data, NULL);
            }
        }
    }
    public function userAccount($id = NULL)
    {
        $id = $this->vendorId;

        if ($this->isAdmin() == TRUE) {
            $this->loadThis();
        } else {
            $this->global['pageName'] = 'user';
            //$data['roles'] = $this->user_model->getUserRoles();
            $data['roles'] = $this->RoleModel->getAll();

            /*$user = array(
	            'id'=>NULL,
	            //'field1'=>'',
	            
'fullName'=>'',

'email'=>'',

'password'=>'',

'confirmPassword'=>'',

'roleId'=>'',

'CompanyProfile'=>'',

'mobileNumber'=>'',

	            'isApproved'=>0,
	            'createdBy'=>0,
	            'updatedBy'=>0
	        );*/
            if ($id != NULL) {
                $user = array();
                try {
                    $user = $this->UserModel->findOne($id);
                } catch (Exception $e) {
                    echo 'error to fetch data';
                }
                //$user = $this->read($id);
                $user->password = "";
                $user->confirmPassword = "";
                $data['user'] = $user;

                $data['createdByUserName'] = $this->name;
                $data['updatedByUserName'] = $this->name;

                $data['companyProfiles'] = $this->CompanyProfileModel->findBy('userId', $id);
            } else {
                $user = new UserModel();
                $user->createdDate  = date('Y-m-d H:i:s');
                $user->updatedDate  = date('Y-m-d H:i:s');

                //$user->field1 = "";
                $user->fullName = "";
                $user->email = "";
                //$2y$10$6NOKhXKiR2SAgpFF2WpCkuRgYKlSqFJaqM0NgIM3PT1gKHEM5/SM6
                $user->password = "";
                $user->confirmPassword = "";
                $user->roleId = "";
                $user->CompanyProfile = "";
                $user->mobileNumber = "";

                $data['companyProfiles'] = $this->CompanyProfileModel->findBy('userId', $id);

                $user->createdBy = $this->vendorId;
                $user->updatedBy = $this->vendorId;

                $data['createdByUserName'] = $this->name;
                $data['updatedByUserName'] = $this->name;

                $data['user'] = $user;
            }
            $userPreference = $this->UserPreferenceModel->findOneBy('userId', $this->vendorId);
            if ($userPreference == null) {
                $this->global['createdByUserName'] = $this->name;
                $this->global['userId'] = $this->vendorId;
                $this->global['bodyClass'] = '';
                $this->global['pageTitle'] = 'User Preference Needed!!!';
                $this->global['pageName'] = 'user';
                $this->loadMaterialViews("common/userPreferenceNotFound", $this->global, $data, NULL);
            } else {
                $this->global['createdByUserName'] = $this->name;
                $this->global['userId'] = $this->vendorId;
                $this->global['pageTitle'] = $userPreference->applicationTitle;
                $this->global['activeCompanyId'] = $userPreference->activeCompanyId;
                $this->global['bodyClass'] = $userPreference->metaTags;

                $this->loadMaterialViews("common/userAccount", $this->global, $data, NULL);
            }
        }
    }
    public function updateUser()
    {
        $isValid = false;
        $message = "";
        $userList = array();
        $limit = 10;
        $id = NULL;
        $data['createdByUserName'] = $this->name;
        $user = $this->input->post();

        $this->load->model('UserModel');

        try {
            $id = $user['id'];


            //print_r($user['entityDetails']);

            if ($id != NULL || $id != '') {
                $user['createdBy'] = $this->vendorId;
                $user['updatedBy'] = $this->vendorId;
                $user['password'] = getHashedPassword($user['password']);
                
                $id = $this->UserModel->update($user);
                $companyProfileList = $user['companyProfile'];
                $this->CompanyProfileModel->deleteBy("userId", $id);
                if (!empty($companyProfileList)) {
                    foreach ($companyProfileList as $key => $companyProfile) {
                        $companyProfile['createdBy'] = $this->vendorId;
                        $companyProfile['updatedBy'] = $this->vendorId;
                        $companyProfile['userId'] = $id;
                        $this->CompanyProfileModel->create($companyProfile);
                    }
                }
            } else {
                $user['createdBy'] = $this->vendorId;
                $user['updatedBy'] = $this->vendorId;

                $id = $this->UserModel->create($user);
                $companyProfileList = $user['companyProfile'];

                if (!empty($companyProfileList)) {
                    foreach ($companyProfileList as $key => $companyProfile) {
                        $companyProfile['createdBy'] = $this->vendorId;
                        $companyProfile['updatedBy'] = $this->vendorId;
                        $companyProfile['userId'] = $id;
                        $this->CompanyProfileModel->create($companyProfile);
                    }
                }
            }
        } catch (Exception $e) {
            echo 'error to create data';
        }

        header('Content-type: application/json');
        $result = "successfully saved.";
        echo json_encode($result);
    }
    public function updateUserPreference()
    {
        $isValid = false;
        $message = "";
        $userPreferenceList = array();
        $limit = 10;
        $id = NULL;
        $data['createdByUserName'] = $this->name;
        $userPreference = $this->input->post();

        $this->load->model('UserPreferenceModel');

        try {
            $id = $userPreference['id'];


            //print_r($userPreference['entityDetails']);

            if ($id != NULL || $id != '') {
                $userPreference['createdBy'] = $this->vendorId;
                $userPreference['updatedBy'] = $this->vendorId;

                $id = $this->UserPreferenceModel->update($userPreference);
            } else {
                $userPreference['createdBy'] = $this->vendorId;
                $userPreference['updatedBy'] = $this->vendorId;

                $id = $this->UserPreferenceModel->create($userPreference);
            }
        } catch (Exception $e) {
            echo 'error to create data';
        }


        header('Content-type: application/json');
        $result = "successfully saved.";
        echo json_encode($result);
    }
}
