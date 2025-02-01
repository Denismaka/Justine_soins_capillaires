<?php 
session_start() 
?>; // Démarre la session

<?php include('layouts/header.php') ?>;

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <section class="politique" id="politique">
      <div class="container">
        <div class="row">
          <h1>politique d'annulation</h1>
        </div>
        <p>
          Chez Justine soins capillaires (JSC) nous nous engageons à fournir un
          service de qualité à chacun de nos clients Afin de garantir une
          experience optimale pour tous, nous avons établi les lignes directices
          suivantes concernant les annulations de rendez-vous.
        </p>
        <section class="paragraphe" id="paragraphe">
          <div class="container">
            <div class="box">
              <h3>1. notification d'annulation</h3>
              <p>
                Si vous devez annuler ou modifier votre rendez-vous, nous vous
                prions de bien vouloir nous en informer au moins 24 heures à
                l'avance. cela nous permettra de réoganiser nos horaires et
                offrir votre créneau à un autre client.
              </p>
            </div>
            <div class="box">
              <h3>2. annulation tardives.</h3>
              <p>
                Toute annulation effectuées moins de 24 heures avant votre
                rendez-vous entrainera des frais d'annulation de 30% du montant
                total du service réservé. Ces frais seront appliqués lors de
                votre prochain rendez-vous.
              </p>
            </div>
            <div class="box">
              <h3>3. absence</h3>
              <p>
                Si vous ne vous presentez pas à votre rendez-vous sans préavis,
                nous considérons cela comme une abseence. Dans ce cas des frais
                équivalents à 50% du montant total du service réservé seront
                facturés et devront etre réglés lors de votre prochaine visite.
              </p>
            </div>
            <div class="box">
              <h3>4. excepetions</h3>
              <p>
                Nous comprenons que des circonstances imprévues peuvent
                survenir. Si vous avez des raisons valables pour annuler un
                rendez-vous (comme une urgence médicale), veuillez nous
                contacter directement nous examinerons chaque situation au cas
                par cas
              </p>
            </div>
            <div class="box">
              <h3>5. modification de rendez-vous</h3>
              <p>
                Si vous souhaitez modifier votre rendez-vous , veuillez nous
                contacter le plus tot possible. Nous férons de notre mieux pour
                répondre à votre demande
              </p>
            </div>
            <p id="desc">
              Merci pour votre compréhension et de votre coopération ! Nous
              sommes impatients de vous accueillir chez Justine soins
              capillaires (JSC);
            </p>
          </div>
        </section>
      </div>
      <style>
        #politique {
          background-color: black;
          color: white;
          min-height: 87vh;
        }
        #politique h1 {
          color: #ff8000;
          margin-top: 80px;
          text-align: center;
          font-family: Arial, Helvetica, sans-serif;
          text-transform: uppercase;
          font-size: 80px;
          font-weight: 800;
          text-decoration: underline;
        }
        #politique p {
          text-align: center;
          font-size: 30px;
          margin-top: 25px;
        }
        #paragraphe h3 {
          text-align: center;

          text-transform: uppercase;
          font-weight: 600;
          color: #ff8000;
          text-decoration: underline;
        }
      </style>
    </section>
  </body>
</html>

<?php include('layouts/footer.php') ?>
