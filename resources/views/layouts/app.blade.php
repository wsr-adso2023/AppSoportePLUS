<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SoportePLUS</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- jQuery 3.7.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

<body>
    <div class="container-fluid background-nord4 min-vh-95">
        <div class="row h-100">
            <div class="col-2 mt-4 h-100"> <!-- Contenido de la navegación -->
                @livewire('navigation-menu')
            </div>

            <div class="col-10 mt-0 background-nord6 min-vh-100">
                </head><!-- BARRA SUPERIOR DE LA PAGINA --><x-head />
                <div class="justify-content-center mt-3">
                    <div class="col-md-12">
                        @if ($message = Session::get('error'))
                            <script>
                                Swal.fire({
                                    title: 'Error!',
                                    text: '{{ $message }}',
                                    icon: 'error',
                                    confirmButtonText: 'Ok'
                                })
                            </script>
                        @endif

                        @if ($message = Session::get('success'))
                            <script>
                                Swal.fire({
                                    title: 'Éxito!',
                                    text: '{{ $message }}',
                                    icon: 'success',
                                    confirmButtonText: 'Ok'
                                })
                            </script>
                        @endif

                        @if ($message = Session::get('info'))
                            <script>
                                Swal.fire({
                                    title: 'Información!',
                                    text: '{{ $message }}',
                                    icon: 'info',
                                    confirmButtonText: 'Ok'
                                })
                            </script>
                        @endif

                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stack('modals')
    @livewireScripts
</body>
</html>
