<?php

session_start();
session_unset();
session_destroy();
session_start();
session_regenerate_id(true);

header("location: ../login.php");
exit();
