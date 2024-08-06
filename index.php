<?php
    require_once 'controllers/authController.php';

    if(!isset($_SESSION['id'])){
        header('location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <title>Register Your Self</title>
</head>
<body>
    
    <style>
body, html {
  height: 100%;
  margin: 0;
}
button {
              background-color: rgb(0, 93, 3);
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              cursor: pointer;
              width: 100%;
              opacity: 0.9;
            }
.bgimg {
  background-image: url('bg.jpeg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: rgb(0, 0, 0);
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}
button:hover {
              opacity:1;
            }
.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="ovslogo.png" width="200px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Vote Now</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">View Poll</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Parties</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Admin Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
    </ul>
  </div>
</nav>
<div class="bgimg">
  <div class="topleft">
    
  </div>
  <div class="middle">
    <hr>
    <p id="demo" style="font-size:30px"></p>
    <div class="container">
        <div class="row">
            <div class="text-center col-md-12">
            <?php if(isset($_SESSION['message'])): ?>
                <div class="alert <?php echo $_SESSION['alert_class']; ?>">
                    <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        unset($_SESSION['alert-class']);
                    ?>
                </div>
            <?php endif; ?>
                <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
                <center>
                <a href="index.php?logout=1" class="logout">Logout</a>
                </center>
            </div>
        </div>
    </div>
  </div>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 22, 2020 6:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>