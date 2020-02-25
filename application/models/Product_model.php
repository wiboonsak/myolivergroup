<?php defined('BASEPATH') OR exit('No direct script access allowed');
 class Product_model extends CI_Model
 {
      public function get_user_id_from_username($username) {
        		$this->db->select('id');
        		$this->db->from('users');
        		$this->db->where('username', $username);
        		return $this->db->get()->row('id');
	   }
     
     //---------------------------  
	function GetthaiDateTime($day){
		$DateTimeArray= explode(" ",$day);
		$dateArray = explode("-",$DateTimeArray[0]);
		$date= $dateArray[2];
		$mon= $dateArray[1];
		$year= $dateArray[0]+543 ;
		//$monthArray = array("01"=>"มกราคม","02"=>"กุมภาพันธ์","03"=>"มีนาคม","04"=>"เมษายน", "05"=>"พฤษภาคม","06"=>"มิถุนายน","07"=>"กรกฏาคม","08"=>"สิงหาคม","09"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม");
      $monthArray=Array("01"=>"ม.ค. ","02"=>"ก.พ. ","03"=>"มี.ค. ","04"=>"เม.ย. ","05"=>"พ.ค. ","06"=>"มิ.ย. ","07"=>"ก.ค. ","08"=>"ส.ค. ","09"=>"ก.ย. ","10"=>"ต.ค. ","11"=>"พ.ย.","12"=>"ธ.ค.");
		if($date < 10){ $date = str_replace("0", "", $date); } 
		return $date."&nbsp;".$monthArray[$mon]."&nbsp;".$year."<br>".$DateTimeArray[1];
	}
     //---------------------------  
	function GetengDateTime($day){
		$DateTimeArray= explode(" ",$day);
		$dateArray = explode("-",$DateTimeArray[0]);
		$date= $dateArray[2];
		$mon= $dateArray[1];
		$year= $dateArray[0]+543 ;
		//$monthArray = array("01"=>"มกราคม","02"=>"กุมภาพันธ์","03"=>"มีนาคม","04"=>"เมษายน", "05"=>"พฤษภาคม","06"=>"มิถุนายน","07"=>"กรกฏาคม","08"=>"สิงหาคม","09"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม");
      $monthArray=Array("01"=>"Jan ","02"=>"Feb ","03"=>"Mar ","04"=>"Apr ","05"=>"May ","06"=>"Jun ","07"=>"Jul ","08"=>"Aug ","09"=>"Sep ","10"=>"Oct ","11"=>"Nov","12"=>"Dec");
		if($date < 10){ $date = str_replace("0", "", $date); } 
		return $date."&nbsp;".$monthArray[$mon]."&nbsp;".$year."<br>".$DateTimeArray[1];
	}
     //---------------------------  
	function GetthaiDate($day){
		$dateArray = explode("-",$day);
		$date= $dateArray[2];
		$mon= $dateArray[1];
		//$monthArray = array("01"=>"มกราคม","02"=>"กุมภาพันธ์","03"=>"มีนาคม","04"=>"เมษายน", "05"=>"พฤษภาคม","06"=>"มิถุนายน","07"=>"กรกฏาคม","08"=>"สิงหาคม","09"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม");
       $monthArray=Array("01"=>"ม.ค. ","02"=>"ก.พ. ","03"=>"มี.ค. ","04"=>"เม.ย. ","05"=>"พ.ค. ","06"=>"มิ.ย. ","07"=>"ก.ค. ","08"=>"ส.ค. ","09"=>"ก.ย. ","10"=>"ต.ค. ","11"=>"พ.ย.","12"=>"ธ.ค.");
		if($date < 10){ $date = str_replace("0", "", $date); } 
		return $date."&nbsp;".$monthArray[$mon];
	}
     //---------------------------  
	function Getthaiyear($day){
		$dateArray = explode("-",$day);
                $year= $dateArray[0]+543 ;
		return $year;
	}
     //---------------------------  
	function GetengDate($day){
		$dateArray = explode("-",$day);
		$date= $dateArray[2];
		$mon= $dateArray[1];
		//$monthArray = array("01"=>"มกราคม","02"=>"กุมภาพันธ์","03"=>"มีนาคม","04"=>"เมษายน", "05"=>"พฤษภาคม","06"=>"มิถุนายน","07"=>"กรกฏาคม","08"=>"สิงหาคม","09"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม");
       $monthArray=Array("01"=>"Jan ","02"=>"Feb ","03"=>"Mar ","04"=>"Apr ","05"=>"May ","06"=>"Jun ","07"=>"Jul ","08"=>"Aug ","09"=>"Sep ","10"=>"Oct ","11"=>"Nov","12"=>"Dec");
		if($date < 10){ $date = str_replace("0", "", $date); } 
		return $date."&nbsp;".$monthArray[$mon];
	}
     //---------------------------  
	function Getengyear($day){
		$dateArray = explode("-",$day);
                $year= $dateArray[0] ;
		return $year;
	}
  
   
              //------------------------------------------
        function delete_data($dataID = NULL, $table = NULL) {
			$data = array('id' => $dataID,);
			if ($this->db->delete($table, $data)) {
				$pass = 1;
			} else {
				$pass = 0;
				//$this->db->_error_message(); 
			}
			return $pass;
    	}
        
        //------------------------------------
    function getNewDetail($curentID) {
        $this->db->where('id', $curentID);
        $sql = $this->db->get('tbl_news_data');
        return $sql;
    }
        //------------------------------------
    function getNewspaDetail($curentID) {
        $this->db->where('id', $curentID);
        $sql = $this->db->get('tbl_spanews_data');
        return $sql;
    }
    
        //------------------------------------
    function deleteNewsImg($imageID, $imageName) {
        $this->db->where('id', $imageID);
        if ($this->db->delete('tbl_news_images')) {
            @unlink('./uploadfile/news/' . $imageName);
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
        //------------------------------------
    function deleteNewsspaImg($imageID, $imageName) {
        $this->db->where('id', $imageID);
        if ($this->db->delete('tbl_spanews_images')) {
            @unlink('./uploadfile/news/' . $imageName);
            $pass = 1;
        } else {
            $pass = 0;
        }
        return $pass;
    }
   
      //------------------------------------
    function addNews($news_title_en= NULL,$news_title_th= NULL,$news_title_ch= NULL,$news_detail_en= NULL,$news_detail_th= NULL,$news_detail_ch = NULL,$currentID = NULL, $news_date_add= NULL) {
        $data = array('news_title_en' => $news_title_en, 
            'news_title_th' => $news_title_th, 
            'news_title_ch' => $news_title_ch, 
            'news_detail_en' => $news_detail_en, 
            'news_detail_th' => $news_detail_th, 
            'news_detail_ch' => $news_detail_ch, 
            'news_date_add' => $news_date_add);
        if ($currentID == '') {
            if ($this->db->insert('tbl_news_data', $data)) {
                $pass = $this->db->insert_id();
            } else {
                $pass = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_news_data', $data)) {
                $pass = $currentID;
            } else {
                $pass = 'Error';
            }
        }

        return $pass;
    }
      //------------------------------------
    function addNewsspa($news_title_en= NULL,$news_title_th= NULL,$news_title_ch= NULL,$news_detail_en= NULL,$news_detail_th= NULL,$news_detail_ch = NULL,$currentID = NULL, $news_date_add= NULL) {
        $data = array('news_title_en' => $news_title_en, 
            'news_title_th' => $news_title_th, 
            'news_title_ch' => $news_title_ch, 
            'news_detail_en' => $news_detail_en, 
            'news_detail_th' => $news_detail_th, 
            'news_detail_ch' => $news_detail_ch, 
            'news_date_add' => $news_date_add);
        if ($currentID == '') {
            if ($this->db->insert('tbl_spanews_data', $data)) {
                $pass = $this->db->insert_id();
            } else {
                $pass = 'Error';
            }
        } else {
            $this->db->where('id', $currentID);
            if ($this->db->update('tbl_spanews_data', $data)) {
                $pass = $currentID;
            } else {
                $pass = 'Error';
            }
        }

        return $pass;
    }
     
      //------------------------------------
    function AddNewsImg($file_name, $ProductID) {
        $data = array('images_name' => $file_name,
            'news_id' => $ProductID
        );
        if ( $this->db->insert('tbl_news_images', $data)) {
            $pass = '';
        } else {
            $pass = 'Error';
        }
    }
      //------------------------------------
    function AddNewsspaImg($file_name, $ProductID) {
        $data = array('images_name' => $file_name,
            'news_id' => $ProductID
        );
        if ( $this->db->insert('tbl_spanews_images', $data)) {
            $pass = '';
        } else {
            $pass = 'Error';
        }
    }
    
       //----------------------------
    function loadNewsImg($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_news_images` WHERE news_id ='" . $ProID . "'  ");
        return $sql;
    }
       //----------------------------
    function loadNewsspaImg($ProID) {
        $sql = $this->db->query("SELECT * FROM `tbl_spanews_images` WHERE news_id ='" . $ProID . "'  ");
        return $sql;
    }
    
     //------------------------------------
    function news_list() {
        $sql = $this->db->query("SELECT * FROM tbl_news_data WHERE news_status = '1' ORDER BY id ");
        return $sql;
    }
     //------------------------------------
    function newsspa_list() {
        $sql = $this->db->query("SELECT * FROM tbl_spanews_data WHERE news_status = '1' ORDER BY id ");
        return $sql;
    }
    
    //------------------------------------
    function getDay($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0] + 543;
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $date2;
    }

//------------------------------------
    function getMonth($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0] + 543;
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $monthArray[$mon];
    }

//------------------------------------
    function getYear($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0];
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $year;
    }

    //$strMonthCut =array("01"=>"Jan","02"=>"Feb","03"=>"Mar","04"=>"Apr","05"=>"May","06"=>"Jun","07"=>"Jul","08"=>"Aug","09"=>"Sep","10"=>"Oct","11"=>"Nov","12"=>"Dec");
    //------------------------------------
    function getDayMonthYear($strDate = NULL) {
        $dateArray = explode("-", $strDate);
        $date2 = $dateArray[2];
        $mon = $dateArray[1];
        $year = $dateArray[0];


        $monthArray = array("01" => "Jan", "02" => "Feb", "03" => "Mar", "04" => "Apr", "05" => "May", "06" => "Jun", "07" => "Jul", "08" => "Aug", "09" => "Sep", "10" => "Oct", "11" => "Nov", "12" => "Dec");
        if ($dateArray[0] == 2018) {
            $year = $dateArray[0];
        }
        if ($date2 < 10) {
            $date2 = str_replace("0", "", $date2);
        }
        $day = $date2 . "&nbsp;&nbsp;" . $monthArray[$mon] . "&nbsp;&nbsp;" . $year;
        return $day;
    }
     //------------------------------------
    function deleteNews($DataID) {
        $sql = $this->db->query("SELECT * FROM tbl_news_images WHERE news_id ='" . $DataID . "' ");
        foreach ($sql->result() AS $data) {
            @unlink('./uploadfile/news/' . $data->images_name);
        }
        $this->db->where('news_id', $DataID);
        $this->db->delete('tbl_news_images');
        
        $this->db->where('id', $DataID);
        if ($this->db->delete('tbl_news_data')) {
            $pass = '1';
        } else {
            $pass = 'Error';
        }
        return $pass;
    }
     //------------------------------------
    function deletespaNews($DataID) {
        $sql = $this->db->query("SELECT * FROM tbl_spanews_images WHERE news_id ='" . $DataID . "' ");
        foreach ($sql->result() AS $data) {
            @unlink('./uploadfile/news/' . $data->images_name);
        }
        $this->db->where('news_id', $DataID);
        $this->db->delete('tbl_spanews_images');
        
        $this->db->where('id', $DataID);
        if ($this->db->delete('tbl_spanews_data')) {
            $pass = '1';
        } else {
            $pass = 'Error';
        }
        return $pass;
    }
    
     
     //-------------------------------------
    function doChangePass($newpass,$id) {
        $newpass = md5($newpass);
        $sql = "UPDATE tbl_user_data SET `password` = '" . $newpass . "' WHERE id = '".$id."' ";
        if ($this->db->query($sql)) {
            return 1;
        } else {
            return 0;
        }
    }
    
      //----------------------------------------
    function getNewsDetail1($limit = null, $notUse = null, $start = null, $perpage = null) {
        if ($limit != '') {
            $txtWhere = 'LIMIT ' . $limit;
        } else {
            $txtWhere = '';
        }if ($notUse != '') {
            $txtNot = "AND id !='" . $notUse . "' ";
        } else {
            $txtNot = '';
        }
        if (($start >= 0) && ($perpage >= 0)) {
            $txtStart = 'LIMIT ' . $start . ',' . $perpage;
        } else {
            $txtStart = '';
        }
        $sql = $this->db->query("SELECT * FROM  tbl_news_data WHERE news_status = '1' ORDER BY news_date_add DESC  $txtWhere $txtNot $txtStart  " );
        return $sql;
    }
    
        //---------------------
    function getNewsImg($dataId) {
        $sql = $this->db->query("SELECT * FROM tbl_news_images WHERE news_id = '" . $dataId . "' ORDER BY id ASC LiMIT 0,1 ");
        foreach ($sql->result() AS $data) {
            
        }
        return $data->images_name;
    }
      //----------------------------------------
    function getNewsspaDetail($limit = null, $notUse = null, $start = null, $perpage = null) {
        if ($limit != '') {
            $txtWhere = 'LIMIT ' . $limit;
        } else {
            $txtWhere = '';
        }if ($notUse != '') {
            $txtNot = "AND id !='" . $notUse . "' ";
        } else {
            $txtNot = '';
        }
        if (($start >= 0) && ($perpage >= 0)) {
            $txtStart = 'LIMIT ' . $start . ',' . $perpage;
        } else {
            $txtStart = '';
        }
        $sql = $this->db->query("SELECT * FROM  tbl_spanews_data WHERE news_status = '1' ORDER BY news_date_add DESC  $txtWhere $txtNot $txtStart  " );
        return $sql;
    }
    
        //---------------------
    function getNewsspaImg($dataId) {
        $sql = $this->db->query("SELECT * FROM tbl_spanews_images WHERE news_id = '" . $dataId . "' ORDER BY id ASC LiMIT 0,1 ");
        foreach ($sql->result() AS $data) {
            
        }
        return $data->images_name;
    }
    
       //----------------------------------------
    function getNewsDetailByID($productID) {
        $sql = $this->db->query("SELECT * FROM  tbl_news_data WHERE id = '" . $productID . "' AND news_status = '1' ");
        return $sql;
    }
     //------------------------------
    function str_limit_html($value, $limit) {

        if (mb_strwidth($value, 'UTF-8') <= $limit) {
            return $value;
        }

        // Strip text with HTML tags, sum html len tags too.
        // Is there another way to do it?
        do {
            $len = mb_strwidth($value, 'UTF-8');
            $len_stripped = mb_strwidth(strip_tags($value), 'UTF-8');
            $len_tags = $len - $len_stripped;

            $value = mb_strimwidth($value, 0, $limit + $len_tags, '', 'UTF-8');
        } while ($len_stripped > $limit);

        // Load as HTML ignoring errors
        $dom = new DOMDocument();
        @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $value, LIBXML_HTML_NODEFDTD);

        // Fix the html errors
        $value = $dom->saveHtml($dom->getElementsByTagName('body')->item(0));

        // Remove body tag
        $value = mb_strimwidth($value, 6, mb_strwidth($value, 'UTF-8') - 13, '', 'UTF-8'); // <body> and </body>
        // Remove empty tags
        return preg_replace('/<(\w+)\b(?:\s+[\w\-.:]+(?:\s*=\s*(?:"[^"]*"|"[^"]*"|[\w\-.:]+))?)*\s*\/?>\s*<\/\1\s*>/', '', $value);
    }
    
     
 }
