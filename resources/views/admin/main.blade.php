﻿@include('admin._partial.top')
    <!-- Page Loader -->
    <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div> -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    @include('admin._partial.topNav')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        @include('admin._partial.leftNav')
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <!-- @include('admin._partial.rightNav') -->
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- <div class="block-header">
                <h2>DASHBOARD</h2>
            </div> -->

            <!-- Widgets -->
            @yield('adminContent')
            <!-- #END# Widgets -->
        </div>
    </section>
@include('admin._partial.bottom')
