
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {



	public function add_form()
	{	
		// localhost:8080/ctg/add/css/bootstrap/bootstrap.min.css
		//linl... href="/css/bootstrap/bootstrap.min.css"
		// var_dump("in store_form");
		$this->load->model('Category_model');
		$data['errors'] = $this->session->flashdata('errors');
		$data['categories'] = $this->Category_model->show_all();
		// var_dump($data);
		$this->load->view('categories/add_form', $data);
						// user/register
	}

	public function store()
	{
		// Input Validation????????
		$errors = [];
		if($_POST['title'] == '') // if(empty($email))
		{
			$errors['title'] = "\nCategory title is required.";
		}
		else{
				$title = $this->test_inputs($_POST['title']);
			}	
		// if($_POST['qty'] == '') // if(empty($email))
		// {
		// 	$errors['qty'] = "\nQuantity is required.";
		// }
		// else
		// {
		// 	if($_POST['qty'] >= '0') 
		// 	{
		// 		$qty = $this->test_inputs($_POST['qty']);
		// 	}
		// 	else
		// 	{
		// 		$qty = $this->test_inputs($_POST['Out of Stock']);
		// 		// $errors['qty'] = "\nOut of Stock";
		// 	}
		// }	
			
		$visible = $this->test_inputs($_POST['visible']);
		
		// $icon = $this->test_inputs($_POST['upimg']);
		// else{
		// 	if(!filter_var($_POST['prdtnm'], FILTER_VALIDATE_EMAIL))
		// 	{
		// 		$errors['prdtnm'] = "Please enter a valid email.";
		// 	}else{
		// 		$email = $this->test_inputs($_POST['prdtnm']);
		// 	}			
		// }


		$target_path = "public/uploads/";

		$target_path = $target_path . basename( $_FILES['fileToUpload']['name']); 

		if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {
			echo "The file ".  basename( $_FILES['fileToUpload']['name']). 
			" has been uploaded";
			$icon = $target_path;

		} else{
			echo "There was an error uploading the file, please try again!";
		}

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
			redirect('/ctg/add');
			// $this->store_form($errors);
		}
		
		$data = [
			'title' => $title,
			'visible' => $visible,
			'icon' => $icon,
			
		];
		// Store values in DB
		$this->load->model('Category_model');
		$isCreated = $this->Category_model->store_form($data);
		if($isCreated){
			redirect('/ctg/add');
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
			redirect('/ctg/add');			
		}
		// Delete user form user table by calling model.
		$this->load->model('Category_model');
		$isDeleted = $this->Category_model->delete_user($id);

		if($isDeleted){
			redirect('/ctg/add');
		}	

	}

	

	public function test_inputs($value='')
	{
		return $value;
	}

}
