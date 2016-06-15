<?php 
ob_start(); 
class cms extends CI_Controller
{
 //    function Admin()/* constuct*/
	// {
	//      parent::__construct();
		 
	// 	 $this->load->library('session');
	// 	 session_start();
		
	// }
		function __construct()
	{
		parent::__construct();
        $this->load->library('session');
		 session_start();
		$this->load->model('cms_model');
		// $this->load->model('model_developer');
         $this->load->helper('base');
	
	}
	
           function index()
	{
		if($this->session->userdata('is_logged_in'))
		{
		    $this->load->model('Admin_model');
			$data['query1']=$this->Admin_model->getUser();
			$this->load->view('cms/list_of_subcategories',$data);
				
		}
		else
		{       
			$this->load->view('index2');	
	    }	
        }
      
           
		function list_of_subcategories()
		{
			$this->load->model('cms_model');
			$data['query1']=$this->cms_model->get_subcategories();
			$this->load->view('cms/list_of_subcategories',$data);
		}
		function whatsnew()
		{
			$this->load->model('cms_model');
			$data['query1']=$this->cms_model->get_whatsnew();
			$this->load->view('cms/whatsnew_list',$data);
		}
		function manage_content($cat_id,$uri='')
		{
          $data['uri']=$uri;
		   $this->load->model('cms_model');
	       $data['chk_content']=$this->cms_model->chkContent($cat_id);

            $data['cat_id']=$cat_id;
			if($_POST){
            $this->form_validation->set_rules('content', 'Text','required');
            if($this->form_validation->run() == FALSE){ 
		    $this->load->view('cms/manage_content',$data);
			}else{
            
			if($uri=="2"){
				// print_r("empty");
				// exit();
		 		 if($this->cms_model->update_content()){ 
		 	        	$this->session->set_flashdata('message',"<div class='alert alert-success'>Update Successfully </div>");
			 	        redirect('cms/manage_content/'.$cat_id);
				               }else{
						$this->session->set_flashdata('message', '<div class="alert alert-error">Some error occured during updation.</div>');
						redirect('cms/manage_content/'.$cat_id);
		 		                }
		        }else{
    //             print_r("okkkk");
				// exit();
			if($this->cms_model->save_content()){ 
		 	        	$this->session->set_flashdata('message',"<div class='alert alert-success'>Successfully Saved </div>");
			 	        redirect('cms/manage_content/'.$cat_id);
				               }else{
						$this->session->set_flashdata('message', '<div class="alert alert-error">Some error occured during Insertion.</div>');
						redirect('cms/manage_content/'.$cat_id);
		 		                }
              
		        }
			}
			
			}else{
             
			$this->load->view('cms/manage_content',$data);
		       }
		}
         
         function add_whatsnew($id=''){
         	$this->load->model('cms_model');
			if($_POST){
		    $id=$this->input->post('id');
            $this->form_validation->set_rules('whatsnew_content', 'Text','required');
            if($this->form_validation->run() == FALSE){ 
		    $this->load->view('cms/add_whatsnew',$data);
			}else{

			 if($this->cms_model->save_whatsnewcontent($id)){ 
		 	        	$this->session->set_flashdata('message',"<div class='alert alert-success'>Successfully Saved </div>");
			 	        redirect('cms/whatsnew');
				               }else{
						$this->session->set_flashdata('message', '<div class="alert alert-error">Some error occured during Insertion.</div>');
						redirect('cms/whatsnew');
		 		                }

			}
			}else{
		     $data['id']=$id;
		     $data['getwhatsnew_byid']=$this->cms_model->getwhatsnew_byid($data['id']);
             $data['content']="whatsnew";
			 $this->load->view('cms/add_whatsnew',$data);
		       }
         }

