<?php 
$conn = mysqli_connect("localhost","root","","google");
if ( $conn) {
    echo "connection succesfull";
}else{echo "connection failed ";}
?>