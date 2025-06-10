<?php 
    class M_Buku extends CI_Model{
        function __construct(){
            parent::__construct();
        }

        public function insert($data) {
            $this->db->insert('data_buku', $data);
        }
    }
?>