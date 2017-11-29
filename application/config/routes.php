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
|	http://codeigniter.com/user_guide/general/routing.html
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
//$route['default_controller'] = 'MenuController';
//$route['404_override'] = 'Error404';
//$route['Home']='MenuController';
//$route[':any/Home']='MenuController';

// Project
//$route['Projects']='ProjectsController';
//$route[':any/Projects']='ProjectsController';
//$route['Projects/projectPage/:num']='ProjectsController/projectPage';
//$route[':any/Projects/projectPage/:num']='ProjectsController/projectPage';
// News end

// About-us
//$route['About-us']='AboutUsController';
//
//$route[':any/About-us']='AboutUsController';
//// About-us end
////photos
//$route['Photos']='PhotoController';
//$route[':any/Photos']='PhotoController';
//$route['Photos/PhotoPage/:num']='PhotoController/PhotoPage';
//$route[':any/Photos/PhotoPage/:num']='PhotoController/PhotoPage';
//
//// Contacts
//$route['Contacts']='ContactsController';
//$route[':any/Contacts']='ContactsController';
//// Contacts end
////video
//$route['Videos']='VideoController';
//$route[':any/Videos']='VideoController';
//$route['Videos/VideoPage/:num']='VideoController/VideoPage';
//$route[':any/Videos/VideoPage/:num']='VideoController/VideoPage';

//search
//$route[':any/Serach']='MenuController/Search';
//$route['Serach']='MenuController/Search';
////$route['^am/(.+)$'] = "$1";
////$route['^en/(.+)$'] = "$1";
////$route['^ru/(.+)$'] = "$1";
//$route['^am$'] = $route['default_controller'];
//$route['^en$'] = $route['default_controller'];
//$route['^ru$'] = $route['default_controller'];

//$[':any/category/130']='MenuController/index';


$route['translate_uri_dashes'] = FALSE;

$default_controller = "admin";
$language_alias = array('ru','en','am');
$controller_exceptions = array('admin','SiteEdit');

$route['ru'] = 'default_controller';
$route['en'] = 'default_controller';
$route['am'] = 'default_controller';
// $route['hy'] = 'home';
$route['default_controller'] = $default_controller;
$route["^(".implode('|', $language_alias).")/(".implode('|', $controller_exceptions).")(.*)"] = '$2';
$route["^(".implode('|', $language_alias).")?/(.*)"] = $default_controller.'/$2';
$route["^((?!\b".implode('\b|\b', $controller_exceptions)."\b).*)$"] = $default_controller.'/$1';
foreach($language_alias as $language)
    $route[$language] = $default_controller.'/index';
$route['404_override'] = '';