<?php

class User_model extends CI_Model
{

    function User_model()
	{
	  parent::__construct();
	}

    
    
    function gettender($current)
		{
			$query = $this->db->query("SELECT t.tender_id,t.tender_name,t.tender_path,t.tendor_code,t.tender_date,t.tender_due_date,t.tendor_opening_date,t.tendor_opening_time,t.corrigendum_added,t.tender_due_time,t.tendor_cancelled,t.units_id,u.units_name,t.deparments_id,d.departments_name FROM tender t
JOIN units u ON u.units_id=t.units_id
JOIn departments d ON d.departments_id=t.deparments_id where t.tender_due_date  >= '$current' ");
			return $query->result();
   
		}
		
		function getcorrigendum($current)
		{
			$query = $this->db->query("SELECT c.corrigendum_id,c.tender_id,c.corrigendum_due_time,c.corrigendum_due_date,c.corrigendum_code,c.tendor_code,c.tender_name,c.tender_path,c.units_id,u.units_name,c.deparments_id,c.username,c.corrigendum_date,c.date,c.time FROM corrigendum c
			JOIN units u ON u.units_id=c.units_id
JOIn departments d ON d.departments_id=c.deparments_id where c.corrigendum_due_date  >= '$current' " );
			return $query->result();
   
		}


               function getunit()
		{
			$query = $this->db->query("SELECT * from units  ");
			return $query->result();
   
		}


                function getunit_sorted($course_id)
		{
			
			$query = $this->db->query("SELECT t.tender_id,t.tender_name,t.tender_path,t.tendor_code,t.tender_date,t.tender_due_date,t.tendor_opening_date,t.tendor_opening_time,t.corrigendum_added,t.tender_due_time,t.tendor_cancelled,t.units_id,u.units_name,t.deparments_id,d.departments_name FROM tender t
JOIN units u ON u.units_id=t.units_id
JOIn departments d ON d.departments_id=t.deparments_id WHERE   t.units_id='$course_id' ");
			 return $query->result();   
		}

		function getdate_sorted($from,$to)		{
			
			$query = $this->db->query("SELECT t.tender_id,t.tender_name,t.tender_path,t.tendor_code,t.tender_date,t.tender_due_date,t.tendor_opening_date,t.tendor_opening_time,t.corrigendum_added,t.tender_due_time,t.tendor_cancelled,t.units_id,u.units_name,t.deparments_id,d.departments_name FROM tender t
JOIN units u ON u.units_id=t.units_id
JOIn departments d ON d.departments_id=t.deparments_id WHERE   t.tender_due_date >='$from'  and  t.tender_due_date <='$to' ");
			 return $query->result();   
		}

		
}

?>