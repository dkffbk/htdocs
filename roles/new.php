<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>New</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body class="container">
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 p-3 mt-3 rounded">
      <a class="navbar-brand" href="#"><i class="fas fa-user-shield"></i></a>
      <div class="collapse navbar-collapse justify-content-center">
         <span class="navbar-text text-light font-weight-bold mx-auto">New</span>
      </div>
      <a href="index.php" class="btn btn-secondary ml-auto"><i class="fas fa-arrow-left"></i> Back</a>
   </nav>

   <div class="row justify-content-center">
      <div class="col-md-6">
         <form action="add.php" method="post" class="form-group border p-4 rounded shadow-sm">
            <div class="form-group">
               <label for="name">Name</label>
               <input type="text" name="name" id="name" placeholder="Name" class="form-control mb-2">
            </div>
            <div class="form-group">
               <label for="value">Value</label>
               <input type="text" name="value" id="value" placeholder="Value" class="form-control mb-2">
            </div>
            <button class="btn btn-success">Add</button>
         </form>
      </div>
   </div>
</body>

</html>