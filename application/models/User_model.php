<?php

/**
* User Model
*/
class User_model extends CI_Model	
{
	
	public function store_user($data)
	{
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

	public function update_user($id,$data)
	{
		// $query = $this->db->select('*')->from('products')->where('id', $id)->get();
		// return $query->row();
		// $insert = $this->db->insert('products', $record);
		// return $insert;
		return $this->db->update('products',$data, array('id' => $id));
	}

}