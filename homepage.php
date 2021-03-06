<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/homepage.css">

</head>

<body>
    <main>
        <section>
            <div class="header">
                <div class="aa">
                    <img src="images/head.png" alt="head">
                </div>
                <div class="b">
                    <h1>WELCOME!</h1>
                    <h2>Student</h2>
                    <h4>Great day TUPcian! Here are the currect candidates!</h4>
                </div>
            </div>

            <div class="mid">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/bill.png" class="img-fluid d-md-block" alt="aa">
                        </div>
                        <div class="carousel-item">
                            <img src="images/bill1.png" class="img-fluid d-md-block" alt="aa">
                        </div>
                        <div class="carousel-item">
                            <img src="images/bill2.png" class="img-fluid d-md-block" alt="aa">
                        </div>
                        <div class="carousel-item">
                            <img src="images/bill3.png" class="img-fluid d-md-block" alt="aa">
                        </div>
                        <div class="carousel-item">
                            <img src="images/bill4.png" class="img-fluid d-md-block" alt="aa">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
                </div>
            </div>

            <div class="btns">
                <div class="bttn">
                    <a type="button" href="https://docs.google.com/forms/d/1vAqZ-d46Kn8krVMIS1hFEbrd_CiD4NvOn2PUB47fxHQ/viewform?edit_requested=true" value="btn" target="_blank" class="b">VOTE CANDIDATES</a>
                    <button id="b" onclick="document.location='application.php'">FILE CANDIDACY</button>
                </div>
                <div class="bttn">
                    <button id="b" onclick="document.location='result.php'">VIEW RESULTS</button>
                    <button id="b" onclick="document.location='index.php'">LOG OUT</button>
                </div>
            </div>

        </section>

        <section class="aside">

            <p>T</p>
            <p>U</p>
            <p>P</p>
            <p>-</p>
            <p>C</p>
            <p>A</p>
            <p>V</p>
            <p>I</p>
            <p>T</p>
            <p>E</p>

        </section>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="js/homepage.js"></script>

</body>


</html>