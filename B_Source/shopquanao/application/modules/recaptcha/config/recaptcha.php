<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * ReCAPTCHA Config Array
 *
 * Contains the ReCAPTCHA config array
 *
 * @package			BackendPro
 * @subpackage		Configurations
 * @author			Adam Price
 * @copyright		Copyright (c) 2008
 * @license			http://www.gnu.org/licenses/lgpl.html
 */

// ---------------------------------------------------------------------------

$config['recaptcha'] = array(
	'public'=>'6Le6HNESAAAAAHt_0RA8cbAJ4rMq7eZllOqaiy15',
    'private'=>'6Le6HNESAAAAAJKHNugrtjZGdVrF6CHZ67QDozPo',
    'RECAPTCHA_API_SERVER' =>'http://api.recaptcha.net',
    'RECAPTCHA_API_SECURE_SERVER'=>'https://api-secure.recaptcha.net',
    'RECAPTCHA_VERIFY_SERVER' =>'api-verify.recaptcha.net',
    'theme' => 'white'
); 



/* End of file recaptcha.php */
/* Location: ./modules/recaptcha/config/recaptcha.php */