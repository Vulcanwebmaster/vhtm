<?php 
$newModel=new CI_Model();
$lang=$this->session->userdata('lang');?>

<div id="sidebar">
			<h2 style="font-family: Arial, Helvetica, sans-serif; font-size: 24px; color: #242424; font-weight: normal;"><?php echo $this->lang->line('left-danhmuc');?></h2>																																																																		
			<ul id="list">
				<?php 
					for ($i=0;$i<count($listcate);$i++)
					{
						if ($i%2==0)
						{?>
							<li class="color">
								<a <?php $childs=$newModel->getListByColumn('mc_category','parent_id',$listcate[$i]->id);
										if (count($childs)==0) echo 'href="'.base_url().'sanpham/danhMuc/'.$listcate[$i]->id.'"';
									?>>
									<?php if ($lang=='vn') 
												echo $listcate[$i]->namev; 
										else echo $listcate[$i]->namee;?>
								</a>
								<?php if (count($childs)>0)
								{?>
									<ul class="level2" style="float:left;list-style-type:none; box-shadow:0 2px 5px black; background-color:white">
										<?php 
											foreach ($childs as $item)
											{
												if ($lang=='vn')
													echo '<li><a href="'.base_url().'sanpham/danhMuc/'.$item->id.'">'.$item->namev.'</a></li>';
												else echo '<li><a href="'.base_url().'sanpham/danhMuc/'.$item->id.'">'.$item->namee.'</a></li>';
											}
										?>
									</ul>
								<?php }?>
							</li>
						<?php }
						else {?>
							<li>
								<a <?php $childs=$newModel->getListByColumn('mc_category','parent_id',$listcate[$i]->id);
										if (count($childs)==0) echo 'href="'.base_url().'sanpham/danhMuc/'.$listcate[$i]->id.'"';
									?>>
									<?php if ($lang=='vn') 
												echo $listcate[$i]->namev; 
										else echo $listcate[$i]->namee;?>
								</a>
								<?php if (count($childs)>0)
								{?>
									<ul class="level2" style="float:left;list-style-type:none; box-shadow:0 2px 5px black; background-color:white">
										<?php 
											foreach ($childs as $item)
											{
												if ($lang=='vn')
													echo '<li><a href="'.base_url().'sanpham/danhMuc/'.$item->id.'">'.$item->namev.'</a></li>';
												else echo '<li><a href="'.base_url().'sanpham/danhMuc/'.$item->id.'">'.$item->namee.'</a></li>';
											}
										?>
									</ul>
								<?php }?>
							</li>
						<?php }
					}
				?>
			</ul>
		</div>