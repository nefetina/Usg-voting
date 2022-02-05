<?php 
session_start();

	include("connection.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$email = $_POST['email'];
        $idno = $_POST['idno'];
		$password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//save to database
			$idno = random_num(20);
			$query = "insert into newreg (name,email,password,confirm_password) values ('$name','$email','$password','$confirm_password')";

			mysqli_query($con, $query);

			header("Location: index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOTERS REGISTRATION</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/newuser.css">
</head>

<body>
    <div class="kaliwa1">
        <img src="images/usg.png" alt="aa">
    </div>

    <form method="post">
        <div class="right">
            <h1>REGISTRATION</h1>

            <div class="form-group">
                <input type="name" class="form-control" aria-describedby="emailHelp" placeholder="Firstname Lastname" name="name" required>

            </div>

            <div class="form-group">
                <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="mamamia.miamore@gsfe.tupcavite.edu.ph" name="email" required>

            </div>

            <div class="form-group">
                <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="TUPC-XX-XXXX" name="idno" required>

            </div>

            <div class="form-group">
                <input type="password" class="form-control" aria-describedby="emailHelp" placeholder="Password" name="password" required>

            </div>

            <div class="form-group">
                <input type="password" class="form-control"  aria-describedby="emailHelp" placeholder="Confirm Password" name="confirm_password" required>

            </div>

            <button class="btn" id="pindot" type="submit">Sign Up</button>
            <p>Already had an account?<a href="index.php">Log In</a></p>

        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="js/newreg.js"></script>

</body>

</html>