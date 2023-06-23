<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

    @include('frontend.layout.head')

<body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

            @include('frontend.layout.navbar')
            @include('frontend.layout.loader')

            @yield('content')

        </main>
        <!-- Footer-->
        @include('frontend.layout.footer')
</body>
</html>
