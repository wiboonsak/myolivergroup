<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        if($this->session->userdata('weblang')==''){
			 $this->session->set_userdata('weblang', 'en');
		 }
    }
	
	
	//---------------------------------
	public function index()
	{
           $this->load->view('fontend/index');
	}
	//---------------------------------
	public function index_hotel($page=null)
	{
            $perpage = 5; $limit =''; $notUse = '';
               if ($page == ''){
                   $page = 1;
               }else{
                   $page = $page;
               }
              $start = ($page - 1) * $perpage;
               $data['page'] = $page;
                $data['perpage'] = $perpage;
                $data['newsDetail'] = $this->Product_model->getNewsDetail1($limit,$notUse,$start,$perpage);
           $this->load->view('fontend/index_hotel',$data);
	}
	//---------------------------------
	public function room_list()
	{
           $this->load->view('fontend/room_list');
	}
	//---------------------------------
	public function standard_king()
	{
           $this->load->view('fontend/standard_king');
	}
	//---------------------------------
	public function standard_twin()
	{
           $this->load->view('fontend/standard_twin');
	}
	//---------------------------------
	public function deluxe_room()
	{
           $this->load->view('fontend/deluxe_room');
	}
	//---------------------------------
	public function superior_suite()
	{
           $this->load->view('fontend/superior_suite');
	}
	//---------------------------------
	public function spa()
	{
           $this->load->view('fontend/spa');
	}
	//---------------------------------
	public function contact()
	{
           $this->load->view('fontend/contact');
	}
	//---------------------------------
	public function resturant()
	{
           $this->load->view('fontend/resturant');
	}
	//---------------------------------
	public function meeting()
	{
           $this->load->view('fontend/meeting');
	}
	//---------------------------------
	public function gallery()
	{
           $this->load->view('fontend/gallery');
	}
      
}
