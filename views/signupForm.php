<?php include '../templates/header.php'; ?>

  <main class="p-5">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">

          <div class="card">
            <img src="../images/cdm-view.jpg" class="card-img-top" alt="form-img">
            <div class="card-body">
              <h3 class="card-title text-center mb-3">SIGN UP</h3>

              <form class="form-floating" action="../includes/signup.php" method="POST">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                  <label for="floatingInput">Username</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="firstname" placeholder="Firstname">
                  <label for="floatingInput">Firstname</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="lastname" placeholder="Lastname">
                  <label for="floatingInput">Lastname</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>

                <div class="form-floating mb-4">
                  <input type="password" class="form-control" id="floatingPassword" name="repassword" placeholder="Password">
                  <label for="floatingPassword">Retype Password</label>
                </div>

                <input type="submit" name="submit" value="Submit" class="btn btn-primary d-block mx-auto w-100">
              </form>

              <hr>

              <div class="d-flex justify-content-center">
                <a href="loginForm.php" >Login</a>
              </div> 
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

<?php include '../templates/footer.php'; ?>