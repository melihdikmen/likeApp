<?php
class Post_model extends CI_Model
{


  public function get_all($where=array())
  {
      return $this->db->where($where)->get("posts")->result();
  }


  public function post_list(){
        $user = $this->session->userdata("user");
        $sql = "SELECT p.*, v.vote_status,
                (SELECT count(*) from votes WHERE vote_status = 1 AND post_id = p.id) as like_count,
                (SELECT count(*) from votes WHERE vote_status = -1 AND post_id = p.id) as dislike_count
                FROM posts p
                LEFT JOIN votes v ON p.id = v.post_id AND v.user_id = " . $user->id;
        return $this->db->query($sql)->result();
    }



}

 ?>
