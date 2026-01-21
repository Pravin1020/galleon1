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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['admin'] = 'admin/login';

$route['home'] = 'welcome/index';
$route['about'] = 'welcome/about';
$route['service'] = 'welcome/service';
$route['services_detail/(:any)'] = 'welcome/services_detail/$1';
$route['casestudy'] = 'welcome/casestudy';
$route['casestudy_detail/(:any)'] = 'welcome/c_detail/$1';
$route['blog'] = 'welcome/blog';
$route['p2'] = 'welcome/p2';
$route['p2/(:any)'] = 'welcome/p2/$1';
$route['p2/(:any)/(:any)'] = 'welcome/p2/$1/$2';
$route['event'] = 'welcome/event';      

$route['bdetail/(:any)'] = 'welcome/b_detail/$1';
$route['contact'] = 'welcome/contact';

$route['login'] = 'welcome/login';
$route['reset_password'] = 'welcome/reset_password';
$route['forgot_password'] = 'welcome/forgot_password';
$route['email_verification'] = 'welcome/email_verification';
$route['two_step_verification'] = 'welcome/two_step_verification';
$route['success'] = 'welcome/success';

$route['admin_dashboard'] = 'welcome/admin_dashboard';

$route['terms'] = 'welcome/terms';
$route['privacyp'] = 'welcome/privacyp';
