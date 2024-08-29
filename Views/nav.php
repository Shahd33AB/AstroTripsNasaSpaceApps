<!DOCTYPE html>
<html>
    <head>
        <title>AstroTrips</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../Css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="../Css/owl.carousel.min.css">
        <link rel="stylesheet" href="../Css/owl.theme.default.min.css">
        <link rel="stylesheet" href="../Css/booking.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="../Js/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script> 
        $(document).ready(function() {
          // Show login form and hide register form
          $('#signInLink').click(function() {
            $('#registerForm').hide();
            $('#loginForm').show();
          });

          // Show register form and hide login form
          $('#registerLink').click(function() {
            $('#loginForm').hide();
            $('#registerForm').show();
          });
        });


        function scrollAndAddClass(felement1 , felement2) {
            var fe_target = document.getElementById(felement1);
            var fe_wrapper = document.getElementById(felement2);
            if (fe_target) {
                fe_wrapper.scrollIntoView({ behavior: 'smooth' });
                fe_target.classList.add('show');
            } else {
                console.error("Target element not found with ID: " + elementId);
            }

        }
      </script>
    </head>
    <body class="bg-img">
        <header>
            <nav class="navbar fixed-top nav-fixed navbar-expand-lg navbar-dark ">
                <div class="container-fluid">
                    <div class="col-8 pd-left">
                        <a class="navbar-brand nav-title nav-icon" href="#"><img src="../Media/Fiverr-Logo-Maker (1).png" alt="logo" class="logo">AstroTrips</a>
                    </div>
                    <div class="col-4 nav-menu">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                    <a class="nav-link navbar-item active" aria-current="page" href="homepage.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link navbar-item" href="trips.php" > Trips</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link navbar-item" href="transportation&activities.php" >Activities&Transportation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link navbar-item" href="addFeedback.php">Feedback</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
              </nav>
        </header>
        <section class="main">
