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
$route['default_controller'] = 'Main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'Main/home';
$route['staff'] = 'Main/staff';
$route['about'] = 'Main/about';
$route['new_prd'] = 'Main/new_prd';
$route['insert_prd'] = 'Main/insert_prd';
$route['login'] = 'Main/login';
$route['logout'] = 'Main/logout';
$route['log_val'] = 'Main/login_validation';
$route['register'] = 'Main/register';
$route['reg_val'] = 'Main/register_validation';

$route['new_products'] = 'Main/new_products';
$route['product/([0-9]+)/(:any)'] = 'Main/product/$1/$2';

$route['category/([0-9]+)/(:any)'] = 'Main/category/$1/$2';

$route['checkPrd'] = 'Main/check_prd';

$route['sendEmailInfoPrd'] = 'Main/send_mail_info_prd';

$route['search_key'] = 'Main/search_key';
$route['search/([0-9]+)/(:any)/(:any)/(:any)/(:any)'] = 'Main/search/$1/$2/$3/$4/$5';

$route['trans_1'] = 'Main/transition_1';
$route['trans_2'] = 'Main/transition_2';
$route['trans_3'] = 'Main/transition_3';

