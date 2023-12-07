<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Movie</title>
    <link rel="stylesheet" href="{{ asset('Style/Film/View_Detail_Film.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="left">
            <img src="{{ asset('Asset/Logo.png') }}" alt="Logo">
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

            <div class="video-box">
                <div class="space"></div>
                <video controls>
                    <source src="{{ asset('./storage/Trailer/'.$film->FilmTrailer) }}" type="video/mp4" audio>
                </video>
                <div class="space"></div>
            </div>

            <div class="detail">
                <div class="detail-left">
                    <img src="{{ asset('./storage/Poster/'.$film->FilmPoster) }}" />
                </div>

                <div class="detail-right">
                    <h1>{{ $film->FilmName }}</h1>
                    <hr />
                    <div class="subdetail">
                        <div class="subdetail-left">
                            <p><b>Directed by : </b>{{ $film->FilmDirector }}</p>
                            <p><b>Release Date : </b>{{ $film->FilmReleaseDate }}</p>

                            <p><b>Staring : </b><br>
                                Joaquin Phoenix<br>
                                Vanessa Kirby<br>
                                Ludivine Sagnier</p>
                            <p><b>Genre : </b>{{ $genre->GenreName}}</p>
                            <p><b>Duration : </b>{{ $film->FilmDuration }} Minutes</p>
                            <p><b>Language : </b>{{ $film->FilmLanguage }}</p>
                            <p><b>Subtitle : </b>{{ $film->FilmSubtitle}}</p>
                            <div class="rating-box">
                                <div class="rating">
                                    <p>{{ $film->FilmAgeRestriction }}</p>
                                </div>
                                <div class="rating">
                                    <p>{{ $film->FilmRating }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="subdetail-right">
                            <h3>Synopsis</h3>
                            <p>{{ $film->FilmSynopsis }}</p>

                            <a href="#" class="order">
                                <p>Order Now</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
