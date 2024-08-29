<?php
include_once 'nav.php';
?>


<div id="carouselExampleCaptions" class="carousel slide text-center" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="row">
        <div class="col-4">
      <img src="../Media/mercury.png" class="d-block w-100" alt="mercury">
      </div>
      <div class="col-6 d-flex justify-content-center flex-column">
      <p class="text-center txt">Mercury is the smallest and closest planet to the Sun in the Solar System.It has a rocky surface and no atmosphere to retain heat, causing extreme temperature variations.It has a rocky surface and no atmosphere to retain heat, causing extreme temperature variations.</P>
        <div><button class="btn btn-primary" onclick="scrollAndAddClass('collapseMercury' , 'mer')"> Learn More </button></div>
        </div>
    </div>
      <div class="carousel-caption d-none d-md-block">
        <h3>Mercury</h3>
      </div>
    </div>
    <div class="carousel-item">
      
      <div class="row">
        <div class="col-4">
        <img src="../Media/venus.png" class="d-block w-100" alt="venus">
      </div>
      <div class="col-6 d-flex justify-content-center flex-column">
      <p class="text-center txt">Venus is the second planet from the Sun and is often referred to as Earth's "sister planet".It has a thick atmosphere primarily composed of carbon dioxide, making it the hottest planet in our solar system.</P>
        <div><button class="btn btn-primary" onclick="scrollAndAddClass('collapseVenus' , 'ven')"> Learn More </button></div>
        </div>
    </div>
      <div class="carousel-caption d-none d-md-block">
        <h3>Venus</h3>
      </div>
    </div>
    <div class="carousel-item">
      
      <div class="row">
        <div class="col-4">
        <img src="../Media/mars.png" class="d-block w-100" alt="mars">
      </div>
      <div class="col-6 d-flex justify-content-center flex-column">
      <p class="text-center txt">Mars is the fourth planet from the Sun and is often called the "Red Planet" due to its reddish appearance.It has a thin atmosphere and is known for its surface features, including volcanoes, canyons, and polar ice caps.</P>
        <div><button class="btn btn-primary" onclick="scrollAndAddClass('collapseMars' , 'mars')"> Learn More </button></div>
        </div>
    </div>
      <div class="carousel-caption d-none d-md-block">
        <h3>Mars</h3>
      </div>
    </div>
    <div class="carousel-item">
      
      <div class="row">
        <div class="col-4">
        <img src="../Media/jupiter.png" class="d-block w-100" alt="jupiter">
      </div>
      <div class="col-6 d-flex justify-content-center flex-column">
      <p class="text-center txt">Jupiter is the largest planet in our solar system and is known for its swirling clouds and distinctive red spot.It is a gas giant with a strong magnetic field and numerous moons, including the four large Galilean moons.</P>
        <div><button class="btn btn-primary" onclick="scrollAndAddClass('collapseJupiter' , 'jup')"> Learn More </button></div>
        </div>
    </div>
      <div class="carousel-caption d-none d-md-block">
        <h3>Jupiter</h3>
      </div>
    </div>
    <div class="carousel-item">
      
      <div class="row">
        <div class="col-4">
        <img src="../Media/saturn.png" class="d-block w-100" alt="saturn">
      </div>
      <div class="col-6 d-flex justify-content-center flex-column">
      <p class="text-center txt">Saturn is a gas giant known for its prominent ring system, which consists of ice particles and dust.It is the second-largest planet in our solar system and has numerous moons, including Titan, the largest.</P>
        <div><button class="btn btn-primary" onclick="scrollAndAddClass('collapseSaturn' , 'sat')"> Learn More </button></div>
        </div>
    </div>
      <div class="carousel-caption d-none d-md-block">
        <h3>Saturn</h3>
      </div>
    </div>
    <div class="carousel-item">
      
      <div class="row">
        <div class="col-4">
        <img src="../Media/uranus.png" class="d-block w-100" alt="uranus">
      </div>
      <div class="col-6 d-flex justify-content-center flex-column">
      <p class="text-center txt">Uranus is the seventh planet from the Sun and is considered an ice giant because it is largely made up of water, ammonia, and methane in solid form.</P>
        <div><button class="btn btn-primary" onclick="scrollAndAddClass('collapseVenus' , 'ven')"> Learn More </button></div>
        </div>
    </div>
      <div class="carousel-caption d-none d-md-block">
        <h3>Uranus</h3>
      </div>
    </div>
    <div class="carousel-item">
      
      <div class="row">
        <div class="col-4">
        <img src="../Media/neptune.png" class="d-block w-100" alt="neptune">
      </div>
      <div class="col-6 d-flex justify-content-center flex-column">
      <p class="text-center txt">The eighth planet from the Sun, Neptune is considered an ice giant because it is largely made up of water, ammonia, and methane in solid form.</P>
        <div><button class="btn btn-primary" onclick="scrollAndAddClass('collapseVenus' , 'ven')"> Learn More </button></div>
        </div>
    </div>
      <div class="carousel-caption d-none d-md-block">
        <h3>Neptune</h3>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


