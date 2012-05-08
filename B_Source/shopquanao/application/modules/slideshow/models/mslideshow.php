<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

// not used so delete it later

class MSlideshow extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    //By An
    function selectImage()
    {
    if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	// all the superglobals to store file information and to verify a valid upload.
	if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/pjpeg"))
		&& ($_FILES["file"]["size"] < 20000000))
	{
		
	// check for any error
	if ($_FILES["file"]["error"] > 0)
	{
		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
	}
	else
	{
	// display the file information
	    /*echo "Upload: " . $_FILES["file"]["name"] . "<br />";
	    echo "Type: " . $_FILES["file"]["type"] . "<br />";
	    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
	    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";        */
	
	// Display the image
	
	$file=$_FILES["file"]["name"];
	echo '<img src="'.base_url().'assets/images/frontpage/'.$file.' " alt="" width="516" height="200" />';
	echo"<br/>";
	
		// check for already existing files
	
		if (file_exists("../../../../assets/images/frontpage/" . $_FILES["file"]["name"]))
		      {
		      echo $_FILES["file"]["name"] . " already exists. ";
		      }
		else
		      {
			  // saving the uploaded file permanently to the "upload" folder
		      move_uploaded_file($_FILES["file"]["tmp_name"],"../../../../assets/images/frontpage/" . $_FILES["file"]["name"]);
		     // echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
		      }
	}//end error
	    	  	    
	}
	else { echo "file is incompatible, Plz try another image ";  }
	
	}//end post	
	
	else { echo "Choose image first"; }
    	
    }//end select
    
    //End An
    
    
    
    
   /* not used, move to kaimonokago

    function insertslideshow(){
        $data = array(
            'name' 			=> db_clean($_POST['name']),
            'shortdesc' 	=> db_clean($_POST['shortdesc']),
            'longdesc' 		=> db_clean($_POST['longdesc'],5000),
            'status' 		=> db_clean($_POST['status'],8),
            'slide_order' => db_clean($_POST['slide_order']),
            'thumbnail'		=> db_clean($_POST['thumbnail']),
            'image'			=> db_clean($_POST['image']),
        );
        $this->db->insert('omc_slideshow', $data);
     }

  

    function updateSlide(){
        $data = array(
            'name' 			=> db_clean($_POST['name']),
            'shortdesc' 	=> db_clean($_POST['shortdesc']),
            'longdesc' 		=> db_clean($_POST['longdesc'],5000),
            'status' 		=> db_clean($_POST['status'],8),
            'slide_order' => db_clean($_POST['slide_order']),
            'thumbnail'		=> db_clean($_POST['thumbnail']),
            'image'			=> db_clean($_POST['image']),
        );
        $this->db->where('id', $_POST['id']);
        $this->db->update('omc_slideshow', $data);
     }
       
     



    function getslideshow($id){
            // getting info of single slideshow.
        $data = array();
        $options = array('id' => id_clean($id));
        $Q = $this->db->get_where('omc_slideshow',$options,1);
        if ($Q->num_rows() > 0){
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }


not used
Moved to kaimonokago

    function getAllslideshow(){
            // getting all the slideshow of the same categroy.
        $data = array();
       //$this->db->order_by('slideshow_id','asc');
        $Q = $this->db->get('omc_slideshow');
        if ($Q->num_rows() > 0){
            foreach ($Q->result_array() as $row){
            $data[] = $row;
           }
        }
        $Q->free_result();
        return $data;
}
 * 
 */

 
}//end class
?>