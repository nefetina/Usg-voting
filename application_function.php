<?php

if(array_key_exists('submit', $_POST)) {
    submit();}


function submit(){
    $dbhost = "localhost:3307";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "vsdb";
    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
 
     //error handling
     if (!$con) {
         die("Connection failed: " . mysqli_connect_error());
     }

    $firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $position = $_POST['position'];
    $partylist = $_POST['partylist'];
    //$img = $_POST['img'];
    $lala = $_POST['lala'];

    
    
        // sql search the sub_code
        $sql = "SELECT firstname,surname FROM application WHERE surname = '$surname' AND firstname = '$firstname' limit 1";
        $result = (mysqli_query($con, $sql));

        if ($result)
        {
            if($result && mysqli_num_rows($result) > 0){

                // Display the alert box 
                echo "<script>alert('Applicant already applied.');</script>";
            
            }
            else 
            {
                $img = 0;
                $sql = "INSERT into application (firstname,surname,course,age,position,partylist,img,lala) values ('$firstname','$surname','$course','$age','$position','$partylist','$img','$lala')";
                $result = (mysqli_query($con, $sql));

                // Display the alert box 
                echo "<script>alert('Successfully Added');</script>";
                  
            }
        }
        
    
}


?>