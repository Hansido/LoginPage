<!DOCTYPE html>
<html lang="en">
<head>


    <title>Flip Login and Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card" id="loginCard">
            <div class="card-inner">
            <div class="card-front">
                    <h2>Login</h2>
                    <?php if (isset($error)) echo "<p>$error</p>"; ?>
                    <form method="post" action="cek.php">

                        <label for="username">Username:</label><br>
                        <input type="text" id="username" name="username" required><br>

                        <label for="password">Password:</label><br>
                        <div class="show-password">
                            <input type="password" name="password" id="password" required><br>
                            <span class="toggle-password" onclick="togglePasswordVisibility()"><a href="#">show</a></span>
                        </div>

                        <button style="padding: 10px 100px;">Login</button>
                    </form>
                    <button onclick="flipCard()">Register</button>
                </div>

                <div class="card-back">
                    <h2>Registration</h2>
                    <button onclick="flipCard()">Back to Login</button>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>

</body>
</html>
