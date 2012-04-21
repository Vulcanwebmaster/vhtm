<?php
  $this->CI = get_instance();
/** 
 *  Dem so nguoi Online
 */
 $time = time();
 //Begin kiem tra session_id
 //$now = mdate('%Y-%m-%d %H:%I:%S',time()); 
 $session_id = $this->CI->session->userdata('session_id');
 $username = $this->CI->session->userdata('username');
 $this->CI->db->where('session_id',$session_id);
 $query = $this->CI->db->get('online');
 $check_session = $query->row();
 $date = mdate('%Y-%m-%d',time()); 

 if(!$check_session){
     // Session_id = null them vao db
     $data = array(
          'session_id' => $session_id,
          'activity' => $time,
          'ip_address' => $_SERVER['REMOTE_ADDR'],
          'user_agent' => $_SERVER['HTTP_USER_AGENT'],
          'date' => $date
     );
     $this->db->insert('online',$data);
 }else{
     
     //Session_id <> null cập nhật
     if($username!=''){
         $data = array(
            'activity' => $time,
            'member' => 'y',
            'username' => $username
         );
         
     }else{
         $data = array(
            'activity' => $time
         );
     }
     $this->CI->db->where('session_id',$session_id);
     $this->CI->db->update('online',$data);
 }

$limit_time = time() - 300; // 5 Minute time out. 60 * 5 = 300
$sql = $this->CI->db->Query("SELECT * FROM vnit_online WHERE activity > $limit_time  GROUP BY ip_address");
$sql_member = $this->CI->db->Query("SELECT * FROM vnit_online WHERE activity > $limit_time AND member='y' GROUP BY ip_address") or die (mysql_error());
$total_online = $this->CI->db->Query("SELECT * FROM vnit_online") or die (mysql_error());
$now_online =  $this->CI->db->Query("SELECT * FROM vnit_online WHERE activity > $limit_time  GROUP BY ip_address") or die (mysql_error());
$member_online = $this->CI->db->Query("SELECT * From vnit_online Where member = 'y' And date = $date");
$day_online = $this->CI->db->Query("SELECT * From vnit_online Where date = $date");
$visits = count($sql->result());
$totalvisit = $visits;
$members = count($sql_member->result());
$path = base_url().'/skins/counter/';
$array_number = array('0','1','2','3','4','5','6','7','8','9');
$array_img = array('<img src="'.$path.'0.gif">','<img src="'.$path.'1.gif">','<img src="'.$path.'2.gif">','<img src="'.$path.'3.gif">','<img src="'.$path.'4.gif">','<img src="'.$path.'5.gif">','<img src="'.$path.'6.gif">','<img src="'.$path.'7.gif">','<img src="'.$path.'8.gif">','<img src="'.$path.'9.gif">');
$tongtruycap = $total_online->num_rows();
$tongtruycap = str_replace($array_number,$array_img,$tongtruycap);
$totalvisit = str_replace($array_number,$array_img,$totalvisit);
echo '
        <div style="line-height:30px;text-align:center"><img src="'.$path.'0.gif"><img src="'.$path.'0.gif"><img src="'.$path.'0.gif"><img src="'.$path.'0.gif"><img src="'.$path.'0.gif">'.$tongtruycap.'</div> ';
?>


