<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbms";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
   // echo "Connection was successful<br>";
}
$user = $_POST['user'];
$pass = $_POST['pass'];
// Usage of WHERE Clause to Update Data
$sql = "UPDATE `borrower` SET `borrower_name` = '$pass' WHERE `borrower_name` = '$user'";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
//echo "<br>Number of affected rows: $aff <br>";
if($result){
    echo "We updated the record successfully";
}
else{
    echo "We could not update the record successfully";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="styles.css" rel="stylesheet">
  <link href="join.css" rel="stylesheet">
  <link href="index.css" rel="stylesheet">
  <title>NOTE - lender</title>
</head>

<body class="full-height-grow">
  <div class="container full-height-grow">
    <nav>
      <div class="logo">
        <p>Note</p>
      </div>
      <ul>
        <li><a href="DBMS-PROJECT.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="join.html">Join</a></li>
        <li><a href="login-option.html">Login</a></li>
        <li><a href="update-option.html">Update</a></li>
      </ul>
    </nav>
    <section class="join-main-section">
      <h1 class="join-text">
      Update the
        <span class="accent-text">Borrower data</span>
      </h1>


      <form class="join-form" name="f1" action = "update-borrower.php" method = "POST">
        <div class="input-group">
          <label for="user">old username</label>
          <input type="text" name="user" id="user" required>
        </div>
        <div class="input-group">
          <label for="pass">new username</label>
          <input type="text" name="pass" id="pass" required>
        </div>
        <div class="input-group">
          <button href="index1.php" type="submit" class="btn" >UPDATE</button>
        </div>
      </form>
    </section>
  </div>

</body>
</html>