<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="portfolio.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="animate.css">
    <link rel="icon" href="logo.png" type="image/x-icon">
    
    <title>Portfolio Page</title>
</head>

<body style="background-color: rgb(12, 1, 22);">

    <script src="js/bootstrap.min.js"> </script>

    <!-- link rabt el wow.js -->
    <script src="wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <nav class="navbar navbar-light navEdit">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="logo2-removebg-preview.png" alt="none" width="30%" height="20%">
          </a>
        
          <ul class="nav justify-content-end ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#achievements">Achievements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../app/logout.php" >Logout</a>
            </li>
          </ul>
        </div>
        
    </nav>

    <div class="section1">
        <div class="child2 animate__backInLeft wow">

        <img src="personalPhoto2.jpg" alt="none">
        </div>
        
       <div class="child1 wow animate__backInRight ">
        <h1>
            I Am Nouran Mohamed.
        </h1>   
        <h2>
            A Passionate Full Stack Software Developer,

        </h2>
        <h2 style="color: rgb(158, 159, 159);">
            Based In Egypt.  
        </h2>
        <hr>
        <p> If you have a great project that needs some amazing skills,I will be there for You. </p> 
        </div>
    </div>

    <br><br>

       <div class="description" >
        <h2 id="skills">Skills Set</h2>
        <p>Whatever your needs are, I can pretty much take on any challenge.</p> <br>
       </div>

          <div class=" progress animate__lightSpeedInRight wow" data-wow-delay="0.5s"  style="margin-left:5%;width:40%;" >
            <div class="progress-bar bg-secondary" role="progressbar" style="width: 95%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">FRONT END / DESIGN</div>
          </div>

          <br><br>

          <div class=" progress animate__lightSpeedInRight wow" data-wow-delay="1s" style="margin-left:10%;width:55%;">
            <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">BACK END</div>
          </div>

          <br><br>

          <div class=" progress animate__lightSpeedInRight wow" data-wow-delay="1.5s" style="margin-left:20%;width:65%;">
            <div class="progress-bar bg-secondary" role="progressbar" style="width: 82%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">PROGRAMMING</div>
          </div>

          <br><br>


    <div class="description3 animate__fadeIn wow" data-wow-delay="1s">
      <p id="projects" style="font-size: large;">work experience</p>
      <h1>Projects I have made in the past.</h1>
    </div>
    <br><br>

    <div class="section3"> 
            
        <div >
          <div class="card animate__fadeInDown wow" data-wow-delay="1s" style="width: 18rem;" id="child3a">
            <img src="wooden4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">01</p>
              <h5>Wooden Plates Website</h5>

            </div>
          </div>
            
        </div>

        <div >
          <div class="card animate__fadeInUp wow" data-wow-delay="1.5s" style="width: 18rem;" id="child3a">
            <div class="card-body">
              <p class="card-text">02</p>
              <h5>Weather App</h5>
            </div>
            <img src="weather-app.jpg" class="card-img-top" alt="...">
            
          </div>
            
        </div>

        <div >
          <div class="card animate__fadeInDown wow" data-wow-delay="2s" style="width: 18rem;" id="child3a">
            <img src="candles2.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">03</p>
              <h5>Candles Website</h5>

            </div>
          </div>
            
        </div>
    </div>

    <br><br>


    <div class="section3"> 
            
        <div >
          <div class="card animate__fadeInDown wow" data-wow-delay="1s" style="width: 18rem;" id="child3a">
            <img src="cheekers2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">04</p>
              <h5>Cheekers Game</h5>

            </div>
          </div>
            
        </div>

        <div >
          <div class="card animate__fadeInUp wow" data-wow-delay="1.5s" style="width: 18rem;" id="child3a">
            <img src="airlineRes.png" class="card-img-top" alt="...">

            <div class="card-body">
              <p class="card-text">05</p>
              <h5>Airline Reservation</h5>
            </div>

          </div>
            
        </div>
    </div>
    <br>  <br>

      <button class="buttonEdit wow animate__flipInX" data-wow-delay="1s">Show More Projects</button>    

   <br><br>

   <div class="description3 animate__fadeIn wow" data-wow-delay="0.7s">
    <p id="achievements" style="font-size: large;">  courses</p>
    <h1 >Achievements & Certifications.</h1>
  </div>
  <br><br>


  <div class="section4"> 
            
    <div >
      <div class="card animate__fadeInTopLeft wow" data-wow-delay="1.5s" style="width: 18rem;" id="child4a">
        <img src="Udacity.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4>Udacity Course</h4>
          <br>
          <p class="card-text">html and css course taken with its certificate by Udacity</p>

        </div>
      </div>
        
    </div>

    <div >
      <div class="card animate__fadeInTopLeft wow" data-wow-delay="2s" style="width: 18rem;" id="child4a">
        <img src="orange.jpg" class="card-img-top" alt="...">

        <div class="card-body">
          <h4>Orange Training</h4>
          <br>

          <p class="card-text">ISTQB training taken along with a certificate(grade of 90%) </p>
          
        </div>
        
      </div>
        
    </div>

    <div >
      <div class="card animate__fadeInTopLeft wow" data-wow-delay="2.5s" style="width: 18rem;" id="child4a">
        <img src="redhat.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4>Redhat Courses</h4> 
          <br>

          <p class="card-text">linux and javaEE courses taken with a certificate of attendance</p>

        </div>
      </div>
        
    </div>

    <div >
      <div class="card animate__fadeInTopLeft wow" data-wow-delay="3s" style="width: 18rem;" id="child4a">
        <img src="Microsoft_logo.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4>Microsoft Internship</h4>
          <br>

          <p class="card-text">took a Python and Flutter Internships sponsored completely by Microsoft</p>

        </div>
      </div>
        
    </div>
