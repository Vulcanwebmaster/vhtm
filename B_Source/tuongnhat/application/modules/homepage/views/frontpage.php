	<?php $this->load->view('front/slide.php');?>
</header>
	<?php $lang=$this->session->userdata('lang');?>
<div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. May 14, 2012!</div>
			<?php $this->load->view('front/slogan');?>
			<div class="wrap page1-row1">
				<div class="box-1 border-right">
					<strong class="number number-1">01.</strong>
					<span class="text-1">
						<?php if ($lang=='vn') echo $column1->tenv;
							else echo $column1->tene;
						?></span>
					<div class="column-content">
						<?php if ($lang=='vn') echo $column1->noidungv;
							else echo $column1->noidunge;
						?>
					</div>
					<a href="<?php echo base_url();?>duhoc" class="link-1"><?php echo $this->lang->line('trangchu-xemthem');?></a>
				</div>
				<div class="box-1 border-right">
					<strong class="number number-2">02.</strong>
					<span class="text-1"><?php if ($lang=='vn') echo $column2->tenv;
							else echo $column2->tene;
						?></span>
					<div class="column-content">
						<?php if ($lang=='vn') echo $column2->noidungv;
							else echo $column2->noidunge;
						?>
					</div>
					<a href="<?php echo base_url();?>bakery" class="link-1"><?php echo $this->lang->line('trangchu-xemthem');?></a>
				</div>
				<div class="box-1 border-right">
					<strong class="number number-3">03.</strong>
					<span class="text-1"><?php if ($lang=='vn') echo $column3->tenv;
							else echo $column3->tene;
						?></span>
					<div class="column-content">
						<?php if ($lang=='vn') echo $column3->noidungv;
							else echo $column3->noidunge;
						?>
					</div>
					<a href="#" class="link-1"><?php echo $this->lang->line('trangchu-xemthem');?></a>
				</div>
				<div class="box-1 last">
					<strong class="number number-4">04.</strong>
					<span class="text-1"><?php if ($lang=='vn') echo $column4->tenv;
							else echo $column4->tene;
						?></span>
					<div class="column-content">
						<?php if ($lang=='vn') echo $column4->noidungv;
							else echo $column4->noidunge;
						?>
					</div>
					<a href="#" class="link-1"><?php echo $this->lang->line('trangchu-xemthem');?></a>
				</div>
			</div>
			<?php $this->load->view('front/bottom-content');?>
		</div>