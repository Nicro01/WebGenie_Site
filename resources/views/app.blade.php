<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="https://i.postimg.cc/VspJLRNn/Logo.png">

    <link rel="apple-touch-icon" sizes="180x180" href="https://i.postimg.cc/W4HTLtMP/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://i.postimg.cc/XYxnLsqq/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://i.postimg.cc/PqxTR1v4/favicon-16x16.png">
    <link rel="mask-icon" href="https://i.postimg.cc/DZ4F2Fg4/safari-pinned-tab.png" color="#b35bd5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <title>WebGenie - Agência de Desenvolvimento Web</title>
    <meta name="description"
        content="A WebGenie é sua parceira ideal para desenvolvimento de websites, sistemas e APIs. Transforme seus sonhos em realidade com nosso toque de magia digital.">
    <!-- Palavras-chave -->
    <meta name="keywords"
        content="webdesign, webgenie, genie, web, website, agencia, desenvolvimento, desenvolvimento web, sites, sistemas, desenvolvimento de sistemas, websites em londrina, sites em londrina, apis">
    <!-- Autor -->
    <meta name="author" content="WebGenie">
    <!-- Robots -->
    <meta name="robots" content="index, follow">
    <!-- Open Graph: Compartilhamento em Redes Sociais -->
    <meta property="og:title" content="WebGenie - Agência de Desenvolvimento Web ">
    <meta property="og:description"
        content="A WebGenie é sua parceira ideal para desenvolvimento de websites, sistemas e APIs. Transforme seus sonhos em realidade com nosso toque de magia digital.">
    <meta property="og:image" content="https://i.postimg.cc/VspJLRNn/Logo.png">
    <meta property="og:url" content="https://webgenie.com.br">
    <meta property="og:type" content="website">




    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- AOS -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia

</body>

</html>
