<?php


class User_model extends CI_Model
{


public function get($where=array())
{
  return $this->db->where($where)->get("users")->row();
}

}

 ?>
