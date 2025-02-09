<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>List</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body class="container">
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 p-3 mt-3 rounded">
      <a class="navbar-brand" href="#"><i class="fas fa-user-shield"></i></a>
      <div class="collapse navbar-collapse justify-content-center">
         <span class="navbar-text text-light font-weight-bold mx-auto">List</span>
      </div>
      <a href="new.php" class="btn btn-success ml-auto">New Role</a>
   </nav>

   <?php
   $db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '');
   $result = $db->query("SELECT * FROM roles");
   $roles = $result->fetchAll();
   ?>

   <ul class="list-group list-group-flush mb-4">
      <?php foreach ($roles as $role): ?>
         <li class="list-group-item d-flex justify-content-between align-items-center py-2">
            <span>
               <?= $role['name'] ?> (<?= $role['value'] ?>)
            </span>
            <span>
               <a href="edit.php?id=<?= $role['id'] ?>" class="btn btn-sm btn-primary">
                  <i class="fas fa-edit"></i>
               </a>
               <a href="delete.php?id=<?= $role['id'] ?>" class="btn btn-sm btn-danger">
                  <i class="fas fa-trash-alt"></i>
               </a>
            </span>
         </li>
      <?php endforeach ?>
   </ul>
</body>

</html>