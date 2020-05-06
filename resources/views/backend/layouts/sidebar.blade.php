<?php
use \Illuminate\Support\Facades\Request;
?>
<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>

    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>

    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>

    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="{{ route('backend') }}" @if(Request::url() == route('backend')) class="mm-active" @endif>
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">Users</li>
                <li>
                    <a href="{{ route('backend.user.list') }}" @if(Request::url() == route('backend.user.list')) class="mm-active" @endif>
                        <i class="metismenu-icon pe-7s-users"></i>
                        Users
                    </a>
                </li>
                <li class="app-sidebar__heading">Admin panel</li>
                <li>
                    <a href="{{ route('backend.menu.list') }}" @if(Request::url() == route('backend.menu.list')) class="mm-active" @endif>
                        <i class="metismenu-icon pe-7s-users"></i>
                        Menus
                    </a>
                </li>
                <li class="app-sidebar__heading">Components</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Dropdown
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon"></i>
                                Item 1
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon"></i>
                                Item 2
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
