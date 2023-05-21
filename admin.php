<?php

$connection = new PDO("mysql:host=localhost;dbname=users","root","");
$t = $connection -> query("SELECT * FROM users1;");

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    /* Style for the page header */
h1 {
  font-size: 2.5rem;
  font-weight: bold;
  text-align: center;
  margin-top: 2rem;
}

/* Style for the table section */
div {
  margin: 2rem auto;
  max-width: 800px;
}

h2 {
  font-size: 1.5rem;
  font-weight: bold;
  margin-bottom: 1rem;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 1rem;
  cursor:pointer;
}

th {
  background-color: #333;
  color: #fff;
  font-weight: bold;
  padding: 0.5rem;
  text-align: left;
}

td {
  border: 1px solid #ccc;
  padding: 0.5rem;
}

/* Style for the edit and delete links */
a {
  color: #333;
  text-decoration: none;
  padding: 0.2rem 0.5rem;
  border: 1px solid #333;
  border-radius: 0.2rem;
  transition: all 0.2s ease-in-out;
}

a:hover {
  background-color: #333;
  color: #fff;
}
#delete {
  background-color: #ff0000;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}

#delete:hover {
  background-color: #cc0000;
}
  </style>
</head>
<body>
  <h1>Welcom back admin ..</h1>
  <div>
    <h2>The Users In Your Website</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>PASSWORD</th>
      <th>ADD | DELETE</th>
    </tr>
    <?php
    $x = "";
    while($row=$t->fetch(PDO::FETCH_ASSOC)){
      $x = $row['id'];
      echo "<tr>";
      echo "<td>" . $row['id'] ."</td>";
      echo "<td>" . $row['name'] ."</td>";
      echo "<td>" . $row['email'] ."</td>";
      echo "<td>" . sha1($row['password']) ."</td>";
      echo "<td>" . "<button id='delete'>DELETE</button>" . "</td>";
      echo"</tr>";
    }
    ?>
  </table>
  </div>
  <script>

  </script>
</body>
</html>