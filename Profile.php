<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet"  href="Style.css">
        <script src="Slideshow.js"></script>
        <title>
            Felis Cat Agility Tournament 2021
        </title>
    </head>

    <body>
        <h1>
            <img src="Content/Images/logo.png" alt="Felis Logo" width="75" height="75" style="vertical-align:middle">
            Felis Cat Agility Tournament 2021
        </h1>
        <div class ="header">
            <div class="header-left">
                <a href="IndexUser.html">Home</a>
                <a class="active" href="Profile.php">Profile</a>
                <a href="Logout.php">Logout</a>
            </div>
        </div>
        <br>
        <div class = "block-profile">
            <?php 
            session_start();
            $conn=mysqli_connect("localhost", "root", "", "project") or die("Cannot connect to server.".mysqli_error($conn));

            $username=$_SESSION['username'];

            $sql = "SELECT * FROM  user WHERE username ='$username'";
            $result=mysqli_query($conn, $sql) or die ("Cannot execute sql.");

            $row=mysqli_fetch_array($result,MYSQLI_BOTH);

            if($username==$row[0]){
                ?>
                <div class="form-login">
                    <img src="Content/Images/logo.png" width="200px" style="vertical-align:top;">
                    <hr>
                    Username
                    <br>
                    <input name="username" type="text" disabled value="<?php echo "$row[0]";
                    ?>"></input>
                    <br>
                    Password
                    <br>
                    <input name="password" type="password" disabled value="<?php echo "$row[1]";
                    ?>"></input>
                    <br>
                    Email Address
                    <br>
                    <input name="email" type="email" disabled value="<?php echo "$row[2]";
                    ?>"></input>
                    <br>
                    Name
                    <br>
                    <input name="name" type="text" disabled value="<?php echo "$row[3]";
                    ?>"></input>
                    <br>
                    Cat's Name
                    <br>
                    <input name="nameCat" type="text" disabled value="<?php echo "$row[4]";
                    ?>"></input>
                    <br>
                    Phone Number
                    <br>
                    <input name="phone" type="tel" disabled value="<?php echo "$row[5]";
                    ?>"></input>
                    <br>
                    <hr>
                </div>
            <?php
            }
            else
            {
                ?>
                <img src="Content/Images/error.gif" width="200px">
                <p>
                    <br>
                    User does not exist.
                </p>  
                <?php
            }
  
            ?>

        </div>
        <br>
        <div class="header">
            <div class="contact">
                Contact Info<br>
                <div class="contact-icons">
                    <img src="Content/Images/phone.png" width="40px" height="40px">
                    +60 379 568 144
                    <br>
                    <img src="Content/Images/email.png" width="40px" height="40px">
                    felis@gmail.com
                    <br>
                    <hr>
                    Created by Zaim CS0106428
                </div>
            </div>
        </div>
    </body>
</html>