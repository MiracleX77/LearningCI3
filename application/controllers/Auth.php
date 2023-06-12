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
    public function viewSearch(){
        $data["query"] = null;
        $this->load->view('search_view',$data);
    }
    
    public function userLogin()
	{
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
	}

	public function userRegister()
	{
		$this->member_model->insert_entry();
	}

    public function getMemberById()
	{
		$data["query"] = $this->member_model->get_entryById();
        $this->load->view('search_view',$dataa);
	}

}
