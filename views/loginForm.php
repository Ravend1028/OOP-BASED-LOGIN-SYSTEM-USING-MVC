<?php include '../templates/header.php'; ?>

  <main class="p-5">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">

          <div class="card">
            <img src="../images/cdm-view.jpg" class="card-img-top" alt="form-img">
            <div class="card-body">
              <h3 class="card-title text-center mb-3">LOGIN</h3>

              <form class="form-floating" action="../includes/login.php" method="POST">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                  <label for="floatingInput">Username</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>

                <input type="submit" name="submit" value="Submit" class="btn btn-primary d-block mx-auto w-100">
              </form>

              <hr>

              <div class="d-flex flex-column justify-content-center align-items-center">
                <a href="signupForm.php" class="mb-2">Forgot Password</a>
                <a href="signupForm.php" >Sign Up</a>
              </div> 
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

<?php include '../templates/footer.php'; ?>