@extends('adminlte::master')

@inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')
    @inject('preloaderHelper', 'JeroenNoten\LaravelAdminLte\Helpers\PreloaderHelper')

            @section('adminlte_css')

                <style>

                    .content-wrapper{
                        background:
                        linear-gradient(rgba(255,255,255,0.88), rgba(255,255,255,0.88)),
                        url("{{ asset('vendor/adminlte/dist/img/dashboard-bg.jpg') }}");

                        background-size: cover;
                        background-position: center;
                        background-attachment: fixed;
                    }

                    /* Card */
                    .card{
                        border:none;
                        border-radius:18px;
                        box-shadow:0 10px 25px rgba(0,0,0,.12);
                    }

                    /* Box Statistik */
                    .small-box{
                        border-radius:18px;
                        box-shadow:0 10px 25px rgba(0,0,0,.15);
                        transition:.3s;
                    }

                    .small-box:hover{
                        transform:translateY(-6px);
                    }

                    /* Sidebar */
                    .main-sidebar{
                        background: linear-gradient(180deg,#1e293b,#334155,#475569) !important;
                    }

                    /* Menu */
                    .nav-sidebar .nav-link{
                        border-radius:10px;
                        margin:4px 10px;
                        transition:.3s;
                    }

                    .nav-sidebar .nav-link:hover{
                        background:rgba(255,255,255,.12) !important;
                    }

                    .nav-sidebar .nav-link.active{
                        background:#3b82f6 !important;
                        color:white !important;
                        font-weight:bold;
                        border-radius:10px;
                    }

                    .brand-image{
                        max-height:45px !important;
                    }

                    .brand-text{
                        font-size:24px;
                        font-weight:bold;
                    }

                    .main-header{
                        background:white !important;
                        box-shadow:0 3px 12px rgba(0,0,0,.12);
                    }
                </style>

                @stack('css')
                @yield('css')
            @stop

            @section('classes_body', $layoutHelper->makeBodyClasses())

            @section('body_data', $layoutHelper->makeBodyData())

            @section('body')
                <div class="wrapper">

                    {{-- Preloader Animation (fullscreen mode) --}}
                    @if($preloaderHelper->isPreloaderEnabled())
                        @include('adminlte::partials.common.preloader')
                    @endif

                    {{-- Top Navbar --}}
                    @if($layoutHelper->isLayoutTopnavEnabled())
                        @include('adminlte::partials.navbar.navbar-layout-topnav')
                    @else
                        @include('adminlte::partials.navbar.navbar')
                    @endif

                    {{-- Left Main Sidebar --}}
                    @if(!$layoutHelper->isLayoutTopnavEnabled())
                        @include('adminlte::partials.sidebar.left-sidebar')
                    @endif

                    {{-- Content Wrapper --}}
                    @empty($iFrameEnabled)
                        @include('adminlte::partials.cwrapper.cwrapper-default')
                    @else
                        @include('adminlte::partials.cwrapper.cwrapper-iframe')
                    @endempty

                    {{-- Footer --}}
                    @hasSection('footer')
                        @include('adminlte::partials.footer.footer')
                    @endif

                    {{-- Right Control Sidebar --}}
                    @if($layoutHelper->isRightSidebarEnabled())
                        @include('adminlte::partials.sidebar.right-sidebar')
                    @endif

                </div>
            @stop

        @section('adminlte_js')
            @stack('js')
            @yield('js')
    @stop
