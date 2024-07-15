<?php include 'includes/autoloader.php'; ?>

<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login System</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-dark">

  <main class="p-5">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">

          <div class="card">
            <img src="images/cdm-view.jpg" class="card-img-top" alt="form-img">
            <div class="card-body">
              <h3 class="card-title text-center mb-3">SIGN UP</h3>

              <form class="form-floating" action="includes/signup.php" method="POST">
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
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>