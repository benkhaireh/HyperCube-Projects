<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="icon" href="/imgs/favicon.ico" />

    <meta name="google-site-verification" content="7mQZRH89h6A_vQkpzdZoKDLvb9nC7VMY33d3ktoQjPk" />

    <title>Gaashaan Cyber Tech - Your security is our security</title>

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.gaashaan.net/">
    <meta property="og:title" content="Gaashaan Cyber Tech - Your security is our security">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.gaashaan.net/">
    <meta property="twitter:title" content="Gaashaan Cyber Tech - Your security is our security">
    <meta property="twitter:description" content="">
    <meta property="twitter:image" content="">

    @vite('resources/js/app.js')
</head>

<body>
    <div id="app"></div>
</body>

</html>
