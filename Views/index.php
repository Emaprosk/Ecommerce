<main class="d-flex align-items-center justify-content-center height-100" >
     <div class="content">
          <header class="text-center">
               <h2>INICIO</h2>
          </header>

          <form action="<?php echo FRONT_ROOT ?> User/Login" method="post" class="login-form bg-dark-alpha p-5 bg-light">
               <div class="form-group">
                    <label for="">Email</label>
                    <input name="email-field" type="text" class="form-control form-control-lg" placeholder="Ingresar usuario" required>
               </div>
               <div class="form-group">
                    <label for="">Contraseña</label>
                    <input name="password-field" type="password" class="form-control form-control-lg" placeholder="Ingresar constraseña" required>
               </div>
               <button class="btn btn-primary btn-block btn-lg" type="submit">Iniciar Sesión</button>
               <a href="<?php echo FRONT_ROOT?> Home/Register"> Registrarse</a>
               <br>
               <br>
               <a href="<?php echo FRONT_ROOT?> Home/RegisterKeeper">Trabaja con nosotros...</a>
          </form>
     </div>
</main>

<?php echo "HOLA" ?>