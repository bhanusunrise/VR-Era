<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="calender/app.css" />
    <link rel="icon" type="image/png" href="images/VR_icon.png" id="favicon" />
    <title>Welcome to VR Era</title>
    <style>
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.5)),
            url("images/loginBg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }

    .colorize-image {
        filter: grayscale(100%) brightness(200%);
    }

    .carousel-item {
        height: 400px;
        /* Adjust the height as desired */
    }
    </style>
</head>

<body>
    <!--Navbar starts here-->

    <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
        <a class="navbar-brand" href="#">
            <img src="images/VR_icon.png" width="30" height="30" alt="Logo" class="colorize-image" />
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">About Us</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"> Pasindu Bhanuka </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <img src="images/profile_icon.png" width="30" height="30" alt="Profile Picture" />
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Navbar Ends Here-->
    <br /><br /><br />