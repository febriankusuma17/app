<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Controller_web';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['about'] = 'welcome/about';
$route['contact'] = 'welcome/contact';
$route['admin'] = 'admin/overview';
$route['login'] = 'admin/login';
$route['register'] = 'admin/register';
$route['forgotpassword'] = 'admin/forgotpassword';