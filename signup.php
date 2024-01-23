
<?php
if($_SERVER["request_method"] == "post"){
    $showalert = true;
    include 'partials/_dbconnect.php';
    $username =$_post["username"];
    $password =$_post["password"];
    $cpassword =$_post["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false)
    {
        $sql = "INSERT INTO `user` ( `username`, `password`, `timestamp`) VALUES (  '$username', '$password', current_timestamp))";
       { $result = mysqli_query($conn, $sql);
         
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="singup_style.css">
</head>
<body>
<form action="loginsystem/signup.php" method="post">
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>

    <label for="contact">Contact Number:</label>
    <input type="tel" id="contact" name="contact" required>

    <label for="text">username :</label>
    <input type="text" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="confirmPassword">Confirm Password:</label>
    <input type="password" id="confirmPassword" name="confirmPassword" required>

    <input type="submit" value="Register">
    <b>
    <a href="login.php">Existing User? / Direct Login</a> 
    </b>
</form>

</body>
</html>