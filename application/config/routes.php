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
/* auth all route */
$route['register'] = 'auth/register';
$route['login'] = 'auth/login';
$route['dashboard'] = 'dashboard/index';
$route['logout'] = 'auth/logout';
$route['forget'] = 'auth/forget_pass';
$route['resetpassword/(:any)'] = 'auth/reset_password/$1';
$route['changepassword/(:any)'] = 'auth/change_password/$1';
/* /auth all route */

/* house owner entry crud */
$route['ship'] = 'ship/index';
$route['shipadd'] = 'ship/create';
$route['shipedit/(:any)'] = 'ship/update/$1';
$route['shipdelete/(:any)'] = 'ship/delete_data/$1';

/* /house owner entry crud */

/* house owner entry crud */
$route['order'] = 'order/index';
$route['orderadd'] = 'order/create';
$route['orderedit/(:any)'] = 'order/update/$1';
$route['orderdelete/(:any)'] = 'order/delete_data/$1';
$route['token/(:any)'] = 'order/token_gen/$1';
/* /house owner entry crud */