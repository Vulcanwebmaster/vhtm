<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| 	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['scaffolding_trigger'] = 'scaffolding';
|
| This route lets you set a "secret" word that will trigger the
| scaffolding feature for added security. Note: Scaffolding must be
| enabled in the controller in which you intend to use it.   The reserved
| routes must come before any wildcard or regular expression routes.
|
*/

$route['default_controller'] = "welcome";
$route['scaffolding_trigger'] = "";

$route['faq'] = 'welcome/faq';
$route['faq/(:any)'] = 'welcome/faq/$1';
$route['wu2lr'] = 'welcome/wu2lr';
$route['lr2wu'] = 'welcome/lr2wu';
$route['order'] = 'welcome/order';
$route['order/:num'] = 'welcome/order/$1';
$route['ourcompany'] = 'welcome/ourcompany';
$route['contact'] = 'welcome/contact';
$route['news/all-news'] = 'welcome/allNews';
$route['news/(:any)'] = 'welcome/detailnews/$1';
$route['detailnews/:num'] = 'welcome/detailnews/$1';
$route['ajax_review'] = 'welcome/ajax_review';
$route['ajax_review/:num'] = 'welcome/ajax_review/$1';
$route['ajax_review_show'] = 'welcome/ajax_review_show';
$route['ajax_review_show/:num'] = 'welcome/ajax_review_show/$1';
$route['servicefees'] = 'welcome/servicefees';
$route['exchangers'] = 'welcome/exchangers';
$route['merchants'] = 'welcome/merchants';
$route['download'] = 'welcome/download';
$route['consummeralert'] = 'welcome/consummeralert';
$route['exchange'] = 'welcome/exchange';
$route['review'] = 'welcome/review';
$route['error'] = 'welcome/error';
$route['psuccess'] = 'welcome/psuccess';
$route['pcancel'] = 'welcome/pcancel';
$route['psuccess/:num'] = 'welcome/psuccess/$1';
$route['pcancel/:num'] = 'welcome/pcancel/$1';
$route['auth/(:any)'] = 'auth/$1';
$route['admin'] = 'admin/home';
$route['istockgold/admin'] = 'admin/home';
$route['(:any)/admin'] = '$1/admin';
$route['(:any)/admin/(:any)'] = '$1/admin/$2';
$route['(:any)/admin/(:any)/:num'] = '$1/admin/$2/$3';
//$route[' :any/admin'] = 'index.php/admin/$1/admin';
//Author: tienlx
//$route[' index.php/welcome/detailnews/(:any)'] = ' index.php/welcome/detailnews/$1';
//End Author: tienlx
/* End of file routes.php */
/* Location: ./system/application/config/routes.php */
