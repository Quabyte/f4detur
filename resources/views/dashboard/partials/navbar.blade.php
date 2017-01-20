<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#acikgise-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ action('DashboardController@index') }}" class="navbar-brand" style="padding: 10px 15px;">
                <img class="img-responsive" src="{{ asset('images/detur-logo.png') }}" alt="Detur" style="height: 30px;">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="acikgise-navbar-collapse">
            <!-- Left navigation -->
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ action('DashboardController@index') }}">
                        <i class="icon md-view-dashboard"></i> Dashboard
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="icon md-receipt"></i> Events <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ action('EventController@create') }}">
                                <i class="icon md-plus"></i> Create New
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Right navigation -->
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="icon md-account-circle"></i>
                            Welcome, {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">

                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="text-danger icon md-power"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>