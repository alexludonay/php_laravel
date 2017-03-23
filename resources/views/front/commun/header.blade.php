<header>
    @include('front.commun.alert')
    <nav class="navbar navbar-inverse ma-navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Navigation mobile</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" style="margin-left: 20px; color: #eceff1;" href="{{ URL::asset("/") }}">How To Survive</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a style="color: #eceff1;"href="#" class="hov">Les classements</a></li>
                    @if (Auth::check())
                        <li><a style="color: #eceff1;" href="{!! route("deconnexion") !!}" class="bordure">Se deconnecter</a></li>
                    @else
                        <li><a style="color: #eceff1;" href="{!! route("login") !!}" class="bordure">Se connecter</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>