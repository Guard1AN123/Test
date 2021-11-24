<?php 
    //connect to database
    $conn = mysqli_connect('localhost','achi','mangusti','nina_pizza');

    //check connection
    if(!$conn){
        echo 'connection errot: ' . mysqli_connect_error();
    }


?>