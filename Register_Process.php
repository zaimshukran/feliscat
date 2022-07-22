<html>
    <head>
    <link rel="stylesheet"  href="Style.css">
        <title>
            Felis Cat Agility Tournament 2021
        </title>
    </head>
<body>

<?php

    $conn=mysqli_connect("localhost", "root", "", "project") or die("Could not connect to server");

    $username=@$_POST["username"];
    $password=@$_POST["password"];
    $email=@$_POST["email"];
    $name=@$_POST["name"];
    $nameCat=@$_POST["nameCat"];
    $phone=@$_POST["phone"];

    $query="SELECT * FROM user WHERE username='$username'";
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0)
    {
        header("Refresh:3, url=Register.html");
        die('
        <div class = "block-process">
        <img src="Content/Images/error.gif" width="200px">
        <p>
            <br>
            Data Exists.
        </p>    
        </div>');
    }
    else
    {
        $insert_sql="INSERT INTO user VALUES('$username', '$password', '$email', '$name', '$nameCat', '$phone')";
        
        $sql_result=mysqli_query($conn,$insert_sql) or die ("Error in inserting data due to ".mysqli_error($conn));

        if($insert_sql)
        {
        ?>
            <div class = "block-process">
            <img src="Content/Images/ok.gif" width="200px">
                <p>
                    <br>
                    Successfully inserted new data. Please login again.
                </p>    
            </div>
            
        <?php
        header("Refresh:3, url=Register.html");
        }
        else
        {
        ?>
            <div class = "block-process">
            <img src="Content/Images/error.gif" width="200px">
                <p>
                    <br>
                    Error in inserting new data.
                </p>    
            </div>
        <?php
        header("Refresh:3, url=Register.html");
        }
    }
?>
</body>
</html>