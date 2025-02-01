<?php 
session_start() 
?>; // Démarre la session

<?php require('layouts/header.php');  ?>
<?php require('functions/register.func.php');  ?>

<?php
        if (isset($message)) {
           echo $message;
        }
        ?>
<section class="contact" id="rendez-vous">
  <div class="section-heading" style="margin-top: 150px">
    <h2>s'inscrire</h2>
  </div>
  <form action="" method="POST">
    <div class="input-box">
      <input type="text" name="nom_user" placeholder="nom" /><br />
      <input type="text" name="prenom_user" placeholder="prenom" /><br />
      <input type="text" name="email_user" placeholder="address mail" /><br />
      <input type="password" name="motpass_user" placeholder="mot de passe"><br />
      <input type="password" name="motpass_repeat" placeholder="confirmer votre mot de passe"/><br />
    </div>
    <input type="submit" name="submit" class="btn" />
  </form>
</section>

<?php include('layouts/footer.php') ?>
