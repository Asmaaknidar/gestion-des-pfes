@include('dashboard.header'),
@include('group.navbargroup'),
<link rel="stylesheet" href="{{ asset('css/profil.css') }}">
@include('dashboard.topbar')
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Utilisateur</title>
    <style>
        /* CSS combiné */

        /* --- Définitions générales --- */

        body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .cardLine,
        .cardLineBottom {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .cardLine h6 {
            flex: 0 0 25%;
            max-width: 25%;
            margin-bottom: 0 !important;
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.2;
            position: relative;
            width: 100%;
            padding: 0px 15px;
            margin-top: 0px;
        }

        .cardLineData {
            color: #6c757d !important;
            flex: 0 0 75%;
            max-width: 75%;
            position: relative;
            width: 100%;
            padding: 0px 15px;
        }

        .card hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top-color: currentcolor;
            border-top-style: none;
            border-top-width: 0px;
            border-top: 1px solid rgba(0, 0, 0, .1);
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        .cardLineBottom button {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        /* --- Fin des définitions générales --- */


        /* --- Section de détail utilisateur --- */

        .UserInfoSection {
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        /* --- Fin de la section de détail utilisateur --- */


        /* --- Section de droite --- */

        .UserDetailRight {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
            margin-bottom: 1rem !important;
            padding-right: 5vh;
            padding-left: 8px;
        }

        .profil button:nth-child(1n) {
            margin-top: 20px;
        }

        .card-body-content {
            text-align: center !important;
            align-items: center !important;
            flex-direction: column !important;
            display: flex !important;
            word-wrap: break-word;
            color: #1a202c;
        }

        .profile-image {
            border-radius: 50% !important;
            border-style: none;
        }

        .card-body-info {
            margin-top: 1rem !important;
        }

        .card-body-info h4 {
            font-size: 1.5rem;
            margin-bottom: .5rem;
            margin-top: 0;
            font-weight: 500;
            line-height: 1.2;
        }

        .card-body-info p {
            color: #6c757d !important;
            margin-bottom: .25rem !important;
            margin-top: 0;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            border-top-color: transparent;
            border-right-color: transparent;
            border-bottom-color: transparent;
            border-left-color: transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            text-transform: none;
            overflow: visible;
            cursor: pointer;
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-secondary {
            color: #007bff;
            border-color: #007bff;
        }

     /* --- Section de gauche --- */

     .UserDetailLeft {
            flex: 0 0 48%;
            max-width: 100%;
            margin-bottom: 1rem !important;
            padding-right: 5vh;
            padding-left: 8px;
        }

        /* --- Fin de la section de gauche --- */

        /* --- Section de droite --- */

        .UserDetailRight {
            flex: 0 0 48%;
            max-width: 100%;
            margin-bottom: 1rem !important;
            padding-right: 5vh;
            padding-left: 8px;
        }
        .title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        /* --- Fin de la section de droite --- */
    </style>
</head>

<body>
    <!-- Contenu HTML -->

    <!-- Conteneur de détail utilisateur -->
    <div class="title"> Professeur Profile</div>
    <div class="UserDetail">


        <!-- Côté droit -->
        <div class="UserDetailRight">
            <div class="card profil">
                <div class="card-body">
                    <div class="card-body-content">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="profile-image" width="150">
                        <div class="card-body-info">
                            <h4>Jméno Příjmení</h4>
                            <p>Uživatelská role</p>
                            <p>počet aplikací: #</p>
                            <p>založen: DD.MM.YYYY</p>
                            <button class="btn-secondary btn">změna hesla</button>
                            <button class="btn-secondary btn">nové foto</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin du côté droit -->
         <!-- Côté gauche -->
         <div class="UserDetailLeft">
            <div class="card">
                <div class="card-body">
                    <div class="cardLine">
                        <h6>Jméno</h6>
                        <div class="cardLineData">David</div>
                    </div>
                    <hr>
                    <div class="cardLine">
                        <h6>Příjmení</h6>
                        <div class="cardLineData">Michalica</div>
                    </div>
                    <hr>
                    <div class="cardLine">
                        <h6>Email</h6>
                        <div class="cardLineData">fip@jukmuh.al</div>
                    </div>
                    <hr>
                    <div class="cardLine">
                        <h6>Telefon</h6>
                        <div class="cardLineData">(239) 816-9029</div>
                    </div>
                    <hr>
                    <div class="cardLine">
                        <h6>2FA</h6>
                        <div class="cardLineData">Ne</div>
                    </div>
                    <hr>
                    <div class="cardLine">
                        <h6>Město</h6>
                        <div class="cardLineData">Brno</div>
                    </div>
                    <hr>
                    <div class="cardLine">
                        <h6>Stát</h6>
                        <div class="cardLineData">Cze</div>
                    </div>
                    <hr>
                    <div class="cardLine">
                        <h6>PSČ</h6>
                        <div class="cardLineData">612 00</div>
                    </div>
                    <hr>
                    <div class="cardLine">
                        <h6>Pohlaví</h6>
                        <div class="cardLineData">Muž</div>
                    </div>
                    <hr>
                    <div class="cardLine">
                        <h6>Datum narození</h6>
                        <div class="cardLineData">13. 11. 1998</div>
                    </div>
                    <hr>
                    <div class="cardLine">
                        <h6>Náboženské vyznání</h6>
                        <div class="cardLineData">-</div>
                    </div>
                    <hr>
                    <div class="cardLine">
                        <h6>Dosažené vzdělání</h6>
                        <div class="cardLineData">Střední škola s maturitou</div>
                    </div>
                    <hr>
                    <div class="cardLine">
                        <h6>Profese</h6>
                        <div class="cardLineData">Programátor</div>
                    </div>
                    <hr>
                    <div class="cardLineBottom">
                        <button class="btn-primary btn">Upravit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin du côté gauche -->
    </div>
    <!-- Fin du conteneur de détail utilisateur -->
</body>

</html>
@include('dashboard.script')
@include('dashboard.footer')
