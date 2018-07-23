<?php

class Users extends CI_Controller
{

  public function __construct()
  { parent::__construct();



  }

public function index()
{
    $this->login_form();
}
public function login_form()
{
  $this->load->model("post_model");
  $user=$this->session->userdata("user");

  if($user)
  {
    redirect(base_url("yazi-listesi"));
  }
  else {
    $this->load->view("login_form");
  }

}

 public function login()
{
    $this->load->library("form_validation");

    $this->form_validation->set_rules("username","Kullanıcı Adı","required|trim");
    $this->form_validation->set_rules("password","Şifre","required|trim");

    $error_messages=array('required' =>" <strong>{field}</strong> alanını boş bırakamazsınız." );
    $this->form_validation->set_message($error_messages);


    if($this->form_validation->run()==false)
    {
        $this->session->set_flashdata("error",validation_errors());
        $this->load->view("login_form");
    }

    else {
      $this->load->model("user_model");

      $user=$this->user_model->get(array(
        'username' => $this->input->post("username"),
        'password'=>md5($this->input->post("password"))
      ));

      if ($user) {

          $this->session->set_userdata("user",$user);
          redirect(base_url("yazi-listesi"));
      }

      else {
        $this->session->set_flashdata("error","Böyle bir kullanıcı bulunmamaktadır.");
        $this->load->view("login_form");

      }
    }
}


public function logout()
{
  $this->session->unset_userdata("user");
  redirect(base_url());
}

}


 ?>
