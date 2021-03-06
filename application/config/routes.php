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

$route['user/register']= "user/store_form"; // localhost:8080/user/register
$route['user/registered']= "user/loggedin";
$route['user/register_post']= "user/store";
$route['user/profile']= "user/pro_pg";

$route['user/home']= "/verifylogin";

$route['user/image1']= "user/image_first";
$route['user/forgotpassword']= "user/display_doforget";
$route['user/frgt']= "user/display_doforget";
// $route['user/delete/:ids'] ='user/delete/$ids';


$route['ctg/add']= "categories/add_form";
$route['ctg/add_post']= "categories/store";
$route['ctg/delete/:ids'] ='categories/delete/$ids';

$route['user/update/(:num)']= 'user/update_form/$1';
$route['user/update_post']= 'user/update';
// $route['user/update/:ids']= 'user/update/$ids'; // localhost:8080/user/register

$route['default_controller']= 'login';
// $route['default_controller']= 'user/store_form';
// $route['default_controller']= 'welcome';


// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;

