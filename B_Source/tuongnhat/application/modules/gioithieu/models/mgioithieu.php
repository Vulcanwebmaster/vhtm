<?php
class Mgioithieu extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('date');
	}
	
	function saveSlogan()
	{
		$data=(
			array(
					'title'=>$this->input->post('gt_slogan'),
					'titleE'=>$this->input->post('gt_sloganEng'),
					'content'=>$this->input->post('gt_sloganDetail'),
					'contentE'=>$this->input->post('gt_sloganDetailEng')
			)
			);
		$this->db->where('id', 'slogan');
		if($this->db->update('gioithieu',$data))
		{
			$data=(
				array(
						'title'=>$this->input->post('gt_hylink'),
						'titleE'=>$this->input->post('gt_hylinkE'),
						'content'=>$this->input->post('gt_hylinkCont'),
						'contentE'=>$this->input->post('gt_hylinkContE')
				)
				);
			$this->db->where('id', 'hyperlink1');
			if($this->db->update('gioithieu',$data))
			{
				return true;
			}
			else 
			{
				return false;
			}
		}
		else 
		{
			return false;
		}
	}
	
	function saveColumn1()
	{
		//save column1 content
		$data=(
			array(
					'title'=>$this->input->post('gt_title'),
					'titleE'=>$this->input->post('gt_titleEng'),
					'content'=>$this->input->post('gt_content'),
					'contentE'=>$this->input->post('gt_contentEng')
			)
			);
		$this->db->where('id', 'column1');
		$this->db->update('gioithieu',$data);
		
		//save hyperlink list content
		$hyperLinkCnt = intval($this->input->post('hpLinkCnt'));
		for ($i = 0; $i < $hyperLinkCnt; $i++)
		{
			$data=(
			array(
					'title'=>$this->input->post('gt_hpTitle'.$i),
					'titleE'=>$this->input->post('gt_hpTitleE'.$i),
					'content'=>$this->input->post('gt_hpLink'.$i),
					'contentE'=>$this->input->post('gt_hpLinkE'.$i)
			)
			);
			$this->db->where('id', 'column1-'.$i);
			$this->db->update('gioithieu',$data);
		}
		return true;		
	}

	function saveColumn2()
	{
		$data=(
			array(
					'title'=>$this->input->post('gt_title'),
					'titleE'=>$this->input->post('gt_titleEng'),
					'content'=>$this->input->post('gt_content'),
					'contentE'=>$this->input->post('gt_contentEng')
			)
			);
		$this->db->where('id', 'column2');
		if($this->db->update('gioithieu',$data))
		{
			return true;
		}		
		else
		{
			return false;
		}
	}
		
	function saveColumn3()
	{
		//save column3 content
		$data=(
			array(
					'title'=>$this->input->post('gt_title'),
					'titleE'=>$this->input->post('gt_titleEng')
			)
			);
		$this->db->where('id', 'column3');
		$this->db->update('gioithieu',$data);
		
		//save hyperlink list content
		$cmtCnt = intval($this->input->post('cmtCnt'));
		for ($i = 0; $i < $cmtCnt; $i++)
		{
			$data=(
			array(
					'content'=>$this->input->post('gt_cmtContent'.$i),
					'contentE'=>$this->input->post('gt_cmtContentEng'.$i),
					'attribute1'=>$this->input->post('gt_hpAtt1'.$i),
					'attribute1E'=>$this->input->post('gt_hpAtt1Eng'.$i),
					'attribute2'=>$this->input->post('gt_hpAtt2'.$i),
					'attribute2E'=>$this->input->post('gt_hpAtt2Eng'.$i),
			)
			);
			$this->db->where('id', 'column3-'.$i);
			$this->db->update('gioithieu',$data);
		}
		return true;		
	}
	
	function getFormData(){
		// get data to show on the form
		$query = $this->db->get("gioithieu");
		$result = $query->result();
		return $result;
	}
}
?>