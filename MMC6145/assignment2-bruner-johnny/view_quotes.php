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
    echo '<div class=table-responsive">
        <table class="table table-sm">
            <thead>
                <th>
                    Fav
                </th>
                <th>
                    Quote
                </th>
                <th>
                    Source
                </th>
                <th>
                    Admin
                </th>
            </thead>';

    while ($row = mysqli_fetch_array($results)) {
        echo '<tr>
        <td>';
// CHECK IF FAVORITE
        if ($row['favorite'] == 1) {
            echo '<i class="fa-solid fa-star viewFav" data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"
        title="This Is A Favorite Quote"></i>';
        }

        echo '</td>
        <td>
        ' . $row['quote'] . '
        </td>
        <td>
        ' . $row['source'] . '
        </td>
        <td>
<div><p><a href="edit_quote.php?id=' . $row['id'] . '"><i class="fa-solid fa-pencil edit me-2" data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"
        title="Edit This Quote"></i></a>

        <a href="delete_quote.php?id=' . $row['id'] . '"><i class="fa-solid fa-trash-can delete" data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"
        title="Delete This Quote"></i></a></p></div>
        </td>
        </tr>';
    }
    echo '</table></div>';
} else {
    echo '<p class="error">Could not retrieve the data because ' . mysqli_error($dbc) . ' </p>';
    echo '<p>The query being ran is: ' . $query . '</p>';
}
mysqli_close($dbc);

include './templates/footer.php';
