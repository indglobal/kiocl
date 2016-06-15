<?php 
ob_start(); 
class Unit extends CI_Controller
{
    function Unit()/* constuct*/
	{
	     parent::__construct();
		 
		 $this->load->library('session');
		 session_start();
		
	}
	
	
		
           function index()
	{
		if($this->session->userdata('is_logged_in'))
		{
		         $this->load->model('Admin_umodel'); 
                        $email=$this->session->userdata['is_logged_in']['username'];
			$data['query1']=$this->Admin_umodel->gettender($email);
			$this->load->view('units/dashboard',$data);
				
		}
		else
		{       
		        
			$this->load->view('index1');	
	        }	
        }
        
       
     /***********Login********************/


    function validate_credentials()
	{	
	   $this->load->model('Admin_umodel');
	   $this->form_validation->set_rules('captcha', "Captcha", 'required');
       $username= $this->input->post('username');
	   $password = $this->input->post('password');
       $is_valid = $this->Admin_umodel->validate($username, $password);
	   if($is_valid)
		{
		   $data = array(
				'username' => $username,
				'is_logged_in' => true);
		    $this->session->set_userdata('is_logged_in', $data);
		     $current=date('Y-m-d');
		   
		    $this->Admin_umodel->lastlogin($username,$current);
			if($username=="admin@gmail.com")
			{
		        redirect(base_url().'admin/index');
			}
			else{
			   redirect(base_url().'unit/index');
			}
		}
		else 
		{
	        $data['message_error'] = TRUE;
			$this->load->view('index1', $data);	
		}
	}
	
	
	function logout()
	{
		$this->session->sess_destroy();
		
		$this->load->view('index1');	
	}
	
	
	/********Tender***************/
	function tendors()
	{
	          $this->load->model('Admin_umodel'); 
                        $email=$this->session->userdata['is_logged_in']['username'];
			$data['query1']=$this->Admin_umodel->gettender($email);
			$this->load->view('units/dashboard',$data);
	}
	
	
	 function addtendor()
               {

		
			 $this->load->model('Admin_umodel');
			 if ($this->input->server('REQUEST_METHOD') === 'POST')
		       {

			$this->form_validation->set_rules('tender_name', 'tender_name', 'required');
			$this->form_validation->set_rules('tender_due_date', 'tender_due_date', 'required');
			$this->form_validation->set_rules('tendor_code', 'tendor_code', 'required');
			$this->form_validation->set_rules('tendor_opening_date', 'tendor_opening_date', 'required');
			$this->form_validation->set_rules('tender_date', 'tender_date', 'required');
			$this->form_validation->set_rules('tendor_opening_time', 'tendor_opening_time', 'required');
			$this->form_validation->set_rules('tender_due_time', 'tender_due_time', 'required');
			
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×                                                          </a><strong>', '</strong></div>');
			
			
			if ($this->form_validation->run())
			{
				include("lib/imageManipulation.php");
				include("lib/resize-class.php");
                      
				$path=$_FILES['tender_path']['name'];
				  $type		=pathinfo($path,PATHINFO_EXTENSION);
                                if($type=='pdf')
                                {
				     $img_name	= $_FILES['tender_path']['name'];
				     if(empty($path))
				    {
				     $big_image 	=	"assets_admin/dist/img/boxed-bg.png";
				
				     }
				      else
				       {
				          $big_image 	=	"assets_admin/dist/img/tendor/".$img_name;
				          copy($_FILES['tender_path']['tmp_name'],$big_image);
			      
			    
				        }

				
				 $email= $this->session->userdata['is_logged_in']['username'];
			$data['que']=$this->Admin_umodel->getunittendor($email);
			foreach ($data['que'] as $row)  
      		         {  
         	             $units_name= $row->units_name;
         	             $departments_name= $row->departments_name; 
         	             echo  $units_id= $row->units_id; 
         	             $deparments_id= $row->deparments_id; 
      		         } 

                      
      		         
      		          $current=date('Y-m-d');
			$time6 = date('H:i:s', time());	
				     $data_to_store = array(
				    'tender_id' => $this->input->post(''),
				    'tendor_code' => $this->input->post('tendor_code'),
				    'tender_name' => $this->input->post('tender_name'),
				    'tender_path'=>$big_image , 
				    'tender_due_date' => $this->input->post('tender_due_date'),
				     'tender_date' => $this->input->post('tender_date'),
				     'tendor_opening_date' => $this->input->post('tendor_opening_date'),
				     'tender_due_time' => $this->input->post('tender_due_time'),
				     'tendor_opening_time' => $this->input->post('tendor_opening_time'),
				     'tendor_cancelled' => 'false',
				   'tendor_record_date'=>$current,
                                   'tender_time'=>$time6,
				'units_id' => $units_id,
				   'deparments_id' => $deparments_id,
				   'username' => $email,
				   'corrigendum_added'=>'0'
					  );
				$this->load->model('Admin_umodel');
				
				if($this->Admin_umodel->store_tender($data_to_store))
				{
					$data['flash_message'] = TRUE;
				}
				else
				{
					$data['flash_message'] = FALSE;
				}
				
				header("Location:".  base_url()."unit/tendors");
			} 
                       
                   }

		}

		$email= $this->session->userdata['is_logged_in']['username'];
		 $data['query']=$this->Admin_umodel->getunittendor($email);
		 $this->session->set_flashdata('message', 'File format Must be in Pdf');
		$this->load->view('units/addtendor',$data);
		
     }
     
     
	function corrigendum()
	{
	           $this->load->model('Admin_umodel'); 
			$data['query1']=$this->Admin_umodel->getcorrigendum();
			$this->load->view('units/corrigendum',$data);
	}
	
