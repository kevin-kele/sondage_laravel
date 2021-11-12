<style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

input{
    background-color: #FFD700;
}
h1{
    font-size: 40px;
}
h4{
    font-size: 20px;
}
    </style>
<form>
  <fieldset disabled>
       <div class="form-row" style="display: flex;flex-direction: column;justify-content: center;">
        <h1 style="text-align: center;">Vos reponse au sondage ​Bigscreen</h1>
                <h4>Question 1/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Votre adresse mail</label>
                        <input type="email" class="form-control"  id="validationCustomUsername" value="{{$sondage->email}}">
                </div>
                <h4>Question 2/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Votre age</label>
                    <input type="text" class="form-control" id="validationCustom01" value="{{$sondage->age}}" >
                </div>
                <h4>Question 3/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom02">Votre sexe</label>
                        <input class="form-control"  type="text"  name="sexe" id="sexe1" value="{{$sondage->sexe}}">
                </div>
                <h4>Question 4/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Nombre de personne dans votre foyer (adulte & enfants)</label>
                    <input type="text" value="{{$sondage->nb_Foyer}}" class="form-control" >
                </div>
                <h4>Question 5/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Votre profession</label>
                    <input type="text" value="{{$sondage->profession}}" class="form-control" id="validationCustom01">
                </div>
                <h4>Question 6/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom02">Quel marque de casque Vr utilisez vous ?</label>

                        <input class="form-control" value="{{$sondage->marque}}" type="text" name="marque" value="Occulus Rift/s">

                </div>
                <h4>Question 7/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom02">Sur quel magasin d’application achetez vous des contenus VR ?</label>

                        <input class="form-control" value="{{$sondage->magasin}}" type="text"  value="SteamVR">

                </div>
                <h4>Question 8/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom02">Quel casque envisagez vous d’acheter dans un futur proche ?</label>

                        <input class="form-control" type="text" name="casque"  value="{{$sondage->casque}}">

                </div>
                </div>
                <h4>Question 9/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Au sein de votre foyer, combien de personne utilisent votre casque VR pour regarder Bigscreen ?</label>
                    <input type="number" class="form-control"  value="{{$sondage->nb_utilise_vr}}">
                </div>
                <h4>Question 10/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom02">Vous utilisez principalement Bigscreen pour :</label>

                        <input class="form-control" type="text"  value="{{$sondage->utilisations}}" >

                </div>
                <h4>Question 11/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Combien donnez vous de point pour la qualité de l’image sur Bigscreen ?</label>
                    <input type="number" class="form-control"   value="{{$sondage->qualite}}">
                </div>
                <h4>Question 12/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Combien donnez vous de point pour le confort d’utilisation de l’interface Bigscreen ?</label>
                    <input type="number" class="form-control"   value="{{$sondage->confort}}">
                </div>
                <h4>Question 13/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Combien donnez vous de point pour la connection réseau de Bigscreen ?</label>
                    <input type="number" class="form-control"   value="{{$sondage->connection}}">
                </div>
                <h4>Question 14/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Combien donnez vous de point pour la qualité des graphismes 3D dans Bigscreen ?</label>
                    <input type="number" class="form-control"  value="{{$sondage->qualite_graph}}" >
                </div>
                <h4>Question 15/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Combien donnez vous de point pour la qualité audio dans Bigscreen ?</label>
                    <input type="number" class="form-control"  value="{{$sondage->qualiteAudio}}" >
                </div>
                <h4>Question 16/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom02">Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?</label>

                        <input class="form-control" type="text"  value="{{$sondage->notifications}}">

                </div>
                <h4>Question 17/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom02">Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?</label>

                        <input class="form-control" type="text"  value="{{$sondage->invitation_session}}">

                </div>
                <h4>Question 18/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?</label>
                    <input type="number" value="{{$sondage->enregistrement}}">
                </div>
                <h4>Question 19/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Aimeriez vous jouer à des jeux exclusifs sur votre Bigscreen ?</label>
                    <input type="number" class="form-control" value="{{$sondage->jeux_exclusifs}}" >
                </div>
                <h4>Question 20/20</h4>
                <div class="col-md-4 mb-2">
                    <label for="validationCustom01">Quelle nouvelle fonctionnalité de vos rêve devrait exister sur Bigscreen ?</label>
                    <input type="number" class="form-control" value="{{$sondage->nouvelle_fonctionnalite}}" >
                </div>
            </div>
  </fieldset>
</form>
