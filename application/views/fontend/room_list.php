<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MY OLIVER GROUP | OLIVER HOTEL DANNOK | OLIVER MASSAND AND SPA</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/animate.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/bootstrap.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/revolution/css/settings.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/revolution/css/navigation.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/line-awesome.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/font-awesome.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/lib/slick/slick.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/js/lib/slick/slick-theme.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/flatpickr.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/style.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/responsive.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/color.css')?>">

</head>


<body>

	<div class="layout">

	<?php include("header.php"); ?>
		
		<section class="pager-sec" style="background-image: url(<?php echo base_url('HTML/images/banner_room.jpg')?>)">
			<div class="container">
				<div class="pager-sec-details">
					<h3><?php echo $this->lang->line('OURROOMS');?></h3>
					<ul>
						<li><a href="#" title=""><?php echo $this->lang->line('home');?></a></li>
						<li><span><?php echo $this->lang->line('Roomlist');?></span></li>
					</ul>
				</div><!--pager-sec-details end-->
			</div>
		</section><!--pager-sec end-->

		<section class="main-content">
			<div class="container">
				<div class="page-content">
					<div class="main-dv">
						
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="tb-detaiils v13">
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="room_details">
												<div class="room-caroz">
													<div class="room_img">
														<img src="<?php echo base_url('HTML/images/room/1.jpg')?>" alt="">
														<span class="price-tag"><?php echo $this->lang->line('StandardKing');?></span>
													</div><!--room_img end-->
													<div class="room_img">
														<img src="<?php echo base_url('HTML/images/room/2.jpg')?>" alt="">
														<span class="price-tag"><?php echo $this->lang->line('StandardKing');?></span>
													</div><!--room_img end-->
													<div class="room_img">
														<img src="<?php echo base_url('HTML/images/room/3.jpg')?>" alt="">
														<span class="price-tag"><?php echo $this->lang->line('StandardKing');?></span>
													</div><!--room_img end-->
												</div><!--room-caroz end-->
												<div class="room_info">
													<h3><a href="#" title=""><?php echo $this->lang->line('StandardKing');?></a></h3>
													<ul class="ppt-list">
														<li>
															<img src="<?php echo base_url('HTML/images/icy1.png')?>" alt="">
															<?php echo $this->lang->line('2GUESTS');?>
														</li>
														<li>
															<img src="<?php echo base_url('HTML/images/icy3.png')?>" alt="">
															<?php echo $this->lang->line('1King');?>
														</li>
														<li>
															<img src="<?php echo base_url('HTML/images/icy2.png')?>" alt="">
															<?php echo $this->lang->line('Room30');?>
														</li>
													</ul><!--ppt-list end-->
													<p><?php echo $this->lang->line('Hotelisadistinct');?></p>
													<ul class="fct-list">
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Wifi"><img src="<?php echo base_url('HTML/images/ci1.png')?>" alt=""></span>
														</li>
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Plane"><img src="<?php echo base_url('HTML/images/ci2.png')?>" alt=""></span>
														</li>
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Car"><img src="<?php echo base_url('HTML/images/ci3.png')?>" alt=""></span>
														</li>
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Breakfast"><img src="<?php echo base_url('HTML/images/ci4.png')?>" alt=""></span>
														</li>
													</ul><!--fct-list end-->
													<a href="<?php echo base_url('Welcome/standard_king')?>" title="" class="lnk-default"><?php echo $this->lang->line('MoreDetail');?><i class="la la-arrow-right"></i></a>
												</div><!--room_info end-->
											</div><!--room-details end-->
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="room_details">
												<div class="room-caroz">
													<div class="room_img">
														<img src="<?php echo base_url('HTML/images/room/2.jpg')?>" alt="">
														<span class="price-tag"><?php echo $this->lang->line('STANDARDTWIN');?></span>
													</div><!--room_img end-->
													<div class="room_img">
														<img src="<?php echo base_url('HTML/images/room/1.jpg')?>" alt="">
														<span class="price-tag"><?php echo $this->lang->line('STANDARDTWIN');?></span>
													</div><!--room_img end-->
													<div class="room_img">
														<img src="<?php echo base_url('HTML/images/room/3.jpg')?>" alt="">
														<span class="price-tag"><?php echo $this->lang->line('STANDARDTWIN');?></span>
													</div><!--room_img end-->
												</div><!--room-caroz end-->
												<div class="room_info">
													<h3><a href="#" title=""><?php echo $this->lang->line('STANDARDTWIN');?></a></h3>
													<ul class="ppt-list">
														<li>
															<img src="<?php echo base_url('HTML/images/icy1.png')?>" alt="">
															<?php echo $this->lang->line('2GUESTS');?>
														</li>
														<li>
															<img src="<?php echo base_url('HTML/images/icy3.png')?>" alt="">
															<?php echo $this->lang->line('2SingleBed');?>
														</li>
														<li>
															<img src="<?php echo base_url('HTML/images/icy2.png')?>" alt="">
															<?php echo $this->lang->line('Room30');?>
														</li>
													</ul><!--ppt-list end-->
													<p><?php echo $this->lang->line('Hotelisadistinct');?></p>
													<ul class="fct-list">
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Wifi"><img src="<?php echo base_url('HTML/images/ci1.png')?>" alt=""></span>
														</li>
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Plane"><img src="<?php echo base_url('HTML/images/ci2.png')?>" alt=""></span>
														</li>
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Car"><img src="<?php echo base_url('HTML/images/ci3.png')?>" alt=""></span>
														</li>
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Breakfast"><img src="<?php echo base_url('HTML/images/ci4.png')?>" alt=""></span>
														</li>
													</ul><!--fct-list end-->
													<a href="<?php echo base_url('Welcome/standard_twin')?>" title="" class="lnk-default"><?php echo $this->lang->line('MoreDetail');?><i class="la la-arrow-right"></i></a>
												</div><!--room_info end-->
											</div><!--room-details end-->
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="room_details">
												<div class="room-caroz">
													<div class="room_img">
														<img src="<?php echo base_url('HTML/images/room/3.jpg')?>" alt="">
														<span class="price-tag"><?php echo $this->lang->line('DELUXE');?></span>
													</div><!--room_img end-->
													<div class="room_img">
														<img src="<?php echo base_url('HTML/images/room/2.jpg')?>" alt="">
														<span class="price-tag"><?php echo $this->lang->line('DELUXE');?></span>
													</div><!--room_img end-->
													<div class="room_img">
														<img src="<?php echo base_url('HTML/images/room/1.jpg')?>" alt="">
														<span class="price-tag"><?php echo $this->lang->line('DELUXE');?></span>
													</div><!--room_img end-->
												</div><!--room-caroz end-->
												<div class="room_info">
													<h3><a href="#" title=""><?php echo $this->lang->line('DELUXE');?></a></h3>
													<ul class="ppt-list">
														<li>
															<img src="<?php echo base_url('HTML/images/icy1.png')?>" alt="">
															<?php echo $this->lang->line('2GUESTS');?>
														</li>
														<li>
															<img src="<?php echo base_url('HTML/images/icy3.png')?>" alt="">
															<?php echo $this->lang->line('1King');?>
														</li>
														<li>
															<img src="<?php echo base_url('HTML/images/icy2.png')?>" alt="">
															<?php echo $this->lang->line('Room30');?>
														</li>
													</ul><!--ppt-list end-->
													<p><?php echo $this->lang->line('Hotelisadistinct');?></p>
													<ul class="fct-list">
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Wifi"><img src="<?php echo base_url('HTML/images/ci1.png')?>" alt=""></span>
														</li>
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Plane"><img src="<?php echo base_url('HTML/images/ci2.png')?>" alt=""></span>
														</li>
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Car"><img src="<?php echo base_url('HTML/images/ci3.png')?>" alt=""></span>
														</li>
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Breakfast"><img src="<?php echo base_url('HTML/images/ci4.png')?>" alt=""></span>
														</li>
													</ul><!--fct-list end-->
													<a href="<?php echo base_url('Welcome/deluxe_room')?>" title="" class="lnk-default"><?php echo $this->lang->line('MoreDetail');?><i class="la la-arrow-right"></i></a>
												</div><!--room_info end-->
											</div><!--room-details end-->
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="room_details">
												<div class="room-caroz">
													<div class="room_img">
														<img src="<?php echo base_url('HTML/images/room/1.jpg')?>" alt="">
														<span class="price-tag"><?php echo $this->lang->line('SUPERIOR');?></span>
													</div><!--room_img end-->
													<div class="room_img">
														<img src="<?php echo base_url('HTML/images/room/2.jpg')?>" alt="">
														<span class="price-tag"><?php echo $this->lang->line('SUPERIOR');?></span>
													</div><!--room_img end-->
													<div class="room_img">
														<img src="<?php echo base_url('HTML/images/room/3.jpg')?>" alt="">
														<span class="price-tag"><?php echo $this->lang->line('SUPERIOR');?></span>
													</div><!--room_img end-->
												</div><!--room-caroz end-->
												<div class="room_info">
													<h3><a href="#" title=""><?php echo $this->lang->line('SUPERIOR');?></a></h3>
													<ul class="ppt-list">
														<li>
															<img src="<?php echo base_url('HTML/images/icy1.png')?>" alt="">
															<?php echo $this->lang->line('2GUESTS');?>
														</li>
														<li>
															<img src="<?php echo base_url('HTML/images/icy3.png')?>" alt="">
															<?php echo $this->lang->line('1King');?>
														</li>
														<li>
															<img src="<?php echo base_url('HTML/images/icy2.png')?>" alt="">
															<?php echo $this->lang->line('Room60');?>
														</li>
													</ul><!--ppt-list end-->
													<p><?php echo $this->lang->line('Hotelisadistinct');?></p>
													<ul class="fct-list">
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Wifi"><img src="<?php echo base_url('HTML/images/ci1.png')?>" alt=""></span>
														</li>
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Plane"><img src="<?php echo base_url('HTML/images/ci2.png')?>" alt=""></span>
														</li>
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Car"><img src="<?php echo base_url('HTML/images/ci3.png')?>" alt=""></span>
														</li>
														<li>
															<span data-toggle="tooltip" data-placement="top" title="Breakfast"><img src="<?php echo base_url('HTML/images/ci4.png')?>" alt=""></span>
														</li>
													</ul><!--fct-list end-->
													<a href="<?php echo base_url('Welcome/superior_suite')?>" title="" class="lnk-default"><?php echo $this->lang->line('MoreDetail');?><i class="la la-arrow-right"></i></a>
												</div><!--room_info end-->
											</div><!--room-details end-->
										</div>
									</div>
								</div><!--tb-detaiils end-->
							</div>
						</div>
					</div><!--main-dv end-->
				</div><!--page-content end-->
			</div>
		</section><!--main-content end-->

		<?php include("footer.php"); ?>
		<!--FOOTER END-->
		
	</div>

	<a href="#" title="" class="scrollTop"><i class="la la-arrow-up"></i></a>

	<div class="max-cont"></div>


