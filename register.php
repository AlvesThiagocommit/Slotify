<?php

if (isset($_POST['loginButton'])) {
    //echo "login button was pressed";
}

if (isset($_POST['registerButton'])) {
    echo "register was pressed";
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome to slotify</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="inputContainer">
            <form id="loginForm" action="register.php" method="POST">
                <h2>Login to your account</h2>
                <p>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder"e.g. bartSimpson" require>
                <p>
                </p>
                <label for="loginUsername">Username</label>
                <input id="loginPassword" name="loginPassword" type="Password" require>
                </p>

                <button type="submit" name="loginButton">LOG IN</button>

            </form>
            
            <form id="registerForm" action="register.php" method="POST">
                <h2>Create your free account</h2>
                <p>
                <label for="Username">Username</label>
                <input id="Username" name="Username" type="text" placeholder"e.g. bartSimpson" require>
                <p>

                <p>
                <label for="firstName">First Name</label>
                <input id="firstName" name="firstName" type="text" placeholder"e.g. Bart" require>
                <p>

                <p>
                <label for="lastName">Last Name</label>
                <input id="lastName" name="lastName" type="text" placeholder"e.g. Simpson" require>
                <p>

                <p>
                    <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder"e.g. bart@gmail.com" require>
                <p>

                <p>
                    <label for="email2">Confirm email</label>
                <input id="email2" name="email2" type="text" placeholder"e.g. bart@gmail.com" require>
                <p>


                </p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" require>
                </p>


                </p>
                <label for="password">Confirm password</label>
                <input id="password" name="password" type="password" require>
                </p>

                <button type="submit" name="registerButton">SIGN UP</button>

            </form>
        </div>
    
    </body>
</html>