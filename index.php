<?php
require_once 'Models/client.php';
require_once 'Controllers/AuthController.php';

$errMsg="";
if(isset($_GET["Log Out"]))
    {
        session_start();
        session_destroy();
    }

if(isset($_POST['email']) && isset($_POST['password']) )
{
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        $client=new Client;
        $auth=new AuthController;
        $client->setemail($_POST['email']);
        $client->setpassword($_POST['password']);
        if(!$auth->login($client))
        {
            if(!isset($_SESSION["id"]))
            {
                session_start();
            }
        
            $errMsg=$_SESSION["errMsg"];
        }
        else 
        {
            if(!isset($_SESSION["id"]))
            {
                session_start();
            }
            if($_SESSION["admin"] == "Admin")
            {
                header("Location:Views/Dashbord.html");
            }
            else
            {
                header("Location:Views/homepage.php");
            }
           

           // echo 'logged in';

        }
    }
    else
    {
        $errMsg="Please fill all fields";
    }

}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>AstroTrips</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="Css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Manrope:wght@200;300;400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/64cc13dfa7.js" crossorigin="anonymous"></script>
        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .card-center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    backdrop-filter: blur(15px);
    background-color: transparent;
    color: white;
  }
  .card{
    margin-top:100px;
  }
    </style>
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
      </script>
    </head>
    <body class="bg-img">
        <header>
            <nav class="navbar fixed-top nav-fixed navbar-expand-lg navbar-dark ">
                <div class="container-fluid">
                    <div class="col-8 pd-left">
                        <a class="navbar-brand nav-title nav-icon" href="#"><img src="Media/Fiverr-Logo-Maker (1).png" alt="logo" class="logo">AstroTrips</a>
                    </div>
                    <div class="col-4 nav-menu">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                    <a class="nav-link navbar-item active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link navbar-item" href="#">Trips</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link navbar-item" href="trips.php" >Activities&Transportation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link navbar-item" href="#">Feedback</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
              </nav>
        </header>
        <section class="main">


