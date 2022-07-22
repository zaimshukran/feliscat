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
                <a href=View.php>View User Data</a>
                <a class="active" href=Search.php>Edit User Data</a>
                <a href=Logout.php>Logout</a>
            </div>
        </div>
        <br>
        <div class = "block-view">
            <form method="POST" action="Edit.php">
                <div class="form-login">
                    <img src="Content/Images/logo.png" width="200px" style="vertical-align:top;">
                    <hr>
                    Username
                    <br>
                    <input name="username" type="text" placeholder="Enter Username" required>
                    <br>
                    <button type="submit">Search</button>
                    <br>
                    <br>
                    <hr>
                </div>
            </form>
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