<?php

include("vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL);

$users = $table->all();

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
   <div class="container">
      <nav class="navbar navbar-dark bg-primary mt-3  rounded-2">
         <div class="navbar-brand ms-4 fs-4">Admin</div>
      </nav>
   </div>

   <div class="container mt-4">
      <table class="table table-striped table-bordered">
         <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Role</th>
         </thead>
         <?php foreach ($users as $user): ?>
            <tr>
               <td><?= $user['id'] ?></td>
               <td><?= $user['name'] ?></td>
               <td><?= $user['email'] ?></td>
               <td><?= $user['phone'] ?></td>
               <td class="text-center"><?= $user['role_id'] ?></td>
            </tr>
         <?php endforeach ?>
      </table>
   </div>
</body>

</html>