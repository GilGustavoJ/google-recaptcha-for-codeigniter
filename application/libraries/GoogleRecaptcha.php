<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GoogleRecaptcha {

    // CodeIgniter instance
    protected $CI;

    // Google reCAPTCHA secret key
    protected $RECAPTCHA_SECRET_KEY;

    public function __construct()
    {
        // Get CodeIgniter instance
        $this->CI =& get_instance();

        // Set Google reCAPTCHA secret key
        $this->RECAPTCHA_SECRET_KEY = $this->CI->config->item('GOOGLE_RECAPTCHA_SECRET_KEY');
    }

    /**
     * Checks the response of Google reCAPTCHA.
     *
     * @param string $recaptcha_response The user's response to the reCAPTCHA challenge.
     * @return bool Returns TRUE if the reCAPTCHA response is valid, FALSE otherwise.
     */
    public function check_google_recaptcha($recaptcha_response = '')
    {
        if(empty($recaptcha_response))
            return FALSE;

        try {
            $recaptcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $this->RECAPTCHA_SECRET_KEY . '&response=' . $recaptcha_response);
            $recaptcha = json_decode($recaptcha);
            return $recaptcha->success;
        } catch (\Throwable $th) {
            return FALSE;
        }
    }
}