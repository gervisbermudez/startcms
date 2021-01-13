<nav class="main-navbar">
    <div class="nav-wrapper">
        <a href="#" data-target="slide-out" class="sidenav-trigger show-on-medium-and-down"><i class="material-icons">menu</i></a>
        <a class='dropdown-trigger right' href='#' data-target='user_dropdown'>
            @if (session('avatar'))
            <img src="{{url(session('avatar'))}}" alt="" class="circle z-depth-1" />
            @else
            <i class="material-icons circle grey lighten-5 profile z-depth-1">account_circle</i>
            @endif
        </a>
        <!-- Switch -->
        <div class="switch right darkmode-switch">
            <label>
                <input type="checkbox" id="darkmode-switch">
                <span class="lever">
                    <i class="material-icons">brightness_4</i>
                </span>
            </label>
        </div>
        <div id="user_dropdown" class="dropdown-content user-dropdown">
            <div class="user-view">
                <div class="background">
                </div>
                <a href="{{url('admin/usuarios/ver/' . session('user_id')) }}" class="user-avatar">
                    @if (session('avatar'))
                    <img src="{{url(session('avatar')) }}" alt="" class="circle z-depth-1" />
                    @else
                    <i class="material-icons circle grey lighten-5 profile z-depth-1">account_circle</i>
                    @endif
                </a>
                <a class="avatar-username" href="{{url('admin/usuarios/ver/' . session('user_id')) }}">
                    <span class="white-text name">{{ Auth::user()->name }}</span>
                </a>
                <a class="avatar-email" href="#email">
                    <span class="white-text email">{{ Auth::user()->email }}</span>
                </a>
            </div>
            <ul class="menu">
                <li class="divider" tabindex="-1"></li>
                <li><a href="{{ url('admin/configuracion') }}"><i class="material-icons">settings</i> Configuración</a></li>
                <li><a target="_blank" href="{{ url('/') }}"><i class="material-icons">launch</i> Ir al sitio</a></li>
                <li><a href="{{ url('admin/login/') }}"><form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-dropdown-link>
                            </form></a></li>
            </ul>
        </div>
    </div>
</nav>
