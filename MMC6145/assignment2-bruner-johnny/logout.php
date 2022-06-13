<?php

// DESTROY COOKIE
if (isset($_COOKIE['Johnny'])) {
    setcookie('Johnny', false, time() - 300);
}

include './templates/header.php';

echo '<h2>You have been logged out!</h2>';

include './templates/footer.php';
