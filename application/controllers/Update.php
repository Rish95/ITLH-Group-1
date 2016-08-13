<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

public function update_form()
	{	
		// localhost:8080/user/update/css/bootstrap/bootstrap.min.css
		//linl... href="/css/bootstrap/bootstrap.min.css"
		// var_dump("in store_form");
		$this->load->model('Update_model');
		$data['categories'] = $this->Update_model->show_all();

		$this->load->model('User_model');
		$data['errors'] = $this->session->flashdata('errors');
		$data['products'] = $this->User_model->show_all();
		
		$this->load->model('Category_model');
		$data['categories'] = $this->Category_model->show_all();
		// var_dump($data);
		$this->load->view('user/update_form', $data);
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
			redirect('/user/update');
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
			redirect('/user/update');
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
			redirect('/user/update');			
		}
		// Delete user form user table by calling model.
		$this->load->model('User_model');
		$isDeleted = $this->User_model->delete_user($id);

		if($isDeleted){
			redirect('/user/update');
		}	

	}

?>