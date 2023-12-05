<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect"
        href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Style/Dashboard.css') }}">
    <script defer src="{{ asset('Dashboard.js') }}"></script>
</head>
<body>
    <div class="navbar">
        <div class="left">
            <img src="img/Logo.png" alt="Logo">
        </div>
        <div class="right">
            <a href="">
                <div id="registerButton">Film</div>
            </a>
            <a href="#">
                <div id="loginButton">User</div>
            </a>
        </div>
    </div>

    <main>
        <div class="carousel-box">
            <div class="carousel-left"></div>
            <div class="carousel-mid">
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <img src="{{ asset('img/napoleonL.jpg') }}" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="{{ asset('img/jatuhcintaL.jpg') }}" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="{{ asset('img/digimonL.jpg') }}" style="width:100%">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
            </div>
            <div class="carousel-right"></div>
        </div>
        <br>

        <div class="container">

            <div class="barrier">
                <hr />
                <div class="barrier-box">
                    <h1>Now Playing</h1>
                </div>
                <hr />
            </div>

            <div class="card-container">
                <div class="cards">
                    <div class="movie-card view-film">
                        <div class="movie-header">
                            <img src="{{ asset('img/napoleon.jpg') }}" />
                        </div>
                        <div class="movie-content">
                            <h3>R 17+</h3>
                            <h3><i class="bi bi-star-fill"></i> 9.6</h3>
                        </div>
                    </div>
                </div> {{-- Card 1 --}}

                <div class="cards">
                    <div class="movie-card view-film">
                        <div class="movie-header">
                            <img src="{{ asset('img/napoleon.jpg') }}" />
                        </div>
                        <div class="movie-content">
                            <h3>R 17+</h3>
                            <h3><i class="bi bi-star-fill"></i> 9.6</h3>
                        </div>
                    </div>
                </div> {{-- Card 2 --}}

                <div class="cards">
                    <div class="movie-card view-film">
                        <div class="movie-header">
                            <img src="{{ asset('img/napoleon.jpg') }}" />
                        </div>
                        <div class="movie-content">
                            <h3>R 17+</h3>
                            <h3><i class="bi bi-star-fill"></i> 9.6</h3>
                        </div>
                    </div>
                </div> {{-- Card 3 --}}

                <div class="cards">
                    <div class="movie-card view-film">
                        <div class="movie-header">
                            <img src="{{ asset('img/napoleon.jpg') }}" />
                        </div>
                        <div class="movie-content">
                            <h3>R 17+</h3>
                            <h3><i class="bi bi-star-fill"></i> 9.6</h3>
                        </div>
                    </div>
                </div> {{-- Card 4 --}}

            </div> {{-- Card Container --}}


            <div class="barrier">
                <hr />
                <div class="barrier-box">
                    <h1>Trending Film</h1>
                </div>
                <hr />
            </div>

            <div class="card-container">
                <div class="cards">
                    <div class="movie-card view-film">
                        <div class="movie-header">
                            <img src="{{ asset('img/napoleon.jpg') }}" />
                        </div>
                        <div class="movie-content">
                            <h3>R 17+</h3>
                            <h3><i class="bi bi-star-fill"></i> 9.6</h3>
                        </div>
                    </div>
                </div> {{-- Card 1 --}}

                <div class="cards">
                    <div class="movie-card view-film">
                        <div class="movie-header">
                            <img src="{{ asset('img/napoleon.jpg') }}" />
                        </div>
                        <div class="movie-content">
                            <h3>R 17+</h3>
                            <h3><i class="bi bi-star-fill"></i> 9.6</h3>
                        </div>
                    </div>
                </div> {{-- Card 2 --}}

                <div class="cards">
                    <div class="movie-card view-film">
                        <div class="movie-header">
                            <img src="{{ asset('img/napoleon.jpg') }}" />
                        </div>
                        <div class="movie-content">
                            <h3>R 17+</h3>
                            <h3><i class="bi bi-star-fill"></i> 9.6</h3>
                        </div>
                    </div>
                </div> {{-- Card 3 --}}

                <div class="cards">
                    <div class="movie-card view-film">
                        <div class="movie-header">
                            <img src="{{ asset('img/napoleon.jpg') }}" />
                        </div>
                        <div class="movie-content">
                            <h3>R 17+</h3>
                            <h3><i class="bi bi-star-fill"></i> 9.6</h3>
                        </div>
                    </div>
                </div> {{-- Card 4 --}}

            </div> {{-- Card Container --}}


            <div class="barrier">
                <hr />
                <div class="barrier-box">
                    <h1>Upcoming Film</h1>
                </div>
                <hr />
            </div>

            <div class="card-container">
                <div class="cards">
                    <div class="movie-card view-film">
                        <div class="movie-header">
                            <img src="{{ asset('img/napoleon.jpg') }}" />
                        </div>
                        <div class="movie-content">
                            <h3>R 17+</h3>
                            <h3><i class="bi bi-star-fill"></i> 9.6</h3>
                        </div>
                    </div>
                </div> {{-- Card 1 --}}

                <div class="cards">
                    <div class="movie-card view-film">
                        <div class="movie-header">
                            <img src="{{ asset('img/napoleon.jpg') }}" />
                        </div>
                        <div class="movie-content">
                            <h3>R 17+</h3>
                            <h3><i class="bi bi-star-fill"></i> 9.6</h3>
                        </div>
                    </div>
                </div> {{-- Card 2 --}}

                <div class="cards">
                    <div class="movie-card view-film">
                        <div class="movie-header">
                            <img src="{{ asset('img/napoleon.jpg') }}" />
                        </div>
                        <div class="movie-content">
                            <h3>R 17+</h3>
                            <h3><i class="bi bi-star-fill"></i> 9.6</h3>
                        </div>
                    </div>
                </div> {{-- Card 3 --}}

                <div class="cards">
                    <div class="movie-card view-film">
                        <div class="movie-header">
                            <img src="{{ asset('img/napoleon.jpg') }}" />
                        </div>
                        <div class="movie-content">
                            <h3>R 17+</h3>
                            <h3><i class="bi bi-star-fill"></i> 9.6</h3>
                        </div>
                    </div>
                </div> {{-- Card 4 --}}

            </div> {{-- Card Container --}}

            <div class="barrier">
                <hr />
                <div class="barrier-box">
                    <a href="#">See More!</a>
                </div>
                <hr />
            </div>


        </div> {{-- Container --}}
    </main>
</body>


</html>
