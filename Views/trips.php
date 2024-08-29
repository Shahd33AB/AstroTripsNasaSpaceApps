<?php
include_once 'nav.php';
?>



<body class="k-body">  
   <div class="starfield-container">
    <canvas id="starfield"></canvas>
    <div class="ka-content">
        <div class="header-icons">
            <i class="fas fa-satellite fa-spin" style="--fa-primary-color: #ffffff; --fa-primary-opacity: 1; --fa-secondary-color: #ffffff; --fa-secondary-opacity: 0.3;"></i>
            <i class="fas fa-meteor fa-beat-fade" style="--fa-secondary-opacity: 0.6;"></i>
            <i class="fas fa-shuttle-space fa-spin"></i>
            <i class="fas fa-earth-americas" style="--fa-primary-color: #ffffff; --fa-secondary-color: #ffffff;"></i>
          </div>
          <h1 class="explore-heading">Explore Our Trips</h1>
        </div>
  </div>
      <script src="../Js/starfield.js"></script>
      
  <div class="container mt-4">

    <div class="row">

      <div class="container">
        <div class="row">
      
          <!-- Card 1 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card small-card h-100">
              <img src="../Media/DreamShaper_v7_8k_3d_20_yo_boy_teenager_standing_OlympusMonsES_1.jpg" class="card-img-top" alt="Trip 1 Image">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Olympus Monss</h5>
                <p class="card-text">Olympus Mons, the highest point on the planet and the largest known volcano in the solar system.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">  DATE : </li>
                <li class="list-group-item"> avilable</li>
              </ul>
              <div class="card-body mt-auto">
                <a href="#" class="btn btn-primary"onclick="openBookingForm()">Book Now</a>
              </div>
            </div>
          </div>
      
          <!-- Card 2 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card small-card h-100">
              <img src="../Media/DreamShaper_v7_Chilean_lake_realistic_travelling_between_pla_0.jpg" class="card-img-top" alt="Trip 2 Image">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Lakes of Titan</h5>
                <p class="card-text">Lakes of ethane and methane on Titan, Saturn's largest moon.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">  DATE : </li>
                <li class="list-group-item"> avilable</li>
              </ul>
              <div class="card-body mt-auto">
                <a href="#" class="btn btn-primary"onclick="openBookingForm()">Book Now</a>
              </div>
            </div>
          </div>
      
          <!-- Card 3 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card small-card h-100">
              <img src="../Media/Absolute_Reality_v16_Valles_MarinerisValles_Marineris_is_a_vas_0.jpg" class="card-img-top" alt="Trip 3 Image">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Valles Marineris</h5>
                <p class="card-text"> is a vast canyon system on Mars, stretching over 2,500 miles (4,000 km) long, up to 7 miles (11 km) deep.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">  DATE : </li>
                <li class="list-group-item">not avilable</li>
              </ul>
              <div class="card-body mt-auto">
                <a href="#" class="btn btn-primary"onclick="openBookingForm()">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
      
          <!-- Card 1 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card small-card h-100">
              <img src="../Media/DreamShaper_v7_Ancient_lava_flowsrealistic_travelling_betwee_2.jpg" class="card-img-top" alt="Trip 1 Image">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Ancient lava flowsrealistic</h5>
                <p class="card-text">Two distinct volcanic eruptions have flooded this area of Daedalia Planum with lava, flowing around an elevated fragment of ancient terrain.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">  DATE : </li>
                <li class="list-group-item">not avilable</li>
              </ul>
              <div class="card-body mt-auto">
                <a href="#" class="btn btn-primary"onclick="openBookingForm()">Book Now</a>
              </div>
            </div>
          </div>
      
          <!-- Card 2 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card small-card h-100">
              <img src="../Media/DreamShaper_v7_Icy_Moon_of_JupiterEuropa_is_one_of_Jupiters_la_1.jpg" class="card-img-top" alt="Trip 2 Image">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Icy Moon of Jupiter</h5>
                <p class="card-text">Europa is one of Jupiter's largest moons and is unique due to its icy surface. Beneath this icy shell is believed to be a subsurface ocean.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">  DATE : </li>
                <li class="list-group-item"> avilable</li>
              </ul>
              <div class="card-body mt-auto">
                <a href="#" class="btn btn-primary"onclick="openBookingForm()">Book Now</a>
              </div>
            </div>
          </div>
      
          <!-- Card 3 --> 
       <div class="col-lg-4 col-md-6 mb-4">
            <div class="card small-card h-100">
              <img src="../Media/DreamShaper_v7_VallesMarinerisNASAWorldWindmapMars_travelling_3.jpg" class="card-img-top" alt="Trip 3 Image">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Train through Valles Marineris</h5>
                <p class="card-text">A Train tour through the deepest valley on mars.</p>
              </div >
              <ul class="list-group list-group-flush">
                 <li class="list-group-item">  DATE : </li>
                <li class="list-group-item">not avilable</li>
              </ul>
              <div class="card-body mt-auto">
                <a href="#" class="btn btn-primary"onclick="openBookingForm()">Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
      
          <!-- Card 1 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card small-card h-100">
              <img src="../Media/DreamShaper_v7_VallesMarinerisNASAWorldWindmapMars_travelling_0.jpg" class="card-img-top" alt="Trip 1 Image">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Valles Marineris</h5>
                <p class="card-text">Olympus Mons, the highest point on the planet and the largest known volcano in the solar system vast canyon system on Mars, stretching over 2,500 miles (4,000 km) long, up to 7 miles (11 km) deep.</p>
              </div>
              <ul class="list-group list-group-flush">
                 <li class="list-group-item">  DATE : </li>
                <li class="list-group-item"> avilable</li>
              </ul>
              <div class="card-body mt-auto">
                <a href="#" class="btn btn-primary"onclick="openBookingForm()">Book Now</a>
              </div>
            </div>
          </div>
      
          <!-- Card 2 -->
          <div class="col-lg-4 col-md-6 mb-4" style="backdrop-filter: blur(15px) ; background:trasperant !important;z-index: -1; ">
            <div class="card small-card h-100">
              <img src="../Media/DreamShaper_v7_Chilean_lake_realistic_travelling_between_pla_1.jpg" class="card-img-top" alt="Trip 2 Image">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Lakes of Titan</h5>
                <p class="card-text">Lakes of ethane and methane on Titan, Saturn's largest moon.</p>
              </div>
              <ul class="list-group list-group-flush">
                 <li class="list-group-item">  DATE : </li>
                <li class="list-group-item"> avilable</li>
              </ul>
              <div class="card-body mt-auto">
                <a href="#" class="btn btn-primary"onclick="openBookingForm()">Book Now</a>
              </div>
            </div>
          </div>
      
          <!-- Card 3 -->
  
      
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card small-card h-100">
              <img src="../Media/3D_Animation_Style_Nebula_TourismPlan_a_trip_to_explore_colorf_0 (1).jpg"class="card-img-top" alt="Trip 3 Image" >
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Nebula TourismPlan</h5>
                <p class="card-text"> Create destinations within these vast clouds of gas and dust, where travelers can witness spectacular light shows and study unique celestial phenomena.</p>
              </div>
              <ul class="list-group list-group-flush">
                 <li class="list-group-item">  DATE : </li>
                <li class="list-group-item">not avilable</li>
              </ul>
              <div class="card-body mt-auto">
                <a href="#" class="btn btn-primary"onclick="openBookingForm()">Book Now</a>
              </div>
            </div>
          </div>
        </div>
  </div>


  <!-- Booking Form Modal -->
  <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bookingModalLabel">Booking</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- General booking form -->
          <form id="bookingForm">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
             <label for="passengercredit">credit card</label>
             <input type="number" class="form-control" id="passengercredit" placeholder="Enter passenger credit"  required>
           </div>
          <div class="form-group">
            <label for="passengerpin">credit pin</label>
            <input type="number" class="form-control" id="passengerpin" placeholder="Enter passenger pin"  required>
         </div>
            <div class="form-group">
              <label for="numTickets">Number of Tickets</label>
              <input type="number" class="form-control" id="numTickets" placeholder="Enter number of tickets" required>
            </div>

            <!-- Dynamic section for entering names and ages -->
            <div id="namesAndAgesSection" style="display: none;">
              <hr>
              <h5>Passenger Details</h5>
              <div id="passengerDetails"></div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="confirmationCheckbox">
                <label class="form-check-label" for="confirmationCheckbox">I confirm that the information provided is correct.</label>
              </div>
            </div>
            <button type="button" class="btn btn-primary" onclick="submitBooking()">Submit Booking</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Include Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="../Js/booking.js"></script>
</body>
<?php
include_once 'footer.php';
?>