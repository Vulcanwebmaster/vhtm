<div style="background-color: #214263; height:170px">
		<div id="bottom">
			<div class="bottomlink">
                <a href="<?php echo base_url();?>"><?php echo $this->lang->line('trangchu')?></a></div>
            <div class="sap3">
                |</div>
            <div class="bottomlink">
                <a href="<?=base_url()?>tintuc"><?php echo $this->lang->line('tintuc')?></a></div>
            <div class="sap3">
                |</div>
            <div class="bottomlink">
                <a href="<?php echo base_url();?>tintuc/chi-tiet/56/310/"><?php echo $this->lang->line('quangba')?></a></div>
            <div class="sap3">
                |</div>
            <div class="bottomlink">
                <a href="<?=base_url()?>hoidap"><?php echo $this->lang->line('hoidap')?></a></div>
            <div class="sap3">
                |</div>
            <div class="bottomlink">
                <a href="<?=base_url()?>dangtin/1"><?php echo $this->lang->line('kigui')?></a></div>
        </div>
        <?php
        $this->CI = get_instance();
		$this->CI->db->where('id',1);
		$query = $this->CI->db->get('nhomlienhe');
		$list = $query->result();
        ?>
        <?php foreach($list as $rs):?> 
        <center>
            <div class="sap4" align="center">       
            <!--                                 
                        <p style="width:100%; text-align: center; color: #FFFFFF;" align="center">
                            = = = = = = = = = = = = = = = = = = = = = =
                            <br />
                            <font size="2"><strong>Công ty TNHH Minh Châu</strong></font><br />
                            Địa chỉ: Tiểu Thủ Công nghiệp Kim Bình - Hà Nam<br />
                            Điện thoại: 0351.3 537 386<br />
                            Website: <a href="http://thuenhaxuong.net "><font
                                size="2"><i>http://thuenhaxuong.net</i></font></a><br />
                            Email: 
                        </p>
             -->
						<p style="width:100%; text-align: center; color: #FFFFFF;" align="center">
                            = = = = = = = = = = = = = = = = = = = = = =
                            <br />
                            <font size="2"><strong><?php echo $rs->tenlienhe;?></strong></font><br />
                            <?php echo $this->lang->line('diachi')?>: <?php echo $rs->diachi;?><br />
                            <?php echo $this->lang->line('dienthoai')?>: <?php echo $rs->dienthoai;?><br />
                            <?php if ($rs->didong != ""){?>
                            <?php echo $this->lang->line('didong')?>: <?php echo $rs->didong;?><br />
                            <?php }?>
                            Website: <a href="http://thuenhaxuong.net "><font
                                size="2"><i>http://thuenhaxuong.net</i></font></a><br />
                            Email: <?php echo $rs->email;?> 
                        </p>
            </div>
		<?php endforeach;?>
        </center>
    </div>