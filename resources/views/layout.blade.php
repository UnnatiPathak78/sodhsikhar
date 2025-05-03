<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
    .header-top-bar {
        background-color: #05326f;
        padding: 10px;
        font-family: muli;
        font-size: 17px;
    }

    .topmenu {
        color: white;
        text-decoration: none;
    }

    .header-top-content a.topmenu:hover {
        font-weight: bold;
    }

    #desktop-nav {
        background-color: white;
        color: Black;
        font-family: muli;
        font-size: 18px;
    }

    #desktop-nav .navbar-nav .nav-link {
        color: Black;
    }

    #desktop-nav .navbar-nav .nav-link:hover {
        color: Black;
        font-weight: bold;
    }

    .navbar-toggler-icon .line-1,
    .navbar-toggler-icon .line-2,
    .navbar-toggler-icon .line-3 {
        background-color: black;
        height: 2px;
        width: 25px;
        display: block;
        margin: 5px auto;
        transition: all 0.3s;
    }

    .notices-section {
        background-color: #05326f;
        padding: 10px 0;
        color: white;
    }

    .notices-title {
        font-weight: bold;
        font-size: 1.2rem;
        margin-right: 15px;
        white-space: nowrap;
    }

    .marquee-container {
        overflow: hidden;
        position: relative;
        white-space: nowrap;
        width: 100%;
    }

    .marquee-content {
        display: inline-block;
        animation: marquee 15s linear infinite;
    }

    @keyframes marquee {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .notices-item {
        display: inline-block;
        padding-left: 20px;
    }
    </style>
</head>

<body>
    <header>
        <!--Starting for top menu-->
        <div class="header-top-bar">
            <div class="container-fuild">
                <div class="row">
                    <div class="col-12">
                        <div class="top-bars-line">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>

                        <div class="header-top-content d-flex justify-content-between align-items-center">

                            <div class="left-menu d-flex gap-3 ">
                                <a href="#" class="topmenu"
                                    style="margin-left:20px;">shodhshikhar@aisectuniversity.ac.in</a>
                                <a href="#" class="topmenu">0755-2700431</a>
                            </div>
                            <div class="right-menu d-flex gap-3">
                                <a href="#" class="topmenu">Register</a>
                                <a href="#" class="topmenu" style="margin-right:20px;">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Ending for top menu-->
        <!--Starting for Main menu-->
        <!-- <div class="header-top-wrapper-div container-fluid">
    <nav class="navbar navbar-expand-lg d-flex justify-content-between align-items-center" id="desktop-nav">

        <a class="navbar-brand" href="index.html">
            <img class="logo" style="margin-left: 20px;" src="https://www.shodhshikhar-agu.aisect.org/assets/upload_files/setting/8908231d6b54c9696e3156516ff01314.jpg" alt="Logo">
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
        <span class="line-1"></span>
        <span class="line-2"></span>
        <span class="line-3"></span>
        </span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent" style="margin-right: 20px;">
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item active d-flex align-items-center gap-2">
                    <a class="nav-link" href="faculty.html">Home</a>
                </li>
                <li class="nav-item d-flex align-items-center gap-2">
                    <a class="nav-link dropdown-toggle" href="#">About RNTU</a>
                </li>
                <li class="nav-item d-flex align-items-center gap-2">
                    <a class="nav-link dropdown-toggle" href="#">Categories</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="instructionsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Instructions</a>
                <div class="dropdown-menu" aria-labelledby="instructionsDropdown">
                  <a class="dropdown-item" href="#">Registration Process</a>
                  <a class="dropdown-item" href="#">Research Paper and Project Submission</a>
                  <a class="dropdown-item" href="#">Hotel List</a>
                </div>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="formatsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Formats
                </a>
                <div class="dropdown-menu" aria-labelledby="formatsDropdown">
                  <a class="dropdown-item" href="#">Format of Full Length Research</a>
                  <a class="dropdown-item" href="#">Format of Research Projects</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="speakersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Key Speakers
                </a>
                <div class="dropdown-menu" aria-labelledby="speakersDropdown">
                  <a class="dropdown-item" href="#">Key Note Speaker 2022</a>
                  <a class="dropdown-item" href="#">Key Note Speaker 2023</a>
                  <a class="dropdown-item" href="#">Key Note Speaker 2024</a>
                  <a class="dropdown-item" href="#">Key Note Speaker 2025</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="glimpsesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Glimpses
                </a>
                <div class="dropdown-menu" aria-labelledby="glimpsesDropdown">
                  <a class="dropdown-item" href="#">Glimpese of 2022</a>
                  <a class="dropdown-item" href="#">Glimpese of 2023</a>
                  <a class="dropdown-item" href="#">Glimpese of 2024</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="winnersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Winners
                </a>
                <div class="dropdown-menu" aria-labelledby="winnersDropdown">
                  <a class="dropdown-item" href="#">Winner 2022</a>
                  <a class="dropdown-item" href="#">Winner 2023</a>
                  <a class="dropdown-item" href="#">Winner 2024</a>
                </div>
              </li>

              <li class="nav-item d-flex align-items-center gap-2">
                    <a class="nav-link dropdown-toggle" href="#">Innovative Products and Design</a>
                </li>
              
            </ul>

            
        </div>
    </nav>
</div> -->
        <div class="header-top-wrapper-div container-fluid">
            <nav class="navbar navbar-expand-lg d-flex justify-content-between align-items-center" id="desktop-nav">

                <a class="navbar-brand" href="index.html">
                    <img class="logo" style="margin-left: 20px;"
                        src="https://www.shodhshikhar-agu.aisect.org/assets/upload_files/setting/8908231d6b54c9696e3156516ff01314.jpg"
                        alt="Logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent"
                    style="margin-right: 20px;">
                    <ul class="navbar-nav d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="faculty.html">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">About RNTU</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Categories</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="instructionsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Instructions</a>
                            <ul class="dropdown-menu" aria-labelledby="instructionsDropdown">
                                <li><a class="dropdown-item" href="#">Registration Process</a></li>
                                <li><a class="dropdown-item" href="#">Research Paper and Project Submission</a></li>
                                <li><a class="dropdown-item" href="#">Hotel List</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="formatsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Formats</a>
                            <ul class="dropdown-menu" aria-labelledby="formatsDropdown">
                                <li><a class="dropdown-item" href="#">Format of Full Length Research</a></li>
                                <li><a class="dropdown-item" href="#">Format of Research Projects</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="speakersDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Key Speakers</a>
                            <ul class="dropdown-menu" aria-labelledby="speakersDropdown">
                                <li><a class="dropdown-item" href="#">Key Note Speaker 2022</a></li>
                                <li><a class="dropdown-item" href="#">Key Note Speaker 2023</a></li>
                                <li><a class="dropdown-item" href="#">Key Note Speaker 2024</a></li>
                                <li><a class="dropdown-item" href="#">Key Note Speaker 2025</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="glimpsesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Glimpses</a>
                            <ul class="dropdown-menu" aria-labelledby="glimpsesDropdown">
                                <li><a class="dropdown-item" href="#">Glimpse of 2022</a></li>
                                <li><a class="dropdown-item" href="#">Glimpse of 2023</a></li>
                                <li><a class="dropdown-item" href="#">Glimpse of 2024</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="winnersDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Winners</a>
                            <ul class="dropdown-menu" aria-labelledby="winnersDropdown">
                                <li><a class="dropdown-item" href="#">Winner 2022</a></li>
                                <li><a class="dropdown-item" href="#">Winner 2023</a></li>
                                <li><a class="dropdown-item" href="#">Winner 2024</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Innovative Products and Design</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!--Ending for Main menu-->
    </header>

    <section class="img-h">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="https://www.shodhshikhar-agu.aisect.org/assets/upload_files/slider/cc08d02acf200de441037fe7e6448138.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://www.shodhshikhar-agu.aisect.org/assets/upload_files/slider/c5212b2531cfd6b34e08b572bfba747a.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://www.shodhshikhar-agu.aisect.org/assets/upload_files/slider/a51a72efcc6f5b7da7cf7e55bd48643c.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://www.shodhshikhar-agu.aisect.org/assets/upload_files/slider/c5212b2531cfd6b34e08b572bfba747a.jpg"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="notices-section">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <span class="notices-title" style="margin-left: 20px;">
                    <i class="fas fa-bullhorn"></i> Notices:
                </span>
                <div class="marquee-container">
                    <div class="marquee-content">
                        <div class="notices-item">
                            <i class="fas fa-newspaper"></i>
                            <a style="color: yellow;" href="enquiry-form" target="_self">Sodh Sikhar 2025</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

</body>

</html>