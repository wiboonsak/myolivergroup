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
<style>
    
    .isDisabled {
  pointer-events: none;
  cursor: not-allowed !important;
  opacity: 0.5;
  text-decoration: none;
}
</style>

<body>

	<div class="layout">

	<?php include("header.php"); ?>
		
		<section class="pager-sec" style="background-image: url(<?php echo base_url('HTML/images/banner_room2.jpg')?>)">
			<div class="container">
				<div class="pager-sec-details">
					<h3><?php echo $this->lang->line('NEWSPROMOTIONS');?></h3>
					<ul>
						<li><a href="#" title=""><?php echo $this->lang->line('home');?></a></li>
						<li><span><?php echo $this->lang->line('NEWSPROMOTIONS');?></span></li>
					</ul>
				</div><!--pager-sec-details end-->
			</div>
		</section><!--pager-sec end-->

		<section class="main-content white-bg">
			<div class="container">
				<div class="page-content">
					<div class="blogs-page">
						<div class="row">
							<div class="col-lg-8">
								<div class="blog-secs v2">
									<div class="row">
                                                                              <?php
  $limit =''; $notUse ='';                            
$countAll=$this->Product_model->getNewsDetail1($limit,$notUse,'-100','-100');

        $countRow = $countAll->num_rows(); 
        $totalRow = ceil($countRow/$perpage);
foreach ($newsDetail->result() AS $data) {
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
    $firstImg = $this->Product_model->getNewsImg($data->id);
    ?>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                                                                    <div class="blog_item" style="height:550px">
												<div class="blog_img">
													<img src="<?php echo base_url('uploadfile/news/') . $firstImg ?>" alt="">
													<span class="posted_date">
														<strong><?php echo $this->Product_model->Getengyear($data->news_date_add)?></strong>
														<b><?php echo $this->Product_model->GetengDate($data->news_date_add)?></b>
													</span>
												</div><!--blog_img end-->
												<div class="blog_info">
													<h3 class="post-title"><a href="<?php echo base_url('News/news_detail/'.$data->id);?>" title=""><?php echo $news_title?></a></h3>
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
													<?php echo $this->Product_model->str_limit_html($news_detail,100)?><br>
                                                                                                        <a href="<?php echo base_url('News/news_detail/'.$data->id);?>" title=""><?php echo $this->lang->line('ReadMore');?> <i class="la la-arrow-right"></i></a>
												</div>
											</div><!--blog_item end-->
										</div>
<?php }?>		
									</div>
								</div><!--blog-secs end-->
                                                                 <?php 
                                                    $page2 =$page-1; 
                                                    $page3 =$page+1; 
                                                    
                                                    ?>
								<div class="lc-pagination">
									<nav>
										<ul class="pagination">
                                                                 <?php for($i=1;$i<=$totalRow;$i++){ ?> 
									    	<li class="page-item <?php if($page == $i){ echo 'active'; }?>"><a class="page-link" href="<?php echo base_url('News/Page/').$i?> "><?php echo $i?></a></li>
									    	<?php }?>   
									    	<li class="page-item <?php if($totalRow == 1){echo 'isDisabled'; }?>">
									      		<a class="page-link" href="<?php echo base_url('News/Page/').$page3?>"><?php echo $this->lang->line('next');?> <i class="la la-long-arrow-right"></i></a>
									    	</li>
									  	</ul>
									</nav>
								</div><!--lc-pagination end-->
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