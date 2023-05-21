<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Page</title>
  <style>
  fieldset {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 20px 0;
    width:600px;
    border:2px solid black;
  }

  form {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"] {
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    box-sizing: border-box;
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding:2px;
    width:100px;
    font-size:19px;
    cursor:pointer;
  }
  </style>
</head>

<body>
  <fieldset>
    <legend>ADD USERS</legend>
    <form action="" method="post">
      <input type="text" name="name" placeholder="Name" id="name" required>
      <input type="email" name="email" placeholder="Email" id="email" required>
      <input type="password" name="password" placeholder="Password" id="password" required>
      <input type="submit" value="Add User" name="submit" id="submit">
    </form>
  </fieldset>
  <script src="main.js"></script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
  try{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $connect = new PDO("mysql:host=localhost;dbname=users","root","");
    // $connect -> exec("CREATE TABLE Users1(id tinyint auto_increment primary key,name varchar(100),email varchar(100),password varchar(100));");
    $connect -> exec("INSERT INTO Users1(name,email,password) VALUES('$name','$email','$password');");
    $name = '';
    $email = '';
    $password = '';
    header("Refresh:1,url=signin_page.php");

  }catch(EXception $error){
    echo "ERROR HAPPEND : " . $error->getMessage();
  }
}

?>