<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Base URL
 * 
 * Create a local URL based on your basepath.
 * Segments can be passed in as a string or an array, same as site_url
 * or a URL to a file can be passed in, e.g. to an image file.
 *
 * @access  public
 * @param string
 * @return  string
 */
if ( ! function_exists('base_url'))
{
    function base_url($uri = '')
    {
        $CI =& get_instance();
        return $CI->config->base_url($uri);
    }
}

/**
 * get_question_display_constant
 * 
 * return the initial number of question to display
 *
 * @access  public
 * @param string
 * @return  string
 */
if ( ! function_exists('get_question_display_constant'))
{
    function get_question_display_constant()
    {
        $CI =& get_instance();        
        return (int)$CI->config->item('load_question_constant');
    }
}


/* End of file url_helper.php */
/* Location: ./system/helpers/url_helper.php */