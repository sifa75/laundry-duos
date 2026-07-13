<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DUOs~Laundry</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body{
                margin:0;
                font-family:'Figtree',sans-serif;
                background:url('{{ asset('vendor/adminlte/dist/img/bg-laundry.avif') }}');
                background-size:cover;
                background-position:center;
                background-repeat:no-repeat;
            }

            .overlay{
                width:100%;
                min-height:100vh;
                background:rgba(255,255,255,.65);

                display:flex;
                justify-content:center;
                align-items:flex-start;

                padding-top:0;
            }

            .login-wrapper{
                width:100%;
                max-width:430px;
                text-align:center;
            }

            .login-card{
                background:white;
                padding:40px;
                border-radius:20px;
                box-shadow:0 20px 40px rgba(0,0,0,.25);
            }

            .logo{
                width:170px;
                margin:auto;
                margin-bottom:10px;
            }

            h1{
                font-size:34px;
                color:#2563eb;
                font-weight:700;
                margin-top:10px;
                margin-bottom:5px;
            }

            .subtitle{
                color:#666;
                margin-bottom:25px;
            }
        </style>

    </head>

    <body>

        <div class="overlay">

        <div class="login-wrapper">

        <img src="{{ asset('vendor/adminlte/dist/img/logo-removebg-preview.png') }}"
        class="logo">

        <h1>Selamat Datang</h1>

        <h2 style="font-size:25px;
            color:#0f172a;
            margin-top:-5px;
            font-weight:700;">

            DUOs~Laundry

        </h2>

        <p class="subtitle">
        Silakan login ke Sistem DUOs~Laundry
        </p>

        <div class="login-card">

        {{ $slot }}

        </div>

        </div>

        </div>

    </body>
</html>
