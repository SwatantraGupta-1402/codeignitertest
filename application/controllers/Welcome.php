<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {

    parent::__construct();

    // load base_url
    $this->load->helper(array('url'));
    $this->load->database();
    // Load Database Model
    $this->load->model('Welcome_user');
  }

	public function index()
	{
		/* Load form helper */ 
		$this->load->helper('form');

		/* Load form validation library */ 
		$this->load->library('form_validation');

		
		/* Set validation rule for name field in the form */

		$this->form_validation->set_rules('event_title', 'Event Title', 'required');
		$this->form_validation->set_rules('start_date', 'Start Date', 'required');
		$this->form_validation->set_rules('end_date', 'End Date', 'required');
		//$this->form_validation->set_rules('repeat', 'Repeat', 'required');
		//$this->form_validation->set_rules('repeat_on_the', 'Repeat On The', 'required');
		if ($this->form_validation->run() == FALSE) {
		
        $this->load->view('welcome_message'); 
         }else {
         $this->Welcome_user->InsertUsersData($data);  
            echo '<div classs="alert alert-success" style="text-align:center;color:green;background-color:lightgray;"><strong>Success! </strong> Data has been submitted succesfully!</div>';
            $this->load->view('welcome_message'); 
         } 

		//$this->load->view('welcome_message');
		//$this->load->view('event_list');
	}

	public function event_list()
	{
		$result['data']=$this->Welcome_user->GetUsersData();
		$this->load->view('event_list', $result);
	}

	public function event_view_page()
	{
		$this->load->view('event_view_page');
	}
}
