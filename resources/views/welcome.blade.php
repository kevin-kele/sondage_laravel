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
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div class>
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
            <button type="button" class="btn btn-info"> <a href="{{ route('login') }}" >Log in</a></button>

            @endauth
        </div>
        @endif

    </div>

        <div class="container">
           <h3 style="text-align: center;">Merci de répondre à toutes les questions et de valider le formulaire en bas de page</h3>
            <form class="needs-validation mx-auto" action="{{route('store.questionaire')}}" method="POST" novalidate>
                @csrf
                <div class="form-row" style="display: flex;flex-direction: column;justify-content: center;margin: auto;align-items: center; background-color: aliceblue;">
                    <h4>Question 1/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom01">Votre adresse mail</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                            </div>
                            <input type="email" class="form-control" id="validationCustomUsername" name="email" placeholder="email" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Adresse mail required
                            </div>
                        </div>
                    </div>
                    <h4>Question 2/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom01">Votre age</label>
                        <input type="text" class="form-control" id="validationCustom01" name="age" placeholder="votre age" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 3/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom02">Votre sexe</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexe" id="sexe1" value="Homme"  required>
                            <label class="form-check-label" for="sexe1">
                                Homme
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexe" id="sexe2" value="Femme" required>
                            <label class="form-check-label" for="sexe2">
                               Femme
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="sexe" id="sexe3" value="noSexe" required>
                            <label class="form-check-label" for="sexe3">
                                Préfere ne pas repondre
                            </label>
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 4/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom01">Nombre de personne dans votre foyer (adulte & enfants)</label>
                        <input type="number" class="form-control" id="validationCustom01" name="nb_Foyer" placeholder="Nombre de personne dans votre foyer" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 5/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom01">Votre profession</label>
                        <input type="text" class="form-control" id="validationCustom01" name="profession" placeholder="Votre profession" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 6/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom02">Quel marque de casque Vr utilisez vous ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marque" id="marque1" value="Occulus Rift/s"  required>
                            <label class="form-check-label" for="marque1">
                            Occulus Rift/s
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marque" id="marque2" value="HTC Vive" required>
                            <label class="form-check-label" for="marque2">
                            HTC Vive
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="marque" id="marque3" value="Windows Mixed Reality" required>
                            <label class="form-check-label" for="marque3">
                            Windows Mixed Reality
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="marque" id="marque3" value="PSVR" required>
                            <label class="form-check-label" for="marque3">
                            PSVR
                            </label>
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 7/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom02">Sur quel magasin d’application achetez vous des contenus VR ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="magasin" id="magasin1" value="SteamVR"  required>
                            <label class="form-check-label" for="magasin1">
                            SteamVR
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="magasin" id="magasin2" value="Occulus store" required>
                            <label class="form-check-label" for="magasin2">
                            Occulus store
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="magasin" id="magasin3" value="Viveport" required>
                            <label class="form-check-label" for="magasin3">
                            Viveport
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="magasin" id="magasin3" value="Playstation VR" required>
                            <label class="form-check-label" for="magasin3">
                            Playstation VR
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="magasin" id="magasin3" value="Google Play" required>
                            <label class="form-check-label" for="magasin3">
                            Google Play
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="magasin" id="magasin3" value="Windows store" required>
                            <label class="form-check-label" for="magasin3">
                            Windows store
                            </label>
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 8/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom02">Quel casque envisagez vous d’acheter dans un futur proche ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="casque" id="casque1" value="Occulus Quest"  required>
                            <label class="form-check-label" for="casque1">
                            Occulus Quest
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="casque" id="casque2" value="Occulus Go" required>
                            <label class="form-check-label" for="casque2">
                            Occulus Go
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="casque" id="casque3" value="HTC Vive Pro" required>
                            <label class="form-check-label" for="casque3">
                            HTC Vive Pro
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="casque" id="casque3" value="Autre" required>
                            <label class="form-check-label" for="casque3">
                            Autre
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="casque" id="casque3" value="Aucun" required>
                            <label class="form-check-label" for="casque3">
                            Aucun
                            </label>
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 9/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom01">Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?</label>
                        <input type="number" class="form-control" id="validationCustom01" name="nb_utilise_vr" placeholder="combien de personne utilisent votre casque VR" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 10/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom02">Vous utilisez principalement Bigscreen pour :</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="utilisations" id="utilisations1" value="regarder des émissions TV en direct"  required>
                            <label class="form-check-label" for="utilisations1">
                            regarder des émissions TV en direct
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="utilisations" id="utilisations2" value="regarder des films" required>
                            <label class="form-check-label" for="utilisations2">
                            regarder des films
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="utilisations" id="utilisations3" value="jouer en solo" required>
                            <label class="form-check-label" for="utilisations3">
                            jouer en solo
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="utilisations" id="utilisations3" value="jouer en team" required>
                            <label class="form-check-label" for="utilisations3">
                            jouer en team
                            </label>
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 11/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom01">Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?</label>
                        <input type="number" class="form-control" id="validationCustom01" name="qualite" placeholder="Combien donnez vous de point pour la qualité de l’image" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 12/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom01">Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?</label>
                        <input type="number" class="form-control" id="validationCustom01" name="confort" placeholder="Combien donnez vous de point pour le confort d’utilisation" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 13/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom01">Combien donnez vous de point pour la connection réseau de Bigscreen ?</label>
                        <input type="number" class="form-control" id="validationCustom01" name="connection" placeholder="Combien donnez vous de point pour la connection" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 14/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom01">Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?</label>
                        <input type="number" class="form-control" id="validationCustom01" name="qualite_graph" placeholder="Combien donnez vous de point pour la qualité des graphismes 3D" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 15/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom01">Combien donnez vous de point pour la qualité audio dans Bigscreen ?</label>
                        <input type="number" class="form-control" id="validationCustom01" name="qualiteAudio" placeholder="Combien donnez vous de point pour la qualité audio" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 16/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom02">Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="notifications" id="notifications1" value="Oui"  required>
                            <label class="form-check-label" for="notifications1">
                            Oui
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="notifications" id="notifications1" value="Non"  required>
                            <label class="form-check-label" for="notifications1">
                            Non
                            </label>
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 17/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom02">Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="invitation_session" id="invitation_session1" value="Oui"  required>
                            <label class="form-check-label" for="invitation_session1">
                            Oui
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="invitation_session" id="invitation_session1" value="Non"  required>
                            <label class="form-check-label" for="invitation_session1">
                            Non
                            </label>
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 18/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom01">Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?</label>
                        <input type="number" class="form-control" id="validationCustom01" name="enregistrement" placeholder="Aimeriez vous pouvoir enregistrer des émissions TV" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 19/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom01">Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?</label>
                        <input type="number" class="form-control" id="validationCustom01" name="jeux_exclusifs" placeholder="Aimeriez vous jouer à des jeux exclusifs" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <h4>Question 20/20</h4>
                    <div class="col-md-4 mb-2">
                        <label for="validationCustom01">Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?</label>
                        <input type="number" class="form-control" id="validationCustom01" name="nouvelle_fonctionnalite" placeholder="Quelle nouvelle fonctionnalité de vos rêve" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" style="display:flex;margin:auto" type="submit">Finaliser</button>
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
            </script>
        </div>
</body>

</html>
