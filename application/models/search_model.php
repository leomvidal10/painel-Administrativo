<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class search_model extends CI_Model {

    public function search($search) {
        if(empty($search)) {
            return array();
        }else{
            $search = $_POST['search'];

            $this->db->like("nome", $search);
            $this->db->or_like("email", $search);
            return $this->db->get("users")->result_array();
        }
    }
}