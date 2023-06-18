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
	/********************************
	 * Method: url/:m_id
	 * Param: m_id
	 * Return: view
	 ********************************/
	public function viewEdit($m_id){
        $data["query"] = $this->member_model->get_entryById($m_id);
        $this->load->view('edit_view',$data);
    }
	/********************************
	 * Method: POST
	 * Param: m_id
	 * Return: data ? false
	 ********************************/
	public function getMemberById()
	{	
		$m_id = $this->input->post('m_id');
		$data["query"] = $this->member_model->get_entryById($m_id);
        $this->load->view('search_view',$data);
	}
	/********************************
	 * Method: url/:m_id
	 * Param: m_id
	 * Return: data ? false
	 ********************************/
	public function deleteMemberById($m_id)
	{
		$this->member_model->delete_entryById($m_id);
		redirect('','refresh');
	}
	/********************************
	 * Method: POST
	 * Param: m_id,m_username,m_password,m_name
	 * Return: true ? false
	 ********************************/
	public function editMember()
	{
		$this->member_model->update_entry();
		redirect('','refresh');
	}

}
