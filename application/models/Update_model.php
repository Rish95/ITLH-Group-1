<?php

/*
* User Model
*/
class Update_model extends CI_Model	
{
	
	public function update_user($data)
	{
		
		// return $this->db->delete('products', array('id' => $id));
		// Insert data in users table.
		// INSERT INTO 'users' ('email', 'pass') VALUES ($data['email'], $data['pass']);
		$insert = $this->db->insert('products', $data);
		return $insert;
	}

	public function show_all()
	{
		$query = $this->db->select('*')->from('products')->get();
		
		return $query->result();
		// var_dump($query->result());
		// die();
		// $this->db->get('users');
	}

	public function show_one($id)
	{
		$query = $this->db->select('*')->from('products')->where('id', $id)->get();
		return $query->row();
	}

	public function delete_user($id)
	{
		return $this->db->delete('products', array('id' => $id));
	}

	}

?>

<!-- 
<?php
// class update_model extends CI_Model{
// // Function To Fetch All Students Record
// function show_students(){
// $query = $this->db->get('students');
// $query_result = $query->result();
// return $query_result;
// }
// // Function To Fetch Selected Student Record
// function show_student_id($data){
// $this->db->select('*');
// $this->db->from('students');
// $this->db->where('student_id', $data);
// $query = $this->db->get();
// $result = $query->result();
// return $result;
// }
// // Update Query For Selected Student
// function update_student_id1($id,$data){
// $this->db->where('student_id', $id);
// $this->db->update('students', $data);
// }
// }
?> -->