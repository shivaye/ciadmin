<?php
class Login extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		if( $this->session->userdata('id') )
			return redirect('admin/welcome');

	}

	public function login()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('pass','Password','required|max_length[12]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run())
		{
			$email=$this->input->post('email');
			$pass=$this->input->post('pass');
			
			$login_id=$this->loginmodel->isvalidate($email,$pass);
			if($login_id)
			{
				$this->session->set_userdata('id',$login_id);
				return redirect('admin/welcome');
			}
			else
			{
				$this->session->set_flashdata('Login_failed','Invalid Username/Password');
				return redirect('admin/index');
			}


		}
		else
		{
			$this->load->view('Admin/index');
		}

	}
	public function sendemail()
	{

		$this->form_validation->set_rules('username','Email','required|alpha');
		$this->form_validation->set_rules('password','Password','required|max_length[12]');
		$this->form_validation->set_rules('firstname','First Name','required|alpha');
		$this->form_validation->set_rules('lastname','last Name','required|alpha');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run())
		{
			$post=$this->input->post(); 
			$this->load->model('loginmodel','user');
			if($this->user->add_user($post))
			{
				$this->session->set_flashdata('user','User added successfully');
				$this->session->set_flashdata('user_class','alert-success');
			}
			else
			{
				$this->session->set_flashdata('user','User not added Please try again!!');
				$this->session->set_flashdata('user_class','alert-danger');
			}
			return redirect('users/register');
  //   $this->load->library('email');

  //   $this->email->from(set_value('email'),set_value('fname'));
  //   $this->email->to("ajay.suneja1993@gmail.com");
  //   $this->email->subject("Registratiion Greeting..");

  //   $this->email->message("Thank  You for Registratiion");
  //   $this->email->set_newline("\r\n");
  //   $this->email->send();

  //    if (!$this->email->send()) {
  //   show_error($this->email->print_debugger()); }
  // else {
  //   echo "Your e-mail has been sent!";
  // }
  // }
		}
		else
		{
			$this->load->view('Admin/register');
		}
	}

	public function profile()
	{

		echo "hiiiiiii";
		exit();
		
	}
}