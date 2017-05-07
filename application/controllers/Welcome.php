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

    public function objednavka()
    {
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('objednavka');

        $this->load->view('template/footer');
    }

    public function users()
    {
        $this->load->view('template/navigation');
        $this->load->view('template/header');
        $this->load->view('users');
        $this->load->view('template/footer');
    }

    public function me()
    {
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('me');
        $this->load->view('template/footer');
    }


	public function index()
	{
		$this->load->view('template/header');
        $this->load->view('template/navigation');

        $this->load->view('template/omacka');
        $this->load->view('template/footer');
	}
}
