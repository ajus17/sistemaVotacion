<?php

if (isset($_POST) and isset($_POST["username"]))
{  error_reporting(E_ALL);
ini_set('display_errors', '1');

  require_once "models/user.php";

  $user = new User($_POST["username"]);
  $user->getAcceso($_POST["pwd"]);
}
require_once "header.php";
?>
<style>
  form {
    padding: 10px;
  }

  button{
    margin: 10px;
  }
</style>
<i class="fa fa-heart"></i><div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-white mb-4">Bootstrap 4 Login Form</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <span class="anchor" id="formLogin"></span>
                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" action="login.php" method="post" role="form" autocomplete="off" id="formLogin">
                                <div class="form-group">
                                    <label for="uname1">Usuario </label>
                                    <input type="text" placeholder="Nombre de usuario" class="form-control form-control-lg rounded-0" name="username" id="uname1" required="">
                                </div>
                                <div class="form-group">
                                    <label>Contraseña </label>
                                    <input type="password" placeholder="Contraseña" class="form-control form-control-lg rounded-0" id="pwd" name="pwd" required="" autocomplete="new-password">
                                </div>
                                <button class="btn btn-success btn-lg float-right">Acceder</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
<?php
    require_once "footer.php";
     ?>
