<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SIGMA') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">

          <div class="sticky top-0 " >
            @livewire('navigation-menu')
          </div>


            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')


        <footer class="py-3 text-sm text-center text-gray-400">
          <p>© 2015: Todos los Derechos Reservados. <b>SISTEMA INTEGRAL DE GESTI&Oacute;N MASTRICULAR AUTOMATIZADO</b></p>
              <p><b>L.N.B. General en Jefe José Francisco Bermúdez.</b>  Urb. Guayacán de las Flores, Sector 1, Calle # 5</p>
              <p>Teléfonos: 0294-511-10.49 /0294-332-48.66 - e-mail:lnbjfb@gmail.com - Twitter: @lnbjfb </p>
              <p>Realizado por: ING. JUAN CARLOS RUIZ H</p>
      </footer>

        @livewireScripts
    </body>




</html>
