<?php
	class Mportfolio extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			
		}
		
//Function Front-End

//Function Back-End
		function getListCategories()
		{
			$query=$this->db->get('lee_portfolio_categories');
			return $query->result();
		}
		function getCategoryByID()
    	{
	    	$id=$this->uri->segment(4);
	    	$this->db->where('id',$id);
	    	$result=$this->db->get('lee_portfolio_categories');
	    	return $result->result();
    	}
    	function getLstPortFolioByCtg()
    	{
    		$id=$this->uri->segment(4);
    		//get list PortFolio from table n_lee_portfolio_relate_ctg_port
    		$this->db->select('portfolio_id');
    		$this->db->where('category_id',$id);
    		$query = $this->db->get('lee_portfolio_relate_ctg_port');
    		$lstportfolio = $query->result();
    		$i = 1;
    		foreach ($lstportfolio as $rw){
    			$list_id[$i] = $rw->portfolio_id;
    			$i = $i + 1;
    		}
    		$this->db->where_in('id', $list_id);
    		$query = $this->db->get('lee_portfolio');
    		return $query->result();
    	}
    	
    	//PortFolio
		function getListCategoriesByPortfolio()
		{
			$id=$this->uri->segment(4);
			//get list Category from table n_lee_portfolio_relate_ctg_port
			$this->db->select('category_id');
			$this->db->where('portfolio_id',$id);
			$query=$this->db->get('lee_portfolio_relate_ctg_port');
			$categories = $query->result();
		    $i = 1;
    		foreach ($categories as $rw){
    			$list_id[$i] = $rw->category_id;
    			$i = $i + 1;
    		}
			return $list_id;
		}
	    function getPortFolioByID()
    	{
    		$id=$this->uri->segment(4);
    		$this->db->where('id',$id);
    		$query = $this->db->get('lee_portfolio');
    		return $query->result();
    	}
	    function getListTypes()
    	{
    		$query = $this->db->get('lee_portfolio_types');
    		return $query->result();
    	}
    	function updatePortfolio()
    	{
    		$id = $this->uri->segment('4');
    	    if ($this->input->post('image') == "")
    		{
    			$result = $this->getPortFolioByID();
    			foreach ($result as $rw){
    				$img = $rw->image;
    			}
    		}
    		else{
    			$img = $this->fixImageLink("image");
    		}
    		$type = $this->input->post('type');
    		if ($type == 1)
    		{
    			if ($this->input->post('url') == "")
    			{
    				$result = $this->getPortFolioByID();
    				foreach ($result as $rw){
    					$url = $rw->image;
    			}
    			}
    			else{
    				$url = $this->fixImageLink("url");
    			}
    			
    		}
    		else if ($type == 2)
    		{
    		    if ($this->input->post('url') == "")
    			{
    				$result = $this->getPortFolioByID();
    				foreach ($result as $rw){
    					$url = $rw->url;
    			}
    			}
    			else{
    				$url = $this->input->post('url');
    			}
    			
    		} 
			$data=(
				array(
				'title' => $this->input->post('title'),
				'name' => $this->input->post('name'),
				'type'=>$this->input->post('type'),
				'url'=>$url,
				'image'=>$img,
				'date' => mdate('%Y-%m-%d %H:%i:%s',time())
				)
			);
    		$this->db->where('id',$id);
			if($this->db->update('lee_portfolio',$data))
			{
				//update Category
				$temp = $this->input->post('category');
				$this->delPortfolioRelatebyID($id);
				$datas = array();
				$data = array();
				for ($i = 0; $i < count($temp); $i++)
				{
					$data[$i] =(				
						array(
						'portfolio_id' => $id,
						'category_id' => $temp[$i],
						)
					);
				}
				$this->db->insert_batch('lee_portfolio_relate_ctg_port', $data); 
				return true;
			}
			else {
				return false;
			}
    	}
    	function delPortfolioRelatebyID($id)
    	{
			$this->db->where('portfolio_id', $id);
			$this->db->delete('lee_portfolio_relate_ctg_port'); 
    	}
    	//Config image link
    	function fixImageLink ($ele)
    	{
    		//$temp = str_replace("../../../../", base_url(), $temp);
			$image = $this->input->post($ele,TRUE);
			$tmp = strstr(strstr($image, "src=\"../../"),"../../");
			$pos = strpos($tmp, "\"");
			$link = substr($tmp, 0, $pos);
			$link = str_replace("../../", "", $link);
			return $link;
    	}
	   	function fixImageLink_ToView ($ele)
    	{
			$image = $this->input->post($ele,TRUE);
			$link = str_replace("../../../../", base_url(), $image);
			return $link;
    	}
    	
    	
	}