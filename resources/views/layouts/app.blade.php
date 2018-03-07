@include('includes/head')
    <body>
        <div id="app">



            @include('includes/header')

            <main class="py-4">
                <div class="container">
                    @yield('content')
                </div>
            </main>
        </div>

        @include('includes/footer')
        @include('includes/scripts')

    </body>
</html>
