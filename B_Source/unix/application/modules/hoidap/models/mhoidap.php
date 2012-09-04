<?php
	class Mhoidap extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
			$this->load->library('session');
		}
		
		function insert()
		{
			$data=array(
						'ten'=>$this->input->post('hoten'),													
						'sodt'=>$this->input->post('dienthoai'),
						'noidung'=>$this->input->post('noidung'),
						'luotxem'=>0,
						'luottraloi'=>0
						);
			$this->db->set('ngaygui','now()', false);
			$this->db->insert('unix_hoidap',$data);
			$this->session->set_userdata('message','Câu hỏi của bạn đã được đăng.');
		}
		
		function getListContact()
		{
			$ds=$this->db->get('unix_hoidap');
			$list=array();
			foreach ($ds->result() as $item)
			{
				$list[]=$item;
			}
			$ds->free_result();
			return $list;
		}
		
		function delete($id)
		{
			$this->db->delete('unix_hoidap',array('id_hoidap'=>$id));
		}
		
		function getView($id)
		{
			$this->db->where('id_hoidap',$id);
			$ds=$this->db->get('unix_hoidap');
			$list=array();
			foreach ($ds->result() as $item)
			{
				$list=$item;
				break;
			}
			$ds->free_result();
			return $list;
		}
		
		
	function ListQuestion($num,$off)
		{
			$this->db->order_by('id_hoidap','desc');
			$ds=$this->db->get('unix_hoidap',$num,$off);
			$list=array();
			foreach($ds->result() as $news)
			{
				$list[]=$news;
			}
			$ds->free_result();
			return $list;
		}
	function count()
		{
			$ds=$this->db->get('unix_hoidap');
			$amount=$ds->num_rows();
		}
		
		
		
	function getNew($id)
		{
			$this->db->order_by('ngaygui','desc');
			$this->db->where('id_hoidap !=',$id);
			$ds=$this->db->get('unix_hoidap',3,0);
			return $ds->result();
		}
	function getDetail($id)
		{
			$this->db->where('id_hoidap',$id);
			$ds=$this->db->get('unix_hoidap');
			return $ds->row(0);
		}
	function getDetailByID($id)
		{
			$this->db->where('id_hoidap',$id);
			$ds=$this->db->get('unix_hoidap');
			if ($ds->num_rows()>0)
			{
				$item=$ds->row(0);
				$ds->free_result();
				return $item;
			}
			else return false;
		}
		
		function getListHoiDap()
		{
			$query=$this->db->get('unix_hoidap');
			return $query->result();
		}
		
		function update($id)
		{
			$data=array(
						'ten'=>$this->input->post('ten'),
						'sodt'=>$this->input->post('sodt'),
						'noidung'=>$this->input->post('noidung'),
						'traloi'=>$this->input->post('traloi')
						);
			$this->db->set('ngaytraloi','now()',false);
			$this->db->update('unix_hoidap',$data,array('id_hoidap'=>$id));
		}
		
		function getLuot($id)
		{
			$this->db->where('id_hoidap',$id);
			$luotxem=$this->db->get('unix_hoidap');
			return $luotxem->row(0);
		}
		
		function updateLuotXem($id,$luot)
		{
			$this->db->update('unix_hoidap',array('luotxem'=>$luot),array('id_hoidap'=>$id));
		}
	}
?>