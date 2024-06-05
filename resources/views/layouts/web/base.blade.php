
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Untree.co">
        <link rel="shortcut icon" href="{{asset('/img/logo.jpg')}}">

        <meta name="description" content="" />
        <meta name="keywords" content="finanzas, entrenando, economia, dinero, educacion, todos, democratizar, enseñanza" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        <link rel="stylesheet" href="css/tiny-slider.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/glightbox.min.css">
        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="css/flatpickr.min.css">


        <title>Entrenando tus finanzas</title>
    </head>
    <body>

        @include('layouts.web.navbar')

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Your content -->
            @yield('main')
            </div>
        </main>

        @include('layouts.web.footer')

        <!-- Preloader -->
        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>


        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/tiny-slider.js"></script>

        <script src="js/flatpickr.min.js"></script>


        <script src="js/aos.js"></script>
        <script src="js/glightbox.min.js"></script>
        <script src="js/navbar.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>


    </body>
</html>
