<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends NIW_controller {
	
	function __construct()
	{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->model('Mhomepage');
		$this->load->library('pagination');
		$this->load->helper('text');
		$this->load->library('form_validation');
		$this->loadLang();
	}
	
	public function index()
	{
		$this->page();
	}
	
	public function page($index=0)
	{
		$data['step']  =  $this->Mhomepage->getListFull('fg_step');
		$data['topwin']  =  $this->Mhomepage->Topwin(4);
		$data['topgiaidau']  =  $this->Mhomepage->Topgiaidau(4);
		//var_dump($data['topgiaidau']); die();
		$data['image'] = $this->Mhomepage->getListFull('fg_bannerheader');
		$data['photo'] = $this->Mhomepage->getListFull('fg_banner');
		$data['link_fanpage'] = $this->Mhomepage->getRowByColumn('fg_setting','id',1);
		$homepage = $this->Mhomepage->getRowByColumn('st_metatag','id',1);
		$data['meta_tag'] = $homepage->meta_home;
		$data['list_belote'] = $this->Mhomepage->getListFull('fg_belote');
		$data['list_news'] = $this->Mhomepage->getListOffset('fg_news',1,0);
		$data['list_games'] = $this->Mhomepage->getListOffset('fg_games',48,0);
		$data['list_hotro'] = $this->Mhomepage->getListFull('fg_hotro');
		$data['list_bannerheader'] = $this->Mhomepage->getListFull('fg_bannerheader');
		$data['list_slide'] = $this->Mhomepage->getListFull('fg_slide');
		$data['list_banner'] = $this->Mhomepage->getListFull('fg_banner');
		$data['top1'] = $this->Mhomepage->getTopGame(1);
		$data['top_game'] = $this->Mhomepage->getTopGame(11);
		$data['list_category'] = $this->Mhomepage->getListFull('fg_category');
		//$data['list_games'] = $this->Mhomepage->getListFull('fg_games');
		$data['list_game_cate']  =  $this->Mhomepage->getListFullCategory('fg_games');
		$data['title']='flash_game | Flash game';
		$data['module'] = $this->module;
		$data['page'] = 'frontpage';
		$this->load->view('front/container',$data);
	}
		
	public function news($index=0)
	{
		$data['list_belote'] = $this->Mhomepage->getListFull('fg_belote');
		$data['list_news'] = $this->Mhomepage->getListFull('fg_news');
		$data['list_comment'] = $this->Mhomepage->getListFull('st_comment');
		$data['list_hotro'] = $this->Mhomepage->getListFull('fg_hotro');
		$data['list_bannerheader'] = $this->Mhomepage->getListFull('fg_bannerheader');
		$data['list_slide'] = $this->Mhomepage->getListFull('fg_slide');
		$data['list_banner'] = $this->Mhomepage->getListFull('fg_banner');
		$data['top1'] = $this->Mhomepage->getTopGame(1);
		$data['top_game'] = $this->Mhomepage->getTopGame(11);
		$data['list_category'] = $this->Mhomepage->getListFull('fg_category');
		$data['list_game_cate']  =  $this->Mhomepage->getListFullCategory('fg_games');
		$data['title']='flash_game | Flash game';
		$data['module'] = $this->module;
		$data['page'] = 'vnews';
		$this->load->view('front/container',$data);
	}
	
	function _input()
	{
		$input=array(
					'e_mail'=>$this->input->post('e_mail'));
		return $input;
	}
	
	//send mai share this page
	function send()
	{
		
		$this->form_validation->set_rules('e_mail',' mail','required|trim|valid_email');
		if ($this->form_validation->run())
		{
			$input=$this->_input();
			$to = $input['e_mail'];
			$news=
			$from="tuyetapt@gmail.com";
			$to=$_POST['e_mail'];
			$subject="Đăng ký nhận thông tin thành công";
			$message="Email của bạn đã đăng ký nhận tin tức mới nhất và Chúng tôi sẽ tự động cập nhật và viết tin mới nhất gửi vào mail cho bạn.";
			$options="Content-type:text/html;charset=utf-8\r\nFrom:$from\r\nReply-to:$from";
			mail($to,$subject,$message,$options);
			if ($this->Mhomepage->insertNewRow('fg_email',$input))
			{
				$this->session->set_userdata('result','Envoyé avec succès !');
			}
			else $this->session->set_userdata('result','Envoi a échoué !');
		}
		$this->index();
	}
	}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */