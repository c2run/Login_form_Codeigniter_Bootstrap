<body>

  <div class="container">
    <div class="container">
      <br />
      <?php echo validation_errors();?>
          <form class="form-signin" action="<?php echo base_url().'index.php/home/login';?>" method="post">
            <h2 class="form-signin-heading">Conectarse</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contraseña" required>
            <div class="checkbox">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Conectarse</button>
          </form>
        </div> <!-- /container -->
</div>
