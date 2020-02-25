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
		
		<section class="pager-sec" style="background-image: url(<?php echo base_url('HTML/images/banner_top6.jpg')?>)">
			<div class="container">
				<div class="pager-sec-details">
					<h3><?php echo $this->lang->line('Gallery');?></h3>
					<ul>
						<li><a href="#" title=""><?php echo $this->lang->line('home');?></a></li>
						<li><span><?php echo $this->lang->line('Gallery');?></span></li>
					</ul>
				</div><!--pager-sec-details end-->
			</div>
		</section><!--pager-sec end-->
		
		
		<section class="c-block pb-0">
			<div class="container">
				<!--<div class="sec-title">
					<h3>Photo Gallery</h3>
				</div>   sec-title end-->
				<div class="gallery-grid">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
					    	<a class="nav-link active" id="tab_HOTEL" data-toggle="tab" href="#tabHOTEL" role="tab" aria-controls="tab_HOTEL" aria-selected="true"><?php echo $this->lang->line('HOTEL');?></a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="nav-link" id="tab_ROOMS" data-toggle="tab" href="#tabROOMS" role="tab" aria-controls="tab_ROOMS" aria-selected="false"><?php echo $this->lang->line('ROOMSSUITES');?></a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="nav-link" id="tab_SPA" data-toggle="tab" href="#tabSPA" role="tab" aria-controls="tab_SPA" aria-selected="false"><?php echo $this->lang->line('spa');?></a>
					  	</li>
						<li class="nav-item">
					    	<a class="nav-link" id="tab_DINING" data-toggle="tab" href="#tabDINING" role="tab" aria-controls="tab_DINING" aria-selected="false"><?php echo $this->lang->line('DINNING');?></a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="nav-link" id="tab_MEETING" data-toggle="tab" href="#tabMEETING" role="tab" aria-controls="tab_MEETING" aria-selected="false"><?php echo $this->lang->line('MEETINGEVENTS');?></a>
					  	</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="tabHOTEL" role="tabpanel" aria-labelledby="tab_HOTEL">
							<div class="gallery-grid">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/about1.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/about2.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/about3.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/about4.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/room/1.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/room/2.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									
								</div>
							</div><!--gallery-grid end-->
						</div>
					  	<div class="tab-pane fade" id="tabROOMS" role="tabpanel" aria-labelledby="tab_ROOMS">
					  		<div class="gallery-grid">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/room/1.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/room/2.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/room/3.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/room/4.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/room/1.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/room/2.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>									
								</div>
							</div><!--gallery-grid end-->
					  	</div>
					  	<div class="tab-pane fade" id="tabSPA" role="tabpanel" aria-labelledby="tab_SPA">
					  		<div class="gallery-grid">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/spa-1.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/spa-2.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/spa-3.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/spa-4.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/spa-5.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/spa-6.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									
								</div>
							</div><!--gallery-grid end-->
					  	</div>
					  	<div class="tab-pane fade" id="tabDINING" role="tabpanel" aria-labelledby="tab_DINING">
					  		<div class="gallery-grid">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/dinning-1.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/dinning-2.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/dinning-3.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/dinning-1.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/dinning-2.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/dinning-3.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									
								</div>
							</div><!--gallery-grid end-->
					  	</div>

						<div class="tab-pane fade" id="tabMEETING" role="tabpanel" aria-labelledby="tab_MEETING">
					  		<div class="gallery-grid">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/meeting/1.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/meeting/2.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/meeting/3.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/meeting/4.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/meeting/1.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="gd-item">
											<img src="<?php echo base_url('HTML/images/meeting/2.jpg')?>" alt="">
										</div><!--gd-item end-->
									</div>
									
								</div>
							</div><!--gallery-grid end-->
					  	</div>
			
					
					</div>
				</div><!--gallery-grid end-->
			</div>
		</section>
		
		



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