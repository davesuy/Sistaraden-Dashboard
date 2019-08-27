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
                        <i class="fas fa-users-cog"></i>
                        <span class="nav-link-text">CRM</span>
                    </a>
                    <ul id="auth_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.crm.accounts') }}">Accounts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.crm.activelists') }}">Active List Members</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.crm.campaigns') }}">Campaigns</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.crm.clients') }}">Clients</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.crm.emails') }}">Email Listings</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.crm.events') }}">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.crm.leads') }}">Leads</a>
                                </li>
                            {{-- 
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('dmin.crm.lists') }}">List Members</a>
                                </li> --}}
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

                @if ($logged_in_user->isAdmin())
                <li class="nav-item nav-dropdown {{
                    active_class(Active::checkUriPattern('admin/auth*'), 'open')
                }}">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse"
                        data-target="#pages_drp_access">
                        <i class="nav-icon far fa-user"></i>
                        @lang('menus.backend.access.title')

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>


                    <ul id="pages_drp_access" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Active::checkUriPattern('admin/auth/user*'))
                            }}" href="{{ route('admin.auth.user.index') }}">
                                @lang('labels.backend.access.users.management')

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Active::checkUriPattern('admin/auth/role*'))
                            }}" href="{{ route('admin.auth.role.index') }}">
                                @lang('labels.backend.access.roles.management')
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="divider"></li>

                <li class="nav-item nav-dropdown {{
                    active_class(Active::checkUriPattern('admin/log-viewer*'), 'open')
                }}">
                        <a class="nav-link nav-dropdown-toggle {{
                            active_class(Active::checkUriPattern('admin/log-viewer*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-list"></i> @lang('menus.backend.log-viewer.main')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Active::checkUriPattern('admin/log-viewer'))
                        }}" href="{{ route('log-viewer::dashboard') }}">
                                @lang('menus.backend.log-viewer.dashboard')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Active::checkUriPattern('admin/log-viewer/logs*'))
                        }}" href="{{ route('log-viewer::logs.list') }}">
                                @lang('menus.backend.log-viewer.logs')
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
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