         function addnew_content_type(){
         	$this->load->model('cms_model');
			if($_POST){
            $this->form_validation->set_rules('content_type', 'content','required');
            if($this->form_validation->run() == FALSE){ 
		    $this->load->view('cms/add_whatsnew_content_type');
			}else{

			 if($this->cms_model->save_content_type()){ 
		 	        	$this->session->set_flashdata('message',"<div class='alert alert-success'>Successfully Saved </div>");
			 	        redirect('cms/list_of_subcategories');
				               }else{
						$this->session->set_flashdata('message', '<div class="alert alert-error">Some error occured during Insertion.</div>');
						redirect('cms/list_of_subcategories');
		 		                }



			}
			}else{
             $data['content']="whatsnew";
			$this->load->view('cms/add_whatsnew_content_type',$data);
		       }
         }


         
         function update_status_content(){
		$this->load->model('cms_model');
         $cat_id=$this->input->post('cat_id');
         $status = $this->cms_model->check_status_content($cat_id);
   
     if($status=="1")
    {
      $data=array('status_for_content'=>"0");
      $this->cms_model->update_status_content($cat_id,$data);
      echo "success";
      exit;
      }elseif($status=="0"){
      $data=array('status_for_content'=>"1");
      $this->cms_model->update_status_content($cat_id,$data);
      echo "fail";
      exit;
    }
		}
        function update_ajax_categories(){
         $this->load->model('Admin_model');
         $this->Admin_model->update_ajax();
                                         }
		function addsub()
                    {		
			$this->load->model('Admin_model');
			if ($this->input->server('REQUEST_METHOD') === 'POST')
		    {
			$this->form_validation->set_rules('cat_id', 'cat_id', 'required');
			$this->form_validation->set_rules('subcat_name', 'subcat_name', 'required');
			
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×                                                          </a><strong>', '</strong></div>');
			
			
			if ($this->form_validation->run())
			{
				     $data_to_store = array(
				    'parent_id' => $this->input->post('cat_id'),
				    'cat_name' => $this->input->post('subcat_name'),
					  );
				
				if($this->Admin_model->storesubcat($data_to_store))
				{
					$data['flash_message'] = TRUE;
				}
				else
				{
					$data['flash_message'] = FALSE;
				}
				
				header("Location:".  base_url()."admin/subcategories");
			}
		}
		$data['query']=$this->Admin_model->get_unit();
		$this->load->view('admin/add_subcat',$data);
		
     }	

     function addcat() {		
			$this->load->model('Admin_model');
			if ($this->input->server('REQUEST_METHOD') === 'POST')
		    {
			$this->form_validation->set_rules('cat_name', 'category name', 'required');
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×                                                          </a><strong>', '</strong></div>');
			
			
			if ($this->form_validation->run())
			{
				     $data_to_store = array(
				    'cat_name' => $this->input->post('cat_name'),
					  );
				
				if($this->Admin_model->storecat($data_to_store))
				{
					$data['flash_message'] = TRUE;
				}
				else
				{
					$data['flash_message'] = FALSE;
				}
				
				header("Location:".  base_url()."admin/categories");
			}
		}
		$data['query']=$this->Admin_model->get_unit();
		$this->load->view('admin/addcat',$data);
		
     }	
     
       function editdepartments1($id)
		{
			$this->load->model('Admin_model');
			$product = $this->Admin_model->getdeptdata($id);
		   
		
		   $this->form_validation->set_rules('unit_id', 'unit_id', 'required');
			$this->form_validation->set_rules('departments_name', 'departments_name', 'required');
						
		   if ($this->form_validation->run())
		   {
			   				 
			$data = array(
				   
				    'unit_id' => $this->input->post('unit_id'),
				    'departments_name' => $this->input->post('departments_name'),
				   
					
				   );
			$this->load->model('Admin_model');
			
			$this->Admin_model->updateDeptdata($id, $data);
			
			$this->session->set_flashdata('message', "<p>updated successfully.</p>");
			redirect(base_url().'admin/departments');	
		}
			$this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
			$this->data['product'] = $product;
			$this->data['unit_id'] = array(
										'name' => 'unit_id',
										'id'=>'unit_id',
										'class'=>'validate[required] form-control',
										
										'type'=>'text',
										'value' 	=> $this->form_validation->set_value('unit_id', $product['unit_id'])
									);
									
			$this->data['departments_name'] = array(
										'name' => 'departments_name',
										'id'=>'departments_name',
										'class'=>'validate[required] form-control',
										
										'type'=>'text',
										'value' 	=> $this->form_validation->set_value('departments_name', $product['departments_name'])
									);
			
					
			$this->data['query']=$this->Admin_model->get_unit();		
			$this->load->view('admin/editDeptdata',$this->data);
		}
		
		function removedepartments1()
	       {
		
			$this->load->model('Admin_model');
			$this->Admin_model->deletedepartments($this->uri->segment(3));
		
               }

     

     function update_priority()
		{
			//print_r($_POST);
			update_priority($_POST);
			echo 1;
		}
     
               
              
              

}

?>