<?php

class User extends CI_Controller {

    function User() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('UserType_model');
//        $this->load->library('session');
    }

    function index() {

        $session_data = $this->session->userdata('user_data');
        if (isset($session_data) && ($session_data['UID'])) {
            $data['artist_data'] = $this->User_model->get_data();
//                    print "<pre>";print_r($data['artist_data']);exit;
            $data['page_title'] = "User List";
            $data['user_data'] = $session_data;
            $data['page'] = "list_user";
            $this->load->view('backend/page', $data);
        } else {
            $this->session->unset_userdata('user_data');
            redirect('user/login', 'refresh');
        }
    }

    function login() {
        $this->form_validation->set_rules('UserName', 'Username', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');
        if ($this->form_validation->run()) {
            $formdata = $this->input->post();
            $result = $this->User_model->login($formdata['UserName'], $formdata['Password']);
            if ($result) {
                $sess_array = array();
                $this->session->set_userdata('user_data', (array) $result[0]);
                redirect('User/index', 'refresh');
            } else {
                $this->load->view('backend/login');
            }
        } else {
            $data['page_title'] = "Login";
            $data['page'] = 'login';
            $this->load->view('backend/login');
        }
    }

    function add() {

        $session_data = $this->session->userdata('user_data');

        if (isset($session_data) && ($session_data['UID'])) {


            $this->form_validation->set_rules('UserName', 'UserName', 'required');
            $this->form_validation->set_rules('FirstName', 'FirstName', 'required');
            $this->form_validation->set_rules('Email', 'Email', 'required');
            $this->form_validation->set_rules('Password', 'Password', 'required');
            $this->form_validation->set_rules('UserType', 'UserType', 'required');
            if ($this->form_validation->run()) {
                $formdata = $this->input->post();
                if (isset($formdata['UID']) && $formdata['UID'] != '') {
                    $artist_data = array(
                        'UserName' => isset($formdata['UserName']) && $formdata['UserName'] ? $formdata['UserName'] : '',
                        'FirstName' => isset($formdata['FirstName']) && $formdata['FirstName'] ? $formdata['FirstName'] : '',
                        'LastName' => isset($formdata['LastName']) && $formdata['LastName'] ? $formdata['LastName'] : '',
                        'Email' => isset($formdata['Email']) && $formdata['Email'] ? $formdata['Email'] : '',
                        'Password' => isset($formdata['Password']) && $formdata['Password'] ? md5($formdata['Password']) : '',
                        'AboutMe' => isset($formdata['AboutMe']) && $formdata['AboutMe'] ? $formdata['AboutMe'] : '',
                        'City' => isset($formdata['City']) && $formdata['City'] ? $formdata['City'] : '',
                        'State' => isset($formdata['State']) && $formdata['State'] ? $formdata['State'] : '',
                        'Country' => isset($formdata['Country']) && $formdata['Country'] ? $formdata['Country'] : '',
                        'DOB' => isset($formdata['DOB']) && $formdata['DOB'] ? date('YY-mm-dd', strtotime($formdata['DOB'])) : '',
                        'DateJoined' => isset($formdata['DateJoined']) && $formdata['DateJoined'] ? date('YY-mm-dd', strtotime($formdata['DateJoined'])) : '',
                        'Photo' => isset($formdata['Photo']) && $formdata['Photo'] ? $formdata['Photo'] : '',
                        'Website' => isset($formdata['Website']) && $formdata['Website'] ? $formdata['Website'] : '',
                        'UserType' => isset($formdata['UserType']) && $formdata['UserType'] ? $formdata['UserType'] : '',
                        'isActive' => 1,
                        'Created_By' => $session_data['UID'],
                        'Updated_By' => $session_data['UID'],
                    );
                    $result = $this->User_model->update_data($artist_data, array('UID' => $formdata['UID']));
                    if ($result) {
                        $sess_array = array();
                        $data['success'] = true;
                        $data['msg'] = "User Updated";
                        $data['page_title'] = "Add User";
                        $data['page'] = 'add_user';
                        $data['user_data'] = $session_data;
                        redirect('User/list', 'refresh');
                    } else {
                        $data['success'] = false;
                        $data['msg'] = "User not Updated";
                        $data['page_title'] = "Add User";
                        $data['page'] = 'add_user';
                        $data['user_data'] = $session_data;
                        redirect('User/list', 'refresh');
                    }
                }
                $artist_data = array(
                    'UserName' => isset($formdata['UserName']) && $formdata['UserName'] ? $formdata['UserName'] : '',
                    'FirstName' => isset($formdata['FirstName']) && $formdata['FirstName'] ? $formdata['FirstName'] : '',
                    'LastName' => isset($formdata['LastName']) && $formdata['LastName'] ? $formdata['LastName'] : '',
                    'Email' => isset($formdata['Email']) && $formdata['Email'] ? $formdata['Email'] : '',
                    'Password' => isset($formdata['Password']) && $formdata['Password'] ? md5($formdata['Password']) : '',
                    'AboutMe' => isset($formdata['AboutMe']) && $formdata['AboutMe'] ? $formdata['AboutMe'] : '',
                    'City' => isset($formdata['City']) && $formdata['City'] ? $formdata['City'] : '',
                    'State' => isset($formdata['State']) && $formdata['State'] ? $formdata['State'] : '',
                    'Country' => isset($formdata['Country']) && $formdata['Country'] ? $formdata['Country'] : '',
                    'DOB' => isset($formdata['DOB']) && $formdata['DOB'] ? date('YY-mm-dd', strtotime($formdata['DOB'])) : '',
                    'DateJoined' => isset($formdata['DateJoined']) && $formdata['DateJoined'] ? date('YY-mm-dd', strtotime($formdata['DateJoined'])) : '',
                    'Photo' => isset($formdata['Photo']) && $formdata['Photo'] ? $formdata['Photo'] : '',
                    'Website' => isset($formdata['Website']) && $formdata['Website'] ? $formdata['Website'] : '',
                    'UserType' => isset($formdata['UserType']) && $formdata['UserType'] ? $formdata['UserType'] : '',
                    'isActive' => 1,
                    'Created_By' => $session_data['UID'],
                    'Updated_By' => $session_data['UID'],
                );

                $result = $this->User_model->insert_data($artist_data);
                if ($result) {
                    $data['userType'] = $this->UserType_model->get();
                    $sess_array = array();
                    $data['success'] = true;
                    $data['msg'] = "User added";
                    $data['page_title'] = "Add User";
                    $data['page'] = 'add_user';
                    $data['user_data'] = $session_data;
                    $this->load->view('backend/page', $data);
                } else {
                    $data['userType'] = $this->UserType_model->get();
                    $data['success'] = false;
                    $data['msg'] = "User not added";
                    $data['page_title'] = "Add User";
                    $data['page'] = 'add_user';
                    $data['user_data'] = $session_data;
                    $this->load->view('backend/page', $data);
                }
            } else {
                $data['userType'] = $this->UserType_model->get();
                $data['page_title'] = "Add User";
                $data['page'] = 'add_user';
                $data['user_data'] = $session_data;
                $this->load->view('backend/page', $data);
            }
        } else {
            $this->session->unset_userdata('user_data');
            redirect('user/login', 'refresh');
        }
    }

    function logout() {
        $this->session->unset_userdata('user_data');
        $this->session->sess_destroy();
        redirect('User', 'refresh');
    }

}

?>