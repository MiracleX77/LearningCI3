<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->model('member_model');
		}
	public function index()
	{
		$data['query'] = $this->member_model->get_entries();
		$this->load->view('home_view',$data);
	}
	public function viewSearch(){
        $data["query"] = null;
        $this->load->view('search_view',$data);
    }
	public function getMemberById()
	{
		$data["query"] = $this->member_model->get_entryById();
        $this->load->view('search_view',$data);
	}
		public function deleteMemberById()
	{
		$this->member_model->delete_entry();
	}
}
