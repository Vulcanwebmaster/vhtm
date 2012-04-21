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

$route['default_controller'] = "nhadat";
$route['scaffolding_trigger'] = "";

//Thanh vien
$route['dangnhap.html'] = 'thanhvien/dangnhap'; 
$route['dangky.html'] = 'thanhvien/dangky'; 
$route['quenmatkhau.html'] = 'thanhvien/quenmatkhau'; 
$route['quentendangnhap.html'] = 'thanhvien/quentendangnhap'; 
$route['thoat.html'] = 'thanhvien/logout'; 
$route['trangcanhan.html'] = 'thanhvien/trangcanhan'; 
//Nha dat
//$route['nhadat.html'] = 'nhadat/index';
$route['bds/(:any)'] = 'nhadat/bds/$1';
$route['dangtin/(:any)'] = 'nhadat/dangtin/$1';
$route['loaihinh/(:any)'] = 'nhadat/loaihinh/$1';
$route['chi-tiet/(:any)'] = 'nhadat/chitiet/$1';
$route['khuvuc/(:any)'] = 'nhadat/khuvuc/$1';
///tin tuc
$route['tintuc.html'] = 'tintuc/index';
$route['tintuc/chuyen-muc/(:any)'] = 'tintuc/chuyenmuc/$1';
$route['tintuc/chi-tiet/(:any)'] = 'tintuc/chitiet/$1';
/* End of file routes.php */
/* Location: ./system/application/config/routes.php */