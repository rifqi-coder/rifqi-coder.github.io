<?php
$conn= mysqli_connect("localhost","root","","school");

function select ($select){
    global $conn;
    $query=mysqli_query($conn,$select);
    $a_rows =[];
    while ($b_row = mysqli_fetch_assoc($query)){
        $a_rows[] = $b_row;
    }
    return $a_rows;
}
?>