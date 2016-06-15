<?php 
ob_start(); 
class User extends CI_Controller
{
    function User()/* constuct*/
	{
	     parent::__construct();
		 
		 $this->load->library('session');
		 session_start();
		
	}
	
	
		
           function index()
	{
	  $this->load->model('User_model'); 
                        $current=date('Y-m-d');
			$data['query1']=$this->User_model->gettender($current);
			$data['query2']=$this->User_model->getcorrigendum($current);
                        $data['query3']=$this->User_model->getunit();

	  $this->load->view('index',$data);
		
        }

       public function view_unit()  
   		{  
                   $unit_id=$this->input->post('course_id');                     
                    $this->load->model('User_model'); 
			$data['query1']=$this->User_model->getunit_sorted($unit_id);
			$data['query2']=$this->User_model->getcorrigendum();
                        $data['query3']=$this->User_model->getunit();

	                $this->load->view('index',$data);
	
       		}

             public function view_date()  
   		{  
                   $from=$this->input->post('tender_due_date_from');
                   $to=$this->input->post('tender_due_date_to');                      
                    $this->load->model('User_model'); 
			$data['query1']=$this->User_model->getdate_sorted($from,$to);
			$data['query2']=$this->User_model->getcorrigendum();
                        $data['query3']=$this->User_model->getunit();

	                $this->load->view('index',$data);
	
       		}

       
 }
 ?>