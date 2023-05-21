<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In Page</title>
  <style>
  h1 {
    font-size: 2rem;
    text-align: center;
    margin-bottom: 1rem;
  }

  fieldset {
    border: none;
    padding-left: 50px;
    padding-right: 50px;
    margin-left:50px;
    margin-right:50px;
    border:3px solid black;
  }

  legend {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 1rem;
  }

  form {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"] {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 0.25rem;
    font-size: 1rem;
  }

  input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 0.25rem;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #0069d9;
  }
  </style>
</head>

<body>
  <h1>Sign In This Form</h1>
  <fieldset>
    <legend>Sign In</legend>
    <form action="" method="GET">
      <input type="text" name="name" placeholder="Name">
      <input type="email" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Password" id="">
      <input type="submit" value="Sign In" name="submit">
    </form>
  </fieldset>
</body>
</html>

<?php
try{
  if(isset($_GET['submit'])){
    $connection = new PDO("mysql:host=localhost;dbname=Users","root","");
 $fetch = $connection -> query("SELECT * FROM users1;");
 $name = $_GET['name'];
 $password = $_GET['password'];
 $email = $_GET['email'];
 while($row=$fetch->fetch(PDO::FETCH_ASSOC)){
   if($row['name'] === $name &&$row['name'] !== 'admin' && $row['email'] === $email && $row['email']!== "admin@admin.com" && $row['password'] == $password && $row['password'] !== 'admin123' ){
     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
     </head>
     <body>
       <script>
         alert("LOG IN SUCCEFULY..");
       </script>
     </body>
     </html>
     <?php
      header("location:home_page.html");
      exit();
     break;
   }elseif($name=="admin" && $email=="admin@admin.com" && $password=="admin123"){
    header("location:admin.php");
   }
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 </head>
 <body>
  <script>
    alert("Incorect Information..")
  </script>
 </body>
 </html>
 <?php 
}
}catch(EXception $error){
  echo "Error Happend " . $error;
}
?>