<?php
class Member_model extends CI_Model {

    
    public function get_entries()
    {
        $query = $this->db->get('tbl_member');
        return $query->result();
    }
    public function get_entryById()
    {
        $id = $this->input->post('m_id');
        $query = $this->db->get_where('tbl_member',array('m_id'=>$id));
        if(!empty($query->row())){
            return $query->row();
        }
        else{
            return "404";
        }
    }

    public function insert_entry()
    {		
        $data = array(
			'm_name' => $this->input->post('m_name'),
			'm_username' => $this->input->post('m_username'),
			'm_password' => $this->input->post('m_password'),
		);
		$query = $this->db->insert('tbl_member',$data);

    }

}