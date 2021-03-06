<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bs-stepper.min.css">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */


        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }
        h4{
            margin: 10px;
        }
        label{
            margin-bottom: 5px;
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body style="background-color:aliceblue;">
    <div>
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
            <button type="button" class="btn btn-info"> <a href="{{ route('login') }}">Log in</a></button>

            @endauth
        </div>
        @endif

    </div>

    <div class="container">
        @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif
        <h1 style="font-size: 70px;font-weight: bolder;text-align:center;margin-bottom:30px;">Bigscreen </h1>
        <h3 style="text-align: center;">Merci de r??pondre ?? toutes les questions et de valider le formulaire en bas de page</h3>
        <form class="needs-validation mx-auto" action="{{route('store.questionaire')}}" method="POST" novalidate>
            @csrf
            <div class="form-row" style="display: flex;flex-direction: column;justify-content: center;margin: auto;align-items: center;">
                <h4>Question 1/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Votre adresse mail ?</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input type="email" class="form-control"  onkeyup="texte2.innerHTML=this.value" id="validationCustomUsername" name="email" placeholder="email" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Adresse mail required
                        </div>
                    </div>
                </div>
                <h4>Question 2/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Votre age ?</label>
                    <input type="text" class="form-control" id="validationCustom01" onkeyup="texte3.innerHTML=this.value" name="age" placeholder="votre age" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">

                        Age ?
                        </div>
                </div>
                <h4>Question 3/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom02">Votre sexe ?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" onclick="texte4.innerHTML=this.value" name="sexe" id="sexe1" value="Homme" required>
                        <label class="form-check-label" for="sexe1">
                            Homme
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexe" onclick="texte4.innerHTML=this.value" id="sexe2" value="Femme" required>
                        <label class="form-check-label" for="sexe2">
                            Femme
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="sexe" onclick="texte4.innerHTML=this.value" id="sexe3" value="noSexe" required>
                        <label class="form-check-label" for="sexe3">
                            Pr??fere ne pas repondre
                        </label>
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Sexe ?
                        </div>
                </div>
                <h4>Question 4/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Nombre de personne dans votre foyer (adulte & enfants)</label>
                    <input type="number" class="form-control" min="1" max="5" id="validationCustom01" name="nb_Foyer" onkeyup="texte5.innerHTML=this.value" placeholder="Nombre de personne dans votre foyer" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Un nombre entre 1 et 5
                        </div>
                </div>
                <h4>Question 5/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Votre profession ?</label>
                    <input type="text" class="form-control" id="validationCustom01" onkeyup="texte6.innerHTML=this.value" name="profession" placeholder="Votre profession" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                           Profession
                        </div>
                </div>
                <h4>Question 6/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom02">Quel marque de casque Vr utilisez vous ?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="marque" onclick="texte7.innerHTML=this.value" id="marque1" value="Occulus Rift/s" required>
                        <label class="form-check-label" for="marque1">
                            Occulus Rift/s
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="marque" onclick="texte7.innerHTML=this.value" id="marque2" value="HTC Vive" required>
                        <label class="form-check-label" for="marque2">
                            HTC Vive
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="marque" id="marque3" onclick="texte7.innerHTML=this.value" value="Windows Mixed Reality" required>
                        <label class="form-check-label" for="marque3">
                            Windows Mixed Reality
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="marque" id="marque3" onclick="texte7.innerHTML=this.value" value="PSVR" required>
                        <label class="form-check-label" for="marque3">
                            PSVR
                        </label>
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Marque ?
                        </div>
                </div>
                <h4>Question 7/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom02">Sur quel magasin d???application achetez vous des contenus VR ?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" onclick="texte8.innerHTML=this.value" name="magasin" id="magasin1" value="SteamVR" required>
                        <label class="form-check-label" for="magasin1">
                            SteamVR
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" onclick="texte8.innerHTML=this.value" name="magasin" id="magasin2" value="Occulus store" required>
                        <label class="form-check-label" for="magasin2">
                            Occulus store
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" onclick="texte8.innerHTML=this.value" name="magasin" id="magasin3" value="Viveport" required>
                        <label class="form-check-label" for="magasin3">
                            Viveport
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" onclick="texte8.innerHTML=this.value" name="magasin" id="magasin3" value="Playstation VR" required>
                        <label class="form-check-label" for="magasin3">
                            Playstation VR
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" onclick="texte8.innerHTML=this.value" name="magasin" id="magasin3" value="Google Play" required>
                        <label class="form-check-label" for="magasin3">
                            Google Play
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" onclick="texte8.innerHTML=this.value" name="magasin" id="magasin3" value="Windows store" required>
                        <label class="form-check-label" for="magasin3">
                            Windows store
                        </label>
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Magasin ?
                        </div>
                </div>
                <h4>Question 8/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom02">Quel casque envisagez vous d???acheter dans un futur proche ?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="casque" onclick="texte9.innerHTML=this.value" id="casque1" value="Occulus Quest" required>
                        <label class="form-check-label" for="casque1">
                            Occulus Quest
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" onclick="texte9.innerHTML=this.value" name="casque" id="casque2" value="Occulus Go" required>
                        <label class="form-check-label" for="casque2">
                            Occulus Go
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="casque" onclick="texte9.innerHTML=this.value" id="casque3" value="HTC Vive Pro" required>
                        <label class="form-check-label" for="casque3">
                            HTC Vive Pro
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="casque" onclick="texte9.innerHTML=this.value" id="casque3" value="Autre" required>
                        <label class="form-check-label" for="casque3">
                            Autre
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="casque" onclick="texte9.innerHTML=this.value" id="casque3" value="Aucun" required>
                        <label class="form-check-label" for="casque3">
                            Aucun
                        </label>
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Casque evisager vous d'acheter ?
                        </div>
                </div>
                <h4>Question 9/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?</label>
                    <input type="number" class="form-control" min="1" max="5" id="validationCustom01" onkeyup="texte10.innerHTML=this.value" name="nb_utilise_vr" placeholder="combien de personne utilisent votre casque VR" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Un nombre entre 1 et 5
                        </div>
                </div>
                <h4>Question 10/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom02">Vous utilisez principalement Bigscreen pour :</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="utilisations" onclick="texte11.innerHTML=this.value" id="utilisations1" value="regarder des ??missions TV en direct" required>
                        <label class="form-check-label" for="utilisations1">
                            regarder des ??missions TV en direct
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="utilisations" onclick="texte11.innerHTML=this.value" id="utilisations2" value="regarder des films" required>
                        <label class="form-check-label" for="utilisations2">
                            regarder des films
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="utilisations" onclick="texte11.innerHTML=this.value" id="utilisations3" value="jouer en solo" required>
                        <label class="form-check-label" for="utilisations3">
                            jouer en solo
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="utilisations" onclick="texte11.innerHTML=this.value" id="utilisations3" value="jouer en team" required>
                        <label class="form-check-label" for="utilisations3">
                            jouer en team
                        </label>
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Utilisation principal
                        </div>
                </div>
                <h4>Question 11/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Combien donnez vous de point pour la qualit?? de l???image sur Bigscreen ?</label>
                    <input type="number" class="form-control" min="1" max="5" id="validationCustom01" onkeyup="texte12.innerHTML=this.value" name="qualite" placeholder="Combien donnez vous de point pour la qualit?? de l???image" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Un nombre entre 1 et 5
                        </div>
                </div>
                <h4>Question 12/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Combien donnez vous de point pour le confort d???utilisation de l???interface Bigscreen ?</label>
                    <input type="number" class="form-control" min="1" max="5" id="validationCustom01" onkeyup="texte13.innerHTML=this.value" name="confort" placeholder="Combien donnez vous de point pour le confort d???utilisation" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Un nombre entre 1 et 5
                        </div>
                </div>
                <h4>Question 13/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Combien donnez vous de point pour la connection r??seau de Bigscreen ?</label>
                    <input type="number" class="form-control" min="1" max="5" id="validationCustom01" onkeyup="texte14.innerHTML=this.value" name="connection" placeholder="Combien donnez vous de point pour la connection" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Un nombre entre 1 et 5
                        </div>
                </div>
                <h4>Question 14/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Combien donnez vous de point pour la qualit?? des graphismes 3D dans Bigscreen ?</label>
                    <input type="number" class="form-control" min="1" max="5" id="validationCustom01" onkeyup="texte15.innerHTML=this.value" name="qualite_graph" placeholder="Combien donnez vous de point pour la qualit?? des graphismes 3D" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Un nombre entre 1 et 5
                        </div>
                </div>
                <h4>Question 15/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Combien donnez vous de point pour la qualit?? audio dans Bigscreen ?</label>
                    <input type="number" class="form-control" min="1" max="5" id="validationCustom01" onkeyup="texte16.innerHTML=this.value" name="qualiteAudio" placeholder="Combien donnez vous de point pour la qualit?? audio" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Un nombre entre 1 et 5
                        </div>
                </div>
                <h4>Question 16/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom02">Aimeriez vous avoir des notifications plus pr??cises au cours de vos sessions Bigscreen ?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" onclick="texte17.innerHTML=this.value" name="notifications" id="notifications1" value="Oui" required>
                        <label class="form-check-label" for="notifications1">
                            Oui
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" onclick="texte17.innerHTML=this.value" name="notifications" id="notifications1" value="Non" required>
                        <label class="form-check-label" for="notifications1">
                            Non
                        </label>
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Oui / non ?
                        </div>
                </div>
                <h4>Question 17/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom02">Aimeriez vous pouvoir inviter un ami ?? rejoindre votre session via son smartphone ?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" onclick="texte18.innerHTML=this.value" name="invitation_session" id="invitation_session1" value="Oui" required>
                        <label class="form-check-label" for="invitation_session1">
                            Oui
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" onclick="texte18.innerHTML=this.value" name="invitation_session" id="invitation_session1" value="Non" required>
                        <label class="form-check-label" for="invitation_session1">
                            Non
                        </label>
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Oui / Non
                        </div>
                </div>
                <h4>Question 18/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Aimeriez vous pouvoir enregistrer des ??missions TV pour pouvoir les regarder ult??rieurement ?</label>
                    <input type="number" class="form-control"  min="1" max="5" onkeyup="texte19.innerHTML=this.value" id="validationCustom01" name="enregistrement" placeholder="Aimeriez vous pouvoir enregistrer des ??missions TV" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Un nombre entre 1 et 5
                        </div>
                </div>
                <h4>Question 19/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Aimeriez vous jouer ?? des jeux exclusifs sur votre Bigscreen ?</label>
                    <input type="number" class="form-control" min="1" max="5" onkeyup="texte20.innerHTML=this.value" id="validationCustom01" name="jeux_exclusifs" placeholder="Aimeriez vous jouer ?? des jeux exclusifs" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Un nombre entre 1 et 5
                        </div>
                </div>
                <h4>Question 20/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Quelle nouvelle fonctionnalit?? de vos r??ve devrait exister sur Bigscreen ?</label>
                    <input type="number" class="form-control" onclick="show('flex')" min="1" max="5" id="validationCustom01" onkeyup="texte21.innerHTML=this.value" name="nouvelle_fonctionnalite" placeholder="Quelle nouvelle fonctionnalit?? de vos r??ve" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                            Un nombre entre 1 et 5
                        </div>
                </div>
            </div>


            <button class="btn btn-primary" style="display:flex;margin:auto" type="submit">Finaliser</button>

            <div id="show" style="border:1px solid; border-style: dashed;display: none;justify-content: center;
                        align-items: center;margin-top: 11px;flex-direction: column;">
                <div>Email : <span id="texte2"></span> </div>
                <div>Age : <span id="texte3"></span> </div>
                <div>Sexe : <span id="texte4"></span> </div>
                <div>Nb foyer :<span id="texte5"></span> </div>
                <div>Profesion :<span id="texte6"></span> </div>
                <div>Marque : <span id="texte7"></span> </div>
                <div>Magasin : <span id="texte8"></span> </div>
                <div>Casque : <span id="texte9"></span> </div>
                <div>Nb utilisation foyer : <span id="texte10"></span> </div>
                <div>Utilisation principale : <span id="texte11"></span> </div>
                <div>Qualit?? d'image : <span id="texte12"></span> </div>
                <div>Confort : <span id="texte13"></span> </div>
                <div>Connexion : <span id="texte14"></span> </div>
                <div>Qualit?? graph : <span id="texte15"></span> </div>
                <div>Qualit?? audio : <span id="texte16"></span> </div>
                <div>Notification : <span id="texte17"></span> </div>
                <div>Sessions : <span id="texte18"></span> </div>
                <div>Enregistrement : <span id="texte19"></span> </div>
                <div>Jeux exclusifs : <span id="texte20"></span> </div>
                <div>Fonctionnalit?? : <span id="texte21"></span> </div>
            </div>
        </form>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
            function show (flex){
              var elem = document.getElementById('show');
              elem.style.display = flex
            }

        </script>
    </div>
</body>

</html>
