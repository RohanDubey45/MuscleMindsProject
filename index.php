<?php
// Start the session
session_start();

if (!isset($_SESSION['user_authenticated'])) {
    header("Location: MMlogin.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Muscle Minds</title>
  <link rel="stylesheet" href="index.css">
  <script src="index.js" defer></script>
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
  integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"/>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  
</head>

<body>
  

  <nav>
    <div id="logo-container">
      <a style="text-decoration: none;" href="mainWorkout.html">
        <img id="logo" src="images/Screenshot 2023-11-25 094846.png" alt="Logo">
      </a>
    </div>
    <ul>
      <a style="text-decoration: none;" href="mainWorkout.html"><li class="nav-item" id="workout-item">Workout</li></a>
      <a style="text-decoration: none;" href="nutrition.html"><li class="nav-item" id="nutrition-item">Nutrition</li></a>
      <a style="text-decoration: none;" href="health.html"><li class="nav-item" id="health-item">Health</li></a>

      <div id="username-container">
        <li id="username-item"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></li>
      </div>
      </ul>
  </nav>
  

  <div class="container sp-header">
    <div id="redefined-fitness">Let's Redefine Your Fitness</div><br> 
    <div id="muscle-minds"></div>
    <img src="./images/landing-image.png" alt="Workout" class="sp-landing-img" />
  </div>
</div>

<br><br><br>

<div class="heading-container">
  <h3 class="best-heading" style="color: #000;font-size: 28px;">We Are the Best</h3>
  <h2 class="welcome-heading">Welcome to <span style="color:#008772;">Muscle Minds</span></h2>

  <!-- Newly added content -->
  <p class="best-heading">Muscle Minds is your ultimate destination for fitness enthusiasts, providing expert advice, workout routines, 
      and nutrition tips to help you achieve your fitness goals. </p>
</div>

<br><br>

<!-- Add the following inside the <body> tag, after the existing content -->
  <div class="card-container">
    <!-- Workout Card -->
    <div class="card">
      <img src="images/wp7578728-gym-men-wallpapers.jpg" alt="Workout Image">
      <div class="card-content">
        <h3 style="color:#008772; font-size: 23px; font-weight: bold;"> Workout</h3>

        <p>Unleash your potential with personalized workouts for muscle, fat loss, or overall fitness. 
          Precision-crafted routines guarantee maximum impact, guiding your desired body transformation."
          <a style="text-decoration: none;" href="mainWorkout.html">Explore Now....</a>
        </p>
        
      </div>
    </div>
  
    <!-- Nutrition Card -->
    <div class="card">
      <img src="images/bigstock-Sports-nutrition-supplements-232426327.jpg" alt="Nutrition Image">
      <div class="card-content">
        <h3 style="color:#008772; font-size: 23px; font-weight: bold;">Nutrition</h3>
        <p>
          "Nourish your body with personalized nutrition plans catering to both vegetarian and non-vegetarian diets. 
          Achieve your health to meet specific daily dietary needs."
          <a style="text-decoration: none;" href="nutrition.html">Explore Now....</a>
          </p>
          
          
      </div>
    </div>
  
    <!-- Health Card -->
    <div class="card">
      <img src="images/pexels-pixabay-40751.jpg" alt="Health Image">
      <div class="card-content">
        <h3 style="color:#008772; font-size: 23px; font-weight: bold;">Health</h3>
        <p>"Explore a wealth of health tips and insightful blogs to enhance your overall well-being.
            Uncover valuable advice on nutrition, fitness, and lifestyle choices for a healthier & happier you."
            <a style="text-decoration: none;" href="health.html">Explore Now....</a>
            
          </p>
          
      </div>
    </div>
  </div>
<br>

<!-- FAQs section  -->
<div class="wrapper">
  <h1>Frequently Asked Questions</h1>

  <div class="faq">
    <button class="accordion">
      What is MuscleMinds?
      <i class="fa-solid fa-chevron-down"></i>
    </button>
    <div class="pannel">
      <p>
        MuscleMinds is a fitness and wellness platform dedicated to helping individuals achieve their fitness goals. We 
        offer personalized training programs, 
        group classes, and nutritional guidance to support 
        your journey to a healthier lifestyle.
      </p>
    </div>
  </div>

  <div class="faq">
    <button class="accordion">
      How can I join MuscleMinds?
      <i class="fa-solid fa-chevron-down"></i>
    </button>
    <div class="pannel">
      <p>
        Joining MuscleMinds is easy! Simply visit our website, sign up, and choose a membership plan 
        that suits your needs. Once you're a member,
         you'll have access to our range of fitness programs and resources.
      </p>
    </div>
  </div>

  <div class="faq">
    <button class="accordion">
      Is MuscleMinds suitable for beginners?
      <i class="fa-solid fa-chevron-down"></i>
    </button>
    <div class="pannel">
      <p>
        Yes, MuscleMinds caters to all fitness levels, including beginners. Our programs are designed to 
        be accessible and adaptable, 
        making it easy for anyone to get started on their fitness journey.
      </p>
    </div>
  </div>

  <div class="faq">
    <button class="accordion">
      Can I get support from trainers at MuscleMinds?
      <i class="fa-solid fa-chevron-down"></i>
    </button>
    <div class="pannel">
      <p>
        Absolutely! Our team of certified trainers is here to support you. You can connect with them 
        for guidance on exercises, nutrition advice, or any questions you may have on your fitness journey.
         We believe in providing a supportive community for our members.
      </p>
    </div>
  </div>
  </div>

<!-- ABOUT US SECTION  -->
  <div class="container">
    <div class="about-us-container">
      <h2>About Us</h2>
      <p>Welcome to Muscle Minds, your go-to destination for fitness enthusiasts. Our mission is to inspire and guide individuals on their fitness journey, providing expert advice, personalized workout routines, and nutrition tips. With a passionate community and a commitment to your well-being, we are here to help you achieve your fitness goals.</p>
      <p>What sets Muscle Minds apart is our passionate and supportive community. Joining Muscle Minds means becoming part of a group of like-minded individuals who share the same dedication to personal health and fitness goals. Our community is a source of motivation, encouragement, and shared experiences that make the fitness journey more enjoyable and sustainable.</p>
    </div>
  </div>

  <div id="motivation">
        <h1>Your Feedback Matters!</h1>
        <p>We value your experience with Muscle Minds and strive to improve continuously. Your feedback is crucial in helping us enhance our services and better meet your fitness needs. Please take a moment to share your thoughts with us. Together, we can build a stronger and healthier community!</p>
        <button onclick="window.location.href='MMfeedback.html'">Provide Feedback</button>
    </div>
  <br><br>
  <!-- Link Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>


 <script>
 
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      // Close all other accordions
      var allAccordions = document.getElementsByClassName("accordion");
      for (var j = 0; j < allAccordions.length; j++) {
        if (allAccordions[j] !== this) {
          allAccordions[j].classList.remove("active");
          var otherPanel = allAccordions[j].nextElementSibling;
          otherPanel.style.display = "none";
        }
      }

      // Toggle the clicked accordion
      this.classList.toggle("active");
      var panel = this.nextElementSibling;

      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }
</script> 




