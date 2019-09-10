<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
	    // Load url helper
	    $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('home');
	}
	
	public function mysqlQueries()
	{
	    $this->load->view('header');
	    $this->load->view('mysqlqueries');
	}
	
	public function restfulApis()
	{
	    $this->load->view('header');
	    $this->load->view('restfulapi');
	}
	
	public function detectDevice(){	    
	    $data = array();
	    $this->load->library('user_agent');
	    if ($this->agent->is_mobile())
	        $data['type'] = 'Phone';
	    elseif ($this->agent->is_mobile('iPad'))
	        $data['type'] = 'Tablet';
	    else
            $data['type'] = 'Desktop';
        $data['os'] = $this->agent->platform();
        echo json_encode($data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */