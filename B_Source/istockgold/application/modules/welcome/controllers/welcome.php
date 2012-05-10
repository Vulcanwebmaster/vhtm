<?php

class Welcome extends Shop_Controller 
{

    // moving to shop_controller
    private $langfilename;
    private $index_path; // this will be set in preference.
    private $module; // this will be grandparent directory name. welcome/controllers/welcome.php
    //hang on, this can be this class name too.
    //Also in config/routs.php it defines $route['default_controller'] = "welcome";
    // $route['default_controller'], module name, module class and index_path must be the same
    // not able to get router default_controller and assign this to index_path and module
    private $security_method;
    private $security_question;
    private $security_answer;
    //private $myclass;

    

    function __construct()
    {
        parent::__construct();
        // load the validation library
        //$this->load->library('form_validation');
        // get config
        // get index path name from preference
        // this can be done in shop_controller since it is needed for menu path
        //$this->index_path = $this->preference->item('main_index_path_name');
        $this->index_path = $this->mainmodule;//default is welcome
        // get module name
        // this will be used in refidrect or $data['module']
        //$this->module = basename(dirname(dirname(__FILE__))); // this is the same as getting class name
        // this will return the grandparent dir name.
        // or you can get this class name as well.
        $this->module               = strtolower(get_class());
        $this->security_method      = $this->preference->item('security_method');
        $this->security_question    = $this->preference->item('security_question');
        $this->security_answer      = $this->preference->item('security_answer');
        //$this->myclass = strtolower(get_class());
    }


    function index()
    {    	
    // this one is for a visitor changing a language first time through form
        if ($this->input->post('lang'))
        {
            $lang = $this->input->post('lang');
            // set it in session
            // delete session in cart 
            unset($_SESSION['cart']);
            unset($_SESSION['totalprice']);
            // currently session is stored in the form of english = english rather than 0 english
            $this->session->set_userdata('lang', $lang);
            // then load that language file
            // for testing language in header
            //$this->lang->load($this->langfilename, $lang);
            // $module is name of folder
            redirect( $this->module.'/index','refresh');
        }
        //$webshop = $module;
        $indexpath = $this->index_path;
        // if session lang is set then pull that language contetnt
        // otherwise pull english
        if($this->language==$this->config->item('language'))
        {
            $page = $this->MPages->getPagePath($indexpath);
        }
        else 
        {
          // $language = $this->session->userdata('lang');
            // find lang id
            //$lang_id = $this->MLangs->getId($language);
            //$lang_id = $lang_id['id'];
            //$data['lang_id']=$this->lang_id;
            $page = $this->MPages->getPagePathLang($indexpath,$this->lang_id);
            // if page['content']is empty then use english
            if(empty($page['content']))
            {
              //  $webshop = $module;
                $page = $this->MPages->getPagePath($indexpath);
            }
        }

    	$buyCurrencies = $this -> MCurrency -> getBuyCurrency();
    	$sellCurrencies = $this -> MCurrency -> getSellCurrency();
    	
    	$rateData = $this -> MCurrency -> getRateData();
    	
    	$data['rateData']  = $rateData;
    	$data['buyCurrencies'] = $buyCurrencies;
    	$data['sellCurrencies'] = $sellCurrencies;
    	
    	if($page)
        {// in order to prevent an error after installation
            $data['title'] = $page['name'];
            $data['pagecontent'] = $page;
        }
        else
        {
            $data['title'] = 'Welcome';
            $data['pagecontent'] = '';
        }
        
        // delete these
        $data['get_class']=  get_class();
        $data['index_path']=$indexpath;
        $data['module']=$this->module;
        // delete upto here
        $data['page'] = $this->config->item('backendpro_template_shop') . 'frontpage';
        $data['header'] ="HOME";
        $data['metadesc'] =$page['metadesc'];
        $data['metakeyword'] =$page['metakeyword'];
        $data['module'] = $this->module;
        
        //Author: tienlx
        $data['topnews']=$this->MNews->getTopNews();
        //End author : tienlx
        
		//reviews by An
        //$data['reviews']=$this->getReviews();
        //end
        
        //Author tienlx: pagination reviews
        $config['base_url'] = base_url()."index.php"."/"."welcome"."/"."index";
        $config['total_rows']= $this->getNumReviews(); 
        if (isset($_POST['show_id'])){
        	$config['per_page']= $_POST['show_id'];
        	$_SESSION['show']= $config['per_page'];
        }
        else{
        	if(isset($_SESSION['show']))
        	{
        		$config['per_page']= $_SESSION['show'];
        	}
        	else{
        		$config['per_page']= '3';
        	}
        }
        $config['uri_segment'] = 3;        

        $this->pagination->initialize($config);
        //$data['reviews']=$this->getAllReviews($config['per_page'],$this->uri->segment('2'));
        $data['reviews']=$this->getReviews($config['per_page'],$this->uri->segment('3'));
        $data['pagination'] = $this->pagination->create_links();
        
        //End author tienlx
	
        $this->load->view($this->_container,$data); 
    }
    
    function load_comment_table()
    {
    	echo "<script language=javascript>
    		var tmp=\"anc\"
    		alert(tmp)
    		</script>";
    	
    	$config['base_url'] = base_url()."index.php"."/"."welcome"."/"."index";
        $config['total_rows']= $this->getNumReviews(); 
        if (isset($_POST['show_id'])){
        	$config['per_page']= $_POST['show_id'];
        	$_SESSION['show']= $config['per_page'];
        }
        else{
        	if(isset($_SESSION['show']))
        	{
        		$config['per_page']= $_SESSION['show'];
        	}
        	else{
        		$config['per_page']= '3';
        	}
        }
        $config['uri_segment'] = 3;        

        $this->pagination->initialize($config);
        //$data['reviews']=$this->getAllReviews($config['per_page'],$this->uri->segment('2'));
        $data['reviews']=$this->getReviews($config['per_page'],$this->uri->segment('3'));
        $data['pagination'] = $this->pagination->create_links();;
    	$this->load->view('commenttable',$data); 
    }
    
    function generate_captcha() 
    {
    	$vals = array(
		    'img_path' => './captcha/',
		    'img_url' => base_url().'/captcha/',
	    	'img_width' => '100',
	    	'img_height' => '30'	
	    );
	    $cap = create_captcha($vals);
	    
	    $data = array(
		    'captcha_time' => $cap['time'],
		    'ip_address' => $this->input->ip_address(),
		    'word' => $cap['word']
	    );
	    
	    $query = $this->db->insert_string('captcha', $data);
		$this->db->query($query);
	    
	    return $cap;
    }
    
    function verify_captcha() 
    {
    	echo 'test';
    	// First, delete old captchas
		$expiration = time()-7200; // Two hour limit
		$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);
		
		// Then see if a captcha exists:
		$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
		$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->row();
		
