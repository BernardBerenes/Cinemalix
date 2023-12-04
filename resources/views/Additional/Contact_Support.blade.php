<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="{{ asset('Style/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('Style/Contact_Support.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="left">
            <img src="{{ asset('Asset/Logo.png') }}" alt="Logo">
        </div>
        @auth
            <form action="{{ route('logout') }}" method="POST" class="right">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <div class="right">
                <a href="{{ route('loginView') }}">
                    <div id="loginButton">Login</div>
                </a>
            </div>
        @endauth
    </nav>
    <main>
        <div class="container">
            <form action="">
                <h1>Contact Support</h1>
                <div class="form-wrapper">
                    <div class="left-side">
                        <div class="input-box">
                            <label for="">Email</label>
                            <input type="email" name="" id="" placeholder="bryan@gmail.com">
                        </div>
                        <div class="input-box">
                            <label for="">Topic (general, bug, others)</label>
                            <input type="text" name="" id="" placeholder="General">
                        </div>
                    </div>

                    <div class="right-side">
                        <div class="input-box">
                            <label for="">Description</label>
                            <textarea name="" id="" cols="40" rows="10" placeholder="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, iure?"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="submit-button">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>