<div class="container ptop fepdbot">
    <h2 class="text-light">Planets in Our Solar System</h2>
    <div class="accordion" id="accordionExample">
      <!-- Mercury -->
      <div class="card card-st" id="mer">
        <div class="card-header" id="headingMercury">
          <h5 class="text-light mb-0">
            <span class="arrow" data-toggle="collapse" data-target="#collapseMercury" aria-expanded="false" aria-controls="collapseMercury">&#9662;</span>
            Mercury
          </h5>
        </div>
        <div id="collapseMercury" class="collapse " aria-labelledby="headingMercury" data-parent="#accordionExample">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <img src="../Media/7157f4af-68b0-48d8-89c9-44c385666306.jpg" alt="Mercury" style="max-width: 100%;">
              </div>
              <div class="col-md-8">
                <p class="text-light">Like all the other planets, Mercury was likely formed in the large cloud of gas, dust and ice of the ancient solar system, which collapsed into a spinning disc. Our Sun was born at its centre, and the planets were created about 4.5 billion years ago from particles sticking together along rings in the disc.

Mercury is the closest planet to the Sun, which likely influenced its composition and formation. The planet has a surprisingly large iron core, which may have formed because the early Sun heated and vaporized rock on Mercury's surface.</p>
                <div class="rating">
                  <span>&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                  </div>
                <button class="btn btn-primary follow-btn">Follow this planet</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Venus -->
      <div class="card card-st" id="ven">
        <div class="card-header" id="headingVenus">
          <h5 class="text-light mb-0">
            <span class="arrow" data-toggle="collapse" data-target="#collapseVenus" aria-expanded="false" aria-controls="collapseVenus">&#9662;</span>
            Venus
          </h5>
        </div>
        <div id="collapseVenus" class="collapse" aria-labelledby="headingVenus" data-parent="#accordionExample">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <img src="../Media/e30a9c21-5453-4104-b7b8-f8b48206ecba.jpg" alt="Venus" style="max-width: 100%;">
              </div>
              <div class="col-md-8">
                <p class="text-light" >Like all the other planets, Venus was likely formed in the large cloud of gas, dust, and ice of the ancient solar system, which collapsed into a spinning disc. Our Sun was born at its centre, and the planets were created about 4.5 billion years ago from particles sticking together along rings in the disc.

Venus is the second closest planet to the Sun and is often called Earth's "sister planet" or "twin planet." Venus and Earth have very similar sizes, masses, and compositions, but are otherwise quite different from each other. Scientists think that in the early days of the solar system, Venus may have been similar to present-day Earth and may even have had liquid water on its surface.</p>
                <div class="rating">
                  <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
                <button class="btn btn-primary follow-btn">Follow this planet</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earth -->
      <div class="card card-st" id="ear">
        <div class="card-header" id="headingEarth">
          <h5 class="text-light mb-0">
            <span class="arrow" data-toggle="collapse" data-target="#collapseEarth" aria-expanded="false" aria-controls="collapseEarth">&#9662;</span>
            Earth
          </h5>
        </div>
        <div id="collapseEarth" class="collapse" aria-labelledby="headingEarth" data-parent="#accordionExample">
            <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <img src="../Media/5dc45098-a4cf-45fb-9d1c-1c57cf8d02ad.jpg" alt="Earth" style="max-width: 100%;">
              </div>
              <div class="col-md-8">
                <p class="text-light">Scientists believe it took between 10 and 20 million years for Earth to form. The solar system began as a large cloud of gas, dust, and ice that collapsed into a spinning disc. Our Sun was born at its centre, and the planets were created about 4.5 billion years ago from particles sticking together along rings in the disc.</p>
                
                <div class="rating">
                  <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
                <button class="btn btn-primary follow-btn">Follow this planet</button>
              </div>
            </div>
