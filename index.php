<?php
include 'includes/config.inc.php';

session_start();
// Check if the user is not logged in (no session id)
if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
    // Redirect to login page
    header("location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Link for css -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="assets/css/sidebar.css?v=<?php echo time() ?>">

    <!-- Link for FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <?php include 'sidebar.php'; ?>

    <!-- Main section -->
    <main class="section-main">
        <h1>Hello <?php echo $_SESSION['fn'] . " " . $_SESSION['ln']; ?></h1>
    </main>
</body>

</html>