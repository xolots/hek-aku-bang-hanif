<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Dashboard extends CI_Controller
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
        if (!$this->session->userdata('logged_in')) {
            return redirect()->to(base_url('index.php'));
        }

        $this->load->view('dist/index');
    }

    public function ops()
    {
        $this->load->helper('url');
        if (!$this->session->userdata('logged_in')) {
            return redirect()->to(base_url('index.php'));
        }

        $this->load->view('ops');
    }

    public function aksi()
    {
        // return var_dump($this->input->post('operation'));
        $teks = (string)$this->input->post('text');
        $aksi = $this->input->post('operation');
        $result = call_user_func($aksi, $teks);
        var_dump($result);

    }
}
