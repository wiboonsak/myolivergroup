<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
       parent::__construct();

          $this->load->model('Product_model');  
    }
	//---------------------
	public function index()
	{
	
	}
          //---------------------------------
	public function category($cateGoryID=NULL,$page=null){
		$data['categoryList']=$this->Product_model->getCategory('1');
                $perpage = 9; $limit =''; $notUse = '';
               if ($page == ''){
                   $page = 1;
               }else{
                   $page = $page;
               }
               $start = ($page - 1) * $perpage;
		//--------------------------------
		$this->load->view('fontend/header',$data);
		if($cateGoryID==''){ 
			$this->load->view('fontend/product' , $data);
		}else{
			$cateGoryName=$this->Product_model->pCategoryDetail($cateGoryID);
			foreach($cateGoryName->result() AS $cate){ }
			$data['cateGoryName']=$cate->category_title;
                        $data['page'] = $page;
                        $data['perpage'] = $perpage;                        
			$data['productList']=$this->Product_model->productListByCate($cateGoryID,$limit,$notUse,$start,$perpage);                        
			$this->load->view('fontend/product' , $data);
			
		}
		
		$this->load->view('fontend/footer');
		
	}
         //-------------------------------------------
        public function searchdata(){
        $searchtext = $this->input->post('searchtext');
        $result_id = $this->Product_model->search($searchtext);{
            $numresult = $result_id->num_rows();
            if($numresult>0){
         foreach ($result_id->result() AS $result_id2) { }  
            ?>

					<div class="row heading_space">
						<div class="col-md-12">
							<div class="commerce_heading">
								<h2><?php echo $result_id2->category_title?></h2>
							</div>
						</div>
					</div>
					<div class="row">
<?php   
foreach ($result_id->result() AS $productList2) {
    $firstImg = $this->Product_model->getFirstImg($productList2->id);
    ?>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="product_box web_box">
								<figure class="wpf-demo-6">
									<span class="product_tag_red">Sale</span>
                                                                        <a href="<?php echo base_url('uploadfile/product/').$firstImg?>" target="_black"><img src="<?php echo base_url('uploadfile/product/').$firstImg?>" alt="Owl Image">
									</a>
									<figcaption class="view-caption">
										<div class="overly_bg">
											<a data-fancybox="gallery" href="<?php echo base_url('uploadfile/product/').$firstImg?>" class="overlay_search"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
											<a href="<?php echo base_url('Product/product_detail/') .$productList2->product_category .'/'.$productList2->id ?>" class="overlay_link"><i class="fa fa-external-link" aria-hidden="true"></i></a>
										</div>
									</figcaption>
								</figure>
								<div class="product_detail">
									<a href="<?php echo base_url('Product/product_detail/') .$productList2->product_category .'/'.$productList2->id ?>">
										<h3><?php echo $productList2->product_nameen?></h3>
									</a>
									<img src="<?php echo base_url('HTML/images/line.png')?>" alt="image">
									<span><?php echo $productList2->product_nameth?></span>									
								</div>
							</div>
						</div>
<?php }?>	
					</div>
					

				
        <?php }else{?>
<div class="row heading_space">
						<div class="col-md-12">
							<div class="commerce_heading">
								<h2>ไม่พบเนื้อหาที่ค้นหา</h2>
							</div>
						</div>
					</div>
 <?php  }}}
   //----------------------------------
        public function product_detail($cataid=null,$productID=null) {
   
           $data['categoryList']=$this->Product_model->getCategory('1');
            $limit='2';
           
           $data['productID']=$productID;
           $data['catalogueList']=$this->Product_model->getPdetailcatalogue($productID);
           $data['productDetail']=$this->Product_model->getPdetailCategory($productID);
           $data['imagesList']=$this->Product_model->loadProductImg($productID);
           $data['linkyoutube']=$this->Product_model->getlinkyoutube($productID);
          //$data['product']=$this->Control_model->productListByCate($cataid,$limit,$productID);
           $data['product']=$this->Product_model->productListByCate($cataid,$limit,$productID,'-100','-100');
          $data['productList']=$this->Product_model->getDetail($productID);
	
	
           
            $this->load->view('fontend/header',$data);
            $this->load->view('fontend/product_detail',$data);
            $this->load->view('fontend/footer');
            
        }
}
