<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Address extends CI_Model {

        public function detail_Address($idAddress) {
            $requette = "select * from address_detail where address_id  = '%d' ";
            $requette = sprintf($requette, $idAddress);
            $query = $this->db->query($requette);  
            $tab = array();
            foreach($query->result_array() as $row){
                $tab = $row;
            }
            
            return $tab;
        }

        

    }
?>