<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class User extends CI_Controller {
        public function accueil() { 
            $this->load->model('New_model');
            $data = array();
            $data['user_info'] = $this->New_model->get_info();
            $this->load->view('pages/ma_vue', $data);
        }

        public function nosProduit() {
            $this->load->model('New_model');
            $tab = $this->New_model->listeProduit();
        }
    }
?>