		if ($row->count == 0)
		{
			$this->form_validation->set_message('verify_captcha', 'Your answer was incorrect!');
		    return false;
		}
		return true;
    }
    
    function exchange()
    {
    	$fromCurrency = $this->input->post('buyCurrency');
    	$toCurrency = $this->input->post('sellCurrency');
    	$amount = $this->input->post('amount');
    	$rate = $this->input->post('rate');
    	if (!$fromCurrency || !$fromCurrency || !$rate || !$amount) {
    		$buyCurrencies = $this -> MCurrency -> getBuyCurrency();
	    	$sellCurrencies = $this -> MCurrency -> getSellCurrency();
	    	
	    	$rateData = $this -> MCurrency -> getRateData();
	    	
	    	$data['rateData']  = $rateData;
	    	$data['buyCurrencies'] = $buyCurrencies;
	    	$data['sellCurrencies'] = $sellCurrencies;
	    	
    		$data['title'] = $this->preference->item('site_name')." | ". "E-Currency Exchange";
    		$data['page'] = $this->config->item('backendpro_template_shop') . 'exchange';
    		$data['module'] = $this->module;
        	$this->load->view($this->_container,$data);
        	return;
    	}
    	
    	$data['cap'] = $this->generate_captcha();
    	
        $data['title'] = $this->preference->item('site_name')." | ". "Exchange";
        $data['amount'] = $amount;
        $data['rate'] = $rate;
        $data['getAmount'] = round($amount * $rate,3);
        $data['fromCurrency'] = $fromCurrency;
    	$data['toCurrency'] = $toCurrency;
    		
    	if ($fromCurrency == "LR" && $toCurrency == "WU") {
    		$data['page'] = $this->config->item('backendpro_template_shop') . 'lr2wu';
    	} else if ($fromCurrency == "WU" && $toCurrency == "LR") {
    		
    		$accountInfo = $this->MAccount->getAccountInfo($fromCurrency);
    		
    		$wuInfo = "";
    		foreach ($accountInfo as $key => $row) {
    			$wuInfo .= "[" . $row['display']. "] ". $row['value'] . "<br/>";
    		}
    		$data['wuInfo'] = $wuInfo;
    		$data['page'] = $this->config->item('backendpro_template_shop') . 'wu2lr';
    	}
		
        $data['module'] = $this->module;
        $this->load->view($this->_container,$data);
    }
    
    /**
     * Exchange function
     * From Liberty Reserve to Western Union...
     */
    function lr2wu() 
    {
        if ($this->input->post('email'))
        {
            $data['title'] = $this->preference->item('site_name')." | "."Exchange";
            // set rules
            $config[] = array(
                            'field'=>'email',
                            'label'=>$this->lang->line('webshop_email'),
                            'rules'=>"trim|required|valid_email"
                            );
            $config[] = array(
                            'field'=>'firstName',
                            'label'=>$this->lang->line('webshop_first_name'),
                            'rules'=>"trim|required|min_length[3]|max_length[20]"
                            );
            $config[] = array(
                            'field'=>'lastName',
                            'label'=>$this->lang->line('webshop_last_name'),
                            'rules'=>"trim|required|min_length[3]|max_length[20]"
                            );
            $config[] = array(
                            'field'=>'street',
                            'label'=>$this->lang->line('webshop_street'),
                            'rules'=>"trim"
                            );
                             
                            $config[] = array(
                            'field'=>'province',
                            'label'=>$this->lang->line('webshop_province'),
                            'rules'=>"trim"
                            );
                            $config[] = array(
                            'field'=>'country',
                            'label'=>$this->lang->line('webshop_province'),
                            'rules'=>"trim"
                            );

                            $config[] = array(
                            'field'=>'city',
                            'label'=>$this->lang->line('webshop_city'),
                            'rules'=>"trim|required|alpha_dash"
                            );
            $config[] = array(
                            'field'=>'post_code',
                            'label'=>$this->lang->line('webshop_post_code'),
                            'rules'=>"trim|required|numeric"
                            );
            $config[] = array(
                            'field'=>'captcha',
                            'label'=>'Captcha',
                            'rules'=>"trim|required|callback_verify_captcha"
                            );
            
            $this->form_validation->set_rules($config);

            // set fields. This will be used for error messages
            // for example instead of customer_first_name, First Name will be used in errors
            $fields['email']	                = lang('webshop_email');
            $fields['firstName']	    		= lang('webshop_first_name');
            $fields['lastName']	    			= lang('webshop_last_name');
            $fields['street']	                = lang('webshop_street');
            $fields['city']	                    = lang('webshop_city');
            $fields['province']	                = lang('webshop_province');
            $fields['post_code']	            = lang('webshop_post_code');
            $fields['captcha']                	= "Captcha";
            
            $this->form_validation->set_fields($fields);
            // run validation
            if ($this->form_validation->run() == FALSE)
            {
                // if false outputs errors
                $this->form_validation->output_errors();
            }
            else
            {
				/*
				 * CREATE ORDER
				 */
            	$fromCurrency = $_POST['fromCurrency'];
            	$toCurrency = $_POST['toCurrency'];
            	
                $data = array(
                	'c_src' 			=> $fromCurrency,
                	'c_dst' 			=> $toCurrency,
                    'amount_src' 		=> db_clean($_POST['amount'],25),
                    'amount_dst'  		=> db_clean($_POST['getAmount'],25),
                    'date_src'        	=> date("Y-m-d H:i:s", time()),
                    'email'             => db_clean($_POST['email'],50)
                );
                
                $orderId = $this->MOrders->addOrder($data, true);
                
                /*
                 * LOAD LR's configuration from DB
                 * REDIRECT TO LIBERTY PAGE
                 * - Success payment -- go to psuccess page
                 * - Failed payment -- go to pcancel page
                 */
                $ownerLRAccount = null;
                $accountInfo = $this->MAccount->getAccountInfo($fromCurrency);
                foreach ($accountInfo as $key => $row)
                {
                	if ($row['key'] == "liberty.account")
                		$ownerLRAccount = $row['value']; 
                }
                
                if (isset($ownerLRAccount)) 
                {
                	$redirectUrl = "https://sci.libertyreserve.com/en";
	                $redirectUrl .= "?lr_acc=" . $ownerLRAccount;
	                $redirectUrl .= "&lr_amnt=" . $_POST['getAmount'];
	                $redirectUrl .= "&lr_currency=LRUSD";
	                
	                //Storename require merchant to work in Advance mode
	                //$redirectUrl .= "&lr_store=IstockGold";
	                $redirectUrl .= "&lr_comments=" . urlencode("Order Id: #". $orderId);
	                $redirectUrl .= "&lr_success_url=" . urlencode(site_url("welcome/psuccess")."/".$orderId);
	                $redirectUrl .= "&lr_success_url_method=POST" ;
	                $redirectUrl .= "&lr_fail_url=" .  urlencode(site_url("welcome/pcancel")."/".$orderId);
	                $redirectUrl .= "&lr_fail_url_method=POST";
	                
	                redirect( $redirectUrl );	
                } else {
					redirect($this->module.'/error');          	
                }
            }
        }// end of if($this->input->post('email'))
        
        if(!$this->input->post('amount') && !$this->input->post('getAmount')) {
        	redirect( $this->module."/exchange" );
        }
        
        $data['amount'] = $this->input->post('amount');
        $data['rate'] = $this->input->post('rate');
        $data['getAmount'] = $this->input->post('getAmount');
        $data['fromCurrency'] = $this->input->post('fromCurrency');
        $data['toCurrency'] = $this->input->post('toCurrency');
        $data['cap'] = $this->generate_captcha();
        
        $data['title'] = $this->preference->item('site_name')." | ". "Exchange";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'lr2wu';
        $data['module'] = $this->module;
        $this->load->view($this->_container,$data);
    }
    
	function wu2lr() 
    {
        if ($this->input->post('email'))
        {
            $data['title'] = $this->preference->item('site_name')." | "."Exchange";
            // set rules
            $config[] = array(
                            'field'=>'mtcn',
                            'label'=>$this->lang->line('mtcn'),
                            'rules'=>"trim|required"
                            );
            $config[] = array(
                            'field'=>'email',
                            'label'=>$this->lang->line('webshop_email'),
                            'rules'=>"trim|required|valid_email"
                            );
            $config[] = array(
                            'field'=>'firstName',
                            'label'=>$this->lang->line('webshop_first_name'),
                            'rules'=>"trim|required|min_length[3]|max_length[20]"
                            );
            $config[] = array(
                            'field'=>'lastName',
                            'label'=>$this->lang->line('webshop_last_name'),
                            'rules'=>"trim|required|min_length[3]|max_length[20]"
                            );
			$config[] = array(
                            'field'=>'country',
                            'label'=>$this->lang->line('webshop_province'),
                            'rules'=>"trim"
                            );
                            
            $config[] = array(
                            'field'=>'city',
                            'label'=>$this->lang->line('webshop_city'),
                            'rules'=>"trim|required|alpha_dash"
                            );
            $config[] = array(
                            'field'=>'lrAccount',
                            'label'=>$this->lang->line('lr_account'),
                            'rules'=>"trim|required"
                            );
                $config[] = array(
                            'field'=>'captcha',
                            'label'=>$this->lang->line('kago_write_ans'),
                            'rules'=>"trim|required|callback_verify_captcha"
                            );
                //$rules['write_ans']= 'trim|required|callback_security_check';
            $this->form_validation->set_rules($config);

            // set fields. This will be used for error messages
            // for example instead of customer_first_name, First Name will be used in errors
            $fields['email']	                = lang('webshop_email');
            $fields['lrAccount']	    		= lang('lr_account');
            $fields['firstName']	    		= lang('webshop_first_name');
            $fields['lastName']	    			= lang('webshop_last_name');
            $fields['city']	                    = lang('webshop_city');
            $fields['country']	                = lang('webshop_country');
            $fields['post_code']	            = lang('webshop_post_code');
            $fields['captcha']                  = "Captcha";
            
            $this->form_validation->set_fields($fields);

            // run validation
            if ($this->form_validation->run() == FALSE)
            {
                // if false outputs errors
                $this->form_validation->output_errors();
            }
            else
            {
            	$fromCurrency = $_POST['fromCurrency'];
            	$toCurrency = $_POST['toCurrency'];
            	
            	//$rateId = $this -> MRate -> getRateId(db_clean($fromCurrency,3), db_clean($toCurrency,3));
            	
                $data = array(
                	'c_src' 			=> $fromCurrency,
                	'c_dst' 			=> $toCurrency,
                    'amount_src' 		=> db_clean($_POST['amount'],25),
                    'amount_dst'  		=> db_clean($_POST['getAmount'],25),
                	'account_dst'  		=> db_clean($_POST['lrAccount'],25),
                    'date_src'        	=> date("Y-m-d H:i:s", time()),
                    'email'             => db_clean($_POST['email'],50)
                );
                
                $orderId = $this->MOrders->addOrder($data, true);
                $redirect_to = "/order/".$orderId;
                redirect( $this->module.$redirect_to);
            }
        }// end of if($this->input->post('email'))
        
        if(!$this->input->post('amount') && !$this->input->post('getAmount')) {
        	redirect( $this->module."/exchange" );
        }
        $accountInfo = $this->MAccount->getAccountInfo($this->input->post('fromCurrency'));

        $wuInfo = "";
        foreach ($accountInfo as $key => $row) {
        	$wuInfo .= "[" . $row['display']. "] ". $row['value'] . "<br/>";
        }
        $data['wuInfo'] = $wuInfo;
        $data['amount'] = $this->input->post('amount');
        $data['rate'] = $this->input->post('rate');
        $data['getAmount'] = $this->input->post('getAmount');
        $data['fromCurrency'] = $this->input->post('fromCurrency');
        $data['toCurrency'] = $this->input->post('toCurrency');
        $data['cap'] = $this->generate_captcha();
        
        $data['title'] = $this->preference->item('site_name')." | ". "Exchange";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'wu2lr';
        $data['module'] = $this->module;
        $this->load->view($this->_container,$data);
    }
    
    /**
     * 
     * Tracking Order
     * @param unknown_type $orderId
     */
    function order($id = null) 
    {
    	if (!isset($id))
    	{
	    	//If the user submit OrderId via Form
	    	if ($this->input->post('orderId'))
	    	{
	    		$id = $this->input->post('orderId');
	    	}

	    	if (!isset($id)) 
	    	{
		        $data['cap'] = $this->generate_captcha();
		        $data['title'] = $this->preference->item('site_name')." | "."Tracking Your Order";
		        $data['page'] = $this->config->item('backendpro_template_shop') . 'ordertrack';
		        $data['module'] = $this->module;
		        $this->load->view($this->_container,$data);
		        return;	
	    	}
    	}   
    	$order = $this -> MOrders -> getOrder($id);
    		
    	if (isset($order)) 
    	{
    		$data['order'] =  $order;
    	}
    		
    	$data['title'] = $this->preference->item('site_name')." | ". "Order Status";
	    $data['page'] = $this->config->item('backendpro_template_shop') . 'orderstatus';
	    $data['module'] = $this->module;
	    $this->load->view($this->_container,$data);
    }
    
    /**
     * 
     * PAYMENT IS FAILED OR CANCELED
     * @param unknown_type $id
     */
    function pcancel($id =null) 
    {
    	if (isset($id))
    	{
	    	$order = $this -> MOrders -> getOrder($id);
		    		
			if (isset($order)) 
	    	{
	    		$data['order'] =  $order;
	    	}
	    		
	    	$data['title'] = $this->preference->item('site_name')." | ". "Order Status";
		    $data['page'] = $this->config->item('backendpro_template_shop') . 'pcancel';
		    $data['module'] = $this->module;
		    $this->load->view($this->_container,$data);
    	}
    }
    
    /**
     * 
     * PAYMENT IS SUCCESSeD
     * @param unknown_type $id
     */
	function psuccess($id =null) 
    {
		if (isset($id))
    	{
	    	$order = $this -> MOrders -> getOrder($id);
		    		
			if (isset($order)) 
	    	{
	    		$data['order'] =  $order;
	    	}
	    		
	    	$data['title'] = $this->preference->item('site_name')." | ". "Order Status";
		    $data['page'] = $this->config->item('backendpro_template_shop') . 'psuccess';
		    $data['module'] = $this->module;
		    $this->load->view($this->_container,$data);
    	}
    	
    }
    
    function pages()
    {
        // find page_uri from page id
        $menu_id = $this->uri->segment(3);
        //$module='pages';
        $path = $this->MMenus->getMenuwithPage($menu_id);
        $path = $path['path'];

        if($path==$this->index_path)
        {// for home page
            redirect('','refresh');
        }
        elseif($path =='contact_us')
        {
            redirect($this->module.'/contact','refresh');
        }
        elseif($path =='cart')
        {
            redirect($this->module.'/cart','refresh');
        }
        elseif($path =='playroom')
        {
            redirect('playroom/index','refresh');
        }
        elseif($path =='checkout')
        {
            redirect($this->module.'/checkout','refresh');
        //}elseif($path =='error'){
            //redirect($this->module.'/error','refresh');
        }
        else
        {
            // if session lang is set then pull that language contetnt
            // otherwise pull english
            if($this->session->userdata('lang')=='english' || $this->session->userdata('lang')=='')
            {
                $lang_id =NULL;
                $data['language'] ='english';
                $page = $this->MPages->getPagePath($path);
            }  
            else 
            {
                $language = $this->session->userdata('lang');
                // find lang id
                $lang_id = $this->MLangs->getId($language);
                $lang_id = $lang_id['id'];
                $data['lang_id']=$lang_id;// delete me
                $data['language'] = $this->session->userdata('lang'); // delete me
                $page = $this->MPages->getPagePathLang($path,$lang_id);
            }
                //$page = $this->MPages->getPagePath($path);
            if (!empty($page))
            {//$page will return empty array if there is no page
                $data['pagecontent'] = $page;
                $data['title'] = $this->preference->item('site_name')." | ".$page['name'];
            }
            else
            {
                // if there is no page redirect
                flashMsg('info',$this->lang->line('kago_no_translation'));
                redirect($this->module.'/error');
            }
                $data['page'] = $this->config->item('backendpro_template_shop') . 'page';
                $data['module'] = $this->module;
                $this->load->view($this->_container,$data);
        }
  }
  	

  
	function contact()
    {
    	$data['cap'] = $this->generate_captcha();
        $data['title'] = $this->preference->item('site_name')." | "."Contact us";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'contact';
        $data['module'] = $this->module;
        $this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('email','email','required');
        if($this->form_validation->run()){
			if ($this->MContactUs->save()){
				redirect('welcome/contact');
			}
        }
        $this->load->view($this->_container,$data);
    }
    
    //Author: tienlx
    function detailNews(){

		$data['title'] = $this->preference->item('site_name')." | "."Detail";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'detailnews';
        $data['module'] = $this->module;
        $fields = array('id','title','content','date');
        $data['detailnews'] = $this->MIStockGold->getAllSimple("news","id",$this->uri->segment('3'));
        $this->load->view($this->_container,$data);
    }
    function allNews(){
    	$data['title'] = $this->preference->item('site_name')." | "."All WebMonyNew";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'allnews';
        $data['module'] = $this->module;
        $fields = array('id','title','content','date');
        $query =$this->db->get("is_news");
        $listnews = $query->result();
        $data['allnews'] = $listnews;
        $this->load->view($this->_container,$data);
    }
    //End Author: tienlx
    
	function faq()
    {
        $data['title'] = $this->preference->item('site_name')." | "."FAQ";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'faq';
        $data['module'] = $this->module;
        $fields = array('id','title','content','date');
        $data['faq'] = $this->MIStockGold->getAllSimple("pages","title","FAQ");
        $this->load->view($this->_container,$data);
    }
    
	function servicefees()
    {
        $data['title'] = $this->preference->item('site_name')." | "."servicefees";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'servicefees';
        $data['module'] = $this->module;
        $fields = array('id','title','content','date');
        $data['servicefees'] = $this->MIStockGold->getAllSimple("pages","title","Service Fees");
        $this->load->view($this->_container,$data);
    }
    
	function exchangers()
    {
        $data['title'] = $this->preference->item('site_name')." | "."exchangers";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'exchangers';
        $data['module'] = $this->module;
        $fields = array('id','title','content','date');
        $data['exchangers'] = $this->MIStockGold->getAllSimple("pages","title","Exchangers");
        $this->load->view($this->_container,$data);
    }
    
	function merchants()
    {
        $data['title'] = $this->preference->item('site_name')." | "."merchants";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'merchants';
        $data['module'] = $this->module;
        $fields = array('id','title','content','date');
        $data['merchants'] = $this->MIStockGold->getAllSimple("pages","title","Merchants");
        $this->load->view($this->_container,$data);
    }
    
	function download()
    {
        $data['title'] = $this->preference->item('site_name')." | "."download";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'download';
        $data['module'] = $this->module;
        $fields = array('id','title','content','date');
        $data['download'] = $this->MIStockGold->getAllSimple("pages","title","Download");
        $this->load->view($this->_container,$data);
    }
    
	function consummeralert()
    {
        $data['title'] = $this->preference->item('site_name')." | "."consummeralert";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'consummeralert';
        $data['module'] = $this->module;
        $fields = array('id','title','content','date');
        $data['consummeralert'] = $this->MIStockGold->getAllSimple("pages","title","Consummer Alert");
        $this->load->view($this->_container,$data);
    }
    
	function ouraccounts()
    {
        $data['title'] = $this->preference->item('site_name')." | "."ouraccounts";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'ouraccounts';
        $data['module'] = $this->module;
        $fields = array('id','title','content','date');
        $data['ouraccounts'] = $this->MIStockGold->getAllSimple("pages","title","Our Accounts");
        $this->load->view($this->_container,$data);
    }
    
	function ourcompany()
    {
        $data['title'] = $this->preference->item('site_name')." | "."ourcompany";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'ourcompany';
        $data['module'] = $this->module;
        $fields = array('id','title','content','date');
        $data['ourcompany'] = $this->MIStockGold->getAllSimple("pages","title","Our Company");
        $this->load->view($this->_container,$data);
    }
  
    function error()
    {
        $data['title'] = $this->preference->item('site_name')." | "."Wow! Something went wrong.";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'error';
        $data['module'] = $this->module;
        $this->load->view($this->_container,$data);
    }
    
    function registration()
    {
    /* If you are using recaptcha, don't forget to configure modules/recaptcha/config/recaptcha.php
     * Add your own key
     * */
        $captcha_result = '';
        $data['cap_img'] = $this->_generate_captcha();
        $data['question']= $this->security_question;
        $data['security_method']= $this->security_method;
        
        if ($this->input->post('email'))
        {
            $data['title'] = $this->preference->item('site_name')." | "."Registration";
            // set rules
            $config[] = array(
                            'field'=>'email',
                            'label'=>$this->lang->line('webshop_email'),
                            'rules'=>"trim|required|matches[emailconf]|valid_email"
                            );
            $config[] = array(
                            'field'=>'emailconf',
                            'label'=>$this->lang->line('webshop_email_confirm'),
                            'rules'=>"trim|required|valid_email"
                            );
            $config[] = array(
                            'field'=>'password',
                            'label'=>$this->lang->line('webshop_pass_word'),
                            'rules'=>"trim|required"
                            );
            $config[] = array(
                            'field'=>'customer_first_name',
                            'label'=>$this->lang->line('webshop_first_name'),
                            'rules'=>"trim|required|min_length[3]|max_length[20]"
                            );
            $config[] = array(
                            'field'=>'customer_last_name',
                            'label'=>$this->lang->line('webshop_last_name'),
                            'rules'=>"trim|required|min_length[3]|max_length[20]"
                            );
            $config[] = array(
                            'field'=>'phone_number',
                            'label'=>$this->lang->line('webshop_mobile_tel'),
                            'rules'=>"trim|required|min_length[8]|max_length[12]|numeric"
                            );
            $config[] = array(
                            'field'=>'address',
                            'label'=>$this->lang->line('webshop_shipping_address'),
                            'rules'=>"trim|required"
                            );
            $config[] = array(
                            'field'=>'city',
                            'label'=>$this->lang->line('webshop_city'),
                            'rules'=>"trim|required|alpha_dash"
                            );
            $config[] = array(
                            'field'=>'post_code',
                            'label'=>$this->lang->line('webshop_post_code'),
                            'rules'=>"trim|required|numeric"
                            );
            //$rules['email'] = 'trim|required|matches[emailconf]|valid_email';
            //$rules['emailconf'] = 'trim|required|valid_email';
            //$rules['password'] = 'trim|required';
            //$rules['customer_first_name'] = 'trim|required|min_length[3]|max_length[20]';
            //$rules['customer_last_name'] = 'trim|required|min_length[3]|max_length[20]';
            //$rules['phone_number'] = 'trim|required|min_length[8]|max_length[12]|numeric';
            //$rules['address'] = 'trim|required';
            //$rules['city'] = 'trim|required|alpha_dash';
            //$rules['post_code'] = 'trim|required|numeric';
            // if you want to use recaptcha, set modules/recaptcha/config and uncomment the following
            //$rules['recaptcha_response_field'] = 'trim|required|valid_captcha';
            if($this->security_method=='recaptcha')
            {
                $config[] = array(
                            'field'=>'recaptcha_response_field',
                            'label'=>$this->lang->line('kago_recaptcha_response_field'),
                            'rules'=>"trim|required|valid_captcha"
                            );
                //$rules['recaptcha_response_field'] = 'trim|required|valid_captcha';
            }
            elseif($this->security_method=='question')
            {
                $config[] = array(
                            'field'=>'write_ans',
                            'label'=>$this->lang->line('kago_write_ans'),
                            'rules'=>"trim|required|callback_security_check"
                            );
                //$rules['write_ans']= 'trim|required|callback_security_check';
            }
            $this->form_validation->set_rules($config);

            // set fields. This will be used for error messages
            // for example instead of customer_first_name, First Name will be used in errors
            $fields['email']	                = lang('webshop_email');
            $fields['emailconf']	            = lang('webshop_email_confirm');
            $fields['password']	                = lang('webshop_pass_word');
            $fields['customer_first_name']	    = lang('webshop_first_name');
            $fields['customer_last_name']	    = lang('webshop_last_name');
            $fields['phone_number']	            = lang('webshop_mobile_tel');
            $fields['address']	                = lang('webshop_shipping_address');
            $fields['city']	                    = lang('webshop_city');
            $fields['post_code']	            = lang('webshop_post_code');
            $fields['recaptcha_response_field']	= $this->lang->line('kago_recaptcha_response_field');
            $fields['write_ans']                = $this->lang->line('webshop_write_ans');
            $this->form_validation->set_fields($fields);

            // run validation
            if ($this->form_validation->run() == FALSE)
            {
                // if false outputs errors
                $this->form_validation->output_errors();
            }
            else
            {
                $e = $this->input->post('email');
                // otherwise check if the customer's email is in the database
                $numrow = $this->MCustomers->checkCustomer($e);
                if ($numrow == TRUE)
                {
                    // you have registered before, set the message and redirect to login page.
                    flashMsg('info', lang('webshop_registed_before'));
                    // $this->session->set_flashdata('msg', lang('webshop_registed_before'));
                    redirect( $this->module.'/login','refresh');
                }
                // a customer is new, so create the new customer, set message and redirect to login page.
                $data = array(
                    'customer_first_name' => db_clean($_POST['customer_first_name'],25),
                    'customer_last_name'  => db_clean($_POST['customer_last_name'],25),
                    'phone_number'        => db_clean($_POST['phone_number'],15),
                    'email'               => db_clean($_POST['email'],50),
                    'address'             => db_clean($_POST['address'],50),
                    'city'                => db_clean($_POST['city'],25),
                    'post_code'           => db_clean($_POST['post_code'],10),
                    'password'            => db_clean(do_hash($_POST['password']),16)
                );
                $module = 'customer';
                $this->MKaimonokago->addItem($module, $data);
                //$this->MCustomers->addCustomer();
                flashMsg('success', lang('webshop_thank_registration'));
                // $this->session->set_flashdata('msg', lang('webshop_thank_registration'));
                redirect( $this->module.'/login');
            }
        }// end of if($this->input->post('email'))
        $data['title'] = $this->preference->item('site_name')." | ". "Registration";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'registration';
        $data['module'] = $this->module;
        $this->load->view($this->_container,$data);
    }




    function login()
    {
        if ($this->input->post('email'))
        {
            $e = $this->input->post('email');
            $pw = $this->input->post('password');
            $this->MCustomers->verifyCustomer($e,$pw);
            if (isset($_SESSION['customer_id']))
            {
                flashMsg('info',lang('login_logged_in'));
                redirect( $this->module.'/login','refresh');
            }
            flashMsg('info',lang('login_email_pw_incorrect'));
            redirect( $this->module.'/login','refresh');
        }
        $data['title'] = $this->preference->item('site_name')." | "."Customer Login";
        $data['page'] = $this->config->item('backendpro_template_shop') . 'customerlogin';
        $data['module'] = $this->module;
        $this->load->view($this->_container,$data);
    }




    function logout()
    {
        // this would remove all the variable in the session
        session_unset();
        //destroy the session
        session_destroy();
        redirect( $this->module.'/index','refresh');
     }




    function subscribe()
    {
        $data['title']=$this->preference->item('site_name')." | ".'Subscribe to our News letter';
        $data['question']= $this->security_question;
        $data['security_method']= $this->security_method;
        $captcha_result = '';
        $data['cap_img'] = $this->_generate_captcha();
        if ($this->input->post('name'))
        {
            $config[] = array(
                            'field'=>'name',
                            'label'=>$this->lang->line('kago_name'),
                            'rules'=>"trim|required"
                            );
            $config[] = array(
                            'field'=>'email',
                            'label'=>$this->lang->line('kago_email'),
                            'rules'=>"trim|required|valid_captcha"
                            );


            //$rules['name'] = 'required';
            //$rules['email'] = 'required|valid_email';
            //$rules['recaptcha_response_field'] = 'trim|required|valid_captcha';
            if($this->security_method=='recaptcha')
            {
                //$rules['recaptcha_response_field'] = 'trim|required|valid_captcha';
                $config[] = array(
                            'field'=>'recaptcha_response_field',
                            'label'=>$this->lang->line('kago_recaptcha_response_field'),
                            'rules'=>"trim|required|valid_captcha"
                            );
            }
            elseif($this->security_method=='question')
            {
                //$rules['write_ans']= 'trim|required|callback_security_check';
                $config[] = array(
                            'field'=>'write_ans',
                            'label'=>$this->lang->line('kago_write_ans'),
                            'rules'=>"trim|required|callback_security_check"
                            );
            }
            $this->form_validation->set_rules($config);
            $fields['email']	= lang('webshop_email');
            $fields['name']	= lang('subscribe_name');
            $fields['recaptcha_response_field']	= 'Recaptcha';
            $fields['write_ans']        = "Security answer ";
            $this->form_validation->set_fields($fields);
            if ($this->form_validation->run() == FALSE)
            {
                // if false outputs errors
                $this->form_validation->output_errors();
            }
            else
            {
                $email = $this->input->post('email');
                // otherwise check if the customer's email is in the database
                $numrow = $this->MSubscribers->checkSubscriber($email);
                if ($numrow == TRUE){
                // you have registered before, set the message and redirect to login page.
                flashMsg('info',lang('subscribe_registed_before'));
                redirect( $this->module.'/subscribe','refresh');
                }
                $this->MSubscribers->createSubscriber();
                flashMsg('success',lang('subscribe_thank_for_subscription'));
                redirect( $this->module.'/subscribe','refresh');
            }
        }
        $data['page'] = $this->config->item('backendpro_template_shop') . 'subscribe';
        $data['module'] = $this->module;
        $this->load->view($this->_container,$data);
    }
  



    function unsubscribe($email='')
    {
        if (!$this->input->post('email'))
        {
            $data['title']=$this->preference->item('site_name')." | ".'Unsubscribe our Newsletter';
            $captcha_result = '';
            $data['cap_img'] = $this->_generate_captcha();
            $data['question']= $this->security_question;
            $data['security_method']= $this->security_method;
            $data['page'] = $this->config->item('backendpro_template_shop') . 'unsubscribe';
            $data['module'] = $this->module;
            $this->load->view($this->_container,$data);
        }
        else
        {
            $config[] = array(
                            'field'=>'email',
                            'label'=>$this->lang->line('webshop_email'),
                            'rules'=>"trim|required|max_length[254]|valid_email"
                            );

            //$rules['email'] = 'trim|required|max_length[254]|valid_email';
            //$rules['recaptcha_response_field'] = 'trim|required|valid_captcha';
            if($this->security_method=='recaptcha')
            {
                $config[] = array(
                            'field'=>'recaptcha_response_field',
                            'label'=>$this->lang->line('kago_recaptcha_response_field'),
                            'rules'=>"trim|required|valid_captcha"
                            );
                //$rules['recaptcha_response_field'] = 'trim|required|valid_captcha';
            }
            elseif($this->security_method=='question')
            {
                $config[] = array(
                            'field'=>'write_ans',
                            'label'=>$this->lang->line('webshop_write_ans'),
                            'rules'=>"trim|required|callback_security_check"
                            );
                //$rules['write_ans']= 'trim|required|callback_security_check';
            }
            $this->form_validation->set_rules($config);
            $fields['email']	                = lang('webshop_email');
            $fields['recaptcha_response_field']	= 'Recaptcha';
            $fields['write_ans']                = lang('webshop_security_question');
            $this->form_validation->set_fields($fields);
            if ($this->form_validation->run() == FALSE)
            {
                // if false outputs errors
                $this->form_validation->output_errors();
                redirect( $this->module.'/unsubscribe','refresh');
            }
            else
            {
                $email = $this->input->post('email');
                $this->MSubscribers->removeSubscriber($email);
                flashMsg('success',lang('subscribe_you_been_unsubscribed'));
                redirect( $this->module.'/index','refresh');
            }
        }
    }
  
  


    function cart($productid=0)
    {
        $shippingprice = $this-> shippingprice();
        $data['shippingprice']=$shippingprice['shippingprice'];
        if ($productid > 0)
        {
            $module = 'products';
            $fullproduct = $this->MKaimonokago->getInfo($module, $productid);
            //$fullproduct = $this->MProducts->getProduct($productid);
            $this->MOrders->updateCart($productid,$fullproduct);
            redirect( $this->module.'/product/'.$productid, 'refresh');
        }
        else
        {
            $data['title'] = $this->preference->item('site_name')." | ". "Shopping Cart";
            if (isset($_SESSION['cart']))
            {
                    $data['page'] = $this->config->item('backendpro_template_shop') . 'shoppingcart';
                    $data['module'] = $this->module;
                    $this->load->view($this->_container,$data);
            }
            else
            {
                    flashMsg('info',lang('orders_no_item_yet'));
                    // $this->session->set_flashdata('msg',lang('orders_no_item_yet'));
                    $data['page'] = $this->config->item('backendpro_template_shop') . 'shoppingcart';
                    $data['module'] = $this->module;
                    $this->load->view($this->_container,$data);
            }
        }
    }




    function ajax_cart()
    {
        // this is called by assets/js/shopcustomtools.js
        // this is used when a customer click a update button in /index.php/webshop/cart page
        $this->MOrders->updateCartAjax($this->input->post('ids'));
    }


    function ajax_cart_remove()
    {
        // this is called by assets/js/shopcustomtools.js
        // this is used when a customer click a delete button in /index.php/webshop/cart page
        $this->MOrders->removeLineItem($this->input->post('id'));
    }



    function shippingprice()
    {
        // You need to modify this. This is for Norwegian system. At the moment, if a max of individual product is more
        // than 268 kr, then shipping price will be 65 kr otherwise 0 kr or 25 kr.
        $maxprice = 0;
        if(isset($_SESSION['cart']))
        {
            foreach ($_SESSION['cart'] as $item) 
            {
                if ($item['price'] > $maxprice) 
                {
                    $maxprice = $item['price'];
                }
            }
            $data['maxprice']=$maxprice;
            $shippingprice = 0;
            if ($maxprice > 268 )
            {
                $shippingprice = 65.0;
            }
            elseif($maxprice == 0)
            {
                $shippingprice = 0;
            }
            else
            {
                $shippingprice = 25.0;
            }
            $_SESSION['shippingprice'] = $shippingprice;
            $data['shippingprice']=$shippingprice;
            return $data;
        }
    }
  
  

    function checkout()
    {	
        // $this->MOrders->verifyCart();
        //$data['main'] = 'webshop/confirmorder';// this is using views/confirmaorder.php
        $data['page'] = $this->config->item('backendpro_template_shop') . 'confirmorder';
        $data['title'] = $this->preference->item('site_name')." | ". "Order Confirmation";
        $shippingprice = $this-> shippingprice();
        $data['shippingprice']=$shippingprice['shippingprice'];
        $data['grandtotal']= 0;
        if(isset($_SESSION['customer_id']))
        {
        	$data['fname'] = $_SESSION['customer_first_name'];
        	$data['lname'] = $_SESSION['customer_last_name'];
        	$data['telephone'] = $_SESSION['phone_number'];
        	$data['email'] = $_SESSION['email'];
        	$data['address'] = $_SESSION['address'];
        	$data['city'] = $_SESSION['city'];
        	$data['pcode'] = $_SESSION['post_code'];
        }
        $data['module'] = $this->module;
        $this->load->view($this->_container,$data);
    }
  


    function search()
    {
        /**
        * form in views/header.php point to this search
        * form_open("webshop/search");
        * This will look in name, shortdesc and longdesc
        *
        */
        if ($this->input->post('term')){
        /**
        * In CodeIgniter, the way to check for form input is to use the $this - > input - > post() method
        */
        $data['results'] = $this->MProducts->search($this->input->post('term'));
        /**
         * This output id,name,shortdesc,thumbnail
         */
        }else{
        redirect( $this->module.'/index','refresh');
        /**
         * if nothing in search form, then redirect to index
         */
        }
        //$data['main'] = 'webshop/search';// this is using views/search.php. Output will be displayed in views/search.php
        $data['title'] = $this->preference->item('site_name')." | ". "Search Results";
        //$this->load->vars($data);
        //$this->load->view('webshop/template');  
        $data['page'] = $this->config->item('backendpro_template_shop') . 'search';
        $data['module'] = $this->module;
        $this->load->view($this->_container,$data);   	
    }

	
  
  
  
    function gallery($id)
    {
        $data['title'] = $this->preference->item('site_name')." | ". "Gallery " . $id;
        $data['products'] = $this->MProducts->getGallery($id);
        // getGalleryone returns id, name shortdesc thumbnail image class grouping category
        $data['main'] = 'gallery';// this is using views/galleryone.php etc
        $data['galleriid']=$id; // used for if statement to add top sub-category 
        $this->load->vars($data);
        $this->load->view('webshop/template'); 
    }
  

  
  
    function emailorder()
    {
		$data['title'] = $this->preference->item('site_name')." | ". "checkout";
		// old way of validation, I hope Bep will update to CI 1.7.2 
		$fields['customerr_first_name'] = lang('orders_first_name');
		$fields['customerr_last_name'] = lang('orders_last_name');
		$fields['telephone'] = lang('webshop_mobile_tel');
		$fields['email'] = lang('orders_email');
		$fields['emaildonf'] = lang('orders_email_confirm');
		$fields['shippingaddress'] = lang('orders_shipping_address');
		$fields['city'] = lang('orders_post_code');
		$fields['post_code'] = lang('orders_city');
		$this->form_validation->set_fields($fields);	

        $config[] = array(
                            'field'=>'customer_first_name',
                            'label'=>$this->lang->line('webshop_first_name'),
                            'rules'=>"trim|required|min_length[3]|max_length[20]"
                            );

        $config[] = array(
                            'field'=>'customer_last_name',
                            'label'=>$this->lang->line('webshop_last_name'),
                            'rules'=>"trim|required|min_length[3]|max_length[20]"
                            );

        $config[] = array(
                            'field'=>'telephone',
                            'label'=>$this->lang->line('webshop_mobile_tel'),
                            'rules'=>"trim|required|min_length[8]|max_length[12]|numeric"
                            );

        $config[] = array(
                            'field'=>'email',
                            'label'=>$this->lang->line('webshop_email'),
                            'rules'=>"trim|required|matches[emailconf]|valid_email"
                            );

        $config[] = array(
                            'field'=>'emailconf',
                            'label'=>$this->lang->line('webshop_email_confirm'),
                            'rules'=>"trim|required|valid_email"
                            );

        $config[] = array(
                            'field'=>'shippingaddress',
                            'label'=>$this->lang->line('webshop_shipping_address'),
                            'rules'=>"required"
                            );

        $config[] = array(
                            'field'=>'city',
                            'label'=>$this->lang->line('webshop_city'),
                            'rules'=>"trim|required"
                            );
        $config[] = array(
                            'field'=>'post_code',
                            'label'=>$this->lang->line('webshop_post_code'),
                            'rules'=>"trim|required"
                            );
		//$rules['customer_first_name'] = 'trim|required|min_length[3]|max_length[20]';
		//$rules['customer_last_name'] = 'trim|required|min_length[3]|max_length[20]';
		//$rules['telephone'] = 'trim|required|min_length[8]|max_length[12]|numeric';
		//$rules['email'] = 'trim|required|matches[emailconf]|valid_email';
		//$rules['emailconf'] = 'trim|required|valid_email';
		//$rules['shippingaddress'] = 'required';
		//$rules['city'] = 'trim|required';
		//$rules['post_code'] = 'trim|required';
		$this->form_validation->set_rules($config);
		$shippingprice = $this-> shippingprice();
		$data['shippingprice']=$shippingprice['shippingprice'];
		
		if ($this->form_validation->run() == FALSE)
		{
			// $this->session->set_flashdata('msg', 'Please fill all the fields. Please try again!');
				
			// send back to confirmorder. validation error will be displayed automatically

			$this->form_validation->output_errors();
			$data['page'] = $this->config->item('backendpro_template_shop') . 'confirmorder';
			$data['module'] = $this->module;
			$this->load->view($this->_container,$data);
		}
		else
		{
			/*
			 * If validation is ok, then
			 * 1. enter customer info to db through $this->MOrders->entercustomerinfo();
			 * 2. enter oder info to db through $this->MOrders->enterorderinfo();
			 * 3. enter oder items to db $this->MOrders->enterorderitems();
			 * 4. send email to the customer and me
			 * 5. redirect to ordersuccess page and display thanks message
			 *
			 */
			$totalprice = $_SESSION['totalprice'];
			
			$this->MOrders->enterorder($totalprice);
			
			//Create body of message by cleaning each field and then appending each name and value to it
			
			$body = "<h1>".lang('email_here_is')."</h1><br />";
			$email = db_clean($this->input->post('email'));
			$lastname = db_clean($this->input->post('lname'));
			$firstname = db_clean($this->input->post('fname'));
			$name = $firstname + " " + $lastname;
			
			// $shipping= 65;
			$shipping = $_SESSION['shippingprice'];
			$body .= "<table border='1' cellspacing='0' cellpadding='5' width='80%'><tr><td><b>".lang('email_number_of_order')."</b></td><td><b>".lang('email_product_name')."</b></td><td><b>".lang('email_product_price')."</b></td></tr>";
			if (count($_SESSION['cart']))
            {
				$count = 1;
				foreach ($_SESSION['cart'] as $PID => $row)
                {  
					$body .= "<tr><td><b>". $row['count'] . "</b></td><td><b>" . $row['name'] . "</b></td><td><b>" . $row['price']."</b></td></tr>";
				}
			}
			$grandtotal = (int)$totalprice + $shipping;
			$body .= "<tr><td colspan='2'><b>".lang('orders_sub_total_nor')." </b></td><td colspan='1'><b>".number_format($totalprice,2,'.',','). "</b></td></tr>";
			$body .= "<tr><td colspan='2'><b>".lang('orders_shipping_nor')." </b></td><td colspan='1'><b>". number_format($shipping ,2,'.',',') . "</b></td></tr>";
			$body .= "<tr><td colspan='2'><b>".lang('orders_total_with_shipping')." </b></td><td colspan='1'><b>".number_format($grandtotal,2,'.',','). "</b></td></tr>";
			$body .= "</table><br />";
			$body .= "<table border=\"1\" cellspacing='0' cellpadding='5' width='80%'>";
			$body .= "<tr><td><b>".lang('orders_name').": </b></td><td><b>". $_POST['customer_first_name']." ". $_POST['customer_last_name']."</b></td></tr>";
			$body .= "<tr><td><b>".lang('orders_email').": </b></td><td><b>". $_POST['email']. "</b></td></tr>";
			$body .= "<tr><td><b>".lang('webshop_mobile_tel').": </b></td><td><b>". $_POST['telephone']. "</b></td></tr>";
			$body .= "<tr><td><b>".lang('orders_shipping_address').": </b></td><td><b>". $_POST['shippingaddress']. "</b></td></tr>";
			$body .= "<tr><td><b>".lang('orders_post_code').": </b></td><td><b>". $_POST['post_code']. "</b></td></tr>";
			$body .= "<tr><td><b>".lang('orders_city').": </b></td><td><b>". $_POST['city']. "</b></td></tr>";
			$body .= "</table>";
			$body .= "<p><b>".lang('email_we_will_call')."</b></p>";
			extract($_POST);
			//removes newlines and returns from $email and $name so they can't smuggle extra email addresses for spammers
			$headers = "Content-Type: text/html; charset=UTF-8\n";
			$headers .= "Content-Transfer-Encoding: 8bit\n\n";
			//Create header that puts email in From box along with name in parentheses and sends bcc to alternate address
			$from='From: '. $email . "(" . $name . ")" . "\r\n" . 'Bcc: admin@gmail.com' . "\r\n";
			//Creates intelligible subject line that also shows me where it came from
			$subject = $this->preference->item('site_name').' Order confirmation';
            $admin_email = $this->preference->item('admin_email');
			//Sends mail to me, with elements created above
            mail ($admin_email, $subject, $body, $headers, $from);
            $site_name = $this->preference->item('site_name');
            // Send confirmation email to the customer
            mail ($email, $subject, $body, $headers,$site_name);
			// $this->session->set_flashdata('msg', 'Thank you for your order! We will get in touch as soon as possible.');
			redirect($this->module.'/ordersuccess');
		}
  	}
	


  
    function ordersuccess()
    {
    	unset($_SESSION['cart']);
    	unset($_SESSION['totalprice']);
    	$data['title'] = $this->preference->item('site_name')." | ". "Contact us";
    	$data['page'] = $this->config->item('backendpro_template_shop') . 'ordersuccess';
    	$data['module'] = $this->module;
    	$this->load->view($this->_container,$data);
    }


    function user_availability()
    {
        //$where = $this->uri->segment(3);
        //this varible contains the array of existing users
        $module = "subscribers";
        //$where = "name";
        /*
        if($where =="name")
        {
            $what = $this->input->post('user_name');   
        }
        else
        {
            $what = $this->input->post('user_name');  
        }
        */
        $where = $this->input->post('where');
        $what = $this->input->post('what');
        $customers = $this->MKaimonokago->getAllSimple($module, $where , $what );
        if (!empty($customers))
        {
         //user name is not available
         echo "no";
        }
        else
        {
          //username available i.e. user name doesn't exists in array
          echo "yes";
        }    
    }
    
    
    
     //ham review_An 4/5/2012
    function review()
    {
    	//kiem tra nhap
		$this->form_validation->set_rules('your_name','Your Name','required');
		$this->form_validation->set_rules('location','Your location','required');
		$this->form_validation->set_rules('your_order','Your order number','required');
		$this->form_validation->set_rules('review_title','Your review title','required');
		$this->form_validation->set_rules('comment','Your comment','required');
		$this->form_validation->set_rules('ratingstarvalue','Your rating','required');
		
        if($this->form_validation->run())
        {

			$your_name = $this->input->post('your_name');
			$location = $this->input->post('location');
			$your_email = $this->input->post('your_email');
			$your_phone = $this->input->post('your_phone');
			$your_order= $this->input->post('your_order');
			$review_title = $this->input->post('review_title');
			$comment = $this->input->post('comment');
			$rating = $this->input->post('ratingstarvalue');		
					
			$this->db->where('order_code',$your_order);
			$query=$this->db->get('is_order');
			$row=$query->num_rows();
		
			//kiem tra ordercode trong csdl
			if ($row<>0)
			{
			$data = array(
				'name' 			=> $your_name,
				'location' 		=> $location,
	            'email' 		=> $your_email,
	            'phone_number'  => $your_phone,
				'title' 		=> $review_title,
				'comment' 		=> $comment,
				'rating'		=> $rating
			
	 		);
 		
	 		$this->db->set('date','NOW()',FALSE);
			$this->db->insert('is_reviews',$data);	
		
		//hien thi thong bao
		}
			$this->session->set_flashdata('message',' * Successful ');
			redirect('welcome');		
        }
        else 
        {
			$warning = validation_errors();
	         $this->session->set_flashdata('error',$warning);
	         redirect('welcome');
        }
        redirect('welcome');
	
    }
    //ham lay review tu csdl by An    
    function getReviews($num,$offset)
    {
    	
    	$data = array();
       	$this->db->select('id, name, location, title, date, comment, rating');
		//$this->db->from('is_reviews');
    	$this->db->order_by('date','desc');
    	
    	
    	$Q=	$this->db->get("is_reviews",$num,$offset);

        if ($Q->num_rows() > 0)
        {
            foreach ($Q->result_array() as $row)
            {
                $data[] = $row;
            }
        }
        $Q->free_result();
        return $data;
    }
	//end by An 4/5/2012
	
    //Author: tienlx Pagination Reviews
    function getNumReviews(){
    	$query =$this->db->query("SELECT * FROM is_reviews");
    	return $query->num_rows();
    }
    function getAllReviews($num,$offset){
    	$this->db->order_by("date","DESC");
    	$query = $this->db->get('is_reviews',$num,$offset);
    	return $query->result();
    }
    //End author: tienlx 
    
    
}//end controller class

?>