<?php
class Person extends CI_Model 
{
	/*Determines whether the given person exists*/
	function exists($person_id)
	{
		$this->db->from('persons');	
		$this->db->where('persons.id',$person_id);
		$query = $this->db->get();
		
		return ($query->num_rows()==1);
	}
	
	/*Gets all people*/
	function get_all($limit=10000, $offset=0)
	{
		$this->db->from('persons');
		$this->db->order_by("lastname", "asc");
		$this->db->limit($limit);
		$this->db->offset($offset);
		return $this->db->get();		
	}
	
	function count_all()
	{
		$this->db->from('persons');
		return $this->db->count_all_results();
	}
        
	function count_all_actif()
	{
		$this->db->from('persons');
		$this->db->where('actif',1);
		return $this->db->count_all_results();
	}
	
	/*
	Gets information about a person as an array.
	*/
	function get_info($person_id)
	{
		$query = $this->db->get_where('persons', array('id' => $person_id), 1);
		
		if($query->num_rows()==1)
		{
			return $query->row();
		}
		else
		{
			//create object with empty properties.
			$fields = $this->db->list_fields('persons');
			$person_obj = new stdClass;
			
			foreach ($fields as $field)
			{
				$person_obj->$field='';
			}
			
			return $person_obj;
		}
	}
	
	/*
	Get people with specific ids
	*/
	function get_multiple_info($person_ids)
	{
		$this->db->from('persons');
		$this->db->where_in('id',$person_ids);
		$this->db->order_by("lastname", "asc");
		return $this->db->get();		
	}
	
	
}
?>
