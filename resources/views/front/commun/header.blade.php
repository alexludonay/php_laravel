<header>
    <nav class="navbar navbar-inverse  ma-navbar">
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
                    @if (Auth::check() and Auth::user()->role=='admin')
                        <li><a style="color: #eceff1;" href="{!! route("admin.users.index") !!}" class="hov">Administrateurs</a></li>
                    @endif
                        <li><a style="color: #eceff1;" href="{!! route("profil.index") !!}" class="hov">Les candidats</a></li>
                    @if (Auth::check())
                        <li><a style="color: #eceff1;" href="{!! route("profil.show", Auth::user()->id) !!}" class="hov">Profil</a></li>
                    @endif
                    <li><a style="color: #ffffff;" href="{!! route("notes") !!}">Les classements</a></li>
                    @if (Auth::check())
                        <li><a  style="color: #ffffff;" href="{!! route("deconnexion") !!}" class="bordure">Se deconnecter</a></li>
                    @else
                        <li><a style="color: #ffffff;" href="{!! route("login") !!}" class="bordure">Se connecter</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
@include('front.commun.alert')