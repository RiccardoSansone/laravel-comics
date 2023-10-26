<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title', 'Home')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        @include('partials.navbar')
    </header>

    <main>
    </main>

    <footer>
        <div id="foot_container" class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row d-flex justify-content-between">
                        
                        <div class="col-4 text-white">

                            <h3 class="text-white text-uppercase">DC COMICS</h3>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>


                            <h3 class="text-white text-uppercase">SHOP</h3>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>


                        </div>
                        <!-- /prima colonna -->
                        <div class="col-4 text-white">

                            <h3 class="text-white text-uppercase">DC</h3>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>


                        </div>
                        <!-- /seconda colonna -->
                        <div class="col-4 text-white">

                            <h3 class="text-white text-uppercase">SITES</h3>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>
                                <li class="list-unstyled">lore</li>

                        </div>
                        <!-- /terza colonna -->

                    </div>
                </div>
                
            </div>

            <img class="img_foot" src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">

        </div>
    </footer>

</body>

</html>