	function addcorrigendum()
        {
               $this->load->model('Admin_umodel');
			 if ($this->input->server('REQUEST_METHOD') === 'POST')
		       {

			$this->form_validation->set_rules('tendor_code', 'tendor_code', 'required');
			$this->form_validation->set_rules('corrigendum_code', 'corrigendum_code', 'required');
			$this->form_validation->set_rules('corrigendum_date', 'corrigendum_date', 'required');
			$this->form_validation->set_rules('corrigendum_due_date', 'corrigendum_due_date');
			$this->form_validation->set_rules('corrigendum_due_time', 'corrigendum_due_time');

			
			
			
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×                                                          </a><strong>', '</strong></div>');
			
			
			if ($this->form_validation->run())
			{
				include("lib/imageManipulation.php");
				include("lib/resize-class.php");
                      
				$path=$_FILES['tender_path']['name'];
				 $type		=	pathinfo($path,PATHINFO_EXTENSION);
				$img_name	= $_FILES['tender_path']['name'];
				 if($type=='pdf')
                                {
				     $img_name	= $_FILES['tender_path']['name'];
				     if(empty($path))
				    {
				     $big_image 	=	"assets_admin/dist/img/boxed-bg.png";
				
				     }
				      else
				       {
				          $big_image 	=	"assets_admin/dist/img/tendor/".$img_name;
				          copy($_FILES['tender_path']['tmp_name'],$big_image);
			      
			    
				        }
				}
				 $email= $this->session->userdata['is_logged_in']['username'];
                       
			$data['que']=$this->Admin_umodel->getunittendor($email);
			foreach ($data['que'] as $row)  
      		         {  
         	             
         	             $units_id= $row->units_id; 
         	             $deparments_id= $row->deparments_id; 
      		         } 
      		         
      		         $tender=$this->input->post('tendor_code');
      		         
      		         $data['querr']=$this->Admin_umodel->getutendor($tender,$email);
			foreach ($data['querr'] as $rows)  
      		         {  
         	             $tender_name= $rows->tender_name;
         	             $tendor_code= $rows->tendor_code; 
         	             
      		         } 
      		         
      		         
      		         
      		          $current=date('Y-m-d');
			$time6 = date('H:i:s', time());	
				     $data_to_store = array(
				    'corrigendum_id' => $this->input->post(''),
				    'tender_id' => $tender,
				    'tender_name' => $tender_name,
				    'tender_path'=>$big_image , 
				    'corrigendum_code' => $this->input->post('corrigendum_code'),
				     'tendor_code' => $tendor_code,
				     'corrigendum_date'=>$this->input->post('corrigendum_date'),
                                    'corrigendum_due_date'=>$this->input->post('corrigendum_due_date'),
                                    'corrigendum_due_time'=>$this->input->post('corrigendum_due_time'),
                                    'corrigendum_status'=>'0',

				   'date'=>$current,
                                   'time'=>$time6,
				'units_id' => $units_id,
				   'deparments_id' => $deparments_id,
				   'username' => $email,
				   
					  );
				$this->load->model('Admin_umodel');
				
				if($this->Admin_umodel->store_corrigendum($data_to_store))
				{
					$data['flash_message'] = TRUE;
				}
				else
				{
					$data['flash_message'] = FALSE;
				}
				$tender=$this->input->post('tendor_code');
				$this->Admin_umodel->update_ten($tender);
				header("Location:".  base_url()."unit/corrigendum");
			}
		}

		 $email= $this->session->userdata['is_logged_in']['username'];
               
		  $data['query']=$this->Admin_umodel->gettender($email);
                  
		  $data['query1']=$this->Admin_umodel->getunittendor($email);
               $this->load->view('units/add_corrigendum',$data);
	}
	
        function canel_corg()
	{
	           $this->load->model('Admin_umodel'); 
		   $this->Admin_umodel->cancel_cor($this->uri->segment(3));	
	}


	
	/*****contracts*****/
	
