<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_user extends CI_Model {

  function InsertUsersData(){
 
 		$eventTitle = $this->input->post('event_title');
 		$stratDate = $this->input->post('start_date');
 		$endDate = $this->input->post('end_date');
 		$repeat = $this->input->post('repeat');
 		$everyoccurance = $this->input->post('every_occurance');
 		$dwmoccurance = $this->input->post('dwm_occurance');
 		$repeatonthe = $this->input->post('repeat_on_the');
 		$countoccurance = $this->input->post('count_occurance');
 		$dayoccurance = $this->input->post('day_occurance');
 		$dmyqoccurance = $this->input->post('dmyq_occurance'); 
 		$data = array(
 			'event_title'=>$eventTitle,
 			'start_date'=>$stratDate,
 			'end_date'=>$endDate,
 			'repeats'=>$repeat,
 			'every_occurance'=>$everyoccurance,
 			'dwm_occurance'=>$dwmoccurance,
 			'repeat_on_the'=>$repeatonthe,
 			'count_occurance'=>$countoccurance,
 			'day_occurance'=>$dayoccurance,
 			'dmyq_occurance'=>$dmyqoccurance
 		);
 		// echo "<pre>";
 		// print_r($data); die();

 		$this->db->insert('event_details',$data);
  }

  function GetUsersData(){
  	$query = $this->db->get("event_details");
    return $query->result();
  }
}