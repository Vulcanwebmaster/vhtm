<?php
class Tiennd extends CI_Controller{
	public function __contruct()
	{
		parent::__construct();
		$this->module=strtolower(get_class());
		//$this->load->helper('url');
		//$this->load->helper('form');
	}
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		
		include("mojmojster_database.php");
		
		$data['categories'] = $CraftsmanReferences->returnAllCategories();
		$data['references'] = $CraftsmanReferences->returnReferencesListUncategorized();
		$pictures=array();
		foreach ($data['references'] as $item)
		{
			$pictures[]=$CraftsmanReferences->returnFile($item->file_id);
		}
		$data['files'] = $pictures;
		$data['count']=count($data['references']);
		$this->load->view('view_method_3',$data);
	}
	
	public function method_3()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		include("mojmojster_database.php");
		
		$data['categories'] = $CraftsmanReferences->returnAllCategories();
		$data['references'] = $CraftsmanReferences->returnReferencesListUncategorized();
		
		$pictures=array();
		foreach ($data['references'] as $item)
		{
			$pictures[]=$CraftsmanReferences->returnFile($item->file_id);
		}
		$data['files'] = $pictures;
		$data['count']=count($data['references']);
		$this->load->view('view_method_3',$data);
	}
	
	public function deleteRef($referenceId)
	{
		$this->load->helper('url');
		$this->load->helper('form');
		include("mojmojster_database.php");
		
		$CraftsmanReferences->deleteMyReference($referenceId);
		redirect(base_url().'index.php/M_references/showCategoriedReferences','refresh');
	}
	
	public function addCategory($craftsmanId)
	{
		$this->load->helper('url');
		include("mojmojster_database.php");
		
		$categoryTitle = $this->input->post('category_title');
 		$CraftsmanReferences->setProductCategory($craftsmanId, $categoryTitle, $categoryId = false);
		redirect(base_url().'index.php/M_references/showCategoriedReferences','refresh');
	}
	
	public function upload()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		include("mojmojster_database.php");
		
		$title = $this->input->post('title');
		$text = $this->input->post('text');
		
		$config['upload_path'] = 'assets/images/references/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']	= '999999999999999999';
		$config['max_width']  = '0';
		$config['max_height']  = '0';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = $this->upload->display_errors();
			echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
			echo "<script type='text/javascript'>
				alert('.$error.');
			</script>";
		}
		else
		{
			$data = $this->upload->data();
			$fileFieldName = 'userfile';
			$Files->storeFile($fileFieldName, $type='file');
			//$Files->storeMyFile($data['file_ext'],'Image',$data['file_name']);
			$image = $Files->returnFileId($data['file_name']);
			$CraftsmanReferences->setReference($craftsmanId=1,'',$image,$title,$text,$comment='',$comment_author='',$categoryId = -1);
		}
		redirect(base_url().'index.php/M_references/showCategoriedReferences','refresh');
	}

		function showCategoriedReferences($craftsmanId='1')
		{
			$this->load->helper('url');
			$this->load->helper('form');
			include("mojmojster_database.php");
			
			$ref['listCategories']=$Craftsman->returnCraftsmanCategories($craftsmanId);
			$ref['craftsmanId']=$craftsmanId;
			$this->load->view('RefListCategoried-tiennd',$ref);
		}
		
		function showListCategoried($craftsmanId='1',$categoryId='0')
		{
			$this->load->helper('url');
			include("mojmojster_database.php");
			
			$ref['listReferences']=$CraftsmanReferences->returnReferencesList($craftsmanId,$categoryId);
			$pictures=array();
			foreach ($ref['listReferences'] as $item)
			{
				$pictures[]=$Files->returnFileName($item->file_id);
			}
			$ref['pictures']=$pictures;
			
			$this->load->view('RefList',$ref);
		}

}
?>