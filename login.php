<?php
    require 'controllers/authController.php';
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
    <style>
h1{
	margin-top:50px;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	}
h3{
	color:#FFF;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	margin-bottom:5px;
	}

#content{
	box-shadow:10px 10px 10px #000000;
	border:1px solid #666;
	background-color:green;
	height:430px;
	width:500px;
	border-radius:20px;
	
	}
input[name="registration"]{
	float:left;
	background-color:#333;
	border:1px solid #666;
	border-radius:10px;
	width:160px;
	height:30px;
	padding:5px 0px 5px 15px;
	margin:5px 0px 0px 170px;
	color:#FFF;
		}
input[name="fname"]{
	float:left;
	background-color:#333;
	border:1px solid #666;
	border-radius:10px;
	width:125px;
	height:30px;
	padding:5px 0px 5px 15px;
	margin:15px 0px 0px 100px;
	color:#FFF;
		}
input[name="lname"]{
	float:right;
	background-color:#333;
	border:1px solid #666;
	border-radius:10px;
	width:125px;
	height:30px;
	padding:5px 0px 5px 15px;
	margin:15px 100px 0px 0px;
	color:#FFF;
		}
select[name="question"]{
	float:left;
	clear:both;
	background-color:#333;
	border:1px solid #666;
	border-radius:10px;
	width:300px;
	height:40px;
	padding:5px 0px 5px 15px;
	margin:15px 0px 0px 100px;
	color:#FFF;
		}
input[name="pass"]{
	float:left;
	background-color:#333;
	border:1px solid #666;
	border-radius:10px;
	width:283px;
	height:30px;
	padding:5px 0px 5px 15px;
	margin:15px 0px 0px 100px;
	color:#FFF;
		}
input[name="re-pass"]{
	float:left;
	background-color:#333;
	border:1px solid #666;
	border-radius:10px;
	width:283px;
	height:30px;
	padding:5px 0px 5px 15px;
	margin:15px 0px 0px 100px;
	color:#FFF;
		}
input[name="answer"]{
	float:left;
	background-color:#333;
	border:1px solid #666;
	border-radius:10px;
	width:283px;
	height:30px;
	padding:5px 0px 5px 15px;
	margin:15px 0px 0px 100px;
	color:#FFF;
		}


input[name="login"]{
	float:left;
	height:30px;
	width:80px;
	background-color:#8C0000;
	border:1px solid #666;
	color:#FFF;
	font-size:20px;
	border-radius:10px;
	margin-top:40px;
	margin-left:140px;
	}
input[name="back"]{
	float:right;
	height:30px;
	width:80px;
	background-color:#8C0000;
	border:1px solid #666;
	color:#FFF;
	font-size:20px;
	border-radius:10px;
	margin-top:40px;
	margin-right:140px;
	}
input[name="back"]:hover, input[name="login"]:hover{
	color:#000;
	}
	input[name="back"]:focus, input[name="login"]:focus{
	color:#000;
	}
p{
	margin:0px 0px 0px 0px;
	color:#DF0000;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-weight:bold;
  }
  nav{
    width: 100%;
    height: 50px;
    background-color: green;
    color: white;
  }
  ul{
    list-style: none;
  }
  li{
    float: left;
    padding: 16px;
  }
    </style>
</head>
<body>
<nav>

  <div>
    <ul>
      <li><a href="#">Vote Now</a></li<a>
        <a href="#"><li>View Poll</li></a>
      <li>
        <a href="#">Parties</a>
      </li>
      <li>
        <a href="#">Admin Login</a>
      </li>
      <li>
        <a href="login.php">Login</a>
      </li>
      <li>
        <a href="signup.php">Sign Up</a>
      </li>
    </ul>
  </div>
</nav>
<br>
    <div class="container">
        <div class="row">
            <div class="offset-md-3" id="content">
                <form align="center" action="login.php" method="post">
                <h1 class="text-center">Welcome Back</h1>
                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php  foreach($errors as  $error): ?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                    <div>
                        <label for="username">Username or Email</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" style="width: 90%; border: 1px solid black; height: 40px;">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" value="<?php echo $password; ?>" style="width: 90%; border: 1px solid black; height: 40px;">
                    </div>
                    <div>
                        <button type="submit" name="login-btn" style="background-color: #97262a; color: white; padding: 5px; width: 80px">Login</button>
                    </div>
                    <p>Not yet a member?<a href="signup.php">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>