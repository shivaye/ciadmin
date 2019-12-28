<?php

class Admin extends MY_Controller
{
	
	public function index()
	{
		$this->load->view("admin/login");
	}

	public function welcome()
	{
		if( ! $this->session->userdata('id') )
			return redirect('admin/index');

		$id = $this->session->userdata('id');
		$fetchadmin=$this->loginmodel->fetchadmin($id);

		$this->load->view("admin/index",['details'=>$fetchadmin]);
	}

	public function addcategory()
	{
		if( ! $this->session->userdata('id') )
			return redirect('admin/index');
		$this->load->view("admin/add-category");
	}

	public function addcategoryvalue()
	{
		$this->form_validation->set_rules('category_name',"Email",'required');

		if($this->form_validation->run(''))
		{
			$email = $this->input->post('email');

			echo "<pre>";
			print_r($post);
			exit();
			$this->load->model('loginmodel','addcategory');
			if($this->addcategory->add_category($post))
			{
				$this->session->set_flashdata('msg','Category added successfully');
				$this->session->set_flashdata('msg_class','alert-success');
			}
			else
			{
				$this->session->set_flashdata('msg','Category not added Please try again!!');
				$this->session->set_flashdata('msg_class','alert-danger');
			}
			return redirect('admin/addcategory');
		}
		else
		{
			echo "hello";
			exit();
			$this->load->view('admin/add-category');
		}
	}

	public function managebanner()
	{
		if( ! $this->session->userdata('id') )
			return redirect('admin/index');
		$this->load->view("admin/manage-banner");
	}

	public function profile()
	{
		if( ! $this->session->userdata('id') )
			return redirect('admin/index');

		$id = $this->session->userdata('id');

		$fetchadmin=$this->loginmodel->fetchadmin($id);

		$this->load->view("admin/profile",['details'=>$fetchadmin]);
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		return redirect('admin/index');
	}

	public function profile_update()
	{

		if($this->form_validation->run('update_profile_form')) { echo "ok";
	}else{
		$this->load->view('admin/profile'); }

	}

}

?>