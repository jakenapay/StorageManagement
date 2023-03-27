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

</head>

<body>
    <div>
        <main>
            <!-- Logo -->
            <img src="assets/images/tempLogo-green.png" alt="logo" />
            <form action="" method="post">
                <!-- Error messages -->
                <!-- <div id="error-msg-box">
                    <p class="error-msg">Wrong username</p>
                </div> -->
                <!-- Email Address -->
                <div>
                    <label for="email">Email Address</label>
                    <input class="inputs" id="email" name="email" type="email" />
                </div>
                <!-- Password -->
                <div>
                    <label for="password">Password</label>
                    <input class="inputs" id="password" name="password" type="password" />
                </div>
                <!-- Submit Button -->
                <div>
                    <button class="main-btn large-btn" type="submit">Login</button>
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