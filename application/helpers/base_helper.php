<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function update_priority($data)
	{
	$CI =& get_instance();	
	$id_array	= explode(",",$data['ids']);

	$count = 1;
		foreach ($id_array as $id){
			$id = trim($id);
			$ql = $CI->db->query("UPDATE `tbl_categories` SET `priority` = $count WHERE cat_id = $id");
			$count ++;	
		}

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

function getAll_Department()
	 {
	 	$CI =& get_instance();
	    $CI->db->select('*');
    	$result = $CI->db->get('departments');
 		return $result->result_array();
	 }
function getAll_Unit()
	 {
	 	$CI =& get_instance();
	    $CI->db->select('*');
    	$result = $CI->db->get('units');
 		return $result->result_array();
	 }
	 function getCategoryname_byid($cat_id)
{
	$CI =& get_instance();
	$CI->db->select('cat_name');
	$CI->db->where('cat_id',$cat_id);
	$result = $CI->db->get('tbl_categories');
	$row = $result->row();
	return $row->cat_name;
}
function getSubCategoryname_byid($parent_id)
{
	$CI =& get_instance();
	$CI->db->select('cat_name');
	$CI->db->where('parent_id',$parent_id);
	$result = $CI->db->get('tbl_categories');
	$row = $result->row();
	return $row->cat_name;
}