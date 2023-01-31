<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('img/icons/favicon.jpg') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Document Title -->
    <title>@yield('title') - Alice Anume Memorial School Of Nursing & Midwifery</title>
    <!-- SEO -->
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords', 'AAMSNM, alice anume, alice anume medical school')" />

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">



    <!-- Bootstrap | Animate | Font-Awesome | Aamsnm Style -->
    <link href="{{ asset('css/aamsnm.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Page Required Css Files -->
    @yield('requiredCss')
    <!-- Js | JQuery | Bootstrap | Wow -->
    <script src="{{ asset('js/aamsnm.js') }}" defer></script>

    <!-- Page Required Js Files-->
    @yield('requiredJs')

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body class="">
   <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->

    @includeIf('web.includes.navbar')

    
    
     <!-- Page Content -->
    @yield('content')


    <!-- Include website footer -->
    @includeIf('web.includes.footer')


    <!-- back to top btn -->
    <a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>
    
</body>
</html>