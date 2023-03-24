<div class="sidebar">
    <div id="arrow">
        <!-- <input type="checkbox" id="toggle" /> -->
        <!-- <label for="toggle"> -->
        <i id="arrow-left" class="fa-solid fa-chevron-left" onclick="toggleSidebar()"></i>
        <i id="arrow-right" class="fa-solid fa-chevron-right" onclick="toggleSidebar()"></i>
        <!-- </label> -->
    </div>
    <nav>
        <div id="container-logo">
            <img id="logo" src="assets/images/tempLogo.png" alt="Logo">
        </div>
        <ul>
            <li><a href="#"><i class="fas fa-house"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-computer"></i>Technologies</a></li>
            <li><a href="#"><i class="fas fa-box-archive"></i>Supplies</a></li>
            <li><a href="#"><i class="fas fa-clipboard"></i>Records</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>Profile</a></li>
        </ul>
        <div id="container-logout">
            <a href="#"><i id="logout" class="fa-solid fa-door-open"></i>Logout</a>
        </div>
        <div id="container-footer">
            <p>Storage Management &#169; <?php echo date("Y") ?></p>
        </div>
    </nav>
</div>

<script>
    function toggleSidebar() {
        const hideArrow = document.getElementById("arrow-left");
        const showArrow = document.getElementById("arrow-right");
        const sidebar = document.querySelector(".sidebar");

        if (hideArrow.style.display === "block") {
            hideArrow.style.display = "none";
            showArrow.style.display = "block";
            sidebar.style.transform = "translateX(-100%)";
        } else {
            hideArrow.style.display = "block";
            showArrow.style.display = "none";
            sidebar.style.transform = "none";
        }
    }
</script>