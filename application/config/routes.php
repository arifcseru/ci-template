<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = "home";
$route['404_override'] = 'error_404';
$route['translate_uri_dashes'] = FALSE;


/*********** USER DEFINED ROUTES *******************/
$route['companyProfile/create']['post'] = 'companyProfile/create';
$route['jobPosting/create']['post'] = 'jobPosting/create';
$route['employeePosition/create']['post'] = 'employeePosition/create';
$route['entityDetails/create']['post'] = 'entityDetails/create';
$route['role/create']['post'] = 'role/create';
$route['leaveType/create']['post'] = 'leaveType/create';
$route['leaveRequest/create']['post'] = 'leaveRequest/create';
$route['attendance/create']['post'] = 'attendance/create';
$route['jobPosition/create']['post'] = 'jobPosition/create';
$route['applicantInfo/create']['post'] = 'applicantInfo/create';
$route['traineeCourses/create']['post'] = 'traineeCourses/create';
$route['interviewInfo/create']['post'] = 'interviewInfo/create';
$route['attendanceInfo/create']['post'] = 'attendanceInfo/create';
$route['course/create']['post'] = 'course/create';
$route['subject/create']['post'] = 'subject/create';
$route['trainingInfo/create']['post'] = 'trainingInfo/create';
$route['empTraining/create']['post'] = 'empTraining/create';
$route['trainingDetails/create']['post'] = 'trainingDetails/create';
$route['empDocInfo/create']['post'] = 'empDocInfo/create';
$route['userPreference/create']['post'] = 'userPreference/create';
$route['expepnseType/create']['post'] = 'expepnseType/create';
$route['expense/create']['post'] = 'expense/create';
$route['incomeType/create']['post'] = 'incomeType/create';
$route['companyBalance/create']['post'] = 'companyBalance/create';
$route['disciplinaryCases/create']['post'] = 'disciplinaryCases/create';
$route['holidayType/create']['post'] = 'holidayType/create';
$route['employeeSalary/create']['post'] = 'employeeSalary/create';
$route['providendFund/create']['post'] = 'providendFund/create';
$route['pfDetails/create']['post'] = 'pfDetails/create';
$route['pfLoan/create']['post'] = 'pfLoan/create';
$route['pfLoanInstallment/create']['post'] = 'pfLoanInstallment/create';
$route['branch/create']['post'] = 'branch/create';
$route['department/create']['post'] = 'department/create';
$route['jobApplication/create']['post'] = 'jobApplication/create';
$route['publicMenu/create']['post'] = 'publicMenu/create';
$route['features/create']['post'] = 'features/create';
$route['characteristics/create']['post'] = 'characteristics/create';
$route['projects/create']['post'] = 'projects/create';
$route['pricingPlan/create']['post'] = 'pricingPlan/create';
$route['team/create']['post'] = 'team/create';
$route['frontPage/create']['post'] = 'frontPage/create';
$route['employeeSeparation/create']['post'] = 'employeeSeparation/create';
// entityAjaxRequest


















$route['loginMe'] = 'login/loginMe';
$route['registration'] = 'login/registration';
$route['dashboard'] = 'adminpanel';
$route['adminpanel/user'] = 'user';
$route['material'] = 'adminpanel';
$route['post'] = 'post';
$route['entityName'] = 'entityName';
$route['logout'] = 'user/logout';
$route['userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";
$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";
$route['profile'] = "user/profile";
$route['profile/(:any)'] = "user/profile/$1";
$route['profileUpdate'] = "user/profileUpdate";
$route['profileUpdate/(:any)'] = "user/profileUpdate/$1";

$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['changePassword/(:any)'] = "user/changePassword/$1";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";
$route['login-history'] = "user/loginHistoy";
$route['login-history/(:num)'] = "user/loginHistoy/$1";
$route['login-history/(:num)/(:num)'] = "user/loginHistoy/$1/$2";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";

/* End of file routes.php */
/* Location: ./application/config/routes.php */
