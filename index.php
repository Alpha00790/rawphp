<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection failed due to ". mysqli_connect_error());
    }
    // echo "Successfully Connected!";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];

    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `DT`) 
    VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
    // echo $sql; 
    
    if($con->query($sql) == true){
        // echo "Successfully Inserted!";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boner's Garage!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="image.png" class="bg"alt="">
    <div class="container">
        <h1>Welcome to PHP demo Tutorial! </h1>
        <p>Enter your details and submit this form to get bamboozeled!</p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any information here!"></textarea>
            <button class = "btn" type="submit">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>