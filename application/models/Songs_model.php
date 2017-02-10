<?php

class Songs_model extends CI_Model {

    public $table = 'songs';

    function __construct() {
        parent::__construct();
    }

    function insert_data($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    
    function update_song($song_id, $song_data) {
        $result = array();
        $this->db->where('ID', $song_id);
        $result = $this->db->update('songs', $song_data);
        if ($query !== FALSE && $query->num_rows() > 0) {
            $result = $query->result_array();
        }
        return $result;
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
        $result = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $result = $query->result_array();
        }
        return $result;
    }
    
    public function get_single($song) {
        $sql = "SELECT * FROM songs where ID=$song";
        $query = $this->db->query($sql);
        $result = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $result = $query->result_array();
        }
        return $result;
    }
    
    function delete($id) {
        $this->db->where('ID', $id);
        $this->db->delete('songs'); 
        $result = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $result = $query->result_array();
        }
        return $result;
    }
}
?>



