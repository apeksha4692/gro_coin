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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dashboard'] 		= 'Welcome/dashboard';

$route['staking'] 		= 'StakingUnstakingController/staking';
$route['unstaking'] 		= 'StakingUnstakingController/unstaking';


//Admin Route
$route['admin/login'] 				= 	'admin/AuthController/login_view';
$route['admin/check_login'] 		= 	'admin/AuthController/check_login';

$route['admin/dashboard'] 			= 	'admin/DashboardController';


$route['admin/profile'] 			= 	'admin/ProfileController/profile';
$route['admin/update_profile'] 		= 	'admin/ProfileController/update_profile';
$route['admin/change_password'] 	= 	'admin/ProfileController/change_password';

$route['admin/logout'] 				 = 	'admin/ProfileController/logout';


$route['admin/cms/about_us'] 			= 	'admin/CmsController/about_us';
$route['admin/cms/privacy_policy'] 		= 	'admin/CmsController/privacy_policy';
$route['admin/cms/terms_condition'] 	= 	'admin/CmsController/terms_condition';
$route['admin/cms/update_cms'] 			= 	'admin/CmsController/update_cms';
$route['admin/cms/contactus_list'] 			= 	'admin/CmsController/contactus_list';

$route['admin/cms/contact_information'] 	= 	'admin/CmsController/contact_information';
$route['admin/cms/update_contact'] 			= 	'admin/CmsController/update_contact';

$route['admin/user_transaction_list'] 			= 	'admin/UserController/user_transaction_list';