</div>
          </div>
        </div>
      </div>


      <!-- Mars -->
      <div class="card card-st" id="mars">
        <div class="card-header" id="headingMars">
          <h5 class="text-light mb-0">
            <span class="arrow" data-toggle="collapse" data-target="#collapseMars" aria-expanded="true" aria-controls="collapseMars">&#9662;</span>
            Mars
          </h5>
        </div>
        <div id="collapseMars" class="collapse" aria-labelledby="headingMars" data-parent="#accordionExample">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <img src="../Media/4272bcdf-c119-4b7e-91a3-890ddc89b039.jpg" alt="Mars" style="max-width: 100%;">
              </div>
              <div class="col-md-8">
                <p class="text-light">Mars is the fourth planet from the Sun in our solar system. Scientists believe that all of the planets were created just over 4.5 billion years ago. The solar system began as a large cloud of gas, dust, and ice, which collapsed into a spinning disc. The Sun was formed at its centre and particles began sticking together along rings in the disc – leading to the formation of the planets.

</p>
                <div class="rating">
                  <span>&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                </div>
                <button class="btn btn-primary follow-btn">Follow this planet</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Jupiter -->
      <div class="card card-st" id="jup">
        <div class="card-header" id="headingJupiter">
          <h5 class="text-light mb-0">
            <span class="arrow" data-toggle="collapse" data-target="#collapseJupiter" aria-expanded="false" aria-controls="collapseJupiter">&#9662;</span>
            Jupiter
          </h5>
        </div>
        <div id="collapseJupiter" class="collapse" aria-labelledby="headingJupiter" data-parent="#accordionExample">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <img src="../Media/a14b9184-0517-458a-81f9-0987400beb05.jpg" alt="Jupiter" style="max-width: 100%;">
              </div>
              <div class="col-md-8">
                <p class="text-light" >Jupiter is the fifth planet from the Sun and also the largest in our solar system. Like all the other planets, it was likely formed in a massive, ancient cloud of gas, dust, and ice that collapsed into a spinning disc.

Scientists believe that many rocky planets larger than Earth existed in the early inner solar system. Physical forces moved Jupiter closer to the Sun and destroyed these other planets, allowing the formation of the current rocky planets (Mercury, Venus, Earth and Mars) before pushing Jupiter back outwards to its current position.

Jupiter has at least 79 known moons, which were drawn by the massive planet's strong gravitational pull. Fifty-three of them have names, while 26 are not yet named.</p>
                <div class="rating">
                  <span>&#9733;&#9733;&#9733;&#9734;&#9734;</span>
                </div>
                <button class="btn btn-primary follow-btn">Follow this planet</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Saturn -->
      <div class="card card-st" id="sat">
        <div class="card-header" id="headingSaturn">
          <h5 class="text-light mb-0"> 
            <span class="arrow" data-toggle="collapse" data-target="#collapseSaturn" aria-expanded="false" aria-controls="collapseSaturn">&#9662;</span>
            Saturn
          </h5>
        </div>
        <div id="collapseSaturn" class="collapse" aria-labelledby="headingSaturn" data-parent="#accordionExample">
          <div class="card-body" >
            <div class="row">
            <div class="col-md-4">
                <img src="../Media/ded28fed-ec42-4151-b665-46fa4ad6d1ed.jpg" alt="Saturn" style="max-width: 100%;">
            </div>
              <div class="col-md-8">
                <p class="text-light">Saturn is the sixth planet from the Sun and the second largest in our solar system. Like all the other planets, Saturn was likely formed in the large cloud of gas, dust, and ice which collapsed into a spinning disc. Our Sun was born at its centre, and the planets were created about 4.5 billion years ago from particles sticking together along rings in the disc. Saturn is best known for its impressive rings, which are about 20 metres thick on average. Some scientists believe that the planet's icy rings are made of material left over from a massive collision between the young planet and one of its early moons.</p>
                <div class="rating">
                    <span>&#9733;&#9733;&#9733;&#9734;&#9734;</span>
                </div>
                <button class="btn btn-primary follow-btn">Follow this planet</button>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>


<div class="fe-about card-st p-5">
  <h1 class="text-center">About Us</h1>
  <p class="text-ccenter text">AstroTrips is a pioneering space travel company that has revolutionized the concept of exploration by offering exhilarating journeys beyond our planet. Specializing in space tourism, AstroTrips provides unprecedented opportunities for individuals to experience the awe-inspiring beauty of outer space. With cutting-edge spacecraft and a commitment to passenger safety, the company enables adventurers to embark on unforgettable voyages, allowing them to witness Earth from the unique vantage point of space. AstroTrips combines innovation, expertise, and a passion for space exploration to make the dream of venturing beyond our atmosphere a reality for those seeking the ultimate travel adventure. As a trailblazer in the emerging space tourism industry, AstroTrips continues to push the boundaries of what is possible, inspiring a new era of cosmic exploration and opening up the wonders of the universe to an eager and adventurous clientele.</p>
</div>

<?php
include_once 'footer.php';
?>