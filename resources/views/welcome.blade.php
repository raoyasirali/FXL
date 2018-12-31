@include('master')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Charm|Russo+One" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links" style="margin-top: -55px ">
                    @auth
                        <a style="color: white;font-size: 18px" href="{{ url('/home') }}"> Home</a>
                    @else
                        <a style="color: white;font-size: 18px" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a style="color: white;font-size: 18px" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           
            <div style="margin-top: -250px ;background-color: " class="content">
                <div style="color: brown ;font-family:'Righteous', cursive" class="title m-b-md">
                    <b>Welcome to Food Xpress</b>
                    
                </div>
                <div>
                    
                    <a href="b_login"><button class="btn btn-secondary" id="partner"> Partner With Us</button></a>
                </div>


            </div>
        </div>
    </body>
</html>
