<!-- Vertical Nav -->
<nav class="hk-nav hk-nav-light">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i
                data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">
            <ul class="navbar-nav flex-column">
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse"
                        data-target="#dash_drp" aria-expanded="true">
                        <i class="ion ion-ios-stats"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                    <ul id="dash_drp" class="nav flex-column collapse collapse-level-1 show">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Welcome</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="javascript:void(0);"
                                        data-toggle="collapse" data-target="#signup_drp" aria-expanded="false">
                                        Analytic
                                    </a>
                                    <ul id="signup_drp" class="nav flex-column collapse-level-2 collapse"
                                        style="">
                                        <li class="nav-item">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">SEO</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Social media</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Sales</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Business Intelligence</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.market-automation') }}">MA / Engagement Platform</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.statistics') }}">Statistics</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse"
                        data-target="#auth_drp">
                        <i class="ion ion-ios-construct"></i>
                        <span class="nav-link-text">Support</span>
                    </a>
                    <ul id="auth_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.create-ticket') }}">Create ticket</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.faq') }}">Faq</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse"
                        data-target="#pages_drp">
                        <i class="ion ion-ios-school"></i>
                        <span class="nav-link-text">Training</span>
                    </a>
                    <ul id="pages_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Workshops</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Education modules</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>

            <hr class="nav-separator">
            <div class="nav-header">
                <span>Getting Started</span>
                <span>GS</span>
            </div>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.documentation') }}">
                        <i class="ion ion-ios-book"></i>
                        <span class="nav-link-text">Documentation</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- /Vertical Nav -->
