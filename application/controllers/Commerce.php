<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Commerce extends CI_Controller {
        public function index(){
            $this->load->model('Customer');
            $data = array();
            $data['liste'] =  $this->Customer->listeCustomer();
            $this->load->view('index', $data);
        }

        public function recherche(){
            $this->load->model('Customer');
            $data = array();
            $nom = $this->input->get('nom');
            $data['liste'] =  $this->Customer->recherche($nom);
            $this->load->view('index', $data);
        }

        public function detailCustomer() {
            $this->load->model('Customer');
            $data = array();
            $idCustomer = $this->input->get('id');
            $data['detail'] = $this->Customer->detailCustomer($idCustomer);
            $this->load->view('pages/details', $data);
        }
    }
?>