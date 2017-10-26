<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Save_Ajax extends CI_Model {

	public function __construct()
		{
			parent::__construct();
		}	

	public function Save_DaTa_No()
		{
			$Level = $this->input->post('data_send');
			$today = date("Y-m-d H:i:s");
			$data = array(
			'No_comment_level' => $Level,	
        	'No_comment_room' => $this->session->Data_Web['room'],
       		'No_comment_Name' => $this->session->Data_Web['firstname'],
       		'No_comment_Mac'  => $this->session->Mikrotik['mac'],
       		'No_comment_instay' => $this->session->Data_Web['inout'],
       		'No_comment_Time' => $today);
			$this->db->insert('no_comment', $data);
			echo $this->lang->line('thank_you');
		}	

	public function Save_DaTa_Yes()
		{
			$Level = $this->input->post('data_check');
			$today = date("Y-m-d H:i:s");
			$data = array(
			'Yes_comment_level'  => $Level, 
			'Yes_comment_name'   => $this->session->Data_Web['firstname'],
			'Yes_comment_room'   => $this->session->Data_Web['room'],
			'Yes_comment_grop'   => $this->session->Data_Web['billingplan'],
			'Yes_comment_emp_id' => $this->session->Data_Web['personal_id'],
			'Yes_comment_country'=> $this->session->Data_Web['country'],
			'Yes_comment_instay' => $this->session->Data_Web['inout'],
			'Yes_comment_web'    => $this->session->Data_Web['web'],
			'Yes_comment_time'   => $today,
			'Yes_comment_mac'    => $this->session->Mikrotik['mac']);
			$this->db->insert('yes_comment', $data);
			echo $this->lang->line('thank_you');
		}	

}
?>