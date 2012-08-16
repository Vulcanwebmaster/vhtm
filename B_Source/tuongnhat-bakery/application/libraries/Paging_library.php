<?php
  class paging_library{
      function __construct(){
          $this->CI = get_instance();
      }
      function ajax_paging($id_paging,$id_content,$ajax)
      {
		      	$data = '
		      	  <script>
		  $(function() {
		    applyPagination();
		
		    function applyPagination() {
		      $("#'.$id_paging.' a").click(function() {
		        var url = $(this).attr("href");
		    	var form_data = {
		    			'.$ajax.': \'1\'		
		    		};
		        $.ajax({
		          type: "POST",
		          data: form_data,
		          url: url,
		          beforeSend: function() {
		            $("#'.$id_content.'").html("");
		          },
		          success: function(msg) {
		            $("#'.$id_content.'").html(msg);
		            applyPagination();
		          }
		        });
		        return false;
		      });
		    }
		  });
		  </script>';
		  return $data;
      }
  }
?>
