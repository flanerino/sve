<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Voto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #434343;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                color: #000;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			
			.atr {
				height: 13%;
				width: 100%;
				position: absolute;
                left: 0px;
                top: 0px;
				background-color: #004A7A;
			}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
		<div class="atr">
			<a> Al toke </a>
			</div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Registrar</a>
                    @endif
                </div>
            @endif
			
            <div class="content">
			
			
                <div class="title m-b-md">
                    Sistema de Voto
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">M&aacutes</a>
                    <a href="https://laracasts.com">bien</a>
                    <a href="https://laravel-news.com">lokita</a>
                    <a href="https://forge.laravel.com">el peluca</a>
                    <a href="https://github.com/laravel/laravel">sape!</a>
                </div>
            </div>
        </div>
    </body>
</html>
