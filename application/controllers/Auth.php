<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
	}

    public function index(){
    }

    public function viewLogin()
	{
		$this->load->view('login_view');
	}

	public function viewRegister()
	{
		$this->load->view('register_view');
	}

    
    public function userLogin()
	{
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
	}

	/********************************
	 * Method: POST
	 * Param: m_username,m_password,m_name
	 * Return: true ? false
	 ********************************/
	public function userRegister()
	{
		$this->member_model->insert_entry();
		redirect('','refresh');
	}

    
}
