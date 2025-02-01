<?php
session_start();
?>
<?php require('layouts/header.php');  ?>
<?php require('functions/login.func.php');  ?>

<?php
if (isset($message)) {
  echo $message;
}
?>
<section class="contact" id="rendez-vous">
  <div class="section-heading" style="margin-top: 150px">
    <h2>se connecter</h2>
  </div>
  <form action="" method="POST">
    <div class="input-box">
      <input type="text" name="email_user" placeholder="address mail" /><br />
      <input
        type="password"
        name="motpass_user"
        placeholder="mot de passe" /><br />
    </div>
    <input type="submit" name="submit" class="btn" />
  </form>
</section>


<?php include('layouts/footer.php') ?>