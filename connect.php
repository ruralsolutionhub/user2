<?php

$con = new mysqli('localhost', 'root', '', 'rural_solutions');

if(!$con){
    die(mysqli_errno($con));
}

?>
