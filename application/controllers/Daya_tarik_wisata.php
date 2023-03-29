<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daya_tarik_wisata extends CI_Controller
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

     public function __construct()
     {
         parent::__construct();
         $this->API_URL = 'http://localhost/web-direktori-pariwisata-rest-api-3.1.10/index.php/';
     }

    public function index()
    {
        $this->load->view('components/header/header');

        $data['DTW_all'] = $this->DTW_all();
        $this->load->view('pages/dayaTarikWisata/daya_tarik_wisata_search', $data);
        $this->load->view('components/footer/footer');
    }

    public function daya_tarik_wisata_search_result()
    {
        $this->load->view('components/header/header');
        $this->load->view('pages/dayaTarikWisata/daya_tarik_wisata_search_result');
        $this->load->view('components/footer/footer');
    }

    public function daya_tarik_wisata_search_result_by_provinsi()
    {
        $this->load->view('components/header/header');
        $this->load->view('pages/dayaTarikWisata/daya_tarik_wisata_search_result_by_provinsi');
        $this->load->view('components/footer/footer');
    }

    public function daya_tarik_wisata_detail()
    {
        $this->load->view('components/header/header');
        $this->load->view('pages/dayaTarikWisata/daya_tarik_wisata_detail');
        $this->load->view('components/footer/footer');
    }

    public function daya_tarik_wisata_sekitar()
    {
        $this->load->view('components/header/header');
        $this->load->view('pages/dayaTarikWisata/daya_tarik_wisata_sekitar');
        $this->load->view('components/footer/footer');
    }

    public function DTW_all()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->API_URL.'api/direktori/DTW_all',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic c2FuZGhpa2E6d3B1MTIz'
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);
        curl_close($curl);
        return $response;
    }
}
