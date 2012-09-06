<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;

    function __construct()
    {
        parent::__construct();       
        $this->load->model('MHomepage');
        $this->module=basename(dirname(dirname(__FILE__)));      
        $this->bep_site->set_crumb($this->lang->line('backendpro_ql_homepage'),$this->module.'/admin');
    }


    function index()
    {
    	$this->bep_assets->load_asset_group('TINYMCE');
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_homepage_home";
        $this->load->view($this->_container,$data);
    }
  
    function common_home()
    {
        $data['title'] = "Quản lý trang chủ";
        $result = array();
        $temp = $this->MHomepage->getHomePage();
        foreach ($temp as $key => $list){
        	if ($list['muc_id'] == 4 || $list['muc_id'] == 5){
        		$tmp = explode(",", $list['dulieu']);
        		$final = "";
        		foreach($tmp as $str)
        		if ($str != "")
        		{
        			if ($list['muc_id'] == 4) 
        			{
        				$image = explode("*", $str);
	        			if (strpos($image[0], "1168.photobucket.com") == false)
	        			{
	        				$final = $final."<p><img src=\"".base_url().$image[0]."\" width = \"100px\" height = \"80px\" alt=\"\" /></p>" ;
	        			}
	        			else  
	        			{
	        				$final = $final."<p><img src=\"".$image[0]."\" width = \"100px\" height = \"80px\" alt=\"\" /></p>" ;
	        			}
	        			$final = $final."*".$image[0];
        			}
        			if ($list['muc_id'] == 5) 
        			{
	        			if (strpos($str, "1168.photobucket.com") == false)
	        			{
	        				$final = $final."<p><img src=\"".base_url().$str."\" width = \"100px\" height = \"80px\" alt=\"\" /></p>" ;
	        			}
	        			else  
	        			{
	        				$final = $final."<p><img src=\"".$str."\" width = \"100px\" height = \"80px\" alt=\"\" /></p>" ;
	        			}
        			}
        		}
        		$list['dulieu'] = $final;
        	}
        	$result[] = $list;
        }
        $data['homepage'] = $result;
        $data['header'] = $this->lang->line('backendpro_access_control');
        $data['module'] = $this->module;
        return $data;
    }

    function _fields($muc_id)
    {
    	if($muc_id==1 | $muc_id==2 | $muc_id==3 | $muc_id==7 | $muc_id==8)
		{
			$tmp	=	$this->input->post('noidung_'.$muc_id);
			$tmp 	= 	str_replace("@$%#@", 'style="color: ',$tmp);
	    	$tmp 	= 	str_replace("&$%#@", 'style="background-color: ',$tmp);
		}
		
		if($muc_id==6)
		{
			$tmp = $this->input->post('dulieu_'.$muc_id);
		}
		
		$tenmuc=$this->input->post('tenmuc_'.$muc_id,true);

    	if ($muc_id==4 || $muc_id == 5)
    	{
    		$tmp = $this->input->post('dulieu_'.$muc_id,true);
    		$matches = array();
    		$temp = array();
	    	preg_match_all( '/src="([^"]*)"/i', $tmp, $matches ) ;
	    	$arr_rslt = $matches[1];
	    	foreach ($arr_rslt as $i => $value) 
	    	{
   				$arr_rslt[$i] = str_replace("../../", "", $arr_rslt[$i]);
			}
	    	$store = $tmp;
	    	$i = 0;
	    	if ($muc_id==4) {
	    		while (true) 
	    		{
		    		$store = strstr($store, "*http://");
		    		if ($store != false) 
		    		{
		    			$pos = strpos($store, "</p>");
		    			$arr_rslt[$i] = $arr_rslt[$i].substr($store, 0, $pos);
		    			$store = strstr($store, "</p>");
		    			$i++;
		    		} else break;
	    		}
	    	}
	    	$tmp = implode(",", $arr_rslt);
    	}
    	
    	$data = array(
            'muc_id'      => $muc_id,
            'tenmuc'	  => $tenmuc,
            'dulieu'      => $tmp  
        );
        return $data;
    }
    
	function update()
    {
    	$this->bep_assets->load_asset_group('TINYMCE');
        $data['homepage'] = $this->MHomepage->getIDs();
        $x = $data['homepage'];
        foreach($x as $key => $list )
        {
         	$data = $this->_fields($list['muc_id']);	
        	$this->MHomepage->updateHomePage($data);		
        }
		
        $this->index();
        flashMsg('success','Cập nhật thành công!!!');
    }
}// end of class
?>