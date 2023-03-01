<?php
// Get data from form
require('db.php');
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$create_datetime = date("Y-m-d H:i:s");

$query    = "INSERT into `query` (username,email, create_datetime,message)
                     VALUES ('$name','$email', '$create_datetime','$message')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Your query is submitted. Thanks for contacting us.</h3><br/>

                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='contact.php'>message</a> again.</p>
                  </div>";
        }

header("Location:login.php");
?>
