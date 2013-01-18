
				<div id="idCategory5" class="contBox gameCat">
					<h2><a data-gtt="Show all games" href="<?php echo base_url();?>games/category/<?php echo $key->id."-".$key->alias?>" title=""><span><?php echo $key->category_name;?></span></a></h2>
					<div class="container">
						<ul style="width: 448px; margin-right:0;">
							<?php foreach ($list_games as $value) {?>
										<?php if($value->category_id  ==  $key->id)
											{?>
							<li class="">
								<div class=" so1_small rating friendsOnline gameId_110">
									<h4><a href="<?php echo base_url();?>games/detail/<?php echo $value->id."-".$value->alias;?>" title=""><span><?php echo $value->name; ?></span></a></h4>
									<div style="background-color: #561c00" class="so1_container">
										<p>Pyramids, pharaohs and the Book of Ra! The mysterious slot machine awaits!</p>
										<dl><dt><span>Playing now</span></dt><dd>500</dd></dl>
										<ul>
											<li>
												<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameSO1_small.png);" class="border"></span>
												<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/logosprite_102x54_6.png);" class="gameLogo pos_10"></span>
												<a class="room" href="#"><span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/gameSO1_OverlaySprite.png);" class="link"></span>
												<span style="display:block;background-image: url(<?php echo base_url();?>assets/flash_game/images/game_StatusSprite_EN-US.png);" class="status"></span>
												<span style="position:absolute; left:0; width: 100%; text-align: center; cursor: pointer;" class="c2a">Play now!</span></a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<?php } ?>
							<?php } ?>
						</ul>
					</div>
					<span class="showAll">
						<a href="<?php echo base_url();?>games/category/<?php echo $key->id."-".$key->alias?>">Display all casino games</a></span>
				</div>
