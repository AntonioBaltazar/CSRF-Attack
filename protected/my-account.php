<?php
    //On démarre les sessions
    session_start();
    //On génére un jeton totalement unique
    $token = uniqid(rand(), true);
    
    //Et on le stocke
    $_SESSION['token'] = $token;
    setCookie("tokenCookie", $token);
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>My account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>My account</h1>
    <h2>Web page secured</h2>

    <p>Your password is: <span id="password">My_original_password</span></p>

    <p>CSRF Session Token: <?php echo $_SESSION['token']; ?></p>

    <form action="process.php" method="post" class="myForm" onsubmit="updatePassword(event)">
        <div class="myform">
            <label for="newpass">Type your new password: </label>
            <input type="text" name="newpass" id="newpass" required />
        </div>
        <p> </p>
        <div class="myform">
            <input type="submit" name="formChangePassword" value="Update password!" />
        </div>
          </p>
    </form>
    
    <div>
        <a href="http://localhost/CSRF/index.html">Return Home</a>
    </div>
   
    <div id="popup-container">
        <div id="popup" onclick="window.location.href='evil.php'">
            <p>You've won 100$!<br> Click here to collect.</p>
        </div>
    
        <button onclick="showPopup()">Generate evil pop-up</button>
    </div>
    
    
    <script>

        document.addEventListener("DOMContentLoaded", function () {
        var savedPassword = getCookie("password");

        if (savedPassword) {

            document.getElementById('password').textContent = savedPassword;
        }
        });

        function getCookie(name) {
            var value = "; " + document.cookie;
            var parts = value.split("; " + name + "=");
            if (parts.length === 2) {
                return parts.pop().split(";").shift();
            }
        }

        function showPopup() {
            var popup = document.getElementById('popup');
            popup.style.display = (popup.style.display === 'block') ? 'none' : 'block';
        }

    </script>
</body>
</html>
