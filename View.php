<html>
    <head>
        <link rel="stylesheet"  href="Style.css">
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
                <a href=IndexAdmin.html>Home</a>
                <a class="active" href=View.php>View User Data</a>
                <a href=Search.php>Edit User Data</a>
                <a href=Logout.php>Logout</a>
            </div>
        </div>
        <br>
        <div class = "block-view">
            <?php 
                echo "
                <br>
                <table border='1' td align='center' style='margin-top:100px'>
                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                        Password:
                    </td>
                    <td>
                        Email Address:
                    </td>
                    <td>
                        Name:
                    </td>
                    <td>
                        Cat's Name:
                    </td>
                    <td>
                        Phone Number:
                    </td>
                    </tr>";

                $conn=mysqli_connect("localhost", "root", "", "project") or die("Could not connect to server.".mysqli_error($conn));

                $sql="SELECT * FROM user";

                $result=mysqli_query($conn,$sql) or die("Could not execute sql.");

                while($row=mysqli_fetch_array($result,MYSQLI_BOTH))
                {
                    $username=$row[0];
                    $password=$row[1];
                    $email=$row[2];
                    $name=$row[3];
                    $nameCat=$row[4];
                    $phone=$row[5];

                    echo "<tr>
                    <td>
                        $username
                    </td>
                    <td>
                        $password
                    </td>
                    <td>
                        $email
                    </td>
                    <td>
                        $name
                    </td>
                    <td>
                        $nameCat
                    </td>
                    <td>
                        $phone
                    </td>
                    </tr>";
                }

                echo "</table>";
            ?>
        </div>
        <br>
        <div class="header">
            <div class="contact">
                Contact Info<br>
                <div class="contact-icons">
                    <img src="Content/Images/phone.png" width="40px" height="40px" style="vertical-align: middle;">
                    +60 379 568 144
                    <br>
                    <img src="Content/Images/email.png" width="40px" height="40px" style="vertical-align: middle;">
                    felis@gmail.com
                    <br>
                    <hr>
                    Created by Zaim CS0106428
                </div>
            </div>
        </div>
    </body>
</html>