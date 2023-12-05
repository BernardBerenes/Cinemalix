<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemalix Register</title>
    <link rel="stylesheet" href="{{ asset('Style/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('Style/Create_Film.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
                <form method="POST" action="{{ route('logout') }}" class="rightRight">
                    @csrf
                    @can('isAdmin')
                        <li>
                            <a href="#">Admin ↓</a>
                            <ul class="dropdown">
                                <li><button type="submit">Log Out</button></li>
                            </ul>
                        </li>
                    @else
                        @auth
                            <li>
                                <a href="#">User ↓</a>
                                <ul class="dropdown">
                                    <li><button type="submit">Log Out</button></li>
                                </ul>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('loginView') }}">Login</a>
                            </li>
                        @endauth
                    @endcan
                </form>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="top">
                Upload Film
            </div>

            <form action="" id="registerForm">
                <div class="middle">
                    <div class="middleLeft">
                        <div class="middleLeftTop">
                            <div class="input">
                                <div class="inputText">Film Title</div>
                                <div class="inputBox">
                                    <input type="text" placeholder="Napoleon" id="filmTitleInput">
                                </div>
                                <div class="errorMessage"></div>
                            </div>
                            <div class="input">
                                <div class="inputText">Synopsis</div>
                                <textarea cols="50" rows="10" name="filmSynopsis" placeholder="Terlatar tahun 1793, di masa era Revolusi Prancis terjadi. Napoleon akan berkisah tentang Jenderal Napoleon ">.
                                </textarea>
                                <div class="errorMessage"></div>
                            </div>
                            <div class="input">
                                <div class="inputText">Genre</div>
                                <div class="inputBox">
                                    <input type="text" placeholder="Action" id="filmGenreInput">
                                </div>
                                <div class="errorMessage"></div>
                            </div>
                            <div class="input">
                                <div class="inputText">Duration</div>
                                <div class="inputBox">
                                    <input type="number" placeholder="180" id="filmDurationInput">
                                    minutes
                                </div>
                                <div class="errorMessage"></div>
                            </div>
                            <div class="input">
                                <div class="inputText">Release Date</div>
                                <div class="inputDate">
                                    <input type="date" id="filmReleaseDate">
                                </div>
                                <div class="errorMessage"></div>
                            </div>
                            <div class="input">
                                <div class="inputText">Age Restriction</div>
                                <div class="inputBox">
                                    <input type="text" placeholder="R 17+" id="filmRatingInput">
                                </div>
                                <div class="errorMessage"></div>
                            </div>
                            <div class="input">
                                <div class="inputText">Director Name</div>
                                <div class="inputBox">
                                    <input type="text" placeholder="Ridley Scott" id="filmDirectorInput">
                                </div>
                                <div class="errorMessage"></div>
                            </div>
                        </div>
                    </div>
                    <div class="middleRight">
                        <div class="input">
                            <div class="inputText">Film Poster</div>
                            <div class="inputBox">
                                <label for="uploadFile">upload</label>
                                <input type="file" name="" id="uploadFile">
                            </div>
                            <div class="errorMessage"></div>
                        </div>
                        <div class="input">
                            <div class="inputText">Film Trailer</div>
                            <div class="inputBox">
                                <label for="uploadFile">upload</label>
                                <input type="file" name="" id="uploadFile">
                            </div>
                            <div class="errorMessage"></div>
                        </div>
                        <div class="input">
                            <div class="inputText">Film Subtitle</div>
                            <div class="inputBox">
                                <label for="uploadFile">upload</label>
                                <input type="file" name="" id="uploadFile">
                            </div>
                            <div class="errorMessage"></div>
                        </div>
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