<?php

class Post extends CI_Controller
{
  public function __construct()
  {   parent::__construct();
    $this->load->model("post_model");
    $user=$this->session->userdata("user");

    if(!$user)
    {
      redirect(base_url("giris-yap"));
    }
  }


public function index()
{

    $viewData=new stdClass();
    $viewData->user=$this->session->userdata("user");
    $viewData->posts=$this->post_model->post_list();
    $this->load->view("post_list",$viewData);
}

public function vote()
{
  $post_id=$this->input->post("post_id");
  $vote_status=$this->input->post("vote_status");

  $user_id=$this->session->userdata("user")->id;
  $this->load->model("Vote_model");

    $vote=$this->Vote_model->get(
     array('post_id' => $post_id,

     'user_id'=>$user_id )
   );


   if ($vote) {

      if($vote->vote_status==$vote_status)
      {
          $new_vote_status=0;
      }

      else {
        $new_vote_status=$vote_status;
      }



     $this->load->model("Vote_model");
     $update=  $this->Vote_model->update( array(
       'post_id' => $post_id,
       'vote_status'=>$new_vote_status,
       'user_id'=>$user_id),

          array( 'id'=>$vote->id)
     );


   }
   else {

     $this->load->model("Vote_model");
     $insert=  $this->Vote_model->insert( array(
       'post_id' => $post_id,
       'vote_status'=>$vote_status,
       'user_id'=>$user_id));



   }



   $renderData["posts"]=$this->post_model->post_list();

      echo $this->load->view("renders/post_lists_render",$renderData,true);








}


}




 ?>
