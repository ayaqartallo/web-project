<?php
if(isset($_POST['uname']) && isset($_POST['psw'])){
    $username=$_POST['uname'];
    $password=$_POST['psw'];
    try{


// Create connection
        $conn = new mysqli("localhost", "root", "","webproject");

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";

        $qryStr="select * from login";
        $res=$conn->query($qryStr);
        for($i=0; $res->num_rows;$i++){
            $row=$res->fetch_assoc();
            if($username==$row->Username && sha1($password)==$row->Password) {


                header('loaction: index.php');
            }

            else{
                echo "<h3 style = 'color: red' > username and/or password are not correct! </h3>";
            }
        }
        $conn->close();
    }
    catch (Exception $e){

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>

    <style>
        body{
            background-image: url("imgs/jerusalemlogin.gif");
            background-repeat: no-repeat;
            background-size: cover;
        }
        form {
            border: 3px solid #f1f1f1;
        }

        /* Full-width inputs */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: blueviolet;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        /* Add a hover effect for buttons */
        button:hover {
            opacity: 0.8;
        }



        /* Add padding to containers */
        .container {
            padding: 16px;
        }

        /* The "Forgot password" text */
        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            .cancelbtn {
                width: 100%;
            }
        }

    </style>

</head>
<body>
<form action="login.php" method="post">

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
    </div>


</form>
</body>