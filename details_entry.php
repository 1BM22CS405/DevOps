<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="reservation_database1";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{   
     $first_name = $_POST['first_name'];
     $phone = $_POST['phone'];

     $sql_query = "INSERT INTO reservation_details(Name,Phone_number)
     VALUES ('$first_name','$phone')";

     if (mysqli_query($conn, $sql_query)) 
     {
        echo "New Details Entry inserted successfully !";
         header('location: aboutus1.html');
     } 
     else
     {
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>