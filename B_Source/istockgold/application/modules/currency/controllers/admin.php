<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Shop_Admin_Controller 
{

    private $module;
    private $cur_id;

    function __construct()
    {
        parent::__construct();
//        check('Pages');
    	$this->module='currency';
//        $this->module=basename(dirname(dirname(__FILE__)));
        // Load modules/menus/models/MMenus
        $this->load->model('menus/MMenus');
        // Load pages model
        $this->load->model('MCurrency');
        // Set breadcrumb
        $this->bep_site->set_crumb($this->lang->line('backendpro_pages'),$this->module.'/admin');
    }

    function index()
    {
        $data = $this->common_home();
        $data['page'] = $this->config->item('backendpro_template_admin') . "admin_currency_home";
        $this->load->view($this->_container,$data);
    }

    function _fields($id)
    {
        $data = array(
            'c_id'				=> $id,
            'status'			=> $this->input->post('status'.$id),
            'c_limit'			=> $this->input->post('c_limit'.$id),
            'c_max_fee'			=> $this->input->post('c_max_fee'.$id),
            'c_ex_max'          => $this->input->post('c_ex_max'.$id),
            'c_reserve'			=> $this->input->post('c_reserve'.$id),
            'is_show_src'		=> $this->input->post('is_show_src'.$id),
            'is_show_dst'		=> $this->input->post('is_show_dst'.$id)
        );
        return $data;
    }

    function common_home()
    {
//        $data['title'] = $this->lang->line('kago_manage_page');
        $fields = array('c_id','c_name','c_metal_name','status','c_limit','c_max_fee','c_ex_max','c_reserve','is_show_src','is_show_dst');
        $orderby = array('c_id');
        $data['currencies'] = $this->MIStockGold->getAll($this->module,$fields, $orderby);
//        $data['languages'] =$this->MLangs->getLangDropDownWithId();
        $data['module'] = $this->module;
        return $data;
    }
    
    function Ajaxgetupdate()
    {
        $data = $this->common_home();
        $this->load->view('admin/admin_home_cont',$data);
    }

    function create()
    {
    	$test = "5";
    	echo "<script language=javascript> 
			var tmp = \"$test\"
			alert(tmp)
			</script>";
            
        // We need TinyMCE, so load it
        $this->bep_assets->load_asset_group('TINYMCE');
        $multilang = $this->preference->item('multi_language');
        $data['multilang']=$multilang;
        if ($this->input->post('name'))
        {
            // if info is filled in then do this
            //$data = $this->_fields();
            $this->MIStockGold->addItem($this->module,$data);
//            $this->MPages->addPage();
            // This is CI way to show flashdata
            // $this->session->set_flashdata('message','Page created');
            // But here we use Bep way to display flash msg
            flashMsg('success',$this->lang->line('kago_page_created'));
            // and redirect to this index page
            redirect( $this->module.'/admin/index','refresh');
        }
        else
        {
            // this must be first visit to the creat page
            $data['title'] = $this->lang->line('kago_create_page');
            $data['menus'] = $this->MMenus->getAllMenusDisplay();

            // Set breadcrumb
            $this->bep_site->set_crumb($this->lang->line('kago_create'),'pages/admin/create');
            $data['header'] = $this->lang->line('backendpro_access_control');
            // Setting up page and telling which module
            $data['cancel_link']= $this->module."/admin/index/";
            $data['page'] = $this->config->item('backendpro_template_admin') . "admin_pages_create";
            $data['module'] = $this->module;
            $test = "1";
			echo "<script language=javascript> 
			var tmp = \"$test\"
			alert(tmp)
			</script>";
            $this->load->view($this->_container,$data);
        }
    }

	function makestring($array)
	{
		$outval = "";
		foreach($array as $key=>$value) 
		{
			if(is_array($value))
			{
				$outval .= "$key\n";
				$outval .= makestring($value);
			}
			else 
			{
				$outval .= "$key: $value\n";
			}
		} 
		return $outval;
	} 

//    function edit($id=0)
    function edit()
    {
    	$fields = array('c_id');
        $orderby = array('c_id');
        $data['currencies'] = $this->MIStockGold->getAll($this->module,$fields, $orderby);
    	
        $cur_id = array();
        foreach ($data['currencies'] as $key => $list)
        {
        	array_push($cur_id, $list['c_id']);
        }
        
        $test2 = implode(" *** ",$cur_id);
     		echo "<script language=javascript> 
   			var tmp = \"$test2\"
   			alert(tmp)
   			</script>";
        
        foreach ($cur_id as $str)
        {	
        	$data = $this->_fields($str);
        	
        	$test = $this->makestring($data);
     		echo "<script language=javascript> 
   			var tmp = \"$test\"
   			alert(tmp)
   			</script>";
     		
            $this->MIStockGold->updateItem($this->module,$data);
            //$this->MPages->updatePage();
            // This is CI way to show flashdata
            // $this->session->set_flashdata('message','Page updated');
    	}
        // But here we use Bep way to display flash msg
        //flashMsg('success',$this->lang->line('kago_page_updated'));
        redirect($this->module.'/admin/index','refresh');
    }
    	
}//end class
?>