</div>

<br>

<div class="description5 animate__fadeIn wow" data-wow-delay="0.7s">
  <h1 id="contact">Contact Me!</h1>
</div>


<div class="section5"> 
          
    <div class="animate__flash wow" data-wow-delay="1.3s" id="child5a">
      <br><br><br>

        <h4>Take a Look & Reach Me Out</h4>
              <hr style="background-color: rgb(255, 255, 255);">
              <a href="https://github.com/NouranMohamedFouad" target="_blank" title="GitHub">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github" width="35" height="35" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /> </svg>          </a>
           <a href="https://www.linkedin.com/in/nouran-mohamed-a726aa252/" target="_blank" title="linkdin">     
          <svg style="color: rgb(185, 185, 242)" xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16"> <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" fill="blue"></path>
           </svg>
          </a>
          <br><br><br><br><br>
          <a href="D:\EXTERNAL RECOURCES\Codsoft\task2(portfolio)\CV-version1.pdf" target="_blank" title="Nouran's CV">
            <button type="button" class="btn-lg">Show Resume</button>

          </a>


    </div>
      
    <div class=" animate__flash wow" data-wow-delay="1.3s" id="child5a">
      
      <form>
        <label>Name:</label>
        <br>
        <input type="text" placeholder="name" class="child5aInput" id="fname" style="height: 40px;"><hr>
      
        <label>Email:</label>
        <br>

        <input type="email" placeholder="email" class="child5aInput" style="height: 40px;"><hr>
      
        <label>Description:</label>
        <br>

        <input type="text" placeholder="text" class="child5aInput" style="height: 70px;"><hr>
        <br>

        <input type="button" class="buttonForm" value="Submit">
      </form>

    </div>
    
</div>


<br><br>










<footer class="pb-5 pt-5">
  <div class="container-f"> 
     
      <div class="row text-center animate__fadeInUpBig wow "  >
          <div class="col-md-4">
              <h4>Address</h4>
              <hr style="background-color: rgb(255, 255, 255);">
              <p>Tel : 01156755044 </p>
              <p>Address :Cairo , EGYPT</p>
              <p>Email : nouranmfouad@gmail.com</p>

          </div>         
          <div class="col-md-4 justify-content-center animate__fadeInUpBig wow" >
              <h4>Follow Me</h4>
              <hr style="background-color: rgb(255, 255, 255);">
                  <a href="https://www.facebook.com/lolyasd/" target="_blank">
                      <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16" src="facebook.com">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg>    
                  </a>
                  <a href="https://www.instagram.com/nouran_askalany/" target="_blank">
                      <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                      </svg>    
                  </a>
          </div>     
      </div><br>
      <div class="animate__fadeInUpBig wow " >• No Copyright 2023 • Nouran Mohamed • <br>
      </div>
  </div>
</footer>   





</body>
</html>