<?php
include './templates/header.php';

echo '<h2>Edit Quote</h2>';

// RESTRICT ACCESS TO ADMINS
if (!is_admin()) {
    echo "<h2>Access Denied</h2>";
    echo '<p class="error">You do not have permission to access this page!</p>';

    include "./templates/footer.php";

    exit();
}

// GET QUOT BY ID
if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0)) {

    $query = 'SELECT * FROM quotes WHERE id=' . $_GET['id'] . '';

    if ($result = mysqli_query($dbc, $query)) {
        $row = mysqli_fetch_array($result);

        // EDIT FORM
        echo '<form action="edit_quote.php" method="POST">
        <div class="mb-3">
    <label for="quote" class="form-label">Quote</label>
    <textarea name="quote" id="quote" cols="30" rows="10">' . htmlentities($row['quote']) . '</textarea>
  </div>
  <div class="mb-3">
    <label for="source" class="form-label">Source</label>
    <input type="text" class="form-control" name="source" id="source" value="' . htmlentities($row['source']) . '">
  </div>
  <div class="mb-3 form-check">';

        if ($row['favorite'] == 1) {
            echo '<input type="checkbox" class="form-check-input" name="favorite" id="favorite" checked="check">';
        } else {
            echo '<input type="checkbox" class="form-check-input" name="favorite" id="favorite">';
        }

        echo '<label class="form-check-label" for="favorite" value="yes">Favorite?</label>
  </div>
          <input type="hidden" name="id" value="' . $_GET['id'] . '">

  <button type="submit" class="btn btn-primary">Edit Quote</button>
</form>';

    } else {
        echo '<p class="error">Could not retrieve quote because: ' . mysqli_error($dbc) . '</p>';
        echo '<p>The query being run was: ' . $query . '</p>';
    }
} elseif (isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] > 0)) {
    $problem = false;

    if (!empty($_POST['quote']) && !empty($_POST['source'])) {
        // SANITIZE TEXT
        $quote = mysqli_real_escape_string($dbc, trim(strip_tags($_POST["quote"])));
        $source = mysqli_real_escape_string($dbc, trim(strip_tags($_POST["source"])));
        // CREATE FAV VALUE
        if (isset($_POST["favorite"])) {
            $favorite = 1;
        } else {
            $favorite = 0;
        }
    } else {
        // NO QUOTE OR SOURCE WAS ENTERED
        echo '<p class="error">Please enter a quote and a source!</p>';
        $problem = true;
    }

    if (!$problem) {
        // UPDATE DB
        $query = "UPDATE quotes SET quote='$quote', source='$source', favorite=$favorite WHERE id={$_POST['id']}";

        if ($result = mysqli_query($dbc, $query)) {
            echo '<p>Your quote has been updated</p>';
        } else {
            echo '<p class="error">Could not update quote because: ' . mysqli_error($dbc) . '</p>';
            echo '<p>The query being run was: ' . $query . '</p>';
        }
    }
} else {
    echo '<p class="error">This page has been accessed in error!</p>';
}

mysqli_close($dbc);

include './templates/footer.php';
