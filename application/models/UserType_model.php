<?php

class UserType_model extends CI_Model {

    public $table = 'user_type';

    function __construct() {
        parent::__construct();
    }

    function insert_data($data) {

        $this->db->insert($this->table, $data);
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
    
    function all_user_type() {
        $this->db->select('User_Type');
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

    function update($data, $conditions = array()) {
        if (!empty($conditions)) {
            foreach ($conditions as $key => $value) {
                $this->db->where($key, $value);
            }
        }
        $this->db->update($this->table, $data);
        return TRUE;
    }
    
    function get_userType_fromSong($song_id){
        $this->db->select('User_Type');
        $this->db->from('user_type');
        $this->db->join('usermain', 'usermain.UserType = user_type.ID');
        $this->db->join('user_song', 'user_song.UID = usermain.UID');
        $this->db->where('user_song.SongsID ', $song_id);
        $query = $this->db->get();
        if ($query !== FALSE && $query->num_rows() == 1) {
            return $result = $query->result_array();
        } else {
            return false;
        }
    }
    
    function get_userType_fromID($user_id){
        $this->db->select('User_Type');
        $this->db->from('user_type');
        $this->db->join('usermain', 'usermain.UserType = user_type.ID');
        $this->db->where('usermain.UID', $user_id);
        $query = $this->db->get();
        if ($query !== FALSE && $query->num_rows() == 1) {
            return $result = $query->result_array();
        } else {
            return false;
        }
    }

}

?>