<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{ asset('Style/Film/View_Film_All.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script defer src="{{ asset('View_Film_All.js') }}"></script>
</head>

<body>
    <div class="navbar">
        <div class="left">
            <img src="{{ asset('img/Logo.png') }}" alt="Logo">
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
        <div class="container">
            <div class="filter-box">
                <div class="dropdown">
                    <button onclick="dropdown()" class="dropdown-button">Filter</button>
                    <div id="dropdown" class="dropdown-content">
                        <h4>Genre</h4>
                        <a href="#">Action</a>
                        <a href="#">Adventure</a>
                        <a href="#">Comedy</a>
                        <a href="#">Drama</a>
                        <a href="#">Horror</a>
                        <a href="#">Romance</a>
                        <a href="#">Thriller</a>
                    </div>
                </div>

            </div>

            <div class="barrier">
                <div class="barrier-box-left">
                    <h1>Action</h1>
                </div>
                <hr />
                <div class="barrier-box-right">
                    <p>54</p>
                </div>
            </div>

            <div class="card-container">
                <div class="cards">
                    <div class="movie-card view-film">
                        <div class="movie-header">
                            <img src="{{ asset('./storage/Poster/Poster.png') }}" />
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
                            <img src="{{ asset('./storage/Poster/Poster.png') }}" />
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
                            <img src="{{ asset('./storage/Poster/Poster.png') }}" />
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
                            <img src="{{ asset('./storage/Poster/Poster.png') }}" />
                        </div>
                        <div class="movie-content">
                            <h3>R 17+</h3>
                            <h3><i class="bi bi-star-fill"></i> 9.6</h3>
                        </div>
                    </div>
                </div> {{-- Card 4 --}}

            </div> {{-- Card Container --}}

            <div class="barrier"></div>

            <div class="card-container">
                <div class="cards">
                    <div class="movie-card view-film">
                        <div class="movie-header">
                            <img src="{{ asset('./storage/Poster/Poster.png') }}" />
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
                            <img src="{{ asset('./storage/Poster/Poster.png') }}" />
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
                            <img src="{{ asset('./storage/Poster/Poster.png') }}" />
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
                            <img src="{{ asset('./storage/Poster/Poster.png') }}" />
                        </div>
                        <div class="movie-content">
                            <h3>R 17+</h3>
                            <h3><i class="bi bi-star-fill"></i> 9.6</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="barrier"></div>
        </div>
    </main>
</body>
</html>
