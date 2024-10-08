<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aleximmo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">



    <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">




    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class=" p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid px-0" style="height: 150px; background-color: black;">
            <div class="row gx-0">
                <div class="col-lg-3 d-none d-lg-block" style="background-color: black;">
                    <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <img src="img/36.png" alt="" style="width: 150px;  padding-bottom: 50px; height: 180px; padding-top:20px">
                    </a>
                </div>
                <div class="col-lg-9">

                    <nav class="navbar navbar-expand-lg navbar-dark ">
                        <a href="index.php" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Aleximmo</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse" style="font-size:50px; padding-top:40px; padding-left:150px;font-weight:bold;">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.php" class="nav-item nav-link active" style="margin-right: 70px;">Accueil</a>
                                <a href="#2" class="nav-item nav-link" style="margin-right: 70px;">à propos de Nous</a>
                                <div class="nav-item dropdown">
                                    <a href="#3" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="margin-right: 70px;">Nos Services</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="climatisation.php" class="dropdown-item">Climatisation</a>
                                        <a href="Travaux.php" class="dropdown-item">Travaux de Bâtiments</a>
                                        <a href="terrains.php" class="dropdown-item">Terrains omni sport</a>
                                        <a href="terassement.php" class="dropdown-item">Terassement Jardin</a>
                                        <a href="dressing&cuisine.php" class="dropdown-item">Dressing et cuisine</a>
                                        <a href="escaliers.php" class="dropdown-item">Escaliers</a>
                                        <a href="escaliers.php" class="dropdown-item">Peintures</a>
                                        <a href="escaliers.php" class="dropdown-item">Plomberie</a>
                                        <a href="escaliers.php" class="dropdown-item">Elécricité & Cablâge</a>

                                    </div>
                                </div>
                                <a href="#6" class="nav-item nav-link" style="margin-right: 70px;">Contact</a>
                            </div>
                            <a href="#3" class="btn rounded-0 py-4 px-md-5 d-none d-lg-block" style="background-color: rgb(255,236,0); font-weight: bold;color: black;">Passez un Devis<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/image accueil...jpg" alt="Image">

                    </div>

                </div>

            </div>
        </div>
        <!-- Carousel End -->

        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s" id="9">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <form action="traitement_RDV.php" method="post">
                            <div class="col-md-12">
                                <div class="row g-2">
                                    <h1 style="text-align: center;">Prendre RDV</h1>

                                    <div class="col-md-3">
                                        <div class="text" id="text" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" placeholder="Nom & Prénom" name="nom_prenom" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); border-radius:15px;" />
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="text " id="date1" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" placeholder="Date" data-target="#date1" data-toggle="datetimepicker" name="date" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); border-radius:15px;" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text " id="date1" data-target-input="nearest">
                                            <input type="text" class="form-control" placeholder="description" name="description" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); border-radius:15px;" />
                                        </div>
                                    </div>

                                    <br>



                                    <div class="col-md-3">
                                        <button class="btn w-100" style="background-color: rgb(255, 236, 0);box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); border-radius:15px;">Passer RDV</button>

                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->




        <!-- About Start -->
        <div class="container-xxl py-5" id="2">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start  text-uppercase">à propos de Nous</h6>
                        <h1 class="mb-4">Bienvenue Chez <span class="text-uppercase" style="color: #ffec00;">Aleximmo</span></h1>
                        <p class="mb-4">Solution de construction de qualité</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-tools fa-2x mb-2" style="color:#ffec00"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">123</h2>
                                        <p class="mb-0">services</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x mb-2" style="color:#ffec00"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x mb-2" style="color:#ffec00"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/apropos1.jpg" style="margin-top: 25%; border: 2px solid yellow; padding: 5px; display: inline-block;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/apropos2.jpg" style=" border: 2px solid yellow; padding: 5px; display: inline-block;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/apropos3.jpg" style=" border: 2px solid yellow; padding: 5px; display: inline-block;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/apropos4.jpg" style="border: 2px solid yellow; padding: 5px; display: inline-block;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->




        <!-- Video Start -->
        <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6  d-flex align-items-center" style="background-color: black;">
                    <div class="p-5">
                        <h6 class="section-title text-start text-white text-uppercase mb-3">Aleximmo</h6>
                        <h1 class="text-white mb-4" >Découverez Plus d'informations sur Aleximmo</h1>
                        <p class="text-white mb-4" style="text-align: justify;">Aleximmo est une entreprise spécialisée dans les travaux et services liés à la plomberie, la climatisation et bien d'autres domaines connexes. Forte de son expertise et de son expérience, Aleximmo s'engage à fournir des solutions de haute qualité pour répondre aux besoins variés de sa clientèle. Que ce soit pour l'installation de systèmes de plomberie complexes, la réparation rapide de fuites d'eau, la maintenance de climatiseurs ou encore la mise en place de solutions innovantes pour améliorer l'efficacité énergétique des habitations, Aleximmo se distingue par son professionnalisme, sa fiabilité et son service clientèle exceptionnel. En s'appuyant sur une équipe qualifiée et des technologies de pointe, Aleximmo s'efforce de garantir la satisfaction totale de ses clients en offrant des solutions sur mesure, fiables et durables pour tous leurs besoins en matière de plomberie, climatisation et autres services connexes.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video">
                        <img src="img/construction-site-4020496_1280.jpg" alt="" style="width: 100%; height:100%;">

                        <button type="button" class="btn-play" data-bs-toggle="modal" data-bs-target="#videoModal">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <video src="img/construction_-_52888 (720p).mp4" controls></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Start -->


        <!-- Service Start -->
        <div class="container-xxl py-5" id="3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center  text-uppercase" style="color: black;">Nos Services</h6>
                    <h1 class="mb-5">Découvrez Nos <span class="text-uppercase" style="color: #ffec00;">Services</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item rounded" href="climatisation.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <img src="img/icone climatisation.png" style="width: 50px;" alt="">
                                </div>
                            </div>
                            <h5 class="mb-3">Climatisation</h5>
                            <p class="text-body mb-0" style="color: black; text-align:justify">Aleximmo offre un service professionnel de climatisation, adapté à une variété d'applications,y compris les résidences,les bureaux,les commerces et les espaces industriels.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="service-item rounded" href="Travaux.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <img src="img/icone travaux et batiments.png" style="width: 50px;" alt="">
                                </div>
                            </div>
                            <h5 class="mb-3">Travaux & Bâtiments</h5>
                            <p class="text-body mb-0" style="padding-bottom: 15px; text-align:justify">Aleximmo propose un service complet de travaux et bâtiments, répondant aux besoins variés de nos clients en matière de construction, rénovation et entretien. </p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item rounded" href="terrains.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <img src="img/icone terrain de sport.png" style="width: 50px;" alt="">
                                </div>
                            </div>
                            <h5 class="mb-3">Terrains de sportif</h5>
                            <p class="text-body mb-0" style="padding-bottom: 15px; text-align:justify">Aleximmo propose un service complet de terrains de sportifs, offrant des solutions sur mesure pour la conception, la construction et l'entretien de terrains sportifs de haute qualité.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <a class="service-item rounded" href="Terassement.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <img src="img/icone terrassement jardin.png" style="width: 50px;" alt="">
                                </div>
                            </div>
                            <h5 class="mb-3">Terassement Jardin</h5>
                            <p class="text-body mb-0" style="padding-bottom: 15px; text-align:justify">Aleximmo offre un service complet de terrassement jardin, fournissant des solutions personnalisées pour la préparation et l'aménagement de terrains extérieurs.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="service-item rounded" href="dressing&cuisine.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <img src="img/icone cuisine et dressing.png" style="width: 50px;" alt="">
                                </div>
                            </div>
                            <h5 class="mb-3">Dressing & cuisine</h5>
                            <p class="text-body mb-0" style="padding-bottom: 15px; text-align:justify">Aleximmo propose un service complet de dressing et de cuisine, offrant des solutions sur mesure pour créer des espaces de rangement fonctionnels.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <a class="service-item rounded" href="escaliers.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <img src="img/escalier.png" style="width: 50px;" alt="">
                                </div>
                            </div>
                            <h5 class="mb-3">Escaliers</h5>
                            <p class="text-body mb-0" style="padding-bottom: 15px; text-align:justify">Aleximmo offre un service spécialisé dans la conception et la construction d'escaliers sur mesure, alliant fonctionnalité et esthétique. Notre équipe expérimentée travaille en étroite collaboration avec nos clients .</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <a class="service-item rounded" href="peintures.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <img src="img/p.png" style="width: 50px;" alt="">
                                </div>
                            </div>
                            <h5 class="mb-3">Peinture</h5>
                            <p class="text-body mb-0" style="padding-bottom: 15px; text-align:justify">Le service de peinture d'Aleximmo offre des solutions professionnelles pour rafraîchir et embellir votre espace intérieur ou extérieur.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <a class="service-item rounded" href="plomberie.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <img src="img/pb.png" style="width: 50px;" alt="">
                                </div>
                            </div>
                            <h5 class="mb-3">Plomberie</h5>
                            <p class="text-body mb-0" style="padding-bottom: 15px; text-align:justify">Confiez vos travaux de plomberie à Aleximmo pour des solutions fiables et efficaces, garantissant le bon fonctionnement de vos installations avec expertise.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <a class="service-item rounded" href="electricité&câblage.php">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <img src="img/ce.png" style="width: 50px;" alt="">
                                </div>
                            </div>
                            <h5 class="mb-3">Electricité & Cablâge</h5>
                            <p class="text-body mb-0" style="padding-bottom: 15px; text-align:justify">Aleximmo : votre partenaire de confiance pour des solutions d'électricité et de câblage efficaces et sécurisées.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Testimonial Start -->
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s" id="4">
            <h6 class="section-title text-center  text-uppercase" style="color: black;">Nos Témoignages</h6>
            <h1 class="mb-5">Découvrez Nos <span class="text-uppercase" style="color: #ffec00;">Témoignages</span></h1>
        </div>
        <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">

            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-xxl py-5" id="5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-uppercase" style="color: black;">Nos Staffs</h6>
                    <h1 class="mb-5">Découvrez Nos <span class="text-uppercase" style="color: #ffec00;">Staffs</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/98.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square  mx-1" href="" style="background-color: #ffec00; color: black;"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square  mx-1" href="" style="background-color: #ffec00; color: black;"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square  mx-1" href="" style="background-color: #ffec00; color: black;"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/98.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square  mx-1" href="" style="background-color: #ffec00; color: black;"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square  mx-1" href="" style="background-color: #ffec00; color: black;"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square  mx-1" href="" style="background-color: #ffec00; color: black;"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/98.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square  mx-1" href="" style="background-color: #ffec00; color: black;"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square  mx-1" href="" style="background-color: #ffec00; color: black;"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square  mx-1" href="" style="background-color: #ffec00; color: black;"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/98.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square  mx-1" href="" style="background-color: #ffec00; color: black;"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square  mx-1" href="" style="background-color: #ffec00; color: black;"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square  mx-1" href="" style="background-color: #ffec00; color: black;"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s" id="6">
            <form action="traitement_contact.php" method="post">
                <div class="row justify-content-center">


                    <div class="col-lg-6 border rounded p-1">
                        <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" style="min-height: 150px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-lg-6 border rounded p-1">
                        <div class="border rounded text-center p-1">
                            <div class="bg-white rounded text-center p-5">
                                <h4 class="mb-4">Contactez-<span class="text-uppercase" style="color: #ffec00;">Nous</span></h4>
                                <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" name="nom" placeholder="Entrer votre nom"> <br>
                                    <input class="form-control w-100 py-3 ps-4 pe-5" type="email" name="email" placeholder="Entrer votre Email"> <br>
                                    <input class="form-control w-100 py-3 ps-4 pe-5" type="tel" name="tel" placeholder="Entrer votre numéro de téléphone">

                                </div>
                                <br>
                                <div class="col-md-9" style="padding-left: 180px;">
                                        <button class="btn w-100 text-center" style="background-color: rgb(255, 236, 0);box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">Envoyer</button>

                                    </div>                            </div>


                        </div>

                    </div>


                </div>
            </form>
        </div>
        <!-- Newsletter Start -->


        <!-- Footer Start -->
        <div class="container-fluid footer wow fadeIn" data-wow-delay="0.1s" style="background-color: black;">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="rounded p-4">
                            <a href="index.php">
                                <h1 class="text-white text-uppercase mb-3"><img src="img/36.png" alt="" style="width: 150px;"></h1>
                            </a>
                            <p class="text-white mb-0">
                            </p>
                        </div>
                        <button class="btn text-center text-uppercase" style="background-color: rgb(255,236,0); color: black;  font-size: 14px; font-weight: bold; width:200px "><a href="#9" style="color: black;"> Passez Un rendez-Vous</a> </button> <br> <br>
                        <button class="btn text-center text-uppercase" style="background-color: rgb(255,236,0); color: black; font-size: 14px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#3" style="color: black;"> Passez Un Devis</a> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>

                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start  text-uppercase mb-4" style="color: rgb(255,236,0);">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>

                        </div>
                        <br>

                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-uppercase mb-4" style="color: rgb(255,236,0);">Liens</h6>
                                <a class="btn btn-link" href="#2">à propos de Nous</a>
                                <a class="btn btn-link" href="#4">Témoignages</a>
                                <a class="btn btn-link" href="#5">Nos Staffs</a>
                                <a class="btn btn-link" href="#3">Nos Services</a>
                                <a class="btn btn-link" href="#6">Contact</a>
                            </div>

                            <div class="col-md-6">
                                <h6 class="section-title text-start text-uppercase mb-4" style="color: rgb(255,236,0);">Services</h6>
                                <a class="btn btn-link" href="climatisation.php">Climatisation</a>
                                <a class="btn btn-link" href="Travaux.php">Travaux Bâtiments</a>
                                <a class="btn btn-link" href="terrains.php">Terrains de sportifs</a>
                                <a class="btn btn-link" href="terassement.php">Terassement Jardin</a>
                                <a class="btn btn-link" href="dressing&cuisine.php">Dressing et cuisine</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Aleximmo</a>, Tous les droits Réservés.
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="">Microsystem Solutions</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top" style="background-color: #ffec00;"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>