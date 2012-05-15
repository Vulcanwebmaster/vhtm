<div style="background-color: #214263; height:170px">
		<div id="bottom">
			<div class="bottomlink">
                <a href="<?php echo base_url();?>">TRANG CHỦ</a></div>
            <div class="sap3">
                |</div>
            <div class="bottomlink">
                <a href="<?=base_url()?>tintuc">TIN TỨC</a></div>
            <div class="sap3">
                |</div>
            <div class="bottomlink">
                <a href="<?php echo base_url();?>tintuc/chi-tiet/56/310/">QUẢNG BÁ</a></div>
            <div class="sap3">
                |</div>
            <div class="bottomlink">
                <a href="<?=base_url()?>hoidap">HỎI ĐÁP</a></div>
            <div class="sap3">
                |</div>
            <div class="bottomlink">
                <a href="<?=base_url()?>dangtin/1">KÝ GỬI</a></div>
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
                            Địa chỉ: <?php echo $rs->diachi;?><br />
                            Điện thoại: <?php echo $rs->dienthoai;?><br />
                            <?php if ($rs->didong != ""){?>
                            Di động: <?php echo $rs->didong;?><br />
                            <?php }?>
                            Website: <a href="http://thuenhaxuong.net "><font
                                size="2"><i>http://thuenhaxuong.net</i></font></a><br />
                            Email: <?php echo $rs->email;?> 
                        </p>
            </div>
		<?php endforeach;?>
        </center>
    </div>