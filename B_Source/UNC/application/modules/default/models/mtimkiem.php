<?php
class Default_Model_Mtimkiem extends Zend_Db_Table_Abstract
{
	protected $_name="unc_news";
	private $db;
	function __construct()
	{
		parent::__construct();
		$this->db=Zend_Registry::get('db');
	}

        function isGetted($list, $item)
        {
             $count=0;
			foreach ($list as $news)
			{
			 if ($item['news_id']==$news['news_id']) $count++;
			}
			if ($count>0) return true;
			else return false;
        }
	
	function getNewsByKey($key)
	{

		$data=$this->db->query('select * from unc_news where news_status="Công khai" and news_title like "%'.$key.'%"');
	    $list1=$data->fetchAll();
	    	    
	    $data=$this->db->query('select * from unc_news where news_status="Công khai" and news_summary like "%'.$key.'%"');
	    $list2=$data->fetchAll();
		foreach($list2 as $item)
		{
            if ($this->isGetted($list1,$item)===false)
				$list1[]=$item;
		}
		return $list1;
	}
	function getNewsByKeyVideo($key)
	{
		$data=$this->db->query('select * from unc_video where video_title like "%'.$key.'%"');
	    return $data->fetchAll();
	}
}