<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charlas extends CI_Controller {

	public function index()
	{
        $data = array('title' => 'Charlas - ColdTruck Solutions, S.A. - Panamá');
        $this->load->view('head', $data); /* Head */
        $this->load->view('nav'); /* Nav */
        $this->load->view('header'); /* Header */
            $this->load->view('contenido/charlas'); /* Contenido */
        $this->load->view('footer'); /* Footer */
	}
}