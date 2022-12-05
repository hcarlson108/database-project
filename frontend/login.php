<?php include "../dbinfo.inc"; ?>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/styles.css" />
   <title>Document</title>
</head>

<body>
   <div class="top" style="height: 100px;">
      <h1 class="rlpl">Raymond Luther Public Library</h1>
   </div>

   <?php
   $conn = new mysqli(
      "database-2.c1pwygv6gurd.us-east-2.rds.amazonaws.com",
      "admin",
      "Pword1234",
      "RaymondLutherPublicLibrary"
   );
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }
   ?>
   <div class="login-main">
      <div class="login-center">
         <div class="login-container">
            <h2>Login</h2>
            <form action="home.php" method="post">
               <input type="text" name="fname" placeholder="Employee...">
               <input type="password" name="ssn" placeholder="Password...">

               <?php
               $searching = $_POST["fname"];
               $sql = "SELECT * FROM Employee WHERE fname = \"" . $searching . "\";";
               $objecto = mysqli_query($conn, $sql);

               while ($results = mysqli_fetch_assoc($objecto)) {
                  echo "YRSDDSD";
               }
               ?>

               <input action="home.php" class="searchbutton" value="submit" type="submit">
            </form>


         </div>
      </div>
   </div>
</body>

</html>