<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mywebsite";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
if (mysqli_query($conn, $sql)) {
  echo "<h1>Thank you for contacting us!</h1>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>El mahdi Ben Mekki</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="submit.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.css">

 
</head>
<body>


<div class="wrapper">
    <a href="submit.html" class="button">Go Back</a> 




<footer class="footer">
    <p class="footer-title">© 2023   Copyrights :<span> El mahdi ben Mekki</span></p>
        <div class="social-icons">
            <a href="https://www.instagram.com/thisisoden/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100008016195055"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://twitter.com/elmahdibenmekki"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.paypal.com/paypalme/elmahdibenmekki"><i class="fa-brands fa-paypal"></i></a>
      

        </div>

</body>
</html>
