<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                class="nav-link dropdown-toggle">
                <i class="fa fa-user-circle mr-2" aria-hidden="true"></i>{{ Auth::user()->name }}
            </a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow"
                style="left: 0px; right: inherit;">
                <li>
                    <a class="nav-link" href="{{ route('admin-panel.logout') }}">
                        <i class="nav-icon fa fa-sign-out mr-2" aria-hidden="true"></i>{{ __('Logout') }}
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin-panel.about.index') }}" class="brand-link">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>
    <div
        class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
        <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible">
                <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">

                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="info">
                            <a href="#" class="d-block">{{ auth()->user()->first_name }}
                                {{ auth()->user()->last_name }}</a>
                        </div>
                    </div>

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="true">
                            <li class="nav-item">
                                <a href="{{ route('admin-panel.about.index') }}"
                                    class="nav-link @if (Request::segment(2) == 'about') active @endif">
                                    <i class="nav-icon fa fa-users"></i>
                                    <p>About</p>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</aside>
