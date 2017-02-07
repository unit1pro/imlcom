<?php

class User_model extends CI_Model {

    public $table = 'usermain';

    function __construct() {
        parent::__construct();
    }

    function login($user_name, $user_password) {


        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('UserName', $user_name);
        $this->db->where('Password', md5($user_password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function insert_data($data) {

        $this->db->insert($this->table, $data);
//            print_r($this->db->last_query());exit;
        return $this->db->insert_id();
    }

    public function get_data($conditions = array()) {
        $this->db->select('*');
        $this->db->from($this->table);
        if (!empty($conditions)) {
            foreach ($conditions as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    function update_data($data, $conditions = array()) {
        if (!empty($conditions)) {
            foreach ($conditions as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        $this->db->update($this->table, $data);
        return TRUE;
    }

}

?>