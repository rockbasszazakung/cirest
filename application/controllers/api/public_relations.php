<<<<<<< HEAD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends API_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('public_relations_model');
    }
    function get_all_get(){
        $keywoed = $this->get('keyword');
        $result = $this->public_relations_model->get_all($keywoed);
        $this->response([
            'status' => true,
            'response' => $result
        ],REST_Controller::HTTP_OK);

        //ไม่สำเร็จ
    
        // $this->response([
        //     'status' => false,
        //     'message' => []
        // ],REST_Controllers::HTTP_CONFLICT);
    }
    function post_create_post(){
        $public_name = $this->input->post('public_name');
        $user_id = $this->input->post('user_id');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $data = [
            'public_id' => null,
            'public_name' => $public_name,
            'user_id' => $user_id,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'status' => 0
        ];
        $result = $this->activities_model->insert($data);
        $this->response([
            'status' => true,
            'response' => $result
        ],REST_Controller::HTTP_OK);
    }
    
    
=======
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends API_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('public_relations_model');
    }
    function get_all_get(){
        $keywoed = $this->get('keyword');
        $result = $this->public_relations_model->get_all($keywoed);
        $this->response([
            'status' => true,
            'response' => $result
        ],REST_Controller::HTTP_OK);

        //ไม่สำเร็จ
    
        // $this->response([
        //     'status' => false,
        //     'message' => []
        // ],REST_Controllers::HTTP_CONFLICT);
    }
    
    
>>>>>>> a2cceffee55bc4a902cdb4dbccc9b74cc7c52baf
}