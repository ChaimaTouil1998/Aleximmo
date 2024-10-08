<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../img/Logo aleximmo PNG.png">
  <title>
    Aleximmo Dashboard
  </title>
  <link href="style.css" rel="stylesheet">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->

</head>

<body class="g-sidenav-show  bg-gray-200">
  <?php include('navbar.php') ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

          <ul class="navbar-nav  justify-content-end">


            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>



          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Booking Start -->
    <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s" id="5">
      <div class="container">
        <div class="bg-white shadow" style="padding: 35px;">
          <div class="row g-2">
            <form action="climatisation_pdf.php" method="post">
              <div class="col-md-12">
                <div class="row g-2">
                  <h1 style="text-align: center;">Devis Climatisation Client: </h1>

                  <div class="col-md-6">
                    <div class="text" id="text" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" placeholder="Nom et prénom du client" name="nom_prenom_client" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); padding-left:20px" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="email" id="email" data-target-input="nearest">
                      <input type="email" class="form-control datetimepicker-input" placeholder="Adresse e-mail du client" name="email_client" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5);padding-left:20px " />

                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="adresse" id="adresse" data-target-input="nearest">
                      <input type="adresse" class="form-control datetimepicker-input" placeholder="Adresse de facturation" name="adresse_fact" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); padding-left:20px" />
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="text" id="code_postal" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" placeholder="Type de bâtiment (résidentiel, commercial, industriel, etc.)" name="type_bat" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); padding-left:20px" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="text" id="code_postal" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" placeholder="Marque et modèle de l'unité de climatisation" name="marque_clim" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); padding-left:20px" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="adresse" id="adresse" data-target-input="nearest">
                      <input type="tel" class="form-control datetimepicker-input" placeholder="Numéro de téléphone du client" name="tel_client" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); padding-left:20px" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="text" id="code_postal" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" placeholder="Nombre d'unités nécessaires" name="nb" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); padding-left:20px" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="text" id="code_postal" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" placeholder="Configuration électrique actuelle du bâtiment" name="config" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); padding-left:20px" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="text" id="code_postal" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" placeholder="Contraintes spéciales ou demandes particulières du client" name="contrainte" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); padding-left:20px" />
                    </div>
                  </div>




                  <div class="col-md-6">
                    <div class="text" id="code_postal" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" placeholder="Contraintes spéciales ou demandes particulières du client" name="contrainte" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); padding-left:20px" />
                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="text " id="date1" data-target-input="nearest">
                      <input type="text" class="form-control" placeholder="Durée estimée des travaux" name="duree" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); padding-left:20px" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="text" id="code_postal" data-target-input="nearest">
                      <input type="number" class="form-control datetimepicker-input" placeholder="Montant total du devis" name="montant" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); padding-left:20px" />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="date" id="date1" data-target-input="nearest">
                      <input type="text" class="form-control" placeholder="Service : Climatisation" data-target="#date1" data-toggle="datetimepicker" name="climatisation" style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5); padding-left:20px" disabled />
                    </div>
                  </div>

                  <br>

                  <div class="col-md-6">
                    <button class="btn w-100" style="background-color: rgb(255, 236, 0);box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); ">Envoyer</button>

                  </div>
                </div>
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s" id="5">
    <div class="container">
    <?php
// Connexion à la base de données
$servername = "localhost"; // Remplacez par le nom de votre serveur MySQL
$username = "root"; // Remplacez par votre nom d'utilisateur MySQL
$password = ""; // Remplacez par votre mot de passe MySQL
$dbname = "ms_aleximmo"; // Remplacez par le nom de votre base de données MySQL

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Requête SQL pour récupérer les données
$sql = "SELECT * FROM clim";
$result = $conn->query($sql);

// Vérifier s'il y a des résultats
if ($result->num_rows > 0) {
    // Affichage du tableau HTML
    echo " <h1 style='text-align:center'>Historique Devis</h1>
    <table border='1' class='styled-table'><tr><th>Devis N°:</th><th>Nom et Prénom</th><th>Email</th><th>Téléphone</th></tr>";
    // Parcourir chaque ligne de résultat
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nom_prenom_client"]."</td><td>".$row["email_client"]."</td><td>".$row["tel_client"]."</td></tr>";
        // Ajoutez les autres colonnes de la table au besoin
    }
    echo "</table>";
} else {
    echo "0 résultats";
}

// Fermer la connexion à la base de données
$conn->close();
?>
    </div>
   

    </div>
    
    <!-- Booking End -->
  </main>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
  
  </script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>