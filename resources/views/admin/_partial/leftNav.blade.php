<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{asset('admin/images/user.png')}}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin
            </div>
            <div class="email">admin@gmail.com
        </div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li role="seperator" class="divider"></li>
                    <li><a href="{{route('logout')}}"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li @if(Route::is('dashboard')) class="active" @endif>
                <a href="{{route('dashboard')}}">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <!-- <li @if(Route::is('userquery')) class="active" @endif>
                <a href="{{route('userquery')}}">
                    <i class="material-icons">email</i>
                    <span>User Request</span>
                </a>
            </li> -->
            <li @if(Route::is('service')) class="active" @endif>
                 <a href="{{route('service')}}">
                    <i class="material-icons">build</i>
                    <span>Services</span>
                </a>
            </li>

            <li @if(Route::is('blog')) class="active" @endif>
                 <a href="{{route('blog')}}">
                    <i class="material-icons">open_in_new</i>
                    <span>Blogs</span>
                </a>
            </li>
            <li @if(Route::is('photo-gallery') || Route::is('get-album') || Route::is('slider.index') || Route::is('slider.create') ) class="active" @endif>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">photo_library</i>
                    <span>Gallery</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{route('get-album')}}">Album</a>
                    </li>
                    <li>
                        <a href="{{route('photo-gallery')}}">Photo</a>
                    </li>
                    <li>
                        <a href="{{route('slider.index')}}">Slider</a>
                    </li>
                </ul>
            </li>
             <li @if(Route::is('team-member')) class="active" @endif>
                 <a href="{{route('team-member')}}">
                    <i class="material-icons">people</i>
                    <span>Members</span>
                </a>
            </li>

            <li @if(Route::is('notice.index')) class="active" @endif>
                 <a href="{{route('notice.index')}}">
                    <i class="material-icons">book</i>
                    <span>Notice</span>
                </a>
            </li>
            <li @if(Route::is('change-password')) class="active" @endif>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">polymer</i>
                    <span>Setting</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{route('change-password')}}">Change Password</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; <?php echo date('Y') ?> <a href="javascript:void(0);">Limmex Automation Designed</a>.
        </div>
    </div>
    <!-- #Footer -->
</aside>