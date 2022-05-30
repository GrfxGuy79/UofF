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
<!-- FORM -->
<form action="results.php" method="POST">
    <div class="form-title">
        <h1>Please fill out the form below</h1>
        <h2>Thank you</h2>
    </div>

    <ul>
        <!-- INPUT -->
        <li class="name-field">
            <label for="name" class="name-label">Name:</label>
<input type="text" name="name" class="name" value="">
        </li>
        <li class="pass-field"> 
            <label for="password" class="pass-label">Password:</label>   
            <input type="password" name="password" class="password" value="">
</li>
        <li class="email-field">   
            <label for="email" class="email-label">Email:</label>
            <input type="email" name="email" class="email" value="">
</li>
        <li class="phone-field">   
            <label for="phone" class="phone-label">Phone Number:</label>
            <input type="tel" name="phone" class="phone" value="">
            <label for="phone" class="phone-ex">(###)###-####</label>
</li>

    <!-- RADIO -->
    <h3>What Degree Are You Seeking?</h3>
<li class="degree-field">
    <input type="radio" name="degree-a" id="degree" value="Associates">
       <label for="radio-label-a">Associates</label>
 <input type="radio" name="degree-b" id="degree" value="Bachelors">
     <label for="radio-label-b">Bachelors</label>
<input type="radio" name="degree-m" id="degree" value="Masters">
        <label for="radio-label-m">Masters</label>
<input type="radio" name="degree-phd" class="degree" value="PhD">
       <label for="radio-label-p">PhD</label>
</li>
<!-- DROPDOWN -->
<h3>What Year Are You Currently In?</h3>
<li class="year-field">
<select name="year" class="year">
    <option value="Freshman">Freshman</option>
    <option value="Freshman">Junior</option>
    <option value="Freshman">Sophomore</option>
    <option value="Freshman">Senior</option>
</select>
</li>

<!-- TEXTAREA -->
<h3>Any Comments You Would Like To Add?</h3>
<li class="comments-field">
    <textarea name="comments" class="comments" cols="30" rows="10"></textarea>
</li>
    
<!-- SUBMIT -->
<li class="submit-field">
    <input type="submit" name="submit" class="submit" value="Submit">
</li>

    </ul>
</form>
</main>

<footer></footer>
</body>
</html>