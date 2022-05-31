<?php

// CHECK IF ADMINISTRATOR
function is_admin($name = 'Johnny', $value = 'Bruner'){

    // CHECK IF COOKIE IS SET AND VALUE
    if(isset($_COOKIE[$name]) && ($_COOKIE[$name] == $value)){
        return true;
    }else{
        return false;
    }
}

// DB CONNECTION
$dbc = mysqli_connect('localhost', 'root', 'root', 'assignment2');

