<?php


class Vote_model extends CI_Model
{


public function get($where=array())
{
    return $this->db->where($where)->get("votes")->row();
}

public function insert($insert=array())
{
  return $this->db->insert("votes",$insert);
}


public function update($update=array(),$where=array())
{
  return $this->db->where($where)->update("votes",$update);
}


}


 ?>
