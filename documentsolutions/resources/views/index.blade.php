<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="icon" href="/imgs/favicon.ico" />
    
    <meta name="google-site-verification" content="6Dmc4wr_ssg2ZbDgm2Pi7mJlKC4-hlASOfuqUfQr99A" />

    <title>Document Solutions - Votre Partenaire En Solutions Documentaires</title>

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.docu-solutions.com/">
    <meta property="og:title" content="Document Solutions">
    <meta property="og:description" content="Transformez la gestion de vos documents en une expérience fluide et productive avec Document Solutions, votre partenaire en solutions documentaires.">
    <meta property="og:image" content="">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.docu-solutions.com/">
    <meta property="twitter:title" content="Document Solutions">
    <meta property="twitter:description" content="Transformez la gestion de vos documents en une expérience fluide et productive avec Document Solutions, votre partenaire en solutions documentaires.">
    <meta property="twitter:image" content="">

    <link href="https://fonts.cdnfonts.com/css/cooperblack" rel="stylesheet">

    @vite('resources/js/app.js')
</head>

<body>
    <div id="app"></div>
</body>

</html>
