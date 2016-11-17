<?php 
   class Users_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
			
         $this->load->helper('url'); 
         $this->load->view('Users_view',$data); 
      } 
  
      public function add_student_view() { 
         $this->load->helper('form'); 
         $this->load->view('Users_add'); 
      } 
  
      public function add_student() { 
         $this->load->model('Users_Model');
			
         $data = array( 
            'user_id' => $this->input->post('user_id'), 
            'complete_name' => $this->input->post('complete_name'),
             'nick' => $this->input->post('nick'), 
            'eadd' => $this->input->post('eadd'), 
             'address' => $this->input->post('address'), 
            'sex' => $this->input->post('sex'), 
             'no' => $this->input->post('no')

         ); 
			
         $this->Users_Model->insert($data); 
   
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
         $this->load->view('Users_view',$data); 
      } 
  
      public function update_student_view() { 
         $this->load->helper('form'); 
         $user_id = $this->uri->segment('3'); 
         $query = $this->db->get_where("users",array("user_id"=>$user_id));
         $data['records'] = $query->result(); 
         $data['old_user_id'] = $user_id; 
         $this->load->view('Users_edit',$data); 
      } 
	
      public function update_student(){ 
         $this->load->model('Users_Model');
			
         $data = array( 
           'user_id' => $this->input->post('user_id'), 
           'complete_name' => $this->input->post('complete_name'),
           'nick' => $this->input->post('nick'), 
           'eadd' => $this->input->post('eadd'), 
           'address' => $this->input->post('address'), 
           'sex' => $this->input->post('sex'), 
           'no' => $this->input->post('no')
         ); 
			
         $old_user_id = $this->input->post('old_user_id'); 
         $this->Users_Model->update($data,$old_user_id); 
			
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
         $this->load->view('Users_view',$data); 
		 
      } 
  
      public function delete_student() { 
         $this->load->model('Users_Model'); 
         $user_id = $this->uri->segment('3'); 
         $this->Users_Model->delete($user_id); 
   
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
         $this->load->view('Users_view',$data); 
      } 
	  
	  public function trivia(){
		  $this->load->helper('url'); 
		  $this->load->view('prefer');
	  }
   } 
?>