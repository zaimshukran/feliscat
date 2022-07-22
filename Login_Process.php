<html>

<head>
    <link rel="stylesheet"  href="Style.css">
    <title>
        Felis Cat Agility Tournament 2021
    </title>
</head> 

<body>
<?php
    $conn = mysqli_connect("localhost", "root", "", "project") or die("Could not connect to server.");

    $username = @$_POST["username"];
    $password = @$_POST["password"];

    $sql = "SELECT * FROM admin WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    $sql2 = "SELECT * FROM user WHERE username = '$username'";
    $result2 = mysqli_query($conn, $sql2);

    if(mysqli_num_rows($result)==1)
    {
        $row=mysqli_fetch_array($result,MYSQLI_BOTH);
        if($row["password"]==$password)
        {
            session_start();

            $_SESSION["username"]=$username;
            header("Location:LoadingAdmin.php");
        }
        else
        ?>
            <div class = "block-process">
            <img src="Content/Images/error.gif" width="200px">
            <br>
                <p>
                    Password is wrong
                </p>    
            </div>
        <?php
        header("Refresh:3; url=Login.html");
    }
    elseif(mysqli_num_rows($result2)==1)
    {
        $row=mysqli_fetch_array($result2,MYSQLI_BOTH);
        if($row["password"]==$password)
        {
            session_start();

            $_SESSION["username"]=$username;
            header("Location:LoadingUser.php");
        }
        else
            ?>
            <div class = "block-process">
            <img src="Content/Images/error.gif" width="200px">
            <br>
                <p>
                    Password is wrong.
                </p>    
            </div>
            <?php
            header("Refresh:3; url=Login.html");
    }
    else
    {
        ?>
        <div class = "block-process">
        <img src="Content/Images/error.gif" width="200px">
        <br>
                <p>
                    User does not exist.
                </p>    
        </div>
        <?php
        header("Refresh:3; url=Login.html");
    }
?>
</body>
</html>