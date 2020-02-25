<!DOCTYPE html>
<?php  foreach ($newsDetail->result() AS $data) {}
                 $imgnew = $this->Product_model->loadNewsImg($data->id); 
                 foreach ($imgnew->result() AS $imgnew3){}
                 if($this->session->userdata('weblang') == 'en'){
                     $news_title = $data->news_title_en;
                     $news_detail = $data->news_detail_en;
                 }else if ($this->session->userdata('weblang') == 'tn'){
                     $news_title = $data->news_title_th;
                     $news_detail = $data->news_detail_th;
                 }else{
                     $news_title = $data->news_title_ch;
                     $news_detail = $data->news_detail_ch;
                 }
                 ?>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MY OLIVER GROUP | OLIVER HOTEL DANNOK | OLIVER MASSAND AND SPA</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta property="fb:app_id"        content="355179808591281"/>
         <meta property="og:url"           content="<?php echo base_url('News/news_detail/').$data->id?>"/>
         <meta property="og:type"          content="website"/>
        <meta property="og:title"         content="<?php echo $news_title?>"/>
        <meta property="og:description"   content="<?php echo strip_tags($news_detail)?>"/>
        <meta property="og:image"         content="<?php echo base_url('uploadfile/news/').$imgnew3->images_name?>"/>
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
<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
<script type="text/javascript">LineIt.loadButton();</script>
</head>
<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  
  </script>

<body>

	<div class="layout">

	<?php include("header.php"); ?>
		
		<section class="pager-sec" style="background-image: url(<?php echo base_url('HTML/images/banner_room2.jpg')?>)">
			<div class="container">
				<div class="pager-sec-details">
					<h3>NEWS &amp; PROMOTIONS</h3>
					<ul>
						<li><a href="#" title="">Home</a></li>
						<li><span>News &amp; Promotions</span></li>
					</ul>
				</div><!--pager-sec-details end-->
			</div>
		</section><!--pager-sec end-->


		<section class="main-content">
			<div class="container">
				<div class="page-content">
					<div class="blogs-page">
						<div class="row">
							<div class="col-lg-8">
								<div class="blog-secs v2">
									<div class="blog_item single">																				
										<div class="room_slide_sec">											
											<div class="room_slide_imgs">
                                                                                             <?php $n=1; 
                                                                  foreach ($imgnew->result() AS $imgnew2){?>
												<div class="rom_img_slide">
													<img src="<?php echo base_url('uploadfile/news/').$imgnew2->images_name?>" alt="">
													<a href="<?php echo base_url('uploadfile/news/').$imgnew2->images_name?>" title="" class="html5lightbox zoom-img"><img src="<?php echo base_url('HTML/images/zoom.png')?>" alt=""></a>
												</div>
                                                <?php }?>
                 </div><!--room_slide_imgs end-->
											<ul class="room_slide_thumbs">
                                                                            <?php foreach ($imgnew->result() AS $imgnew3){?>
												<li>
													<div class="thumb_img">
														<img src="<?php echo base_url('uploadfile/news/').$imgnew3->images_name?>" alt="">
													</div>
												</li>
                                                                            <?php }?>
											</ul><!--room_slide_thumbs end-->
										</div><!--room_slide_sec end-->

										<div class="blog_info">
											<h3 class="post-title"><?php echo $news_title?></h3>
											<ul class="meta">
												<li>
															<img src="<?php echo base_url('HTML/images/m1.png')?>" alt="">
															<a href="#" title="">Admin</a>
														</li>
														<li>
															<img src="<?php echo base_url('HTML/images/m2.png')?>" alt="">
															<a href="#" title=""><?php echo $this->Product_model->GetengDate($data->news_date_add)?>, <?php echo $this->Product_model->Getengyear($data->news_date_add)?></a>
														</li>
											</ul><!--meta end-->
											<p><?php echo $news_detail?></p>

											<div class="share_links">
												<h3>Share: </h3>
												<ul class="sc_list">
													<li><div class="fb-share-button" 
    data-href="<?php echo base_url('News/news_detail/').$data->id?>" 
    data-layout="button">
                                                            </div></li>
													<li> </li>
												</ul>
                                                                                                <div class="line-it-button" data-lang="th" data-type="share-b" data-ver="3" data-url="<?php echo base_url('News/news_detail/'.$data->id)?>" data-color="default" data-size="small" data-count="false" style="display: none;"></div>
                                                                                                
												<div class="clearfix"></div>
											</div><!--tags_sec end-->
											
											<div class="tags_sec">
												<h3>Tags: </h3>
												<ul class="tags-list">
													<li><a href="#" title="">Hotel</a></li>
													<li><a href="#" title="">Dannok</a></li>
													<li><a href="#" title="">Sadoa</a></li>
													<li><a href="#" title="">Hatyai</a></li>
													<li><a href="#" title="">Songkhla</a></li>
													<li><a href="#" title="">Room</a></li>
												</ul>
												<div class="clearfix"></div>
											</div><!--tags_sec end-->
										</div>
									</div><!--blog_item end-->
								</div><!--blog-secs end-->
							</div>
							<div class="col-lg-4">
								<?php include("sidebar.php"); ?>
								<!--sidebar end-->
							</div>
						</div>
					</div><!--blogs-page end-->	
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