	function contracts()
	{
	           $this->load->model('Admin_umodel'); 
			$data['query1']=$this->Admin_umodel->getcontracts();
			$this->load->view('units/contract',$data);
	}

       function addcontracts()
        {
               $this->load->model('Admin_umodel');
			 if ($this->input->server('REQUEST_METHOD') === 'POST')
		       {

			$this->form_validation->set_rules('tendor_code', 'tendor_code', 'required');
			$this->form_validation->set_rules('tendor_date', 'tendor_date', 'required');
			$this->form_validation->set_rules('nature_work', 'nature_work', 'required');
			$this->form_validation->set_rules('mode_tendor_enquiry', 'mode_tendor_enquiry', 'required');
			$this->form_validation->set_rules('date_of_publication', 'date_of_publication', 'required');
			$this->form_validation->set_rules('type_bidding', 'type_bidding', 'required');
			$this->form_validation->set_rules('due_date_tendor', 'due_date_tendor', 'required');
			$this->form_validation->set_rules('no_of_tendor', 'no_of_tendor', 'required');
			$this->form_validation->set_rules('no_of_parties', 'no_of_parties', 'required');
			$this->form_validation->set_rules('name_of_parties', 'name_of_parties', 'required');
			$this->form_validation->set_rules('no_of_n_parties', 'no_of_n_parties', 'required');
			$this->form_validation->set_rules('name_of_n_parties', 'name_of_n_parties', 'required');
			$this->form_validation->set_rules('contracta_awared', 'contracta_awared', 'required');
			$this->form_validation->set_rules('contracts_no', 'contracts_no', 'required');
			$this->form_validation->set_rules('contracts_date', 'contracts_date', 'required');
			$this->form_validation->set_rules('name_of_contractor', 'name_of_contractor', 'required');
			$this->form_validation->set_rules('value_of_contractor', 'value_of_contractor', 'required');
			
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×                                                          </a><strong>', '</strong></div>');
			
			
			if ($this->form_validation->run())
			{
				
				
				 $email= $this->session->userdata['is_logged_in']['username'];
			$data['que']=$this->Admin_umodel->getunittendor($email);
			foreach ($data['que'] as $row)  
      		         {  
         	             
         	             $units_id= $row->units_id; 
         	             $deparments_id= $row->deparments_id; 
      		         } 
      		         
      		        
      		         
      		         
      		         
      		          $current=date('Y-m-d');
			$time6 = date('H:i:s', time());	
				     $data_to_store = array(
				    'Contracts_id' => $this->input->post(''),
				    'tendor_code' => $this->input->post('tendor_code'),
				    'tendor_date' => $this->input->post('tendor_date'),
				    'nature_work'=>$this->input->post('nature_work') , 
				    'mode_tendor_enquiry' => $this->input->post('mode_tendor_enquiry'),
				     'date_of_publication' => $this->input->post('date_of_publication'),
				     'type_bidding'=>$this->input->post('type_bidding'),
				     'due_date_tendor' => $this->input->post('due_date_tendor'),
				    'no_of_tendor'=>$this->input->post('no_of_tendor') , 
				    'no_of_parties' => $this->input->post('no_of_parties'),
				     'name_of_parties' => $this->input->post('name_of_parties'),
				     'no_of_n_parties'=>$this->input->post('no_of_n_parties'),
				     'name_of_n_parties'=>$this->input->post('name_of_n_parties'),
				     'contracta_awared' => $this->input->post('contracta_awared'),
				    'contracts_no'=>$this->input->post('contracts_no') , 
				    'contracts_date' => $this->input->post('contracts_date'),
				     'name_of_contractor' => $this->input->post('name_of_contractor'),
				     'value_of_contractor'=>$this->input->post('value_of_contractor'),
				   'date'=>$current,
                                   'time'=>$time6,
				'unit_id' => $units_id,
				   'departments_id' => $deparments_id,
				   'username' => $email,
				   
					  );
				$this->load->model('Admin_umodel');
				
				if($this->Admin_umodel->store_contract($data_to_store))
				{
					$data['flash_message'] = TRUE;
				}
				else
				{
					$data['flash_message'] = FALSE;
				}
				
				header("Location:".  base_url()."unit/contracts");
			}
		}

		$email= $this->session->userdata['is_logged_in']['username'];
		 $data['query']=$this->Admin_umodel->gettender($email);
		  $data['query1']=$this->Admin_umodel->getunittendor($email);
               $this->load->view('units/add_contract',$data);
	}
	
	
	function viewcontract()
	{
		$this->load->model('Admin_umodel');
		$data['contract'] = $this->Admin_umodel->getcontractDetails($this->uri->segment(3));
		$this->load->view('units/view_contract',$data);
	}
	
	
	function removecontract($id)
	{
		$this->load->model('Admin_umodel');
		$this->Admin_umodel->delete($id);
		
	}
	

          
               
              
              

}

?>