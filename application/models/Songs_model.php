<?php

class Songs_model extends CI_Model {

    public $table = 'songs';

    function __construct() {
        parent::__construct();
    }

    function insert_data($data) {

        $this->db->insert($this->table, $data);
//            print_r($this->db->last_query());exit;
        return $this->db->insert_id();
    }

    public function get($conditions = array()) {
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

}
?>



