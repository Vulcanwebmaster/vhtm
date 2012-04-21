<?php
  class cauhinh_model extends Model{
      function cauhinh_model(){
          parent::Model();
      }
      function get_cauhinh(){            
        $query = $this->db->get('cauhinh');           
        if ($query->num_rows() > 0)
        {
            $result = $query->result_array();
            foreach ($result as $row)
            {
                $result[$row['key']] = $row['key_value'];
            }            
            return $result;
        }          
      }
      
      function save_setting(){
        $this->db->set('key_value', $this->input->post('site_name'));
        $this->db->where('key', 'site_name');
        $this->db->update('cauhinh');


        $this->db->set('key_value', $this->input->post('site_close'));
        $this->db->where('key', 'site_close');
        $this->db->update('cauhinh');

        $this->db->set('key_value', $this->input->post('site_close_message'));
        $this->db->where('key', 'site_close_message');
        $this->db->update('cauhinh');

        $this->db->set('key_value', $this->input->post('site_email'));
        $this->db->where('key', 'site_email');
        $this->db->update('cauhinh');

                 
        $this->db->set('key_value', $this->input->post('site_copyright'));
        $this->db->where('key', 'site_copyright');
        $this->db->update('cauhinh');         
        
        $this->db->set('key_value', $this->input->post('site_keywords'));
        $this->db->where('key', 'site_keywords');
        $this->db->update('cauhinh');         
        
        $this->db->set('key_value', $this->input->post('site_description'));
        $this->db->where('key', 'site_description');
        $this->db->update('cauhinh');         
        $this->db->set('key_value', $this->input->post('usd'));
        $this->db->where('key', 'usd');
        $this->db->update('cauhinh');        
        $this->db->set('key_value', $this->input->post('sjc'));
        $this->db->where('key', 'sjc');
        $this->db->update('cauhinh');              
      }            
  }
?>
