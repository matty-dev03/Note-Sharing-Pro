<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>
        /* Basic reset */
        body, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        
        /* Container for the navigation bar */
        .main_nav_container {
            background-color: #333; /* Background color of the navbar */
            overflow: hidden; /* Clearfix for floats */
        }
        
        .main_nav {
            display: flex; /* Display flex to align items horizontally */
            justify-content: center; /* Center items horizontally */
        }
        
        .main_nav_list {
            display: flex; /* Display flex for horizontal alignment */
            padding: 0;
        }
        
        .main_nav_item {
            margin: 0; /* Remove default margin */
        }
        
        .main_nav_item a {
            display: block;
            color: white; /* Text color */
            text-align: center; /* Center text */
            padding: 14px 20px; /* Padding around the text */
            text-decoration: none; /* Remove underline */
            font-size: 16px; /* Font size */
            transition: background-color 0.3s ease; /* Smooth background color transition */
        }
        
        .main_nav_item a:hover {
            background-color: #575757; /* Background color on hover */
        }
        
        /* Responsive design */
        @media screen and (max-width: 768px) {
            .main_nav_list {
                flex-direction: column; /* Stack items vertically on small screens */
                align-items: center; /* Center items */
            }
        }
    </style>
</head>
<body>
    <nav class="main_nav_container">
        <div class="main_nav">
            <ul class="main_nav_list">
                <li class="main_nav_item"><a href="index.php">Home</a></li>
                <li class="main_nav_item"><a href="studentreg.php">Student Registration</a></li>
                <li class="main_nav_item"><a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>

<div class="wrapper">
        <div class="logo">
            <img src="https://media.istockphoto.com/id/1267814463/vector/graduation-cap-and-diploma-scroll-icon.jpg?s=1024x1024&w=is&k=20&c=FbI5h1ERi49Wiy0fvgbLiuZIro4y5SscoOTFbRBRS-E=" alt="">
        </div>
        <div class="text-center mt-4 name">
            Login
        </div>
        <form action="loginaction.php" method="post" class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3"> <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">
            </button>
</br>
          
        </form>
        <div class="text-center fs-6">
            <a href="forgotpassword.php">Forget password?</a> or <a href="studentreg.php">Sign up</a>
        </div>
    </div>
    <style>
      /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body { 
background-image: url("https://windowscustomization.com/wp-content/uploads/2018/10/particles-web-2.gif");
background-size: cover;
}
   

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
      </style>