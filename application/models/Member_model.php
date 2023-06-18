<?php
class Member_model extends CI_Model {

    
    public function get_entries()
    {
        $query = $this->db->get('tbl_member');
        return $query->result();
    }
    public function get_entryById($m_id)
    {
        $query = $this->db->get_where('tbl_member',array('m_id'=>$m_id));
        if(!empty($query->row())){
            return $query->row();
        }
        else{
            return false;
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
        if($query){
            return true;
        }
        else{
            return false;
        }
    }

    public function delete_entryById($m_id){
        $this->db->delete('tbl_member',array('m_id'=>$m_id));
    }
    public function update_entry()
    {		
        $data = array(
			'm_name' => $this->input->post('m_name'),
			'm_username' => $this->input->post('m_username'),
			'm_password' => $this->input->post('m_password'),
		);
        $this->db->where('m_id',$this->input->post('m_id'));
		$query = $this->db->update('tbl_member',$data);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }

}