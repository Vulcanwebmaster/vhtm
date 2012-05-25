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

$route['istockgold/faq'] = 'welcome/faq';
$route['istockgold/wu2lr'] = 'welcome/wu2lr';
$route['istockgold/lr2wu'] = 'welcome/lr2wu';
$route['istockgold/order'] = 'welcome/order';
$route['istockgold/order/:num'] = 'welcome/order/$1';
$route['istockgold/ourcompany'] = 'welcome/ourcompany';
$route['istockgold/contact'] = 'welcome/contact';
$route['istockgold/allNews'] = 'welcome/allNews';
$route['istockgold/detailnews/:num'] = 'welcome/detailnews/$1';
$route['istockgold/ajax_review'] = 'welcome/ajax_review';
$route['istockgold/ajax_review/:num'] = 'welcome/ajax_review/$1';
$route['istockgold/ajax_review_show'] = 'welcome/ajax_review_show';
$route['istockgold/ajax_review_show/:num'] = 'welcome/ajax_review_show/$1';
$route['istockgold/servicefees'] = 'welcome/servicefees';
$route['istockgold/exchangers'] = 'welcome/exchangers';
$route['istockgold/merchants'] = 'welcome/merchants';
$route['istockgold/download'] = 'welcome/download';
$route['istockgold/consummeralert'] = 'welcome/consummeralert';
$route['istockgold/exchange'] = 'welcome/exchange';
$route['istockgold/review'] = 'welcome/review';
$route['istockgold/error'] = 'welcome/error';
$route['istockgold/psuccess'] = 'welcome/psuccess';
$route['istockgold/pcancel'] = 'welcome/pcancel';
$route['istockgold/psuccess/:num'] = 'welcome/psuccess/$1';
$route['istockgold/pcancel/:num'] = 'welcome/pcancel/$1';
$route['istockgold/auth/(:any)'] = 'auth/$1';
$route['istockgold/admin'] = 'admin/home';
$route['istockgold/istockgold/admin'] = 'admin/home';
$route['istockgold/(:any)/admin'] = '$1/admin';
$route['istockgold/(:any)/admin/(:any)'] = '$1/admin/$2';
$route['istockgold/(:any)/admin/(:any)/:num'] = '$1/admin/$2/$3';
//$route['istockgold/:any/admin'] = 'index.php/admin/$1/admin';
//Author: tienlx
//$route['istockgold/index.php/welcome/detailnews/(:any)'] = 'istockgold/index.php/welcome/detailnews/$1';
//End Author: tienlx
/* End of file routes.php */
/* Location: ./system/application/config/routes.php */
