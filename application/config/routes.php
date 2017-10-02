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
|	example.com/class/method/id/
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
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "publik";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin/portfolio'] = 'Portfolio';
$route['admin/portfolio/add'] = 'Portfolio/add';
$route['admin/portfolio/edit/(:num)'] = 'Portfolio/edit/$1';
$route['admin/portfolio/delete/(:num)'] = 'Portfolio/delete/$1';
$route['admin/portfolio/save_edit'] = 'Portfolio/save_edit';
$route['admin/portfolio/save_add'] = 'Portfolio/save_add';

$route['admin/client'] = 'Client';
$route['admin/client/add'] = 'Client/add';
$route['admin/client/edit/(:num)'] = 'Client/edit/$1';
$route['admin/client/delete/(:num)'] = 'Client/delete/$1';
$route['admin/client/save_edit'] = 'Client/save_edit';
$route['admin/client/save_add'] = 'Client/save_add';

$route['image-upload'] = 'DropzoneImageController';
$route['image-upload/post/(:num)'] = 'DropzoneImageController/proses_upload/$i';
$route['image-upload/remove'] = 'DropzoneImageController/remove_foto';


/* End of file routes.php */
/* Location: ./application/config/routes.php */