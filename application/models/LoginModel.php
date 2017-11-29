<?php
    class LoginModel extends CI_Model{
        public function login($data){
            $query = $this->db->get_where('login',$data);
            return $query->row_array();
        }
    }