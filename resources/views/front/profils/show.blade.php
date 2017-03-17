@extends("front/default")
<body>
<div class="profile-title">

        <h1>Profil de {{ $user->prenom }}</h1>
</div>
<div class="profil">
    <div class="col-md-2">
        <img src="../../assets/utilisateur-defaut.jpg" alt="photo">
        <div>
            <h4>Notes :</h4>
            <ul>
                <li>{{ $user->note }}</li>
            </ul>
        </div>
    </div>
    <div class="col-md-7">
        <p>{{ $user->nom , $user->prenom }}</p>
        <a href="mailto:{{ $user->mail }}">{{ $user->mail }}</a>
        <p>Description : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>
</body>
</html>
