<header id="header">
	<hgroup>
		<h1 class="site_title"><a href="<?php echo base_url()?>admin">Admin Site Web</a></h1>
		<h2 class="section_title">Tableau de bord</h2><div class="btn_view_site"><a href="<?php echo base_url()?>">Voir le site</a></div>
	</hgroup>
</header> <!-- end of header bar -->
<section id="secondary_bar">
	<?php $this->load->view('admin/user')?>
	<?php $this->load->view('admin/breadcrumb')?>
</section><!-- end of secondary bar -->