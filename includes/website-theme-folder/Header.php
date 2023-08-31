<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavo Scent - Masala Tea Powder - Exquisite Masala Unforgettable Tea Delight</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Additional stylesheets, fonts, and icons can be added here -->
</head>
<body>
    <!-- Include the website header -->
    <?php include('includes/website-theme-folder/Header.php'); ?>

    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark custom-header">
        <div class="container">
            <!-- Brand Logo (PNG image) -->
            <a class="navbar-brand" href="#">
                <img src="your-logo.png" alt="Logo" width="50" height="50">
                Flavo Scent - Masala Tea Powder
            </a>
            <!-- Navbar Toggler Button for Mobile -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Items (e.g., navigation links) -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Selfie Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <!-- Add more navigation items here -->
                    <li class="nav-item">
                        <a href="#contact" class="appointment-btn scrollto"><span class="d-none d-md-inline">Add</span> Feedback</a>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline my-2 my-md-0" action="product-list-page.php" method="get">
                            <!-- Replace "search_product" with the name attribute you want to use for the search input -->
                            <input class="form-control mr-sm-2" type="text" placeholder="Search by Product" name="search_product" value="<?php echo isset($_GET['search_product']) ? $_GET['search_product'] : ''; ?>">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Your main content goes here -->
