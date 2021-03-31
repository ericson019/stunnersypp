<!DOCTYPE html>
<html lang="en">
    @include('components.head')
    <body class="sb-nav-fixed">
        @include('components.navbar')
        <div id="layoutSidenav">
            @include('components.sidebar')
            <div id="layoutSidenav_content">
                        @yield('content')
                @include('components.footer')
            </div>
        </div>
        @include('components.script')
        @yield('script')
    </body>
</html>
