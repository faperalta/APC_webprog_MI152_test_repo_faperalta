<?php
class News_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_news_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('news', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_news($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('complete_name'), 'dash', TRUE);
 
        $data = array(
            'complete_name' => $this->input->post('complete_name'),
            'nick' => $this->input->post('nick'),
            'eadd' => $this->input->post('eadd'),
			'address' => $this->input->post('address'),
			'sex' => $this->input->post('sex'),
			'no' => $this->input->post('no'),
			'comment' => $this->input->post('comment'),
            'slug' => $slug,
            
        );
        
        if ($id == 0) {
            return $this->db->insert('news', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('news', $data);
        }
    }
    
    public function delete_news($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('news');
    }
}