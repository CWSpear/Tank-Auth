<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) 
		{
			redirect('/auth/login/');
		} 
		else 
		{
			$this->load->template_view('index');
		}
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */