<?php 

  include "../service/connection.php";
  session_start();

  $login_message = "";

  if (isset($_SESSION["is_login"])) {
    header("location: ../index.php");
  }

  if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND 
    password = '$password'
    ";

    $result = $db -> query($sql);

    if ($result -> num_rows > 0) {
      $data = $result -> fetch_assoc();
      $_SESSION["email"] = $data['email'];
      $_SESSION['is_login'] = true;

      header("location: ../index.php");
    }else{
      $login_message = "Email atau password salah";
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


    <!-- Manual CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/global.css">

    <title>Login</title>
    
  </head>
  <body>

      <!-- Login Form -->
      <p><i><?= $login_message ?></i></p>
      <p><i><?= $logout_message ?></i></p>
      <div class="container">
        <form class="form-container-login" action="login.php" method="POST">
          <h3 class="textJudul mb-5 mt-2">Masuk</h3>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label  textForm">E-mail</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan E-mail" name = "email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label textForm" >Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password" name ="password">
          </div>
          <div style="margin-top: -13px;" class="text-end" >
            <a href="#" class="textForm text-hover"><b>Lupa Password?</b></a>
          </div>
          <div class="d-grid mt-4">
          <button type="submit" class="btn btn-warning textForm text-hover" name = "login">Masuk</a></button>
          </div>   
          <div class>
            <span class="textForm ">Belum punya akun? <a href="register.php" class="textForm text-hover"><b>Daftar </b></a> </span>
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

    <!-- Fontawesome JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  </body>
</html>