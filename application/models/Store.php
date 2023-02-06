<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Store extends CI_Model {

        public function detail_store($idStore) {
            $requette = "select * from store_detail where store_id = '%d' ";
            $requette = sprintf($requette, $idStore);
            $query = $this->db->query($requette);  
            $tab = array();
            foreach($query->result_array() as $row){
                $tab = $row;
            }
            
            return $tab;
        }

        

    }
?>