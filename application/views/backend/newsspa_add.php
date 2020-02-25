 <?php  if(!isset($currentID)){ $currentID='';}
		if(!isset($news_title_en)){ $news_title_en ='';}
		if(!isset($news_title_th)){ $news_title_th ='';}
		if(!isset($news_title_ch)){ $news_title_ch ='';}
		if(!isset($news_detail_en)){ $news_detail_en ='';}
		if(!isset($news_detail_th)){ $news_detail_th ='';}
		if(!isset($news_detail_ch)){ $news_detail_ch ='';}
		if(!isset($news_date_add)){ $news_date_add =date("d-m-Y");}


?>  
<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                           
                            <h4 class="page-title">Spa News Data</h4>
                            <br>
							<div class="row">
                    			<div class="col-sm-12">
									<div class="card m-b-30 card-body">
										<h5 class="card-title">
											<div class="progress mb-0" style="display: none">
										<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
										</div>
                                                                                    <div class="pull-right">
                                                             <?php if($currentID!=''){?>
								<button type="button" class="btn btn-success btn-sm" onClick="window.location.href='<?php echo base_url('Control/spanews_add')?>'"><i class="fa fa-plus"></i> Add News</button> 
						    &nbsp;&nbsp;
                                                             <?php }?>
								<button type="button" class="btn btn-info btn-sm" onClick="window.location.href='<?php echo base_url('Control/spanews_list')?>'">Back</button></div>
										</h5>
						<form enctype="multipart/form-data" id="productForm" name="productForm">
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">News topic English</label>
								<div class="col-sm-9">
									<input type="text" id="news_title_en" name="news_title_en" class="form-control form-control-sm" value="<?php echo $news_title_en?>" >
								</div>
							  
						</div>
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">News topic Thai</label>
								<div class="col-sm-9">
									<input type="text" id="news_title_th" name="news_title_th" class="form-control form-control-sm" value="<?php echo $news_title_th?>" >
								</div>
							  
						</div>
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">News topic China</label>
								<div class="col-sm-9">
									<input type="text" id="news_title_ch" name="news_title_ch" class="form-control form-control-sm" value="<?php echo $news_title_ch?>" >
								</div>
							  
						</div>
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">News Details English</label>
								<div class="col-sm-9">
									<textarea id="news_detail_en" name="news_detail_en" class="ex" ><?php echo $news_detail_en?></textarea>
                                                                       <input type="hidden" name="comment" id="comment" >
								</div>
							  
						</div>	
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">News Details Thai</label>
								<div class="col-sm-9">
									<textarea id="news_detail_th" name="news_detail_th" class="ex" ><?php echo $news_detail_th?></textarea>
                                                                         <input type="hidden" name="comment_th" id="comment_th" >
								</div>
						</div>	
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">News Details China</label>
								<div class="col-sm-9">
									<textarea id="news_detail_ch" name="news_detail_ch" class="ex" ><?php echo $news_detail_ch?></textarea>
                                                                         <input type="hidden" name="comment_ch" id="comment_ch" >
								</div>
							  
						</div>	
							 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">Date</label>
								<div class="col-sm-9">
									<input   type="date" id="news_date_add" name="news_date_add" value="<?php echo $news_date_add?>" class="form-control form-control-sm"/> 
								</div>
							   
						</div>	
						 <div class="form-group row">
							  <label class="col-sm-3 col-form-label">Images</label>
								<div class="col-sm-9">
									<input   type="file" id="ImagesFiles" name="userFiles[]" multiple /> 
                                                                        <br><a>(Supports image file extension jpg, gif, png. File size should not exceed 2MB. Picture size 570 x 325 pixels.)</a>
								</div>
							 
						</div>	
											
						<div class="form-group row" >
							<div class="col-sm-12" style="text-align: center">
							<button type="button" class="btn btn-success btn-sm" onClick="AddNews()">Add / Edit Data</button>
							<input type="hidden" name="currentID" id="currentID" value="<?php echo $currentID?>">
							</div>
					</div>					
											
						</form>					
										<div id="showImage"></div>
									</div>
								</div>
								
							</div>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

            </div> <!-- end container -->
        </div>