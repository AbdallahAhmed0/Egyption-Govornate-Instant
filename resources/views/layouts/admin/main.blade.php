@include('layouts.admin.head')
    <!-- Left Panel -->
        @include('layouts.admin.sidebar')
    <!-- /#left-panel -->


    <!-- Right Panel -->
        @include('layouts.admin.header')
        <!-- Header-->
        @yield('content')
        @yield('home')
        @yield('create')

        @include('layouts.admin.footer')

<!-- Right Panel -->

@include('layouts.admin.scripts')