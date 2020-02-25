<?php $this->lang->load('content', $this->session->userdata('weblang'));?>
<header class="pb hp1">
			<div class="top-header">
				<div class="container-fluid">
					<ul class="cont-list">
						<li><img src="<?php echo base_url('HTML/images/cc2.png')?>" alt="">+66 (074) 557 321 , (099) xxx xxxx</li>
					</ul>
					<div class="lang-slct">
						<div class="custom-select hvrr">
                                                    <select >
							    <option >EN</option>
                                                            <option <?php if($this->session->userdata('weblang') == 'en'){echo 'selected';}?>>EN</option>
							    <option <?php if($this->session->userdata('weblang') == 'th'){echo 'selected';}?>>TH</option>
                                                            <option <?php if($this->session->userdata('weblang') == 'ch'){echo 'selected';}?>>CH</option>
							</select>
						</div>
                                           	</div><!--lang-select end-->
                                                 
					<ul class="social-links">
						<li><a href="https://www.facebook.com/pg/MyOliverGroup/" target="_blank" title=""><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div><!--top-header end-->
			<div class="bottom-header">
				<div class="container-fluid">
					<div class="ft-logo">
						<a href="#" title="">
							<!--<img src="images/ft-logo.png" alt="">-->
							<div class="ft-text">
								<h2>Oliver Hotel</h2>
								<h3>Dannok Thailand</h3>
							</div>
						</a>
					</div><!--ft-logo end-->
					<ul class="src-book">						
						<li>
							<a href="https://www.agoda.com/th-th/oliver-hotel-danok/hotel/hat-yai-th.html?" title="" target="_blank"><img src="<?php echo base_url('HTML/images/icon4.png')?>" alt=""></a>
							<a href="https://www.agoda.com/th-th/oliver-hotel-danok/hotel/hat-yai-th.html?" title="" class="bk-now" target="_blank"><?php echo $this->lang->line('Check');?></a>
						</li>
					</ul><!--src-book end-->
					<nav>
						<ul>
							<li class="active"><a href="<?php echo base_url('Welcome/index_hotel')?>" title=""><?php echo $this->lang->line('home');?></a></li>
							<li><a href="<?php echo base_url('Welcome/room_list')?>" title=""><?php echo $this->lang->line('Rooms');?></a>
								<ul>
									<li><a href="<?php echo base_url('Welcome/standard_king')?>" title=""><?php echo $this->lang->line('STANDARD');?></a></li>
									<li><a href="<?php echo base_url('Welcome/standard_twin')?>" title=""><?php echo $this->lang->line('STANDARDTWIN');?></a></li>
									<li><a href="<?php echo base_url('Welcome/deluxe_room')?>" title=""><?php echo $this->lang->line('DELUXE');?></a></li>
									<li><a href="<?php echo base_url('Welcome/superior_suite')?>" title=""><?php echo $this->lang->line('SUPERIOR');?></a></li>
									<!--<li><a href="#" title="">Room Single</a>
										<ul>
											<li><a href="16_room_single_v1.html" title="">Room Single v1</a></li>
											<li><a href="17_room_single_v2.html" title="">Room Single v2</a></li>
											<li><a href="18_room_single_v3.html" title="">Room Single v3</a></li>
										</ul>
									</li>-->
								</ul>
							</li>
							<li><a href="<?php echo base_url('Welcome/spa')?>" title=""><?php echo $this->lang->line('spa');?></a></li>
                                                        <li><a href="<?php echo base_url('Welcome/resturant')?>" title=""><?php echo $this->lang->line('DINNING');?></a></li>
							<li><a href="<?php echo base_url('Welcome/meeting')?>" title=""><?php echo $this->lang->line('MEETING');?></a></li>
							<li><a href="<?php echo base_url('Welcome/gallery')?>" title=""><?php echo $this->lang->line('Gallery');?></a></li>
							<li><a href="<?php echo base_url('News')?>" title=""><?php echo $this->lang->line('PROMOTION');?></a></li>
							<li><a href="<?php echo base_url('Welcome/contact')?>" title=""><?php echo $this->lang->line('Contact');?></a></li>
						</ul>
					</nav>
					<div class="menu-bar">
						<a href="#" title="">
							<span class="bar1"></span>
							<span class="bar2"></span>
							<span class="bar3"></span>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div><!--bottom-header end-->
		</header><!--HEADER END-->

		<div class="responsive_mobile_menu">
			<div class="resp_head">
				<div class="ft-logo">
					<a href="#" title="">
						<!--<img src="images/ft-logo.png" alt="">-->
						<div class="ft-text">
							<h2>Oliver Hotel</h2>
							<h3>Dannok Thailand</h3>
						</div>
					</a>
				</div><!--ft-logo end-->
				<div class="menu-bar">
					<a href="#" title="">
						<span class="bar1"></span>
						<span class="bar2"></span>
						<span class="bar3"></span>
					</a>
				</div><!--menu-bar end-->
				<div class="clearfix"></div>
			</div>
			<div class="ct_head">
				<h3>+66 (074) 557 321</h3>
				<div class="lang-slct">
					<div class="custom-select">
						 <select >
							    <option >EN</option>
                                                            <option <?php if($this->session->userdata('weblang') == 'en'){echo 'selected';}?>>EN</option>
							    <option <?php if($this->session->userdata('weblang') == 'th'){echo 'selected';}?>>TH</option>
                                                            <option <?php if($this->session->userdata('weblang') == 'ch'){echo 'selected';}?>>CH</option>
							</select>
					</div>
				</div><!--lang-select end-->
			</div><!--ct_head end-->
			<div class="navigations">
				<ul>
							<li class="active"><a href="<?php echo base_url('Welcome/index_hotel')?>" title=""><?php echo $this->lang->line('home');?></a></li>
							<li><a href="<?php echo base_url('Welcome/room_list')?>" title=""><?php echo $this->lang->line('Rooms');?></a>
								<ul>
									<li><a href="<?php echo base_url('Welcome/standard_king')?>" title=""><?php echo $this->lang->line('STANDARD');?></a></li>
									<li><a href="<?php echo base_url('Welcome/standard_twin')?>" title=""><?php echo $this->lang->line('STANDARDTWIN');?></a></li>
									<li><a href="<?php echo base_url('Welcome/duluxe_room')?>" title=""><?php echo $this->lang->line('DELUXE');?></a></li>
									<li><a href="<?php echo base_url('Welcome/superior_suite')?>" title=""><?php echo $this->lang->line('SUPERIOR');?></a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url('Welcome/spa')?>" title=""><?php echo $this->lang->line('spa');?></a></li>
                                                        <li><a href="<?php echo base_url('Welcome/resturant')?>" title=""><?php echo $this->lang->line('DINNING');?></a></li>
							<li><a href="<?php echo base_url('Welcome/meeting')?>" title=""><?php echo $this->lang->line('MEETING');?></a></li>
							<li><a href="<?php echo base_url('Welcome/gallery')?>" title=""><?php echo $this->lang->line('Gallery');?></a></li>
							<li><a href="<?php echo base_url('News')?>" title=""><?php echo $this->lang->line('PROMOTION');?></a></li>
							<li><a href="<?php echo base_url('Welcome/contact')?>" title=""><?php echo $this->lang->line('Contact');?></a></li>
						</ul>
			</div><!--navigations end-->
			<ul class="mbl_contact_info">
				<li>Email : xxxxxxxxxxxxx</li>
				<li>Line ID: xxxxxxxxxxxxx</li>
				<li><a href="https://g.page/grand-oliver-hotel-danok?share" target="_blank">Google Map</a></li>				
			</ul><!--mbl_contact_info end-->
		</div><!--responsive_mobile_menu end-->
