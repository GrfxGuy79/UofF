<?php

include "./templates/header.php";

echo "<h2>Edit Quote</h2>";

// RESTRICT ACCESS TO ADMINS
if (!is_admin()) {
    echo "<h2>Access Denied</h2>";
    echo '<p class="error">You do not have permission to access this page!</p>';

    include "./templates/footer.php";

    exit();
}

// GET QUOTE BY ID
if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0)) {

    $query = 'SELECT * FROM quotes WHERE id=' . $_GET['id'] . '';

    if ($result = mysqli_query($dbc, $query)) {
        $row = mysqli_fetch_array($result);

        // DELETE FORM
        echo '        <h3 class="mb-3">Are you sure you want to delete this quote?</h3>

        <form action="delete_quote.php" method="POST">';
        // CHECK IF FAVORITE
        if ($row['favorite'] == 1) {
            echo '<i class="fa-solid fa-star viewFav" data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"
        title="This Is A Favorite Quote"></i>';
        }

        echo '<div class="quote">' . $row['quote'] . '</div>
    <div class="source">- ' . $row['source'] . '</div>';

        echo '
        <input type="hidden" name="id" value="' . $_GET['id'] . '">
          <button type="submit" class="btn btn-danger">Delete Quote</button>
        </form>';

    } else {
        echo '<p class="error">Could not retrieve quote because: ' . mysqli_error($dbc) . '</p>';
        echo '<p>The query being run was: ' . $query . '</p>';
    }
} elseif (isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] > 0)) {
    // DELETE QUOTE
    $query = 'DELETE FROM quotes WHERE id=' . $_POST['id'] . ' LIMIT 1';
    $result = mysqli_query($dbc, $query);

    if (mysqli_affected_rows($dbc) == 1) {
        echo '<p>The quote has been deleted</p>';
    } else {
        echo '<p class="error">Could not delete quote because: ' . mysqli_error($dbc) . '</p>';
        echo '<p>The query being run was: ' . $query . '</p>';
    }

} else {
    echo '<p class="error">This page has been accessed in error!</p>';
}

mysqli_close($dbc);

include './templates/footer.php';
