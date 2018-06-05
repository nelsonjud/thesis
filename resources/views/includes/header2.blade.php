<div class="box-header row justify-content-center">
    <div class="container">
        <div class="box-search col-md-6">

        </div>
        <div class="box-profile col-md-6">
            <div class="box-profile-photo">
                    <div style="background-image: url('http://i.imgur.com/pKDdFJR.png')" class="profile-photo"></div>
                    <div class="header-drop-menu">
                        <div class="dropdown">
                            @if (Auth::user())
                            <span class="dropdown-toggle" id="header-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">{{ Auth::user()->name }}
                            </span>
                            @endif
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="header-menu">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact</a></li>
                                <li>
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>