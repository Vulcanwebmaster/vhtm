<?php
	class Mportfolio extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			
		}
		
//Function Front-End
		function getListPortfolio()
		{
			$query = $this->db->get('lee_portfolio');
			return $query->result();
		}
		function getCategoryByPortfolio($id)
		{
			$this->db->select('name');
			$this->db->from('lee_portfolio_categories');
			$this->db->join('lee_portfolio_relate_ctg_port','lee_portfolio_categories.id = lee_portfolio_relate_ctg_port.category_id');
			$this->db->where('portfolio_id',$id);
			$query = $this->db->get();
			$result=$query->result();
			$strings = "";
			foreach ($result as $rw){
				$string = $rw->name;
				$strings = $strings." ".$string;
			}
			return $strings;
    		
		}
		function getTypeByPortfolio($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->get('lee_portfolio_types');
			$result = $query->result();
			foreach ($result as $rw){
				$string = $rw->name;
			}
			return $string;
		}
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
    		if (count($lstportfolio) != 0){
	    		$i = 1;
	    		foreach ($lstportfolio as $rw){
	    			$list_id[$i] = $rw->portfolio_id;
	    			$i = $i + 1;
	    		}
		    	$this->db->where_in('id', $list_id);    		
		    	$query = $this->db->get('lee_portfolio');
		    	return $query->result();
    		}
    		return null;
    	}
    	function insertCategory(){
			$data=(
				array(
				'name' => $this->input->post('ctg_name'),
				'date' => mdate('%Y-%m-%d %H:%i:%s',time())
				)
    		);    		
    		if($this->db->insert('lee_portfolio_categories',$data))
    		{
    			return true;
    		}
    		else{
    			return false;
    		}
    	}
    	function updateCategory(){
    		$id = $this->uri->segment(4);
			$data=(
				array(
				'name' => $this->input->post('ctg_name'),
				'date' => mdate('%Y-%m-%d %H:%i:%s',time())
				)
    		);
    		$this->db->where('id',$id);
    		if($this->db->update('lee_portfolio_categories',$data))
    		{
    			return true;
    		}
    		else{
    			return false;
    		}
    	}
    	function delCategory(){
    		$id=$this->uri->segment(4);
			$this->db->where('id', $id);
			if($this->db->delete('lee_portfolio_categories')){
				return true;
			}
			else{
				return false;
			}
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
    				$url = $this->fixVideoIframeLink("url");
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
    	function deletePortfolio()
    	{
    		$id = $this->uri->segment(4);
    		$this->db->where('id', $id);
    		$this->db->delete('lee_portfolio');
    		$this->delPortfolioRelatebyID($id);
    	}
    	function delPortfolioRelatebyID($id)
    	{
			$this->db->where('portfolio_id', $id);
			$this->db->delete('lee_portfolio_relate_ctg_port'); 
    	}
    	function insertPortfolio(){
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
    				$url = $this->fixVideoIframeLink("url");
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
			
			if($this->db->insert('lee_portfolio',$data))
			{
				$temp = $this->getNewID();
				foreach ($temp as $rw):
					$id = $rw->id;
				endforeach;
				$temp = $this->input->post('category');
				$this->delPortfolioRelatebyID($id);
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
				if ($this->db->insert_batch('lee_portfolio_relate_ctg_port', $data)){ 
					return true;
				}
				else{
					return false;
				}
			}
    		else {
				return false;
			}
    	}
    	function getNewID(){
    		$this->db->select_max('id');
    		$query = $this->db->get('lee_portfolio');
    		return $query->result(); 
    	}
    	function getNewCtg(){
    		$this->db->select_max('id');
    		$query = $this->db->get('lee_portfolio_categories');
    		return $query->result();
    	}
    	//Config image link
    	function fixImageLink ($ele)
    	{
    		//$temp = str_replace("../../../../", base_url(), $temp);
			$image = $this->input->post($ele,TRUE);
			$tmp = strstr(strstr($image, "src=\"../../../"),"../../../");
			$pos = strpos($tmp, "\"");
			$link = substr($tmp, 0, $pos);
			$link = str_replace("../../../", "", $link);
			return $link;
    	}
	   	function fixImageLink_ToView ($image)
    	{
			$tmp = strstr(strstr($image, "src=\"../../../"),"../../../");
			$pos = strpos($tmp, "\"");
			$link = substr($tmp, 0, $pos);
			$link = str_replace("../../../", "", $link);
			return $link;
    	}
    	//config Video Iframe link
	   	function fixVideoIframeLink ($ele)
    	{
    		//$temp = str_replace("../../../../", base_url(), $temp);
			$video = $this->input->post($ele,TRUE);
			echo $video;
			$tmp = strstr($video, "src=\"");
			$tmp = strstr($tmp,"\"");
			$tmp = strstr($tmp,"http:");
			$pos = strpos($tmp, "\"");
			$link = substr($tmp, 0, $pos);
			return $link;
    	}
    	
    	
	}