<?php

include './templates/header.php';

//
if (isset($_GET['random'])) {
    // SHOW RANDOM QUOTE
    $query = 'SELECT * FROM quotes ORDER BY RAND() DESC LIMIT 1';
} elseif (isset($_GET['favorite'])) {
    // SHOW RANDOM FAVORITE QUOTE
    $query = 'SELECT * FROM quotes WHERE favorite=1 ORDER BY RAND() DESC LIMIT 1';
} else {
    // SHOW MOST RECENT QUOTE
    $query = 'SELECT * FROM quotes ORDER BY date_entered DESC LIMIT 1';
}

if ($result = mysqli_query($dbc, $query)) {
    $row = mysqli_fetch_array($result);

    // DISPLAY RESULTS
    echo '<div><blockquote>' . $row['quote'] . '</blockquote>- ' . $row['source'] . '';
    // CHECK IF FAVORITE
    if ($row['favorite'] == 1) {
        echo '<strong>Favorite</strong>';
    }
    echo '</div>';

    if (is_admin()) {
        // ADMIN LINKS
        echo '<div><p><a href="edit_quote.php?id=' . $row['id'] . '"><i class="fa-solid fa-pencil edit me-2"></i></a>

        <a href="delete_quote.php?id=' . $row['id'] . '"><i class="fa-solid fa-trash-can delete" data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"
        title="Delete This Quote"></i></a></p></div>';
    }
} else {
    echo '<p class="error">Could not retrieve the data because ' . mysqli_error($dbc) . ' </p>';
    echo '<p>The query being ran is: ' . $query . '</p>';
}

mysqli_close($dbc);

echo '<p><a href="index.php">Latest</a> | <a href="index.php?random=true">Random</a> | <a href="index.php?favorite=true">Random Favorite</a></p>';

include './templates/footer.php';
