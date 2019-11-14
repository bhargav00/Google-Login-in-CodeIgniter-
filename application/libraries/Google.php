<?php
require_once('Google/autoload.php');

class Google
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('session');
        $this->CI->config->load('google_config');
        $this->client = new Google_Client();
        $this->client->setClientId($this->CI->config->item('google_client_id'));
        $this->client->setClientSecret($this->CI->config->item('google_client_secret'));
        $this->client->setRedirectUri($this->CI->config->item('google_redirect_url'));
        $this->client->setScopes(array(
                "https://www.googleapis.com/auth/userinfo.email",
                "https://www.googleapis.com/auth/userinfo.profile"
            )
        );


    }

    public function get_login_url()
    {
        return $this->client->createAuthUrl();

    }

    public function validate()
    {
        if (isset($_GET['code'])) {
            $this->client->authenticate($this->CI->input->get('code'));
            $this->CI->session->set_userdata('access_token', $this->client->getAccessToken());


        }
        if ($this->CI->session->has_userdata('access_token') && $this->CI->session->userdata('access_token')) {
            $this->client->setAccessToken($this->CI->session->userdata('access_token'));
            $people = new Google_Service_Oauth2($this->client);
            $person = $people->userinfo_v2_me->get();

            $info['id'] = $person->getId();
            $info['email'] = $person->getEmail();
            $info['name'] = $person->getName();
            $info['photo'] = $person->getPicture();
            $info['link'] = $person->getLink();
            $info['profile_pic'] = $person->getPicture();

            return $info;
        }


    }

    public function revoke_token()
    {
        $this->client->revokeToken();
    }
}