<div class="card card-st fe-card" id="loginForm" style="width: 400px;">
        <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form method="post" action="index.php">
                <!-- Email input -->
                <div class="form-group">
                    <label for="loginName">Email</label>
                    <input type="email" id="loginName" class="form-control" name="email"/>
                </div>

                <!-- Password input -->
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" id="loginPassword" class="form-control" name="password"/>
                </div>

                <!-- Checkbox and forgot password link -->
                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                    <label class="form-check-label" for="loginCheck">Remember me</label>
                </div>
                <div class="text-center">
                    <a href="#!">Forgot password?</a>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block" name="login" >Sign in</button>

                <!-- Register link -->
                <div class="text-center mt-3">
                    <p>Not a member? <a id="registerLink" href="#!">Register</a></p>
                </div>
                <?php echo $errMsg?>
            </form>
        </div>
    </div>

    <!-- Register form -->
    <div class="card card-st fe-card" id="registerForm" style="display: none; width: 400px;">
        <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form>
                <!-- Email input -->
                <div class="form-group">
                    <label for="registerName">Name</label>
                    <input type="text" id="registerName" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="registerName">Email</label>
                    <input type="email" id="registerName" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="registerName">age</label>
                    <input type="number" id="registerName" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="registerName">phone number</label>
                    <input type="text" id="registerName" class="form-control" />
                </div>
                <div class="form-group"><label for="gender">gender</label><br>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">female</label><br>
                    <label for="nationality">nationality</label>
                    <select name="nationality">
                        <option value="">-- select one --</option>
                        <option value="afghan">Afghan</option>
                        <option value="albanian">Albanian</option>
                        <option value="algerian">Algerian</option>
                        <option value="american">American</option>
                        <option value="andorran">Andorran</option>
                        <option value="angolan">Angolan</option>
                        <option value="antiguans">Antiguans</option>
                        <option value="argentinean">Argentinean</option>
                        <option value="armenian">Armenian</option>
                        <option value="australian">Australian</option>
                        <option value="austrian">Austrian</option>
                        <option value="azerbaijani">Azerbaijani</option>
                        <option value="bahamian">Bahamian</option>
                        <option value="bahraini">Bahraini</option>
                        <option value="bangladeshi">Bangladeshi</option>
                        <option value="barbadian">Barbadian</option>
                        <option value="barbudans">Barbudans</option>
                        <option value="batswana">Batswana</option>
                        <option value="belarusian">Belarusian</option>
                        <option value="belgian">Belgian</option>
                        <option value="belizean">Belizean</option>
                        <option value="beninese">Beninese</option>
                        <option value="bhutanese">Bhutanese</option>
                        <option value="bolivian">Bolivian</option>
                        <option value="bosnian">Bosnian</option>
                        <option value="brazilian">Brazilian</option>
                        <option value="british">British</option>
                        <option value="bruneian">Bruneian</option>
                        <option value="bulgarian">Bulgarian</option>
                        <option value="burkinabe">Burkinabe</option>
                        <option value="burmese">Burmese</option>
                        <option value="burundian">Burundian</option>
                        <option value="cambodian">Cambodian</option>
                        <option value="cameroonian">Cameroonian</option>
                        <option value="canadian">Canadian</option>
                        <option value="cape verdean">Cape Verdean</option>
                        <option value="central african">Central African</option>
                        <option value="chadian">Chadian</option>
                        <option value="chilean">Chilean</option>
                        <option value="chinese">Chinese</option>
                        <option value="colombian">Colombian</option>
                        <option value="comoran">Comoran</option>
                        <option value="congolese">Congolese</option>
                        <option value="costa rican">Costa Rican</option>
                        <option value="croatian">Croatian</option>
                        <option value="cuban">Cuban</option>
                        <option value="cypriot">Cypriot</option>
                        <option value="czech">Czech</option>
                        <option value="danish">Danish</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="dominican">Dominican</option>
                        <option value="dutch">Dutch</option>
                        <option value="east timorese">East Timorese</option>
                        <option value="ecuadorean">Ecuadorean</option>
                        <option value="egyptian">Egyptian</option>
                        <option value="emirian">Emirian</option>
                        <option value="equatorial guinean">Equatorial Guinean</option>
                        <option value="eritrean">Eritrean</option>
                        <option value="estonian">Estonian</option>
                        <option value="ethiopian">Ethiopian</option>
                        <option value="fijian">Fijian</option>
                        <option value="filipino">Filipino</option>
                        <option value="finnish">Finnish</option>
                        <option value="french">French</option>
                        <option value="gabonese">Gabonese</option>
                        <option value="gambian">Gambian</option>
                        <option value="georgian">Georgian</option>
                        <option value="german">German</option>
                        <option value="ghanaian">Ghanaian</option>
                        <option value="greek">Greek</option>
                        <option value="grenadian">Grenadian</option>
                        <option value="guatemalan">Guatemalan</option>
                        <option value="guinea-bissauan">Guinea-Bissauan</option>
                        <option value="guinean">Guinean</option>
                        <option value="guyanese">Guyanese</option>
                        <option value="haitian">Haitian</option>
                        <option value="herzegovinian">Herzegovinian</option>
                        <option value="honduran">Honduran</option>
                        <option value="hungarian">Hungarian</option>
                        <option value="icelander">Icelander</option>
                        <option value="indian">Indian</option>
                        <option value="indonesian">Indonesian</option>
                        <option value="iranian">Iranian</option>
                        <option value="iraqi">Iraqi</option>
                        <option value="irish">Irish</option>
                        <option value="israeli">Israeli</option>
                        <option value="italian">Italian</option>
                        <option value="ivorian">Ivorian</option>
                        <option value="jamaican">Jamaican</option>
                        <option value="japanese">Japanese</option>
                        <option value="jordanian">Jordanian</option>
                        <option value="kazakhstani">Kazakhstani</option>
                        <option value="kenyan">Kenyan</option>
                        <option value="kittian and nevisian">Kittian and Nevisian</option>
                        <option value="kuwaiti">Kuwaiti</option>
                        <option value="kyrgyz">Kyrgyz</option>
                        <option value="laotian">Laotian</option>
                        <option value="latvian">Latvian</option>
                        <option value="lebanese">Lebanese</option>
                        <option value="liberian">Liberian</option>
                        <option value="libyan">Libyan</option>
                        <option value="liechtensteiner">Liechtensteiner</option>
                        <option value="lithuanian">Lithuanian</option>
                        <option value="luxembourger">Luxembourger</option>
                        <option value="macedonian">Macedonian</option>
                        <option value="malagasy">Malagasy</option>
                        <option value="malawian">Malawian</option>
                        <option value="malaysian">Malaysian</option>
                        <option value="maldivan">Maldivan</option>
                        <option value="malian">Malian</option>
                        <option value="maltese">Maltese</option>
                        <option value="marshallese">Marshallese</option>
                        <option value="mauritanian">Mauritanian</option>
                        <option value="mauritian">Mauritian</option>
                        <option value="mexican">Mexican</option>
                        <option value="micronesian">Micronesian</option>
                        <option value="moldovan">Moldovan</option>
                        <option value="monacan">Monacan</option>
                        <option value="mongolian">Mongolian</option>
                        <option value="moroccan">Moroccan</option>
                        <option value="mosotho">Mosotho</option>
                        <option value="motswana">Motswana</option>
                        <option value="mozambican">Mozambican</option>
                        <option value="namibian">Namibian</option>
                        <option value="nauruan">Nauruan</option>
                        <option value="nepalese">Nepalese</option>
                        <option value="new zealander">New Zealander</option>
                        <option value="ni-vanuatu">Ni-Vanuatu</option>
                        <option value="nicaraguan">Nicaraguan</option>
                        <option value="nigerien">Nigerien</option>
                        <option value="north korean">North Korean</option>
                        <option value="northern irish">Northern Irish</option>
                        <option value="norwegian">Norwegian</option>
                        <option value="omani">Omani</option>
                        <option value="pakistani">Pakistani</option>
                        <option value="palauan">Palauan</option>
                        <option value="panamanian">Panamanian</option>
                        <option value="papua new guinean">Papua New Guinean</option>
                        <option value="paraguayan">Paraguayan</option>
                        <option value="peruvian">Peruvian</option>
                        <option value="polish">Polish</option>
                        <option value="portuguese">Portuguese</option>
                        <option value="qatari">Qatari</option>
                        <option value="romanian">Romanian</option>
                        <option value="russian">Russian</option>
                        <option value="rwandan">Rwandan</option>
                        <option value="saint lucian">Saint Lucian</option>
                        <option value="salvadoran">Salvadoran</option>
                        <option value="samoan">Samoan</option>
                        <option value="san marinese">San Marinese</option>
                        <option value="sao tomean">Sao Tomean</option>
                        <option value="saudi">Saudi</option>
                        <option value="scottish">Scottish</option>
                        <option value="senegalese">Senegalese</option>
                        <option value="serbian">Serbian</option>
                        <option value="seychellois">Seychellois</option>
                        <option value="sierra leonean">Sierra Leonean</option>
                        <option value="singaporean">Singaporean</option>
                        <option value="slovakian">Slovakian</option>
                        <option value="slovenian">Slovenian</option>
                        <option value="solomon islander">Solomon Islander</option>
                        <option value="somali">Somali</option>
                        <option value="south african">South African</option>
                        <option value="south korean">South Korean</option>
                        <option value="spanish">Spanish</option>
                        <option value="sri lankan">Sri Lankan</option>
                        <option value="sudanese">Sudanese</option>
                        <option value="surinamer">Surinamer</option>
                        <option value="swazi">Swazi</option>
                        <option value="swedish">Swedish</option>
                        <option value="swiss">Swiss</option>
                        <option value="syrian">Syrian</option>
                        <option value="taiwanese">Taiwanese</option>
                        <option value="tajik">Tajik</option>
                        <option value="tanzanian">Tanzanian</option>
                        <option value="thai">Thai</option>
                        <option value="togolese">Togolese</option>
                        <option value="tongan">Tongan</option>
                        <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                        <option value="tunisian">Tunisian</option>
                        <option value="turkish">Turkish</option>
                        <option value="tuvaluan">Tuvaluan</option>
                        <option value="ugandan">Ugandan</option>
                        <option value="ukrainian">Ukrainian</option>
                        <option value="uruguayan">Uruguayan</option>
                        <option value="uzbekistani">Uzbekistani</option>
                        <option value="venezuelan">Venezuelan</option>
                        <option value="vietnamese">Vietnamese</option>
                        <option value="welsh">Welsh</option>
                        <option value="yemenite">Yemenite</option>
                        <option value="zambian">Zambian</option>
                        <option value="zimbabwean">Zimbabwean</option>
                      </select>
                </div>
                <!-- Password input -->
                <div class="form-group">
                    <label for="registerPassword">Password</label>
                    <input type="password" id="registerPassword" class="form-control" />
                </div>

                <!-- Confirm Password input -->
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" class="form-control" />
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Register</button>

                <!-- Sign in link -->
                <div class="text-center mt-3">
                    <p>Already a member? <a id="signInLink" href="#!">Sign in</a></p>
                </div>
            </form>
        </div>
    </div>
    </section>
<footer class="text-light text-center feshadow">
  <div class="container p-4">
    <div class="mb-4">
      <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
      <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>
      <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>
      <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>
      <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
      <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!" role="button"><i class="fab fa-github"></i></a>
    </div>
    <div class="mb-4">
      <p>
        AstroTrips we are waiting for you. We are happy that you are a member in our big family
      </p>
    </div>
  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2023 Copyright:
    <a class="text-light" href="/">AstroTrips</a>
  </div>  
</footer>
<script src="Js/script.js"></script>
</body>