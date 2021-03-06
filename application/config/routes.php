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
// Reserved
$route['default_controller'] = "template";
$route['404_override'] = '';

// Admin
$route['admin/login'] = "template/admin_secure_login";
$route['admin/(:any)'] = "template/admin/$1/index";

// Products
$route['products'] = "template/products";
$route['product/(:any)/(:num)'] = 'template/product';
$route['category/(:any)'] = "template/category/$1";

// Checkout
$route['checkout/(:any)'] = "template/checkout/$1";
$route['checkout'] = "template/checkout";

// Customer
$route['customer/login'] = "template/customer_login";
$route['customer/register'] = "template/customer_register";
$route['customer/activate/(:any)/(:num)'] = "template/customer_activate";

/* End of file routes.php */
/* Location: ./application/config/routes.php */