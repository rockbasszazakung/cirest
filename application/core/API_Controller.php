<<<<<<< HEAD
<?php defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require_once APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class API_Controller extends REST_Controller
{
    public function isAuth()
    {
      return true;
    }
=======
<?php defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require_once APPPATH . '/libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class API_Controller extends REST_Controller
{
    public function isAuth()
    {
      return true;
    }
>>>>>>> a2cceffee55bc4a902cdb4dbccc9b74cc7c52baf
}