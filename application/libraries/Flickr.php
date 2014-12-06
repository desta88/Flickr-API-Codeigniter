<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include(APPPATH.'libraries/phpflickr/phpFlickr.php');

class Flickr
{
	private $ci;
    private $api_key = NULL;
    private $secret_api_key = NULL;
    private $token = NULL;

    public $f;

    public function Flickr()
    {
        // Get CI Instance
        $this->ci =& get_instance();

        // Load config
        $this->ci->load->config('flickr');

        // Get settings
        $this->api_key = $this->ci->config->item('flickr_api_key');
        $this->secret_api_key = $this->ci->config->item('flickr_secret_api_key');
		$this->token = $this->ci->config->item('flickr_token');

        // Create flickr object
        $this->f = new phpFlickr($this->api_key, $this->secret_api_key, TRUE);
		if(isset($this->token))
		{
			$this->f->setToken($this->token);
		}
    }
}

/* End of file flickr.php */
/* Location: ./application/libraries/flickr.php */