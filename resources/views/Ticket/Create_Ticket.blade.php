<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Ticket</title>
    <link rel="stylesheet" href="{{ asset('Style/Navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('Style/Ticket/Create_Ticket.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet"
    />
</head>
<body>
    <nav class="navbar">
        <div class="left">
            <img src="images/Logo.png" alt="Logo" />
        </div>
        <div class="right">
            <a href="">
            <div id="registerButton">Register</div>
            </a>
            <a href="">
            <div id="loginButton">Login</div>
            </a>
        </div>
    </nav>
    <main>
        <div class="container">
            <section class="left-side">
                <img src="Poster Film.png" alt="">
            </section>

            <section class="right-side">
                <h1>Napoleon</h1>
                <hr>
                <div class="wrapper-description">
                    <div class="left-description">
                        <div class="title-description">
                            Genre : 
                            <p class="detail-description">Action</p>
                        </div>
                        <div class="title-description">
                            Duration : 
                            <p class="detail-description">110 Minutes</p>
                        </div>
                        <div class="title-description">
                            Language : 
                            <p class="detail-description">English</p>
                        </div>
                        <div class="title-description">
                            Subtitle : 
                            <p class="detail-description">Indonesia</p>
                        </div>
                    </div>
                    <div class="right-description">
                        <div class="rating">R 17 +</div>
                        <div class="rating">
                            <img src="Star.png" alt="" id="star-img">
                            <h4>9.6</h4>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="calender-filter">
                    <div class="calender">
                        <input type="date" name="" id="">
                    </div>
                    <div class="filter">
                        <span>Filter</span>
                        <img src="Filter.png" alt="" id="filter-img">
                    </div>
                </div>
                <h1>3 December 2023</h1>
                <hr id="line">
                <div class="">
                    <h2>Central Park</h2>
                    <div class="theatre">
                        <h3>Theatre 1</h3>
                        <div class="theatre-2D">
                            <h3>2D</h3>
                            <button class="time">
                                09:00
                            </button>
                            <button class="time">
                                09:00
                            </button>
                            <button class="time">
                                09:00
                            </button>
                            <button class="pick-seat">Pick Seat</button>
                        </div>
                        <div class="theatre-3D">
                            <h3>3D</h3>
                            <button class="time">
                                09:00
                            </button>
                            <button class="time">
                                09:00
                            </button>
                        </div>

                        <h3>Theatre 2</h3>
                        <div class="theatre-2D">
                            <h3>2D</h3>
                            <button class="time">
                                09:00
                            </button>
                            <button class="time">
                                09:00
                            </button>
                            <button class="time">
                                09:00
                            </button>
                            <button class="pick-seat">Pick Seat</button>
                        </div>
                        <div class="theatre-3D">
                            <h3>3D</h3>
                            <button class="time">
                                09:00
                            </button>
                            <button class="time">
                                09:00
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
