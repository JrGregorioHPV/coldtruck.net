<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
        $data = array('title' => 'Coldtruck Solutions, S.A. | Carrier Transicold Panamá');
        $this->load->view('head', $data); /* Head */
        $this->load->view('nav'); /* Nav */
        $this->load->view('header'); /* Header */
            $this->load->view('contenido/index'); /* Index */
        $this->load->view('footer'); /* Footer */
	}
}