<?php

$db = mysqli_connect("localhost","root","","webproject");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $personName = $_POST['personname'];
    $personID = $_POST['personid'];
    $persons = $_POST['quantity'];
    $tourDay = $_POST['tourday'];

    $db = new DBConnect();
    $flag = $db->registerUser($personName, $personID, $persons, date($tourDay,'Y-m-d '));

    if ($flag) {
        $success = "Thank You for registering with us.";
    } else {
        $message = "There was some technical error. Try again!";
    }
}


mysqli_close($db); // Close connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BETHLEHEM – HALF DAY TOUR (Private Tour)</title>
    <link rel="stylesheet"; href="styles/mystyle.css">
</head>
<body style="overflow: scroll">
<section class="sec1">
    <table>
        <tr>
            <td><img src="imgs/unnamed.png" alt="" style="height: 60px; width: 170px" ></td>
            <td><a href="index.html" style="text-decoration: none; color: white">Home</a></td>
            <td class="dropdown">
                <button class="dropbtn">Partical Information</button>
                <div class="dropdown-content">
                    <a href="info.html"><img src="imgs/general-info-150x150.jpg" alt="">Brief Intro to Palestine</a>
                    <a href="travel.html"><img src="imgs/getting-there-150x150.jpg" alt="">Travelling to Palestine</a>
                    <a href="businesshours.html"><img src="imgs/business-hours-150x150.jpg" alt="">Business Hours and National Holidays</a>
                    <a href="languages.html"><img src="imgs/languages-150x150.jpg" alt="">Climate</a>
                    <a href="money.html"><img src="imgs/money-150x150.jpg" alt="">Languages</a>
                    <a href="taxi.html"><img src="imgs/Taxi-150x150.jpg" alt="">Taxi & public transportation</a>
                </div>
            </td>
            <td class="dropdown">
                <button class="dropbtn">Where to go</button>
                <div class="dropdown-content">
                    <a href="Jerusalem1.html"><img src="imgs/where-to-go-jerusalem-150x150.jpg" alt="">Jerusalem</a>
                    <a href="bethlehem1.html"><img src="imgs/bethlehem_tour.jpg" alt="">Bethlehem</a>
                    <a href="hebron1.html"><img src="imgs/where-to-go-hebron-150x150.jpg" alt="">Hebron</a>
                    <a href="jericho1.html"><img src="imgs/where-to-go-jericho-150x150.jpg" alt="">Jericho</a>
                    <a href="ramallah1.html"><img src="imgs/ramallah-introductions.jpg" alt="">Ramallah</a>
                    <a href="nablus1.html"><img src="imgs/where-to-go-nablus-150x150.jpg" alt="">Nablus</a>
                </div>
            </td>
            <td class="dropdown">
                <button class="dropbtn">Tours</button>
                <div class="dropdown-content">
                    <a href="Jerusalem.html"><img src="imgs/where-to-go-jerusalem-150x150.jpg" alt="">Jerusalem</a>
                    <a href="bethlehem.html"><img src="imgs/bethlehem_tour.jpg" alt="">Bethlehem</a>
                    <a href="hebron.html"><img src="imgs/where-to-go-hebron-150x150.jpg" alt="">Hebron</a>
                    <a href="jericho.html"><img src="imgs/where-to-go-jericho-150x150.jpg" alt="">Jericho</a>
                    <a href="ramallah.html"><img src="imgs/ramallah-introductions.jpg" alt="">Ramallah</a>
                    <a href="nablus.html"><img src="imgs/where-to-go-nablus-150x150.jpg" alt="">Nablus</a>
                </div>
            </td>

            <td class="tho">
                <a href="mailto:webmaster@example.com" style="text-decoration: none; color: white">Contact Us</a>
            </td>
        </tr>
    </table>
</section>
<h2 style="padding-left: 100px">BETHLEHEM – HALF DAY TOUR (Private Tour)</h2>
<table>
    <tr>
        <td style="padding-left: 100px">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="imgs/bc-500x325.png" style="width:300px; height: 300px">
                </div>

                <div class="mySlides fade">
                    <img src="imgs/bethlehem_tour.jpg" style="width:300px; height: 300px">
                </div>

                <div class="mySlides fade">
                    <img src="imgs/Picture36-min-500x281.png" style="width:300px; height: 300px">
                </div>

                <div class="mySlides fade">
                    <img src="imgs/Picture3-min-500x322.jpg" style="width:300px; height: 300px">
                </div>
                <div class="mySlides fade">
                    <img src="imgs/Beth-Old-City-min-500x334.png" style="width:300px; height: 300px">
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </td>
        <td style="padding-left: 100px">
            <div>BETHLEHEM – HALF DAY TOUR (Private Tour) <br>$55.00 per person <br><br></div>
            <div style="font-size: small">TimeTo be determined . If you want a tour within the next 24-48 hours, please contact us directly by phone or email.
                <br>Duration: Approximately 3.5 – 4 hours.

                <br>Language: English (other languages available for private tours).

                <br>Starting Point:Visit Palestine Center, Bethlehem  <br>Location:  Opposite the Bethlehem City Mall (central bus station) Up the stairs next to the Roman Canal Souvenir shop) .<br><br></div>
            <div>
                <form action="b1.php" method="POST">
                    <label for="personid">Person ID:</label><br>
                    <input type="text" id="personid"><br>
                    <label for="personname">Person Name:</label><br>
                    <input type="text" id="personname"><br>
                    <label for="quantity">Persons: </label><br>
                    <input type="number" id="quantity" name="quantity" min="1" max="12" style="margin-top: 10px"><br>
                    <label for="tourday" style="margin-top: 10px">Date:</label><br>
                    <input type="date" id="tourday" name="tourday" style="margin-top: 10px"><br>
                    <input type="submit" style="background-color: #ac7339;color: #dfbf9f; width: 100px;height: 45px;margin-top: 20px" name="submit " value="Book now" onclick="BookNow()">
                </form>
            </div>
        </td>
    </tr>
</table>
<section class="sec5">
    <table>
        <td><img src="imgs/unnamed.png" alt="" style="width: 250px ;height: 60px; padding-left: 80px; padding-top: 5px"></td>
        <td><div class="footer">&copy Copyright 2021. All Rights Reserved. | Visit Palestine..I'm your guide </div> </td>
    </table>
</section>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

</body>
</html>
