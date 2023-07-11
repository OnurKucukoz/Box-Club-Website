<?php

session_start();
include_once("database.php");
if (isset($_SESSION['email']) && isset($_SESSION['success']))
{

?>

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Box Club</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>

        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="height: 61px;">
            <div class="container">
                <a class="navbar-brand" href="#">FIGHT<span style="color: red;">CLUB</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Contact Us
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Tel No: 3525367343xx</a></li>
                                <li><a class="dropdown-item" href="#">Whatsapp: 345332535xx</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="https://www.instagram.com/kucukozonur/" target="_blank">Instagram</a></li>
                            </ul>
                        </li>

                    </ul>

                    <h1>Welcome,<?php echo $_SESSION['name']; ?></h1>

                    <a href="logout.php" <button style="margin-right: 1cm; margin-left: 1cm;" class="btn btn-outline-success" type="submit"> Logout</button></a>


                </div>
            </div>
        </nav>


        <section id="title">
            <div style="background-color: rgb(56, 19, 19); " class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-lg-12 col-sm-12"><img src="images/boxing.png" alt="boxing"> </div>

                    <div class="col-xl-3 col-lg-12 col-sm-12"><span class="cool-title" style="color: rgb(255, 255, 255);">Fight like <span style="color: red;">champion</span></span>
                        <div style="padding-top:1cm ; color: white; font-size: large;">We'll teach you to fight like a CHAMPION! Thanks to our experienced instructors, you will soon improve in your chosen fighting style.</div>
                    </div>
                </div>

            </div>

        </section>

        <section id="photos">
            <p class="cool-title" style="color: white; padding-bottom: 0cm; padding-top: 1cm;">Our <span style="color: red;">training</span> </p>
            <div style="padding-top: 1.8cm;" class="container">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/boxmatch1080.jpg" class="d-block w-100" alt="boxmatch">
                        </div>
                        <div class="carousel-item">
                            <img src="images/boxgirl1080.jpg" class="d-block w-100" alt="boxman">
                        </div>
                        <div class="carousel-item">
                            <img src="images/boxman.jpg" class="d-block w-100" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <section id="membership">
            <p style="padding-bottom: 0.5cm;" class="cool-title" style="color: white;">Membership <span style="color: red;">Program</span></p>


            <div class="pricing-header p-3 pb-md-4 mx-auto">

                <p style="color: #fdfbfb;" class="fs-5 text-body-secondary">Choose the plan best fits you.</p>
            </div>
            </header>

            <main>
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">1 Month</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$20<small class="text-body-secondary fw-light">/mo</small>
                                </h1>
                                <ul class="list-unstyled mt-3 mb-4">

                                    <li>Welcome gift</li>
                                    <li>Email support</li>
                                    <li>Help center access</li>
                                </ul>
                                <a href="signUp.php"><button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free trial</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">3 Months</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small>
                                </h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>Priority email support</li>
                                    <li>Help center access</li>
                                    <li>Diet Advice</li>
                                </ul>
                                <a href="signUp.php"><button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free
                                        trial</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-primary">
                            <div class="card-header py-3 text-bg-primary border-primary">
                                <h4 class="my-0 fw-normal">Yearly</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$10<small class="text-body-secondary fw-light">/mo</small>
                                </h1>
                                <ul class="list-unstyled mt-3 mb-4">


                                    <li>Phone and email support</li>
                                    <li>Help center access</li>
                                    <li>Private Lessons</li>
                                </ul>
                                <a href="signUp.php"><button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free
                                        trial</button></a>
                            </div>
                        </div>
                    </div>
                </div>


            </main>

            </div>
        </section>

        <section id="exampleVideos">
            <p class="cool-title" style="color: white;">Videos</p>

            <div class="container-fluid">
                <div class="row">



                    <div style="padding-top: 3cm; " class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 d-flex justify-content-center"><video width="350" controls>
                            <source src="videos//Ippo.mp4" type="video/mp4">
                            <source src="videos//Ippo.mp4" type="video/ogg">

                        </video> </div>
                    <div style="padding-top: 3cm; " class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 d-flex justify-content-center"><video width="350" controls>
                            <source src="videos//Ippo.mp4" type="video/mp4">
                            <source src="videos//Ippo.mp4" type="video/ogg">

                        </video> </div>

                    <div style="padding-top: 3cm; " class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 d-flex justify-content-center"><video width="350" controls>
                            <source src="videos//Ippo.mp4" type="video/mp4">
                            <source src="videos//Ippo.mp4" type="video/ogg">

                        </video> </div>

                    <div style="padding-top: 3cm; " class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 d-flex justify-content-center"><video width="350" controls>
                            <source src="videos//Ippo.mp4" type="video/mp4">
                            <source src="videos//Ippo.mp4" type="video/ogg">

                        </video> </div>

                    <div style="padding-top: 3cm;" class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 d-flex justify-content-center"><video width="350" controls>
                            <source src="videos//Ippo.mp4" type="video/mp4">
                            <source src="videos//Ippo.mp4" type="video/ogg">

                        </video> </div>

                    <div style="padding-top: 3cm; " class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 d-flex justify-content-center"><video width="350" controls>
                            <source src="videos//Ippo.mp4" type="video/mp4">
                            <source src="videos//Ippo.mp4" type="video/ogg">

                        </video> </div>

                    <div style="padding-top: 3cm; " class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 d-flex justify-content-center"><video width="350" controls>
                            <source src="videos//Ippo.mp4" type="video/mp4">
                            <source src="videos//Ippo.mp4" type="video/ogg">

                        </video> </div>

                    <div style="padding-top: 3cm; " class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 d-flex justify-content-center"><video width="350" controls>
                            <source src="videos//Ippo.mp4" type="video/mp4">
                            <source src="videos//Ippo.mp4" type="video/ogg">

                        </video> </div>



                </div>
            </div>




        </section>

        <section id="trainers">

            <p class="cool-title" style="color: white;">Meet Your <span style="color: red;">trainers</span></p>
            <div class="container">
                <div class="row">
                    <div class="card col-xl-4 col-lg-6 col-md-4" style="width: 18rem; margin-left:1cm; margin-top: 1cm; padding-top: 1cm;">
                        <img src="images/anthony-antrenor.jpg" class="card-img-top" alt="antrenor information">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white;">Rex Hunter</h5>
                            <p class="card-text">Trainer</p>
                            <a href="https://www.instagram.com/kucukozonur/" target="_blank" class="btn btn-primary">Instagram</a>
                            <a href="appointment.php"  class="btn btn-primary" style="float: right;">Appointment</a>

                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-4" style="width: 18rem;  margin-left: 1cm; margin-top: 1cm; padding-top: 1cm;">
                        <img style="height: 163.750px" src="images/antrenor2.jpg" class="card-img-top" alt="antrenor information">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white;">Wade Alvarez</h5>
                            <p class="card-text">Trainer</p>
                            <a href="https://www.instagram.com/kucukozonur/" target="_blank" class="btn btn-primary">Instagram</a>
                            <a href="appointment.php"  class="btn btn-primary" style="float: right;">Appointment</a>

                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-4" style="width: 18rem; margin-left: 1cm; margin-top: 1cm; padding-top: 1cm;">
                        <img style="height: 163.750px" src="images/antrenor4.jpg" class="card-img-top" alt="antrenor information">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white;">Leroy Lowe</h5>
                            <p class="card-text">Trainer</p>
                            <a href="https://www.instagram.com/kucukozonur/" target="_blank" class="btn btn-primary">Instagram</a>
                            <a href="appointment.php"  class="btn btn-primary" style="float: right;">Appointment</a>

                        </div>
                    </div>

                    <div class="card col-xl-4 col-lg-6 col-md-4" style="width: 18rem; margin-left: 1cm; margin-top: 1cm; padding-top: 1cm;">
                        <img src="images/boxgirl1080.jpg" class="card-img-top" alt="antrenor information">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white;">Alice Mullins</h5>
                            <p class="card-text">Trainer</p>
                            <a href="https://www.instagram.com/kucukozonur/" target="_blank" class="btn btn-primary">Instagram</a>
                            <a href="appointment.php" class="btn btn-primary" style="float: right;">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="reviews">
            <p class="cool-title" style="color: white;">Reviews</p>
        </section>



        <section id="footer">
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <p class="col-md-4 mb-0 text-muted">© 2021 Company, Inc</p>


                    <p class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto text-decoration-none">FIGHT <span style="color: red;">CLUB</span>
                    </p>


                    <ul class="nav col-md-4 justify-content-end">
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                        <li class="nav-item"><a href="#membership" class="nav-link px-2 text-muted">Pricing</a></li>
                        <li class="nav-item"><a href="#exampleVideos" class="nav-link px-2 text-muted">Videos</a></li>
                        <li class="nav-item"><a href="#trainers" class="nav-link px-2 text-muted">Trainers</a></li>
                    </ul>
                </footer>
            </div>
        </section>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>

    </html>

<?php

} else {

    header("Location: index.php");

    exit();
}

?>