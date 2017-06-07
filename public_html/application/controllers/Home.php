<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->data['view_file'] = 'home_view';
        $this->load->view('_layouts/main', $this->data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */