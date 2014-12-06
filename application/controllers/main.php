<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->library('flickr');
		$data['list_gallery'] = $this->flickr->f->people_getPublicPhotos('44115070@N00', NULL, NULL, 20, NULL);
		$this->load->view('v_index', $data);
	}
}