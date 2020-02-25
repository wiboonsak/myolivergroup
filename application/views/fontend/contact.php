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
		
		<section class="pager-sec" style="background-image: url(<?php echo base_url('HTML/images/banner_room2.jpg')?>)">
			<div class="container">
				<div class="pager-sec-details">
					<h3><?php echo $this->lang->line('Contact');?></h3>
					<ul>
						<li><a href="#" title=""><?php echo $this->lang->line('home');?></a></li>
						<li><span><?php echo $this->lang->line('Contact');?></span></li>
					</ul>
				</div><!--pager-sec-details end-->
			</div>
		</section><!--pager-sec end-->

		<section class="c-block white-bg">
			<div class="container">
				<div class="contact_sec">
					<div class="row">
						<div class="col-lg-6">
							<div class="contact_info">
								<h3><?php echo $this->lang->line('CONTACTINFO');?></h3>
								<ul>
									<li>
										<img src="<?php echo base_url('HTML/images/cs1.png')?>" alt="">
										<div class="cs_info">
											<span><?php echo $this->lang->line('OliverHotel');?></span>
										</div>
									</li>
									<li>
										<img src="<?php echo base_url('HTML/images/cs2.png')?>" alt="">
										<div class="cs_info">
											<span><?php echo $this->lang->line('CallUs');?></span>
										</div>
									</li>
									<li>
										<img src="<?php echo base_url('HTML/images/cs3.png')?>" alt="">
										<div class="cs_info">
											<span><?php echo $this->lang->line('Fax');?></span>
										</div>
									</li>
									<li>
										<img src="<?php echo base_url('HTML/images/cs4.png')?>" alt="">
										<div class="cs_info">
											<a href="mailto:oliver.hotel@hotmail.com" title="" target="_blank"><?php echo $this->lang->line('Email');?></a>
										</div>
									</li>
									<li>
										<img src="<?php echo base_url('HTML/images/icon-line-36.png')?>" alt="">
										<div class="cs_info">
											<a href="https://line.me/R/ti/p/@myolivergroup" title="" target="_blank">MyOliverGroup</a>
										</div>
									</li>
								</ul>
							</div><!--contact_info end-->
						</div>
						<div class="col-lg-6">
                                                    <div id="map">
                                                        <div>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.94730442886!2d100.41385771477071!3d6.528339995277953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304cba421f9fa167%3A0x27ac3af59ce6e65f!2sOliver%20Hotel!5e0!3m2!1sth!2sth!4v1575271336060!5m2!1sth!2sth" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							</div>
                                                    </div>
						</div>
					</div>
				</div><!--contact_sec end-->
			</div>
		</section><!--CONTACT-SEC END-->

<br>
<br>
<br>
<br>
<br>
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