<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Role_models extends CI_Model{
    private $tbl_name = "role";

    function insert($data){
        return $this->db->insert($this->tbl_name, $data);
    }

}