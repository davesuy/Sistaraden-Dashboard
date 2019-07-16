<!-- Top Navbar -->
<nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
    <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><i
            class="ion ion-ios-menu"></i></a>
    <a class="navbar-brand" href="{{ route('admin.index') }}">
        <img class="brand-img d-inline-block"
            src="{{ asset('img/backend/brand/LOGO-dark-768x274.png') }}" style="width:100px;"
            alt="brand" />
    </a>
    <ul class="navbar-nav hk-navbar-content">
        <li class="nav-item dropdown dropdown-authentication">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <div class="media">
                    <div class="media-img-wrap">
                        <div class="avatar">
                            <img src="https://femmetech.se/wp-content/uploads/2019/02/Ai-Inteligence-232x250.png" alt="user"
                                class="avatar-img rounded-circle">
                        </div>
                        <span class="badge badge-success badge-indicator"></span>
                    </div>
                    <div class="media-body">
                        <span>Washtec<i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX"
                data-dropdown-out="flipOutX">

                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log
                        out</span></a>
            </div>
        </li>
    </ul>
</nav>
<form role="search" class="navbar-search">
    <div class="position-relative">
        <a href="javascript:void(0);" class="navbar-search-icon"><i class="ion ion-ios-search"></i></a>
        <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
        <a id="navbar_search_close" class="navbar-search-close" href="#"><i class="ion ion-ios-close"></i></a>
    </div>
</form>
<!-- /Top Navbar -->
