<?php
?>
    <div style="width:1000px; margin:auto">
        <div class="wraper">
     	<div id="left">
            <div id="logo">
                <img src="<?php echo base_url();?>images/logotext.png" alt="" id="imglogo" />
            </div>
            <div id="links-bg">
                <div class="toplinks">
                    <a href="<?php echo base_url();?>"><?php echo $this->lang->line('trangchu')?></a></div>
                <div class="sap">
                </div>
                <div class="toplinks">
                    <a href="<?=base_url()?>tintuc"><?php echo $this->lang->line('tintuc')?></a></div>
                <div class="sap">
                </div>
                <div class="toplinks">
                    <a href="<?php echo base_url();?>tintuc/chi-tiet/56/310/"><?php echo $this->lang->line('quangba')?></a></div>
                <div class="sap">
                </div>
                <div class="toplinks">
                    <a href="<?=base_url()?>hoidap"><?php echo $this->lang->line('hoidap')?></a></div>
                <div class="sap">
                </div>
                <div class="toplinks">
                    <a href="<?=base_url()?>dangtin/1"><?php echo $this->lang->line('kigui')?></a></div>
            </div>
        </div>
<!-- Load slide anh -->
<?php
  $this->CI = get_instance();
  $this->CI->db->where('id_dm',1);
  $query = $this->CI->db->get('quangcao');
  $list = $query->result();
?>
        <!-- 
        <div id="right">
            <div class="slider">
                <div>
                    <img style="width: 757px; height: 277px" src="<?php echo base_url();?>images/slide/slide1.png" alt="" />
                </div>
                <div>
                    <img style="width: 757px; height: 277px" src="<?php echo base_url();?>images/slide/slide2.png" alt="" />
                </div>
                <div>
                    <img style="width: 757px; height: 277px" src="<?php echo base_url();?>images/slide/slide3.png" alt="" />
                </div>
                <div>
                    <img style="width: 757px; height: 277px" src="<?php echo base_url();?>images/slide/slide4.png" alt="" />
                </div>
         
                </div>
         </div>
          -->
		<div id="right">
            <div class="slider">
            <?php foreach ($list as $rs):?>
                <div>
                    <img style="width: 757px; height: 277px" src="<?php echo base_url().$rs->hinhanh?>" alt="" />
                </div>
			<?php endforeach;?>
			</div>
         </div>
    </div>
</div>