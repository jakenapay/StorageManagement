<?php include 'includes/config.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libag</title>

    <!-- Link for css -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="assets/css/login.css?v=<?php echo time() ?>">

    <!-- Link for FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var eyeIcon = document.getElementById("eye-icon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.replace("fa-eye-slash", "fa-eye");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.replace("fa-eye", "fa-eye-slash");
            }
        }
    </script>

</head>

<body>
    <div>
        <main>
            <!-- Logo -->
            <img src="assets/images/tempLogo-green.png" alt="logo" />
            <form action="includes/login.inc.php" method="post">

                <!-- Error messages -->
                <?php include 'errorMsg.php'; ?>

                <!-- Email Address -->
                <div>
                    <label for="email">Email Address</label>
                    <input class="inputs" id="email" name="email" type="text" />
                </div>
                <!-- Password -->
                <div>
                    <label for="password">Password</label>
                    <div style="position: relative;">
                        <input class="inputs" id="password" name="password" type="password" />
                        <i id="eye-icon" class="fa fa-eye-slash" style="position: absolute; top: 10px; right: 10px; cursor: pointer;" onclick="togglePasswordVisibility()"></i>
                    </div>
                </div>
                <!-- Submit Button -->
                <div>
                    <button class="main-btn large-btn" type="submit" name="login-btn">Login</button>
                </div>

                <!-- Divider -->
                <hr class="horizontal-line" />

                <!-- Other links -->
                <div id="other-links">
                    <p><a href="#">Forgot Password?</a></p>
                    <p><a href="#">Sign Up</a></p>
                </div>
            </form>
        </main>
    </div>
</body>

</html>