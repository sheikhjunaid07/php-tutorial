<?php 
 if(isset($_POST['name'])){
 //database connection
 
 $server = "localhost";
 $username = "root";
 $password = "";

 $connection = mysqli_connect($server, $username, $password);

 if(!$connection){
    die("Database Connection Failed: " . mysqli_connect_error());
 }

//  echo "Database connection successfull" ;

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];

$sql = "INSERT INTO `details` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";


if($connection->query($sql) == true){
    echo "Data Inserted Successfully";
}else{
    echo "Error : $sql <br> $connection->error";
}

$connection->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
      
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>
