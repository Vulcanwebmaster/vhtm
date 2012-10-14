<?php
	class Default_Model_Mtintuc
	{
		function getListChuyenmuc($id)
		{
			$query = $this->db->query('select * from unc_category where category_parent_id=0 and is_active=1 and category_id !="'.$id.'"');
			return $query->fetchAll();
		}
	}