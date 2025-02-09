<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
   <div class="container text-center" style="max-width: 600px;">
      <h1 class="h4 my-4">Login</h1>

      <?php if (isset($_GET['incorrect'])): ?>
         <div class="alert alert-warning">
            Incorrect Email or Password
         </div>
      <?php endif ?>

      <?php if (isset($_GET['register'])): ?>
         <div class="alert alert-info">
            Registration success, Please Login..
         </div>
      <?php endif ?>

      <form action="_actions/login.php" method="post">
         <input type="email" class="form-control mb-2" name="email" placeholder="Email" required>
         <input type="password" class="form-control mb-2" name="password" placeholder="Password" required>
         <button class="btn btn-primary w-100 mb-3">Login</button>
      </form>
      <a href="register.php">Register</a>
   </div>
</body>

</html>