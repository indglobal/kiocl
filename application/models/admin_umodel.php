<?php

class Admin_umodel extends CI_Model
{

    function Admin_umodel()
	{
	  parent::__construct();
	}

	/*********Login****************/

	function validate($email_address, $password)
	{
		$this->db->where('username', $email_address);
		$this->db->where('password', $password);
		$query = $this->db->get('user');
		if($query->num_rows == 1)
		{
		  return true;
		}
		 
    }
    
    
    function lastlogin($username,$current)
		{
		    $this->db->where('username',$username);
			$this->db->set('last_login',$current);
			
			$this->db->update('user');
			
		} 
    
    /****tender*****/
    
    
    function gettender($email)
		{
			$query = $this->db->query("SELECT t.tender_id,t.tender_name,t.tender_path,t.tendor_code,t.tender_date,t.tender_due_date,t.tendor_opening_date,t.tendor_opening_time,t.tender_due_time,t.tendor_cancelled,t.units_id,u.units_name,t.deparments_id,d.departments_name FROM tender t
JOIN units u ON u.units_id=t.units_id
JOIn departments d ON d.departments_id=t.deparments_id  WHERE t.username='$email' ");
			return $query->result();
   
		}
		
		function getunittendor($email)
		{
			$query = $this->db->query("SELECT  us.user_id,us.username,us.deparments_id,us.units_id from user us
JOIN units u ON u.units_id=us.units_id
JOIn departments d ON d.departments_id=us.deparments_id  WHERE us.username='$email'");
			return $query->result();
   
		}
		
		function store_tender($data)
		{
			$insert = $this->db->insert('tender', $data);
			return $insert;
			
		}
		
		
		function getcorrigendum()
		{
			$query = $this->db->query("SELECT c.corrigendum_id,c.tender_id,c.corrigendum_code,c.corrigendum_status,c.tendor_code,c.tender_name,c.tender_path,c.units_id,c.deparments_id,c.username,c.corrigendum_date,c.date,c.time FROM corrigendum c");
			return $query->result();
   
		}
		
		 function getutendor($tender,$email)
		{
			$query = $this->db->query("SELECT t.tender_id,t.tender_name,t.tender_path,t.tendor_code,t.tender_date,t.tender_due_date,t.tendor_opening_date,t.tendor_cancelled,t.units_id,u.units_name,t.username,t.deparments_id,d.departments_name FROM tender t
JOIN units u ON u.units_id=t.units_id
JOIn departments d ON d.departments_id=t.deparments_id
Where t.tender_id='$tender' and t.username='$email' ");
			return $query->result();
   
		}
		
		function store_corrigendum($data)
		{
			$insert = $this->db->insert('corrigendum', $data);
			return $insert;
			
		}
		
		function update_ten($tendor)
		{
		    $this->db->where('tender_id',$tendor);
			$this->db->set('corrigendum_added','1');
			$this->db->update('tender');
			$url = base_url()."admin/orders";
			header("Location:$url");
		}
		
		 function getcontracts()
		{
			$query = $this->db->query("SELECT * from Contracts ");
			return $query->result();
   
		}
		
		function store_contract($data)
		{
			$insert = $this->db->insert('Contracts', $data);
			return $insert;
			
		}
		
		 function getcontractDetails($id)
		{
			$result = $this->db->query("SELECT * from Contracts where Contracts_id='$id' ");
			if($result->num_rows()>0)
				return $result->row();
			else
				return 'empty';
   
		}
		
		
		
		function delete($id)
		{
			$this->db->where('Contracts_id', $id);
			$this->db->delete('Contracts');
			$url = base_url()."unit/contracts";
			header("Location:$url");
		}

                function cancel_cor($id)
		{
		    $this->db->where('corrigendum_id',$id);
			$this->db->set('corrigendum_status','1');
			$this->db->update('corrigendum');
			$url = base_url()."unit/corrigendum";
			header("Location:$url");
		}  
}

?>