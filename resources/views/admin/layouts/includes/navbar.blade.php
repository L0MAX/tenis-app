<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="  {{ route('dashboard')}}" class="brand-link">
            <img src="{{ asset('assets/img/htc.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Tennis Tournament</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white active bg-gradient-primary" href="#">
                    <span class="nav-link-text ms-1">{{Auth::user()->name}}</span>
                </a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white " href="{{route('choose.opponent')}}">--}}
{{--                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">--}}
{{--                        <i class="material-icons opacity-10">table_view</i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Choose Opponent</span>--}}
{{--                </a>--}}
{{--            </li>--}}

            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('admin.fixtures')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Teams</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
