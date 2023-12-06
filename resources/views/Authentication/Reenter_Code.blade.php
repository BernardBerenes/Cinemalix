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
    <script src="{{ asset('script.js') }}"></script>
</head>
<body>
    <nav class="navbar">
        <div class="left">
            <img src="{{ asset('Asset/Logo.png') }}" alt="Logo">
        </div>
        <div class="right">
            <ul>
                <div class="rightLeft">
                    <li><a href="">Film</a></li>
                </div>
            </ul>
            <ul>
                <div class="rightRight">
                    <li>
                        <a href="{{ route('loginView') }}">Login</a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="top">
                Reenter Code
            </div>

            <form method="POST" action="{{ route('reenterCode', ['rand'=>$rand]) }}">
                @csrf
                <div class="middle">
                    <div class="input">
                        <div class="inputText">Code</div>
                        <div class="inputBox">
                            <input type="text" placeholder="Code" name="randomNumber">
                        </div>
                        @error('randomNumber')
                            <div class="errorMessage">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
    
                <div class="bottom">
                    Your Code is {{ $rand }}
                    <div class="haveAccountbutton">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </main>
</body>
</html>