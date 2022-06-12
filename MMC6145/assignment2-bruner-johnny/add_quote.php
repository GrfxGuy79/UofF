<?php

include "./templates/header.php";

echo "<h2>Add A Quote</h2>";

// RESTRICT ACCESS TO ADMINS
if (!is_admin()) {
    echo "<h2>Access Denied</h2>";
    echo '<p class="error">You do not have permission to access this page!</p>';

    include "./templates/footer.php";

    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["quote"]) && !empty($_POST["source"])) {

        // CLEAN VALUE FOR DB
        $quote = mysqli_real_escape_string($dbc, trim(strip_tags($_POST["quote"])));
        $source = mysqli_real_escape_string($dbc, trim(strip_tags($_POST["source"])));

        // CREATE FAV VALUE
        if (isset($_POST["favorite"])) {
            $favorite = 1;
        } else {
            $favorite = 0;
        }

        // INSERT INTO DB
        $query = "INSERT INTO quotes(quote, source, favorite)VALUES('$quote','$source','$favorite')";

        if (mysqli_affected_rows($dbc) == 1) {
            echo '<p>Your quote has been stored</p>';
        } else {
            echo '<p class="error">Could not store quote because: ' . mysqli_error($dbc) . '</p>';
            echo '<p>The query being run was: ' . $query . '</p>';
        }

        // CLOSE DB
        mysqli_close($dbc);
    } else {
        // NO QUOTE OR SOURCE WAS ENTERED
        echo '<p class="error">Please enter a quote and a source!</p>';
    }
}
?>

<!-- ADD QUOTE FORM -->
<form>
  <div class="mb-3">
    <label for="quote" class="form-label">Quote</label>
    <textarea name="quote" id="quote" cols="30" rows="10"></textarea>
  </div>
  <div class="mb-3">
    <label for="source" class="form-label">Source</label>
    <input type="text" class="form-control" name="source" id="source">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" name="favorite" id="favorite">
    <label class="form-check-label" for="favorite" value="yes">Favorite?</label>
  </div>
  <button type="submit" class="btn btn-primary">Add Quote</button>
</form>

<!-- FOOTER -->
<?php include './templates/footer.php';?>