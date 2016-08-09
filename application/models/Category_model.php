<?php

/**
* User Model
*/
class Category_model extends CI_Model	
{
	
	public function store_form($data)
	{
		// Insert data in users table.
		// INSERT INTO 'users' ('email', 'pass') VALUES ($data['email'], $data['pass']);
		$insert = $this->db->insert('categories', $data);
		return $insert;
	}

	public function show_all()
	{
		$query = $this->db->select('*')->from('categories')->get();
		return $query->result();
		// var_dump($query->result());
		// die();
		// $this->db->get('users');
	}

	public function show_one($id)
	{
		$query = $this->db->select('*')->from('categories')->where('id', $id)->get();
		return $query->row();
	}

	public function delete_user($id)
	{
		return $this->db->delete('categories', array('id' => $id));
	}

	public function update_user($id,$data)
	{
		
		return $this->db->update('categories',$data, array('id' => $id));
	}

}