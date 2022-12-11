<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","root","","webproject");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="styles/style.css" />
</head>
<body>
<?php
// If form submitted, insert values into the database.
if (isset($_REQUEST['Username'])){
    // removes backslashes
    $username = stripslashes($_REQUEST['Username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con,$username);
    $password = stripslashes($_REQUEST['Password']);
    $password = mysqli_real_escape_string($con,$password);
    $query = "INSERT into `login` (Username, Password)
VALUES ('$username', '".SHA1($password)."')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
    }
}else{
    ?>
    <div class="form">
        <h1 style="color: purple">Registration</h1>
        <form name="registration" action="" method="post">
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="submit" name="submit" value="Register" />
        </form>
    </div>
<?php } ?>
</body>
</html>
