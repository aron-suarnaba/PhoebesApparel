<?php
include (__DIR__ . '/../db.php');
$website_title = "Phoebe's Apparel & Foodhub"
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $website_title; ?></title>
    <link rel="stylesheet" href="..\asset\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\asset\css\bootstrap-icons-1.13.1\bootstrap-icons.min.css">
    <link rel="stylesheet" href="..\asset\css\styles.css">
    <link rel="stylesheet" href="..\asset\aos-master\dist\aos.css">
</head>

<body class="d-flex flex-column min-vh-100 g-0">
    <header class="container-fluid border-bottom px-0">
        <nav class="navbar bg-danger bg-gradient">
            <div class="container-fluid">
                <a href="#" class="navbar-brand fw-bold text-white">
                    <img src="..\asset\images\PhoebesApparelAndFoodhubLogo.png" alt="logo" class="rounded me-1"
                        style="width: 75px; height: 75px;">
                    Phoebe's Apparel & Foodhub</a>
                <ul class="navbar-nav nav-underline d-flex flex-row gap-3 ms-auto text-white pe-3">
                    <li class="navbar-item"><a href="index.php" class="nav-link text-white">Home</a></li>
                    <li class="navbar-item"><a href="index.php?page=order" class="nav-link text-white">Order</a></li>
                    <?php 

                    if (isset($_SESSION['user_id'])){
                        echo '<li class="navbar-item"><a href="#logout" class="nav-link text-blue">Logout</a></li>';
                    } else {
                        echo '<li class="navbar-item"><a href="#loginModal" class="nav-link text-white" data-bs-toggle="modal"
                        data-bs-target="#loginModal">Login</a></li>';
                    }

                    ?>
                    <li class="navbar-item"><a href="#about" class="nav-link text-white">About</a></li>
                    <li class="navbar-item"><a href="#contact" class="nav-link text-white">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>


    <script src="..\asset\js\main.js"> </script>
    <script src="..\asset\js\bootstrap.bundle.min.js"></script>
    <script src="..\asset\aos-master\dist\aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

<!-- Login Modals -->
<div class="modal fade" id="loginModal" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="/../authentication/login.php" method="post">
                <div class="modal-header">
                    <div class="modal-title fs-5" id="modalLabel">
                        Login
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-">

                    <div class="form-floating mb-3 mt-3">
                        <input type="email" name="email" id="loginEmail" class="form-control" placeholder="Email">
                        <label for="loginEmail">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password" id="loginPassword" class="form-control" placeholder="Password">
                        <label for="loginPassword">Password</label>
                    </div>

                    <div class="form-input-group ms-2">
                        <a href=""
                            class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Register</a>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>