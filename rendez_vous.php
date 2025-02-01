<?php 
session_start() 
?>; // Démarre la session

<?php include('functions/db.php'); ?>

<?php include('layouts/header.php'); ?>
<?php include('functions/rendez_vous.func.php'); ?>

<!-- ############## -->
<!-- Rendez-vous -->
<!-- ############## -->
<section class="contact" id="rendez-vous">
  <div class="section-heading">
    <h2>Prendre rendez-vous</h2>
  </div>
  <div class="container">
    <div class="row">
      <form method="POST">
        <div class="input-box">
          <input type="text" name="nom_user" placeholder="Nom" required />
          <input type="text" name="prenom_user" placeholder="Prenom" required />
          <input type="email" name="email_user" placeholder="Email" required />
          <input
            type="number"
            name="tel_user"
            placeholder="Téléphone"
            required
          />
        </div>
        <div class="input-box">
          <input type="date" name="date" required />
        </div>
        <input type="submit" name="submit" value="Envoyer" class="btn" />
      </form>
    </div>
  </div>
  <style>
    .contact .section-heading {
      padding-top: 135px;
    }
  </style>
</section>
<?php include('layouts/footer.php'); ?>
