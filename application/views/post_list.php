<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>

    <meta charset="utf-8">
        <?php $this->load->view("inc/style"); ?>

    <title>Postlar</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><?php echo $user->username ?></a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url("cikis") ?>">Çıkış <span class="sr-only">(current)</span></a>
      </li>



    </ul>

  </div>
</nav>

<div class="container">


<div class="row post_lists">

<?php echo  $this->load->view("/renders/post_lists_render",$posts,true); ?>


</div>



</div>

  </body>
</html>
