<?php

/**
* User Model
*/
class User_model extends CI_Model	
{
	function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by id
     */
    function get_user($id)
    {
        return $this->db->get_where('users',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all users
     */
    function get_all_users()
    {
        return $this->db->get('users')->result_array();
    }
    
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('users',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('users',$params);
        if($response)
        {
            return "user updated successfully";
        }
        else
        {
            return "Error occuring while updating user";
        }
    }
    
    /*
     * function to delete user
     */
    function delete_user($id)
    {
        $response = $this->db->delete('users',array('id'=>$id));
        if($response)
        {
            return "user deleted successfully";
        }
        else
        {
            return "Error occuring while deleting user";
        }
    }
    
	public function store_user($data)
	{
		// Insert data in users table.
		// INSERT INTO 'users' ('email', 'pass') VALUES ($data['email'], $data['pass']);
		$insert = $this->db->insert('users', $data);
		return $insert;
	}

	public function show_all()
	{
		$query = $this->db->select('*')->from('users')->get();
		
		return $query->result();
		// var_dump($query->result());
		// die();
		// $this->db->get('users');
	}

	public function show_one($id)
	{
		$query = $this->db->select('*')->from('users')->where('id', $id)->get();
		return $query->row();
	}

	public function delete_user($id)
	{
		return $this->db->delete('users', array('id' => $id));
	}

	public function update_user($id,$data)
	{
		// $query = $this->db->select('*')->from('products')->where('id', $id)->get();
		// return $query->row();
		// $insert = $this->db->insert('products', $record);
		// return $insert;
		return $this->db->update('users',$data, array('id' => $id));
	}
	public function forgot_pass($email)
	{
		$query = $this->db->select('*')->from('users')->where('mail', $email)->get();
		return $query->row();
	}

}