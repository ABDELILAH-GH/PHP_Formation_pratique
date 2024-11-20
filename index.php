<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   <?php include 'include/nav.php'?>
 
   <div class="container my-4">
   <?php

       if(isset($_POST['ajouter'])){
         $login = $_POST['login'];
         $password = $_POST['password'];
         if(!empty($login) && !empty($password)){
         //   connection to the database
         // require_once to execute one time 
          require_once 'include/db.php';

         }
         else{
            ?>
            <div class="alert alert-danger" role="alert">
            les champs sont obligatoire
            </div>
            <?php 
            
         }
       }
     
    ?>
   <form method="POST">
   <div class="mb-3">
    <label for="login" class="form-label">Login</label>
    <input type="text" class="form-control" name="login">
  </div>

  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <input type="submit" value="Ajouter utilisateur" class="btn btn-primary  my-2"  name="ajouter">

</form>
   </div>
</body>
</html>