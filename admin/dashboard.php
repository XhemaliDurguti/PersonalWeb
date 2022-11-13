<?php
include 'includes/header.php'; ?>

<body>
    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>

        </div>
        <?php
        include 'includes/sidebar.php';
        ?>
        <section class="container">
            test
        </section>
    </div>

    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function() {
            document.querySelector("body").classList.toggle("active");
        });
    </script>
</body>

</html>