<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class role extends API_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('role_models');
    }
    function post_insert_post(){
        $position_id = $this->input->post('position_id');
        $position = $this->input->post('position');
        $data = [
            'role_id' => null,
            'position_id' => $position_id,
            'position' => $position,
            'status' => 0
        ];
        $result = $this->role_models->insert($data);
        $this->response([
            'status' => true,
            'response' => $result
        ],REST_Controller::HTTP_OK);
    }
}