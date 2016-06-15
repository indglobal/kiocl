<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Images_examples extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		/* Standard Libraries */
		$this->load->database();
		/* ------------------ */
		
		$this->load->helper('url'); //Just for the examples, this is not required thought for the library
		
		$this->load->library('image_CRUD');
		$this->load->library('session');
		 session_start();
	}
	
	function _example_output($output = null)
	{
		$this->load->view('admin/gallery',$output);	
	}
	function _example_output_slider($output = null)
	{
		$this->load->view('admin/slider',$output);	
	}
	
	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	
	
	function example1()
	{
		$image_crud = new image_CRUD();
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_table('example_1')
			->set_image_path('assets/uploads');
			
		$output = $image_crud->render();
		
		$this->_example_output($output);
	}
	
	function example2()
	{
		$image_crud = new image_CRUD();
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_table('example_2')
		->set_ordering_field('priority')
		->set_image_path('assets/uploads');
			
		$output = $image_crud->render();
	
		$this->_example_output($output);
	}

	function example3()
	{
		$image_crud = new image_CRUD();
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_table('example_3')
		->set_relation_field('category_id')
		->set_ordering_field('priority')
		->set_image_path('assets/uploads');
			
		$output = $image_crud->render();
	
		$this->_example_output($output);
	}

	function example4()
	{
		$image_crud = new image_CRUD();
	
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_title_field('title');
		$image_crud->set_table('example_4')
		->set_ordering_field('priority')
		->set_image_path('assets/uploads');
			
		$output = $image_crud->render();
	
		$this->_example_output($output);
	}
	

	function example5()
	{
		$image_crud = new image_CRUD();
	
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_title_field('title');
		$image_crud->set_table('example_5')
		->set_ordering_field('priority')
		->set_image_path('assets/uploads/slider');
			
		$output = $image_crud->render();
	
		$this->_example_output_slider($output);
	}
	function simple_photo_gallery()
	{
		$image_crud = new image_CRUD();
		
		$image_crud->unset_upload();
		$image_crud->unset_delete();
		
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		$image_crud->set_table('example_4')
		->set_image_path('assets/uploads');
		
		$output = $image_crud->render();
		
		$this->_example_output($output);		
	}

	 function add_gal()
                    {
			$this->load->model('Admin_model');
			if ($this->input->server('REQUEST_METHOD') === 'POST')
		    {
			$this->form_validation->set_rules('add_gal', 'add_gal', 'required');
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×                                                          </a><strong>', '</strong></div>');
			
			
			if ($this->form_validation->run())
			{				
				     $data_to_store = array(
				     'gal_name' => $this->input->post('add_gal'),
				     'status' => 1	    
				    
					  );
				
				if($this->Admin_model->addgall($data_to_store))
				{
					$data['flash_message'] = TRUE;
				}
				else
				{
					$data['flash_message'] = FALSE;
				}
				
				header("Location:".  base_url()."images_examples/example4");
			}
		}
		header("Location:".  base_url()."images_examples/example4");

		
     }	



     function add_slider()
                    {
			$this->load->model('Admin_model');
			if ($this->input->server('REQUEST_METHOD') === 'POST')
		    {
			$this->form_validation->set_rules('add_slider', 'add_slider', 'required');
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×                                                          </a><strong>', '</strong></div>');
			
			
			if ($this->form_validation->run())
			{				
				     $data_to_store = array(
				     'slider_name' => $this->input->post('add_slider'),
				     'status' => 1	    
				    
					  );
				
				if($this->Admin_model->addslider($data_to_store))
				{
					$data['flash_message'] = TRUE;
				}
				else
				{
					$data['flash_message'] = FALSE;
				}
				
				header("Location:".  base_url()."images_examples/example5");
			}
		}
		header("Location:".  base_url()."images_examples/example5");

		
     }	
}