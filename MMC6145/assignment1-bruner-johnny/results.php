<?php

// FORM VARIABLES
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$year = $_POST['year'];
$comments = $_POST['comments'];
$degree;

// GET DEGREE
if(isset($_POST['degree-a'])){
    $degree = "Associates";
}elseif(isset($_POST['degree-b'])){
    $degree = "Bachelors";
}elseif(isset($_POST['degree-m'])){
    $degree = "Masters";
}elseif(isset($_POST['degree-p'])){
    $degree = "Doctorite";
}

// GET YEAR
if(isset($_POST['year']) && $_POST['year'] == 'Freshman'){
    $current_year ="As a Freshman, it might have only just begun, but the knowledge you will obtain will stay with you the rest of life.";
}elseif(isset($_POST['year']) && $_POST['year'] == 'Sophomore'){
    $current_year ="One year down Sophomore, keep your mind focused and your eye on the prize!";
}elseif(isset($_POST['year']) && $_POST['year'] == 'Junior'){
    $current_year ="OK Junior, how good does it feel to know you are more than half way through your journey? YOU CAN DO THIS!";
}elseif(isset($_POST['year']) && $_POST['year'] == 'Senior'){
    $current_year ="YOU DID IT SENIOR!! You are almost cross that finish line!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Assignment 1</title>
</head>

<body>

    <header></header>

    <main>
        <h2 class="hello">Hello <?php echo $name;?></h2>

        <div class="contact-info">
            <h3>Here is your contact information:</h3>
            <p>
                Email Address: <strong><?php echo $email;?></strong></br>
                Phone Number: <strong><?php echo $phone;?></strong>
            </p>
        </div>

        <div class="degree-info">
            <h3>Here is your educational information:</h3>
            You should be very proud of yourself for working towards your <?php echo $degree;?> Degree.</br>
            <?php echo $current_year;?>
        </div>

        <div class="comments-info">
            <h3>Your added comments:</h3>

            <?php echo $comments;?>
        </div>
    </main>

    <footer></footer>
</body>

</html>