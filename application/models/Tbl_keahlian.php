<?php

defined('BASEPATH') OR exit ('No direct script access allowed');
class Tbl_keahlian extends CI_Model{
        public function getkeahlian(){
                return $this->db->get('Tbl_keahlian',1)->row();
        }
}
?>