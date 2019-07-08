<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    {{ style(mix('css/backend.css')) }}

    @stack('after-styles')

    <link href="{{ asset('css/vendors/vectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/vendors/jquery-toggles/css/toggles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/vendors/jquery-toggles/css/themes/toggles-light.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/vendors/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/vendors/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/vendors/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="{{ config('backend.body_classes') }}">
    <div class="hk-wrapper hk-vertical-nav">
        @include('backend.includes.header')
        @include('backend.includes.sidebar')

        <!-- Main Content -->
        <div class="hk-pg-wrapper px-0">
            <!-- Container -->
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        @if (trim($__env->yieldContent('page-header')))
                            <div class="faq-search-wrap">
                                <div class="container">
                                    <h2 class="display-5 text-dark">@yield('page-header')</h2>
                                    @if (trim($__env->yieldContent('sub-header')))
                                        <p>@yield('sub-header')</p>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <section class="hk-sec-wrapper">
                            @yield('content')
                        </section>
                    </div>


                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->

            @include('backend.includes.footer')
        </div>
        <!-- /Main Content -->

        <!-- Scripts -->
        @stack('before-scripts')
        {!! script(mix('js/manifest.js')) !!}
        {!! script(mix('js/vendor.js')) !!}
        {!! script(mix('js/backend.js')) !!}
        @stack('after-scripts')

        @include('backend.includes.pinkman')
    </div>
    <!-- /HK Wrapper -->
</body>
</html>
