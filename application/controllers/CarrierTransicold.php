<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarrierTransicold extends CI_Controller {

	public function index()
	{
        $data = array('title' => 'Carrier Transicold - ColdTruck Solutions, S.A. - Panamá');
        $this->load->view('head', $data); /* Head */
        $this->load->view('nav'); /* Nav */
        $this->load->view('header'); /* Header */
            $this->load->view('contenido/carrier-transicold'); /* Contenido */
        $this->load->view('footer'); /* Footer */
	}
}