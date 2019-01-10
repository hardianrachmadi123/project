<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

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
	public function index()
	{
		$this->load->view('web/menuatas');
		$this->load->view('web/menu');
		$this->load->view('web/menubawah');
	}
	public function desti()
	{
		$this->load->view('web/menuatas');
		$this->load->view('web/destination');
		$this->load->view('web/menubawah');
	}
	
	public function pricing()
	{
		$this->load->view('web/menuatas');
		$this->load->view('web/pricing');
		$this->load->view('web/menubawah');
	}
	public function contact()
	{
		$this->load->view('web/menuatas');
		$this->load->view('web/contact');
		$this->load->view('web/menubawah');
	}
	
		public function eroup()
	{
		$this->load->view('web/menuatas');
		$this->load->view('web/eroup');
		$this->load->view('web/menubawah');
	}
	
	public function asia()
	{
		$this->load->view('web/menuatas');
		$this->load->view('web/asia');
		$this->load->view('web/menubawah');
	}
	
	public function america()
	{
		$this->load->view('web/menuatas');
		$this->load->view('web/america');
		$this->load->view('web/menubawah');
	}
	
	public function afrika()
	{
		$this->load->view('web/menuatas');
		$this->load->view('web/afrika');
		$this->load->view('web/menubawah');
	}
	
}
