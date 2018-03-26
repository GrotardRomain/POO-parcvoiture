<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PARC DE VOITURES</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
          <?php
           require_once('voiture.php');
          ?>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2>Parc de Voitures</h2>
              <h4>Introduire dans l'ordre suivant les caractéristiques de la voiture: </h4>
              <ol>
                <li>immatriculation</li>
                <li>Date de Mise en Circulation</li>
                <li>modèle</li>
                <li>marque</li>
                <li>kilométrage</li>
                <li>couleur</li>
                <li>poids</li>
              </ol>
            </div>
          </div>
          <?php
            $porsche = new Voiture(
              'DE 04911',
              '31-03-1993',
              '911 turbo s',
              'Porsche',
              74000,
              'Yellow',
              1290
            );
            echo $porsche->dispoVoiture();
            echo $porsche->setPays();
            echo $porsche->display();
          ?>
      </div>
    </div>
  </body>
</html>
