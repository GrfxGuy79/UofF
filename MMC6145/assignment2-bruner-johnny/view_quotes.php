<?php

include "./templates/header.php";

echo "<h2>View All Quotes</h2>";

// RESTRICT ACCESS TO ADMINS
if (!is_admin()) {
    echo "<h2>Access Denied</h2>";
    echo '<p class="error">You do not have permission to access this page!</p>';

    include "./templates/footer.php";

    exit();
}

// GET QUOTES FROM DB
$query = "SELECT * FROM quotes ORDER BY date_entered DESC";

if ($results = mysqli_query($dbc, $query)) {
    // RETRIEVE QUOTES
    while ($row = mysqli_fetch_array($results)) {
        echo '<div><blockquote>' . $row['quote'] . '</blockquote>-' . $row['source'] . '';

        // CHECK IF FAVORITE
        if ($row['favorite'] == 1) {
            echo '<strong>Favorite</strong>';
        }

        // ADMIN LINKS
        echo '<p>Quote Admin: <a href="edit_quote.php?id=' . $row['id'] . '">Edit</a>
        <a href="delete_quote.php?id=' . $row['id'] . '">Delete</a></p></div>';
    }
} else {
    echo '<p class="error">Could not retrieve the data because ' . mysqli_error($dbc) . ' </p>';
    echo '<p>The query being ran is: ' . $query . '</p>';
}
mysqli_close($dbc);

include './templates/footer.php';
