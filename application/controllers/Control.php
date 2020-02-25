<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

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
		 if($this->session->userdata('user_id')==''){
			    redirect(base_url('login'), 'refresh');
			    exit();
			 
		  }
			
          $this->load->model('Product_model');  
          $this->load->model('User_model');  
		 
    }
	//---------------------
	public function index()
	{
		$data['NewsList']=$this->Product_model->news_list();
		$this->load->view('backend/header');
		$this->load->view('backend/news_list',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/news_list_script');	
	}
        //-------------------------------
	public function news_add($curentID=NULL){
		$NewDetail = $this->Product_model->getNewDetail($curentID);
		if($NewDetail->num_rows() > 0){
			foreach($NewDetail->result() AS $news){}
			$data['news_title_en']=$news->news_title_en;
			$data['news_title_th']=$news->news_title_th;
			$data['news_title_ch']=$news->news_title_ch;
			$data['news_detail_en']=$news->news_detail_en; 
			$data['news_detail_th']=$news->news_detail_th; 
			$data['news_detail_ch']=$news->news_detail_ch; 
			$data['currentID']=$news->id;
			$data['news_date_add']=$news->news_date_add;
		 }else{
			$data['news_title_en']='';
			$data['news_title_th']='';
			$data['news_title_ch']='';
			$data['news_detail_en']=''; 
			$data['news_detail_th']=''; 
			$data['news_detail_ch']=''; 
			$data['currentID']='';
			$data['news_date_add']='';
		}
		$this->load->view('backend/header');
		$this->load->view('backend/news_add',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/news_add_script');		
	}
        //-------------------------------
	public function spanews_add($curentID=NULL){
		$NewDetail = $this->Product_model->getNewspaDetail($curentID);
		if($NewDetail->num_rows() > 0){
			foreach($NewDetail->result() AS $news){}
			$data['news_title_en']=$news->news_title_en;
			$data['news_title_th']=$news->news_title_th;
			$data['news_title_ch']=$news->news_title_ch;
			$data['news_detail_en']=$news->news_detail_en; 
			$data['news_detail_th']=$news->news_detail_th; 
			$data['news_detail_ch']=$news->news_detail_ch; 
			$data['currentID']=$news->id;
			$data['news_date_add']=$news->news_date_add;
		 }else{
			$data['news_title_en']='';
			$data['news_title_th']='';
			$data['news_title_ch']='';
			$data['news_detail_en']=''; 
			$data['news_detail_th']=''; 
			$data['news_detail_ch']=''; 
			$data['currentID']='';
			$data['news_date_add']='';
		}
		$this->load->view('backend/header');
		$this->load->view('backend/newsspa_add',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/newsspa_add_script');		
	}
        	//-------------------------------   // imageID 
	public function deleteNewsImg(){
		$imageID = $this->input->post('imageID');
		$imageName = $this->input->post('imageName');
		$result = $this->Product_model->deleteNewsImg($imageID,$imageName);
		echo $result;
	} 
        	//-------------------------------   // imageID 
	public function deleteNewsspaImg(){
		$imageID = $this->input->post('imageID');
		$imageName = $this->input->post('imageName');
		$result = $this->Product_model->deleteNewsspaImg($imageID,$imageName);
		echo $result;
	} 
        //-------------------------------    
	public function addNews(){
		 $currentID =$this->input->post('currentID');
		 $news_detail_en =$this->input->post('comment');
		 $news_detail_th =$this->input->post('comment_th');
		 $news_detail_ch =$this->input->post('comment_ch');
		 $news_title_en =$this->input->post('news_title_en');
		 $news_title_th =$this->input->post('news_title_th');
		 $news_title_ch =$this->input->post('news_title_ch');
		 $news_date_add =$this->input->post('news_date_add');
		 
		 $currentID = $this->Product_model->addNews($news_title_en,$news_title_th,$news_title_ch,$news_detail_en,$news_detail_th,$news_detail_ch ,$currentID , $news_date_add );
                 
               
		 //--------uploadfile------------//
		$countFiles = count($_FILES['userFiles']['name']);
		   
		 		$upload_path = './uploadfile/news';
				$upload_pathName = 'uploadfile/news';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);
       if($countFiles>0){ 
			for($i=0; $i<$countFiles; $i++)
			{           
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];


               
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					$this->Product_model->AddNewsImg($uploadData[$i]['file_name'],$currentID);
                }
				
			}
		}
		
		 echo $currentID;
		 
	}
        //-------------------------------    
	public function addNewsspa(){
		 $currentID =$this->input->post('currentID');
		 $news_detail_en =$this->input->post('comment');
		 $news_detail_th =$this->input->post('comment_th');
		 $news_detail_ch =$this->input->post('comment_ch');
		 $news_title_en =$this->input->post('news_title_en');
		 $news_title_th =$this->input->post('news_title_th');
		 $news_title_ch =$this->input->post('news_title_ch');
		 $news_date_add =$this->input->post('news_date_add');
		 $youtube =$this->input->post('youtube');
		 
		 $currentID = $this->Product_model->addNewsspa($news_title_en,$news_title_th,$news_title_ch,$news_detail_en,$news_detail_th,$news_detail_ch ,$currentID , $news_date_add);
                 
                
		 //--------uploadfile------------//
		$countFiles = count($_FILES['userFiles']['name']);
		   
		 		$upload_path = './uploadfile/news';
				$upload_pathName = 'uploadfile/news';
				$config['upload_path'] = $upload_path;
				//allowed file types. * means all types
				$config['allowed_types'] = 'jpg|png|gif';
				//allowed max file size. 0 means unlimited file size
				$config['max_size'] = '0';
				//max file name size
				$config['max_filename'] = '255';
				//whether file name should be encrypted or not
				$config['encrypt_name'] = TRUE;
				//store image info once uploaded
				$image_data = array();
				//check for errors
				$is_file_error = FALSE;
		 	
		    $this->load->library('upload', $config);
       if($countFiles>0){ 
			for($i=0; $i<$countFiles; $i++)
			{           
				//---------------------------
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];


               
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
					$this->Product_model->AddNewsspaImg($uploadData[$i]['file_name'],$currentID);
                }
				
			}
		}
		
		 echo $currentID;
		 
	}
        
        //-------------------------------
	public function loadNewsImages(){
		$ProID=$this->input->post('ProID');
		$data['newsImg'] = $this->Product_model->loadNewsImg($ProID);
		$this->load->view('backend/news_images_list',$data);
		
	}
        //-------------------------------
	public function loadNewsspaImages(){
		$ProID=$this->input->post('ProID');
		$data['newsImg'] = $this->Product_model->loadNewsspaImg($ProID);
		$this->load->view('backend/news_images_list',$data);
		
	}
        	//-------------------------------
	public function news_list(){
		$data['NewsList']=$this->Product_model->news_list();
		$this->load->view('backend/header');
		$this->load->view('backend/news_list',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/news_list_script');	
	}
        	//-------------------------------
	public function spanews_list(){
		$data['NewsList']=$this->Product_model->newsspa_list();
		$this->load->view('backend/header');
		$this->load->view('backend/newsspa_list',$data);
		$this->load->view('backend/footer');
		$this->load->view('backend/newsspa_list_script');	
	}
    
                //------------------------------- deleteNews 
	public function deleteNews(){
		$DataID = $this->input->post('dataID');
		$result = $this->Product_model->deleteNews($DataID);
		echo $result;
	}
                //------------------------------- deleteNews 
	public function deletespaNews(){
		$DataID = $this->input->post('dataID');
		$result = $this->Product_model->deletespaNews($DataID);
		echo $result;
	}
       
       
                //-------------------
        public function set_ShowOnWeb() {
            $dataID = $this->input->post('dataID');
            $check = $this->input->post('check');
            $table = $this->input->post('table');
            $result = $this->Product_model->update_ShowOnWeb($dataID, $check, $table);
            echo $result;
    }
   public function cangePassForm(){
	   $this->load->view('backend/changepassform');
   }
   	//-------------------------------  doChangePass') ', { newpass
    public function doChangePass(){
		$id = $this->input->post('id');
		$newpass = trim($this->input->post('newpass'));
		
		$result = $this->Product_model->doChangePass($newpass,$id);
		echo $result;
	}
     
}