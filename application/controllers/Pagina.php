<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	public function vista_pagina()
	{
		$this->load->view('menu/view_header');
        $this->load->view('vista1');
		$this->load->view('menu/view_footer');
		
	}
	
}