<script src="<?php echo base_url('HTML/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('HTML/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('HTML/js/popper.js')?>"></script>
<script src="<?php echo base_url('HTML/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('HTML/js/custom-select.js')?>"></script>
<script src="<?php echo base_url('HTML/js/html5lightbox.js')?>"></script>
<script src="<?php echo base_url('HTML/js/handleCounter.js')?>"></script>
<script src="<?php echo base_url('HTML/js/flatpickr.js')?>"></script>
<script src="<?php echo base_url('HTML/js/lib/slick/slick.js')?>"></script>
<script src="<?php echo base_url('HTML/js/script.js')?>"></script>
<script type="text/javascript">
//   $(function(){
//      // bind change event to select
//      $('.select-slected').on('change', function () {
////          var url = $(this).val(); // get selected value
////          if (url) { // require a URL
////              window.location = url; // redirect
////          }
////          return false;
//console.log('ssssss');
//      });
//    });
   $(function(){
      // bind change event to select
      $('.select-items').on('click', function () {
           if ($('.select-items > div').hasClass('same-as-selected')){
           var lang = $('div.same-as-selected').text();
           if(lang == 'EN'){
                window.location.href = '<?php echo base_url('switchLang/index/en')?>'; // redirect
           }else if(lang == 'TH'){
                window.location.href = '<?php echo base_url('switchLang/index/th')?>'; 
           }else{
               window.location.href = '<?php echo base_url('switchLang/index/ch')?>';
           }
        }
//          var url = $(this).val(); // get selected value
//          if (url) { // require a URL
//              window.location = url; // redirect
//          }
//          return false;

      });
    });
</script>


</body>

</html>