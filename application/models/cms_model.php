<?php

class cms_model extends CI_Model
{

    function Admin_model()
	{
	  parent::__construct();
	}

	/*********Login****************/




		function storesubcat($data)
		{
			$insert = $this->db->insert('tbl_categories', $data);
			return $insert;
			
		}	
		 function chkContent($cat_id){

         $CI =& get_instance();
	     $CI->db->select('content');
	     $CI->db->where('subcat_id',$cat_id);
	     $result = $CI->db->get('cms_content');
	     $row = $result->row();
	     if(empty($row)){
         return "";
	     }else{
	     return $row->content;
	     }

        }
		function storecat($data)
		{
			$insert = $this->db->insert('tbl_categories', $data);
			return $insert;
			
		}
		function get_whatsnew()
		{
			$query = $this->db->query("SELECT * from whatsnew");
			return $query->result();   
		}
		function save_whatsnewcontent(){
        //  extract($_POST);
        
        // $data = array(
        //     'whatsnew_content'=>$whatsnew_content,
           
        // );
        
        // if($this->db->insert('whatsnew', $data)){
        //     return true;
        // } else {
        //     return false;
        // }
		 extract($_POST);
   

  if($id==""){

 $data = array(
        'whatsnew_content'=>$whatsnew_content,
					  );
 if($this->db->insert('whatsnew', $data))
    {
      return true;
    } else {
      return false;
    }
  }else{

  	$data = array(
        'whatsnew_content'=>$whatsnew_content,
    );
  	$this->db->where('whatsnew_id', $id);
    $r=$this->db->update('whatsnew', $data);

   if($r){
   return true;
   }else{
   	return false;
   }
  }
		}

		function save_content_type(){
         extract($_POST);
        
        $data = array(
            'cat_name'=>$content_type,
           
        );
        
        if($this->db->insert('tbl_content_types', $data)){
            return true;
        } else {
            return false;
        }
		}

		
		function save_content()
		{
			extract($_POST);
        
        $data = array(
            'content'=>$content,
            'subcat_id'=>$cat_id,
        );
        
        if($this->db->insert('cms_content', $data)){
            return true;
        } else {
            return false;
        }
			
		}

		function getwhatsnew_byid($id)
    {
        $this->db->select('*');
        $this->db->from('whatsnew');
        $this->db->where(array('whatsnew.whatsnew_id' =>$id));
        $result = $this->db->get();
        return $result->result_array();

    }

		function update_content()
		{
			extract($_POST);
        $data = array(
            'content'=>$content,
            // 'subcat_id'=>$cat_id,
        );
        
        $this->db->where('subcat_id',$cat_id);
        $q=$this->db->update('cms_content', $data);
	     if($q){
	     	return true;

	     }else{
	     	            return false;

	     }
		}

		function check_status_content($subcat_id)
{
  $CI =&get_instance();
  $CI->db->select('status');
  $CI->db->where(array('tbl_categories.cat_id'=>$subcat_id));
  $result = $CI->db->get('tbl_categories');
  $row = $result->row();
  return $row->status;
  }

  function update_status_content($cat_id,$data)
  {
      //$data=array('status'=>1);
      $this->db->where(array('tbl_categories.cat_id'=>$cat_id));
      $this->db->update('tbl_categories', $data);
  }

  // function get_subcategories()
		// {
		// $query = $this->db->query("SELECT * from tbl_categories where parent_id<>0 order by priority asc");
		// 	return $query->result();   
		// }

function get_subcategories()
		{
		$query = $this->db->query("SELECT * from tbl_content_types");
			return $query->result();   
		}
			
    
		}

?>