<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recaptcha extends CI_Controller {

	public function try_it()
	{
		$this->load->library('GoogleRecaptcha');
		$recaptcha_response = $this->input->post('g-recaptcha-response');
		if($this->googlerecaptcha->check_google_recaptcha($recaptcha_response))
			echo 'Success';
		else
			echo 'Failed';
	}
}
