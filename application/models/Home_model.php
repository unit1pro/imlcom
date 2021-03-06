<?php

class Home_model extends CI_Model {

    public $userTable = 'usermain';
    public $songsTable = 'songs';
    public $userSongTable = 'user_song';

//    public $artistTable = 'artist';

    function __construct() {
        parent::__construct();
    }

    public function get_video($condition = array(), $limit = NULL, $offset = NULL) {
        $sql = "SELECT s.ID,s.Song_Title,s.composer,s.director,s.Image,s.Song_status,u.FirstName,u.LastName,us.UID,us.SongsID,mus.LUSID From (SELECT max(ID) AS LUSID, UID as LUID, SongsID as LSID FROM " . $this->userSongTable . " GROUP BY UID) AS mus INNER JOIN " . $this->userSongTable . " AS us ON mus.LUSID = us.ID INNER JOIN " . $this->songsTable . " AS s ON us.SongsID = s.ID INNER JOIN " . $this->userTable . " AS u ON us.UID = u.UID WHERE s.Song_status = 1 ";
        $query = $this->db->query($sql);
        $result = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $result = $query->result_array();
        }
        return $result;
    }

}
