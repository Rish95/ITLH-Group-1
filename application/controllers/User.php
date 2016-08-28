<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function image_first()
	{	
		/*$name=$_POST['name'];
		$data = [
		'name'=>$name];
		$this->session->set_flashdata('name', $data['name']);
		$data['name'] = $this->session->flashdata('name');*/
     $this->load->view('user/image_first_user');
    }

	public function store_form()
	{	
		// localhost:8080/user/register/css/bootstrap/bootstrap.min.css
		//linl... href="/css/bootstrap/bootstrap.min.css"
		// var_dump("in store_form");
		$this->load->model('User_model');
		$data['errors'] = $this->session->flashdata('errors');
		$data['users'] = $this->User_model->show_all();
		$this->load->model('Category_model');
		$data['categories'] = $this->Category_model->show_all();
		// var_dump($data);
		$this->load->view('user/store_form', $data);
	}

	public function store()
	{
		
		$f_name=$_POST['f_name'];
		$l_name=$_POST['l_name'];
		$date=$_POST['date'];
		$home_add=$_POST['home_add'];
		$email=$_POST['email'];
		$security=$_POST['security'];
	    $gender=$_POST['gender'];
		$number=$_POST['number'];
		// Input Validation????????
		/*$errors = [];
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
*/



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
		'name'=>$f_name,
		'lname'=>$l_name,
		'date'=>$date,
		'address'=>$home_add,
		'mail'=>$email,
		'pass'=>$security,
		'gender'=>$gender,
		'contact'=>$number];
		// Store values in DB
	

		$this->load->model('User_model');
		$isCreated = $this->User_model->store_user($data);
		if($isCreated){
			$this->session->set_flashdata('name', $data['name']);
			redirect('user/registered');
		}
		// Show Welcome page (You have successfully registered)
		// var_dump($_POST);
	}
	public function loggedin()
	{
	
		$data['name'] = $this->session->flashdata('name');
		$this->load->view('user/loggedin',$data);

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

	public function display_doforget()
	{
		$data="";
		$this->load->view('user/forgotpassword',$data);
	}
	public function doforget()
	{
		// var_dump('str');
		// 	die();
			
		$this->load->helper('url');
		$email= $this->input->post('mail');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('mail','mail','required|xss_clean|trim');
		if ($this->form_validation->run() == FALSE)
		{

			$this->load->view('user/forgotpassword');

		}
		else
		{
			$this->load->model('User_model');
			$data['users'] = $this->User_model->forgot_pass($email);
			
			
				
				$this->load->helper('string');
				$password= random_string('alnum',6);
				$this->db->where('id', $users->id);
				$this->db->update('users',array('pass'=>$password,'	tokenCode'=>MD5($password)));
				$this->load->library('email');
				$this->email->from('contact@example.com', 'sampletest');
				$this->email->to($user->mail); 
				$this->email->subject('Password reset');
				$this->email->message('You have requested the new password, Here is you new password:'. $password); 
				$this->email->send();
				$this->session->set_flashdata('message','Password has been reset and has been sent to email'); 
				redirect('user/display_doforget');
				}
	}

	public function test_inputs($value='')
	{
		return $value;
	}

}
