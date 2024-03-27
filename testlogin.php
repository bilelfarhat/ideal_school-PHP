<?php

session_start();
include_once 'database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="dossier css\test3.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="image\login.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
<?php
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql1 = "SELECT * from utilisateur where email ='".$email."' and password ='".$password."' ";
  $result = $conn->query($sql1);
  if ($result->num_rows >0){
    while($row=$result->fetch_assoc()){
      $_SESSION['id_utilisateur']=$row['id_utilisateur'];
      $_SESSION['nom']=$row['nom'];
      $_SESSION['prenom']=$row['prenom'];
      $_SESSION['phone']=$row['phone'];
      $_SESSION['type']=$row['type'];
      $_SESSION['type']=$row['type'];

    }
    


  }
}
?>
    
</body>
</html>