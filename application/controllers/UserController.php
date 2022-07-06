<?php

class UserController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index()
	{
		$data['users'] = $this->UserModel->get_users();

		$this->load->view('data', $data);

	}

	public function add_user()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'phoneNumber' => $this->input->post('phoneNumber'),
			'email' => $this->input->post('email')
		);

		$this->UserModel->add_user($data);
		redirect('/');
	}


}

?>
