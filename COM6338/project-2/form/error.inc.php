<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title>Form Error</title>
</head>

<body>
    <header>
        <nav>
            <a href="index.html"><img src="images/logo1.png" class="logo" alt="Logo" title="Logo"></a>

            <ul>
                <li class="nav-item hover-border">
                    <a href="home.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item hover-border">
                    <a href="dogs.html" class="nav-link">Our Dogs</a>
                </li>
                <li class="nav-item hover-border">
                    <a href="fostering.html" class="nav-link">Fostering</a>
                </li>
                <li class="nav-item hover-border">
                    <a href="adoption.html" class="nav-link">Adoption</a>
                </li>
                <li class="nav-item hover-border">
                    <a href="families.html" class="nav-link">Families</a>
                </li>
                <li class="nav-item hover-border">
                    <a href="about.html" class="nav-link">About Us</a>
                </li>
                <li class="nav-item hover-border">
                    <a href="contact.html" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <h1>Missing fields</h1>
            <p>Sorry, you have not completed all of the required fields.</p>
            <p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

            <ul>
                <?php
for ($i = 0; $i < count($this->missing_required_fields); $i++) {
    echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
}
?>
            </ul>

            <p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>Site designed by Johnny Bruner</p>
        </div>
    </footer>
</body>

</html>