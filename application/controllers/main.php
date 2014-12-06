<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::  __construct();
		$this->load->library('flickr');
	}

	public function index()
	{
		$data['list_gallery'] = $this->flickr->f->people_getPublicPhotos('51170438@N08', NULL, NULL, 2, NULL);
		$this->load->view('v_index');
	}
}