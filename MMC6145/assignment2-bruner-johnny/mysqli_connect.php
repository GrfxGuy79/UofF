<?php

if($dbc = mysqli_connect('localhost', 'root', 'root', 'assignment2')){
    echo "Success";

    $query = 'CREATE TABLE quotes(
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        quote TEXT NOT NULL, 
        source VARCHAR(100) NOT NULL, 
        favorite TINYINT(1) UNSIGNED NOT NULL, 
        date_entered TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY(id)
        )CHARACTER SET utf8';

        if(@mysqli_query($dbc, $query)){
            echo 'Table has been created';
        }else{
            echo 'Could not create db because: '.mysqli_error($dbc);
        }
}else{
    echo "ERROR";
}

