<a href="" class="logo" target="_blank">  <?php // Logo de la empresa ?>
  <img src="" alt="">
</a>

<div class="section">
  <div class="container">
    <div class="row full-height justify-content-center">
      <div class="col-12 text-center align-self-center py-5">
        <div class="section pb-5 pt-5 pt-sm-2 text-center">
          <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
          <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" checked/>
          <label for="reg-log"></label>
          <div class="card-3d-wrap mx-auto">
            <div class="card-3d-wrapper">
              <div class="card-front">
                <div class="center-wrap">
                  <div class="section text-center">
                    <h4 class="mb-4 pb-3">Log In</h4>
                    <form action="<?php echo FRONT_ROOT?>User/Login" method="post">
                         <div class="form-group">
                         <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off" required>
                         <i class="input-icon uil uil-at"></i>
                         </div>
                         <div class="form-group mt-2">
                         <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" required>
                         <i class="input-icon uil uil-lock-alt"></i>
                         </div>
                         <button class="btn mt-4" type="submit">submit</button>
                    </form>
                    <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                  </div>
                </div>
              </div>
              <div class="card-back">
                <div class="center-wrap">
                  <div class="section text-center">
                    <h4 class="mb-4 pb-3">Sign Up</h4>
                    <form action="<?php echo FRONT_ROOT?>User/Register" method="post">
                         <div class="form-group">
                         <input type="text" name="name" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off" >
                         <i class="input-icon uil uil-user"></i>
                         </div>
                         <div class="form-group mt-2">
                         <input type="email" name="email" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off" >
                         <i class="input-icon uil uil-at"></i>
                         </div>
                         <div class="form-group mt-2">
                         <input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" >
                         <i class="input-icon uil uil-lock-alt"></i>
                         </div>
                         <button class="btn mt-4" type="submit">submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>