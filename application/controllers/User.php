<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {



	public function store_form()
	{	
		// localhost:8080/user/register/css/bootstrap/bootstrap.min.css
		//linl... href="/css/bootstrap/bootstrap.min.css"
		// var_dump("in store_form");
		$this->load->model('User_model');
		$data['errors'] = $this->session->flashdata('errors');
		$data['products'] = $this->User_model->show_all();
		$this->load->model('Category_model');
		$data['categories'] = $this->Category_model->show_all();
		// var_dump($data);
		$this->load->view('user/store_form', $data);
	}

	public function store()
	{
		// Input Validation????????
		$errors = [];
		if($_POST['prdtnm'] == '') // if(empty($email))
		{
			$errors['prdtnm'] = "\nProduct Name is required.";
		}
		else{
				$prdtnm = $this->test_inputs($_POST['prdtnm']);
			}	
		if($_POST['qty'] == '') // if(empty($email))
		{
			$errors['qty'] = "\nQuantity is required.";
		}
		else
		{
			if($_POST['qty'] >= '0') 
			{
				$qty = $this->test_inputs($_POST['qty']);
			}
			else
			{

				$qty = $this->test_inputs('0');
				// $errors['qty'] = "\nOut of Stock";
			}
		}	
		if($_POST['prc'] == '') // if(empty($email))
		{
			$errors['prc'] = "\nProduct Price is required.";
		}
		else{
				$prc = $this->test_inputs($_POST['prc']);
			}	
		$ctg_id = $this->test_inputs($_POST['ctg_id']);
		$descp = $this->test_inputs($_POST['descp']);
		// else{
		// 	if(!filter_var($_POST['prdtnm'], FILTER_VALIDATE_EMAIL))
		// 	{
		// 		$errors['prdtnm'] = "Please enter a valid email.";
		// 	}else{
		// 		$email = $this->test_inputs($_POST['prdtnm']);
		// 	}			
		// }




		// $this->form_validation->set_rules('email', 'Email', 'required');
		// var_dump($this->form_validation->run());
		// die();
	 //    if ($this->form_validation->run() == FALSE)
	 //    {
	 //    	var_dump("in error");
	 //            $this->load->view('user/store_form');
	 //    }
		// Check if errors is empty, else show them an error
		if(!empty($errors))
		{
			// var_dump($errors);
			// die();
			$this->session->set_flashdata('errors',$errors);
			redirect('/user/register');
			// $this->store_form($errors);
		}
		
		$data = [
			'prdt_nm' => $prdtnm,
			'qty' => $qty,
			'prc' => $prc,
			'ctg_id' => $ctg_id,
			'descp' => $descp,

		];
		// Store values in DB
	

		$this->load->model('User_model');
		$isCreated = $this->User_model->store_user($data);
		if($isCreated){
			redirect('/user/register');
		}
		// Show Welcome page (You have successfully registered)
		// var_dump($_POST);
	}

	public function delete($id)
	{
		if(!is_numeric($id))
		{
			$errors = ['id' => "ID should be an integer."];
			$this->session->set_flashdata('errors',$errors);
			redirect('/user/register');			
		}
		// Delete user form user table by calling model.
		$this->load->model('User_model');
		$isDeleted = $this->User_model->delete_user($id);

		if($isDeleted){
			redirect('/user/register');
		}	

	}

	public function update_form($id)
	{
		$this->load->model('User_model');
		$data['errors'] = $this->session->flashdata('errors');
		$data['product'] = $this->User_model->show_one($id);
		$this->load->model('Category_model');
		$data['categories'] = $this->Category_model->show_all();
		$this->load->view('user/update_form',$data);
		
		// var_dump($id);
		
		// die();
		// $this->load->model('User_model');
		// $record = $this->User_model->show_one($id);
		// $this->load->model('Update_model');
		// $data['products'] = $this->Update_model->show_all();
		// $record = $this->User_model->update($id);

		// var_dump($record);
		// $data = [
		// 	'prdt_nm' => $prdtnm,
		// 	'qty' => $qty,
		// 	'prc' => $prc,
		// 	'ctg_id' => $ctg_id,
		// 	'descp' => $descp,

		// ];
	}

	public function update()
	{
		// Input Validation????????
		$errors = [];
		if($_POST['prdtnm'] == '') // if(empty($email))
		{
			$errors['prdtnm'] = "\nProduct Name is required.";
		}
		else{
				$prdtnm = $this->test_inputs($_POST['prdtnm']);
			}	
		if($_POST['qty'] == '') // if(empty($email))
		{
			$errors['qty'] = "\nQuantity is required.";
		}
		else
		{
			if($_POST['qty'] >= '0') 
			{
				$qty = $this->test_inputs($_POST['qty']);
			}
			else
			{
				$qty = $this->test_inputs($_POST['Out of Stock']);
				// $errors['qty'] = "\nOut of Stock";
			}
		}	
		if($_POST['prc'] == '') // if(empty($email))
		{
			$errors['prc'] = "\nProduct Price is required.";
		}
		else{
				$prc = $this->test_inputs($_POST['prc']);
			}	
		$ctg_id = $this->test_inputs($_POST['ctg_id']);
		$descp = $this->test_inputs($_POST['descp']);
		
		if(!empty($errors))
		{
			// var_dump($errors);
			// die();
			$this->session->set_flashdata('errors',$errors);
			redirect('/user/register');
			// $this->store_form($errors);
		}
		
		$data = [
			'prdt_nm' => $prdtnm,
			'qty' => $qty,
			'prc' => $prc,
			'ctg_id' => $ctg_id,
			'descp' => $descp,

		];
		// Store values in DB
	
		$id=$_POST['id'];
		$this->load->model('User_model');
		$isCreated = $this->User_model->update_user($id,$data);
		if($isCreated){
			redirect('/user/register');
		}
		// Show Welcome page (You have successfully registered)
		// var_dump($_POST);
	}

	public function test_inputs($value='')
	{
		return $value;
	}

}
