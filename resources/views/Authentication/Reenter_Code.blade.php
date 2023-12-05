<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemalix Forgot Password</title>
    <link rel="stylesheet" href="{{ asset('Style/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('Style/Login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <div class="navbar">
        <div class="left">
            <img src="images/Logo.png" alt="Logo">
        </div>
        <div class="right">
            <a href="Cinemalix_Register.html">
                <div id="registerButton">Register</div>
            </a>
            <a href="Cinemalix_Login.html">
                <div id="loginButton">Login</div>
            </a>
        </div>
    </div>

    <main>
        <div class="container">
            <div class="top">
                Reset Password
            </div>

            <form action="">
                <div class="middle">
                    <div class="input">
                        <div class="inputText">Username / Email</div>
                        <div class="inputBox">
                            <input type="text" placeholder="Username / Email">
                            <img src="images/Show.png" alt="Show">
                        </div>
                        
                        <div class="errorMessage"></div>
                    </div>
                </div>
    
                <div class="bottom">
                    <div class="haveAccountbutton">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </main>
    
</body>
</html>