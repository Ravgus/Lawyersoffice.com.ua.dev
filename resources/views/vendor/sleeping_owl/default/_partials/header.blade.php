<a href="{{ url(config('sleeping_owl.url_prefix')) }}" class="logo">
    <span class="logo-lg">{!! AdminTemplate::getLogo() !!}</span>
    <span class="logo-mini">{!! AdminTemplate::getLogoMini() !!}</span>
</a>

<nav class="navbar navbar-static-top" role="navigation">

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        @stack('navbar')
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @stack('navbar.right')
                    </ul>
                </div>
            </div>

            <div class="col-xs-6">
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <a role="button" href="{{route('main')}}" class="btn btn-info">
                        На сайт <span class="glyphicon glyphicon-globe"></span>
                    </a>
                    <button class="btn btn-warning dropdown-toggle fa fa-user-circle" style="font-size:20px;"
                            type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">Выход</a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

</nav>


