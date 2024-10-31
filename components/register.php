<?php

    include "../service/connection.php";
    session_start();


    $register_message = "";

    if (isset($_SESSION["is_login"])){
        header("location: ../index.php");
    }

    if(isset($_POST['register'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (email, password) VALUES 
        ('$email', '$password')";

        if ($db->query($sql)) {
            $register_message = "daftar berhasil, silahkan login";

        } else {
            $register_message = "daftar gagal, coba lagi";
        }

    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/global.css">

    <title>Daftar</title>

     
  </head>
  <body>
  <p><i><?= $register_message ?></i></p>
    <div class="container">
      <form class="form-container-register" action="register.php" method="POST">
        <h3 class="textJudul">Daftar</h3>
        <div class="row">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name = "password">
          </div>
          <div class="d-grid mt-5">
           <button type="submit" class="btn btn-warning textForm text-hover" name = "register">Daftar</button>
          </div>  
          <div class="mt-1">
            <span class="textForm ">Sudah punya akun? <a href="login.php" class="textForm text-hover"><b>Login</b></a> </span>
          </div> 
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>