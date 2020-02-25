
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

	<div class="layout hpg10 hp10">

	
		<section class="c-block p-0">
			<div class="container-fluid p-0">
				<div class="rooms-sec style2">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="room-details">
								<img src="<?php echo base_url('HTML/images/index_hotel.jpg')?>" alt="">
								<div class="room-hd">
									<h4>Great Location, Service and Stay</h4>
									<h3>OLIVER HOTEL DANNOK</h3>
								</div>
								<a href="<?php echo base_url('Welcome/index_hotel')?>" title="" class="booking-btn">OLIVER HOTEL DANNOK <i class="fa fa-bed" aria-hidden="true"></i></a>
							</div><!--room-details end-->
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="room-details">
								<img src="<?php echo base_url('HTML/images/index_spa4.jpg')?>" alt="">
								<div class="room-hd">
									<h4>Spa Journeys Inspired by Traditional Thai Healing</h4>
									<h3>OLIVER SPA & MASSAGE</h3>
								</div>
								<a href="#" title="" class="booking-btn">OLIVER SPA & MASSAGE <i class="fa fa-pagelines" aria-hidden="true"></i></a>
							</div><!--room-details end-->
						</div>
						
					</div>
				</div><!--rooms-sec end-->
			</div>
		</section><!--ROOMS-SEC END-->







	</div>


	<div class="max-cont"></div>


<script src="<?php echo base_url('HTML/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('HTML/js/popper.js')?>"></script>
<script src="<?php echo base_url('HTML/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('HTML/js/flatpickr.js')?>"></script>
<script src="<?php echo base_url('HTML/js/custom-select.js')?>"></script>
<script src="<?php echo base_url('HTML/js/html5lightbox.js')?>"></script>
<script src="<?php echo base_url('HTML/js/lib/slick/slick.js')?>"></script>
<script src="<?php echo base_url('HTML/js/handleCounter.js')?>"></script>

<script src="<?php echo base_url('HTML/revolution/js/jquery.themepunch.tools.min.js')?>"></script>
<script src="<?php echo base_url('HTML/revolution/js/jquery.themepunch.revolution.min.js')?>"></script>

<script src="<?php echo base_url('HTML/revolution/js/revolution.extension.actions.min.js')?>"></script>
<script src="<?php echo base_url('HTML/revolution/js/revolution.extension.carousel.min.js')?>"></script>
<script src="<?php echo base_url('HTML/revolution/js/revolution.extension.kenburn.min.js')?>"></script>
<script src="<?php echo base_url('HTML/revolution/js/revolution.extension.layeranimation.min.js')?>"></script>
<script src="<?php echo base_url('HTML/revolution/js/revolution.extension.migration.min.js')?>"></script>
<script src="<?php echo base_url('HTML/revolution/js/revolution.extension.navigation.min.js')?>"></script>
<script src="<?php echo base_url('HTML/revolution/js/revolution.extension.parallax.min.js')?>"></script>
<script src="<?php echo base_url('HTML/revolution/js/revolution.extension.slideanims.min.js')?>"></script>
<script src="<?php echo base_url('HTML/revolution/js/revolution.extension.video.min.js')?>"></script>
<script src="<?php echo base_url('HTML/revolution/js/revolution.initialize.js')?>"></script>
<script src="<?php echo base_url('HTML/revolution/js/revolution.initialize10.js')?>"></script>


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