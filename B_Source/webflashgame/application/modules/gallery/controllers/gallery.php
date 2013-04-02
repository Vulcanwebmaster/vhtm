<?php 
class Gallery extends NIW_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");	
	}
	
	public function index($index=0){
		$this->load->model("Mgallery");
		
		if($this->input->post("ok")){
				$this->Mgallery->do_upload();
		}
		//lay ten url tren file da duoc upload
		$data['images'] = $this->Mgallery->get_images();
		$this->load->view("gallery_view",$data);	
	}
	
	
}
