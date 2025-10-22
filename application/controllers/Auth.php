<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Auth extends CI_Controller
{

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
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public function index()
    {
        $this->load->helper('url');
        if (!$this->input->post()) {
            $this->session->set_userdata('error', 'Harus Post');
            return redirect()->to(base_url('index.php'));
        }

        $password = $this->input->post('password');
        if ($password === 'admin') {
            $this->session->set_userdata('logged_in', true);
            redirect(base_url('index.php/dashboard'));
            return;
        } else {
            $this->session->set_userdata('error', 'Password salah');
            return redirect()->to(base_url('index.php'));
        }
    }

    public function logout()
    {
        $this->load->helper('url');
        $this->session->sess_destroy();
        redirect(base_url());
    
    }
}
