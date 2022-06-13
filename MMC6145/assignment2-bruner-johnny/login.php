<?php

// SET VARIABLES
$loggedin = false;
$error = false;

// CHECK IF FORM HAS BEEN SUBMITTED
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        if ((strtolower($_POST['email']) == 'johnnybruner@ufl.edu') && ($_POST['password'] == 'JBoy1979!')) {

            // CREATE COOKIE
            setcookie('Johnny', 'Bruner', time() + 3600);

            // SET LOG IN
            $loggedin = true;
        } else {
            $error = 'The submitted email and password do not match whats on file!';
        }
    } else {
        $error = 'You must enter an email address and a password to continue!';
    }
}

include './templates/header.php';

// DISPLAY ERROR
if ($error) {
    echo '<p class="error">' . $error . '</p>';
}

// IF LOGGED IN
if ($loggedin) {
    echo '<p>You are logged in!</p>';
} else {
    echo '<h2>Log In</h2>';
    echo '<form action="login.php" method="POST">
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" id="email" class="form-control">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>';
}

include './templates/footer.php';
