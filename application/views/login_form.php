<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>

    <?php $this->load->view("inc/style"); ?>

  </head>
  <body>
    <div class="container">
      <h3 class="text-center">Giriş Yap </h3>
        <?php if($this->session->userdata("error"))
        { ?>

          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="alert alert-danger">
              <?php echo $this->session->userdata("error"); ?>
              </div>

            </div>

          </div>

    <?php    } ?>

      <div class="row">
        <div class="col-md-6 offset-md-3 card  bg-light">
          <form action="<?php echo base_url("giris") ?>" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Kullanıcı Adı</label>
                <input type="text" class="form-control" name="username"  placeholder="Kullanıcı Adı">

              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Şifre</label>
                <input type="password" class="form-control" name="password" placeholder="Şifre">
              </div>

              <button type="submit" class="btn btn-primary">Giriş Yap</button>
            </form>

        </div>

      </div>
    </div>
  </body>
</html>
