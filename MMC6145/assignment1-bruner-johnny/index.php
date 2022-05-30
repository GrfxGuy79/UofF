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
<!-- PASSWORD FORM -->
<form action="" method="post" class="password-form">
<ul>
    <li class="pass-field"> 
            <label for="password" class="pass-label">Password:</label>   
            <input type="password" name="password" class="password" value="">
            <label for="password" class="phone-ex">Please enter the password and press Enter</label>
</li>
</ul>
</form>


<?php
if(isset($_POST['password']) && $_POST['password']=='bruner'){?>
    <div class="form-title">
        <h2>Please fill out the form below</h2>
    </div>

<!-- FORM -->
<form action="results.php" method="POST">
    

    <ul>
        <!-- INPUT -->
        <li class="name-field">
            <label for="name" class="name-label">Name:</label>
<input type="text" name="name" class="name" value="">
        </li>
        
        <li class="email-field">   
            <label for="email" class="email-label">Email:</label>
            <input type="email" name="email" class="email" value="">
</li>
        <li class="phone-field">   
            <label for="phone" class="phone-label">Phone Number:</label>
            <input type="tel" name="phone" class="phone" value="" size="10" maxlength="10">
            <label for="phone" class="phone-ex">##########</label>
</li>

    <!-- RADIO -->
    <label for="degree" class="degree-label">What Degree Are You Seeking?</label>
<li class="degree-field">
    <input type="radio" name="degree-a" class="degree" value="Associates">
       <label for="radio-label-a">Associates</label><br>
 <input type="radio" name="degree-b" class="degree" value="Bachelors">
     <label for="radio-label-b">Bachelors</label><br>
<input type="radio" name="degree-m" class="degree" value="Masters">
        <label for="radio-label-m">Masters</label><br>
<input type="radio" name="degree-phd" class="degree" value="PhD">
       <label for="radio-label-p">PhD</label>
</li>
<!-- DROPDOWN -->
<label for="year" class="year-label">What Year Are You Currently In?</label>
<li class="year-field">
<select name="year" class="year">
    <option value="Freshman">Freshman</option>
    <option value="Freshman">Junior</option>
    <option value="Freshman">Sophomore</option>
    <option value="Freshman">Senior</option>
</select>
</li>

<!-- TEXTAREA -->
<label for="comments" class="comments-label">Any Comments You Would Like To Add?</label>
<li class="comments-field">
    <textarea name="comments" class="comments" cols="30" rows="10"></textarea>
</li>
    
<!-- SUBMIT -->
<li class="submit-field">
    <input type="submit" name="submit" class="submit" value="Submit">
</li>

    </ul>
</form>
<?php 
}elseif (isset($_POST['password']) && $_POST['password']!='bruner'){
    $errormsg = "Sorry That Password Is Incorrect, Please Try Again!";
    echo '<h3 class="errormsg">'.$errormsg.'</h3>';
}
?>
    
</main>

<footer></footer>
</body>
</html>