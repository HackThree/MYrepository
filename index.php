<?php require("connection.php");?>

<!DOCTYPE html>
<html>
<head>
    <title>Navbar Example</title>
    <style>
        /* Style for the navbar */
        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        /* Style for the links in the navbar */
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        /* Style for the active link */
        .navbar a.active {
            background-color: #4CAF50;
        }

        /* Style for the links on hover */
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

  button:nth-of-type(1) a {
  background-color: green;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 5px;
}

button:nth-of-type(2) a {
  background-color: red;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 5px;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}



</style>
</head>
<body>
    <!-- HTML code for the navbar -->
    <div class="navbar">
        <a href="index.php" class="active">Home</a>
        <a href="add_user.php">Add New User</a>
    </div>
    
    <div>
      <table>
        <thead>
        <th>#id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Operation</th>
        </thead>
        <tbody>
          <?php
          $select = $pdo->query("SELECT * FROM users");
          while($row=$select->fetch(PDO::FETCH_ASSOC)){
            $id=$row['id'];
            $username=$row['username'];
            $email=$row['email'];
            $password=$row['password'];
            echo"<tr>
            <td>$id</td>
            <td>$username</td>
            <td>$email</td>
            <td>$password</td>"?>
            <td><button><a href="update.php?id=<?php echo  $id?>">Update</a></button><button><a href="delete.php?id=<?php echo  $id?>">Delete</a></button></td>
            <?php
            "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
</body>
</html>