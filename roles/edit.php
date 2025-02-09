<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body class="container">
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 p-3 mt-3 rounded">
      <a class="navbar-brand" href="#"><i class="fas fa-user-shield"></i></a>
      <div class="collapse navbar-collapse justify-content-center">
         <span class="navbar-text text-light font-weight-bold mx-auto">Edit</span>
      </div>
      <a href="index.php" class="btn btn-secondary ml-auto"><i class="fas fa-arrow-left"></i> Back</a>
   </nav>

   <?php
   $id = $_GET['id'];

   $db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '');
   $result = $db->query("SELECT * FROM roles WHERE id = $id");
   $role = $result->fetch();
   ?>

   <div class="row justify-content-center">
      <div class="col-md-6">
         <form action="update.php" method="post" class="form-group border p-4 rounded shadow-sm">
            <input type="hidden" name="id" value="<?= $role['id'] ?>">
            <div class="form-group">
               <label for="name">Name</label>
               <input type="text" name="name" id="name" placeholder="Name" value="<?= $role['name'] ?>" class="form-control mb-2">
            </div>
            <div class="form-group">
               <label for="value">Value</label>
               <input type="text" name="value" id="value" placeholder="Value" value="<?= $role['value'] ?>" class="form-control mb-2">
            </div>
            <button class="btn btn-primary">Update</button>
         </form>
      </div>
   </div>
</body>

</html>