<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Metroverse') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt" rel="stylesheet">

    <!-- font-poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('landing/assets/css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="{{asset('landing/assets/logo/logo.png')}}">
    <style>
    body {
        font-family: 'Nunito', sans-serif;
        background: white !important;

    }
    </style>
</head>

<body class="antialiased">

    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
        <figure class="text-center">
            <img src="{{asset('landing/assets/icons/message-success.png')}}" alt="Gambar" class="mx-auto" width="30%">
            <h4 class="mt-3">Thank You {{$name}}!!!</h4>
            <figcaption class="mt-3 fw-200">Thank you for contacting us, we will respond to your message in less than 24
                hours
            </figcaption>
            <a href="/" class="btn btn-sm bg-secondary-light mt-3">Back To Home</a>
        </figure>
    </div>
</body>


</html>