<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login System</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <main class="p-5">
    <div class="container">

      <div class="d-flex flex-column justify-content-center align-items-center p-3 border">
        <h1 class="mb-4 uppercase">Signup</h1>

        <form class="form-floating">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput">Username</label>
          </div>

          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Firstname">
            <label for="floatingInput">Firstname</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Lastname">
            <label for="floatingInput">Lastname</label>
          </div>

          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>

          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Retype Password</label>
          </div>
        </form>
      </div>

    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>