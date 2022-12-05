<?php include "../dbinfo.inc"; ?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/styles.css" />
  <title>RL Public Library</title>
</head>

<body>
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

  <!-- navbar -->
  <div class="top">
    <h1 class="rlpl">Raymond Luther Public Library</h1>
    <div class="loginsignup">
      <form action="login.php">
        <button class="login">Logout</button>
      </form>

    </div>
    <nav class="navbar">
      <ol>
        <li class="navbutton"><a href="home.php">Home</a></li>
        <li class="navbutton"><a href="books.php">Books</a></li>
        <li class="navbutton"><a href="movies.php">Movies</a></li>
        <li class="navbutton">
          <a href="transactions.php">Transactions</a>
        </li>
        <li class="navbutton"><a href="more.php">More</a></li>
      </ol>
    </nav>
  </div>