<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aleximmo - Terassement Jardins</title>
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
    <div class="p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <?php include('inc/header.php') ?>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-10 p-0" style="background-image: url(img/j1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 mb-3 animated slideInDown text-uppercase" style="color: #ffec00;">Terassement Jardins</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item" style="color: #ffec00;"><a href="index.php" style="color: #ffec00;">Accueil</a></li>
                            <li class="breadcrumb-item" style="color: #ffec00;"><a href="index.php#3" style="color: #ffec00;">services</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Terassement Jardins</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
        <!-- Page Header End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s" id="5">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <form action="traitement_terassement_jardins.php" method="post" id="dynamic-form">
                            <div class="col-md-12">
                                <div class="row g-2">
                                    <h1 style="text-align: center;">Devis Terassement Jardins</h1>
                                    <div class="col-md-3">
                                        <div class="text" id="text" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" placeholder="Nom & Prénom" name="nom_prenom" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); border-radius:15px;" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text" id="text" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" placeholder="Adresse" name="adresse" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); border-radius:15px;" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text" id="text" data-target-input="nearest">
                                            <input type="tel" class="form-control datetimepicker-input" placeholder="Numéro de téléphone" name="num_tel" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); border-radius:15px;" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text" id="text" data-target-input="nearest">
                                            <input type="email" class="form-control datetimepicker-input" placeholder="Email" name="email" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); border-radius:15px;" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <input type="text" class="form-control" placeholder="Service : Terassement Jardins" data-target="#date1" data-toggle="datetimepicker" name="Terassement Jardins" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); border-radius:15px;" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text " id="date1" data-target-input="nearest">
                                            <input type="date" class="form-control datetimepicker-input" placeholder="Date" data-target="#date1" data-toggle="datetimepicker" name="date" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); border-radius:15px;" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text" id="text" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" placeholder="Code_postal" name="code_postal" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); border-radius:15px;" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text" id="text" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" placeholder="L’envergure des fouilles" name="envergure_des_fouilles" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); border-radius:15px;" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text" id="text" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" placeholder="La nature du sol" name="nature_sol" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); border-radius:15px;" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text" id="text" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" placeholder="l’accessibilité du terrain" name="accessibilité_terrain" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); border-radius:15px;" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text" id="text" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" placeholder="description" name="description" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); border-radius:15px;" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="text" id="text" data-target-input="nearest">
                                        <button type="submit" class="btn w-100" style="background-color: rgb(255, 236, 0);box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); border-radius:15px;">Envoyer</button>
                                        </div>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                        </form>




                      


                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="color: #ffec00;">
                    <h6 class="section-title text-center text-uppercase" style="color: black;">Nos Services</h6>
                    <h1 class="mb-5">Découvrez <span class="text-uppercase" style="color: #ffec00;">Terassement Jardins</span></h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/j1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/j2.png">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/j3.webp">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/j4.webp">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <p style="color: black; font-weight: bold;" class="text-center">
                            Le service de terrassement jardin proposé par Aleximmo vise à transformer les espaces extérieurs en des environnements esthétiquement agréables et fonctionnels. Grâce à une expertise professionnelle et à des équipements spécialisés, ce service prend en charge la préparation du terrain pour la création de jardins, parcs, et autres aménagements paysagers. Que ce soit pour des projets résidentiels, commerciaux ou institutionnels, le terrassement jardin d'Aleximmo assure un nivellement précis du sol, la création de plateformes, la mise en place de chemins et de bordures, ainsi que la préparation nécessaire pour la plantation de végétaux. En mettant l'accent sur la qualité et la durabilité, ce service s'engage à fournir des solutions sur mesure qui répondent aux besoins et aux attentes des clients, tout en offrant un environnement extérieur harmonieux et accueillant. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->



        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">

                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/j5.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/j6.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/j7.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/j8.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/j9.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/j10.png">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/j12.webp">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/j11.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->
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

                                </div>
                            </div>


                        </div>

                    </div>


                </div>
            </form>
        </div>
        <!-- Newsletter Start -->


        <?php
        include('inc/footer.php');
        ?>


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top" style="background-color: #ffec00;"><i class="bi bi-arrow-up"></i></a>
    </div>
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