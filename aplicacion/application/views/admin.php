<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if($this->session->userdata('conectado') == true){ ?>
<body>
  <div class="container">
    <div class="container">
      <h3>Bienvenido a su panel de administración</h3>
      <?php
      $emailUser = $this->session->userdata('email');
      $nombreUser = $this->session->userdata('usuario');
      echo '<h4>'.$nombreUser.'</h4>';
      echo '<p>'.$emailUser.'</p>';?>
      <p><a href="<?php echo base_url();?>index.php/home/salir">Cerrar sesion</a></p>
    </div>
  </div>



  <?php }else{

  redirect(base_url());

  }
  ?>
