<?php
/**
 * 
 * This class is controller in front. 
 * There are some functions to list images, videos and get detail of them...
 * @author Tuyetnt
 * @date 2012/12/15
 *
 */
class Rss extends NIW_Controller
{
		function __construct()
		{
		@session_start();
		parent::__construct();
		$this->module=basename(dirname(dirname(__FILE__)));
		$this->module = strtolower(get_class());
		$this->load->library('pagination');
		$this->load->model('Mrss');
		$this->load->library('session');
		$this->load->helper('text');
		}
		function index()
		{
			$this->page();
		}
	
		function page($index=0)
		{
			$data['list_news'] = $this->Mrss->getListFull('fg_news');
			//var_dump($data['list_news']); die();
			$last_built = date("D, d M Y H:i:s T");  
			$copy_year = "COPYRIGHT".date("Y");  
			header("Content-Type: text/xml charset='UTF-8'"); 
			echo "<?xml version=\"1.0\"?>\n\n";  
			echo "<rss version=\"2.0\">\n\n";  //mo RSS  
			echo "  <channel>\n";  
			echo "    <title>WebFlashGame</title>\n";  
			echo "    <link>linktrangchutrangweb.com</link>\n";  
			echo "    <description>Web Flash Game</description>\n";  
			echo "    <copyright>$copy_year WebFlashGame</copyright>\n";  
			echo "    <generator>WebFlashGame</generator>\n";  
			echo "    <language>Francais</language>\n";  
			echo "    <lastBuildDate>$last_built</lastBuildDate>\n";  
			echo "    <managingEditor>adminmail@yourdoamain .com</managingEditor>\n";  
			echo "    <webMaster>adminmail@yourdoamain .com</webMaster>\n";  
			echo "    <ttl>60</ttl>\n\n";  
			echo "    <image>\n";  
			echo "      <title>Web Flash Game</title>\n";  
			echo "      <url></url>\n"; //dia chi logo  
			echo "      <link>yourdoamain .com</link>\n";  
			echo "      <width>100</width>\n";  
			echo "      <height>48</height>\n";  
			echo "      <description>tentrangweb</description>\n";  
			echo "    </image>\n\n";  
			//////sau day la doan  code goi mysql cua ban de lay link thuc su cua cac bai viet tren web ban . ban tao no nhu binh thuong .. nhung gan cac dia chi do' vao vai bien' so' de no' thay doi thuong xuyen vi du bien $tieude $mieuta va biet $link  
			//////////  
			foreach ( $data['list_news'] as $value) {
			         	 echo "<item>\n";  
				         echo "<title>$value->name</title>\n";  
				         echo "<link><?php echo base_url();?>news</link>\n";  
						 
				         //echo "<description>".word_limiter(strip_tags($value->news_content), 8)."</description>\n"; 
				         echo "<description>".$value->image."".word_limiter(strip_tags($value->content),30)."</description>\n";
				         echo "<guid></guid>\n";  
			         	echo "</item>\n"; 
						}
			//dong lai RSS  
			echo "    </channel>\n\n";  
			echo "</rss>";
		}
		}