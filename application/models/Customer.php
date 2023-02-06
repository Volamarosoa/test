<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Customer extends CI_Model {

        public function listeCustomer() {
            $requette = "select * from customer";
            $query = $this->db->query($requette);  
            $tab = array();
            foreach($query->result_array() as $row){
                $tab[] = $row;
            }
            
            return $tab;
        }

        public function oneCustumer($idCustomer) {
            $requette = "select * from customer where customer_id = '%d' ";
            $requette = sprintf($requette, $idCustomer);
            $query = $this->db->query($requette);  
            $tab = array();
            foreach($query->result_array() as $row){
                $tab = $row;
            }
            
            return $tab;
        }

        public function detailCustomer($idCustomer) {
            $this->load->model('Store');
            $this->load->model('Address');
            $data = array();
            $data['info'] = $this->oneCustumer($idCustomer);
            $data['store'] = $this->Store->detail_store($data['info']['store_id']);
            $data['address'] = $this->Address->detail_Address($data['info']['address_id']);
            return $data;
        }

        public function recherche($nom) {
            $liked = "'%";
            $likef = "%'";
            $requette = "select * from customer where first_name like '%". $nom ."%' or last_name like '%". $nom ."%'";
            // $requette = "select * from customer where first_name like  ". $liked ."%s". $likef ."  or last_name like  ". $liked ."%s". $likef ;
            // $requette = sprintf($requette, $nom, $nom, $nom, $nom);
            $query = $this->db->query($requette);  
            $tab = array();
            foreach($query->result_array() as $row){
                $tab[] = $row;
            }
            
            return $tab;
        }
        

    }
?>