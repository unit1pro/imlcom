<?php

class index extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Artist_model');
        $this->load->model('UserType_model');
        $this->load->model('Home_model');
//        $this->load->library('session');
    }

    function index() {
        $session_data = $this->session->userdata('user_data');
        
            $data['songs_data'] = $this->Home_model->get_video();
            $data['page_title'] = "Home";
            $data['user_data'] = $session_data;
            $data['page'] = "home";
            $this->load->view('front/page', $data);
    }
}