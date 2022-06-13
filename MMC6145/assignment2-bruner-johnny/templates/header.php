<?php

include './includes/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/64db3d57b9.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <title>My Site Of Quotes</title>

</head>
<body>

<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><h1>My Site of Quotes</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">

    <!-- CHECK IF LOGGED IN -->
    <?php
if ((is_admin()) || (isset($loggedin) && $loggedin)) {
    echo '<form class="d-flex">
    <a href="view_quotes.php">
        <button class="btn btn-outline-primary me-2" type="button">View All Quotes</button></a>
        <a href="add_quote.php">
        <button class="btn btn-outline-info me-2" type="button">Add A New Quote</button></a>
        <a href="logout.php">
        <button class="btn btn-outline-danger me-2" type="button">Logout</button></a>
      </form>';
} else {
    echo '<form class="d-flex">
        <a href="login.php">
        <button class="btn btn-outline-success me-2" type="button">Login</button></a>
      </form>';
}
?>

    </div>
  </div>
</nav>

    <!-- BODY CONTENT -->
    <div class="container">
