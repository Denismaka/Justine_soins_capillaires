<?php 
session_start();
?>
<?php include('layouts/header.php') ?>;
<?php include('functions/dashboard.func.php') ?>;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/fonts/css/all.min.css" />
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <section class="board" id="board">
        <div class="container">
            <div class="row">
                <h1 id="section-heading">
                    <span>D</span>
                    <span>a</span>
                    <span>s</span>
                    <span>h</span>
                    <span>b</span>
                    <span>o</span>
                    <span>a</span>
                    <span>r</span>
                    <span>d</span>
                    <br><br> <a href="viewAll.php" class="btn">Editer tous les posts</a>
                </h1>
            </div>
        </div>
    </section>


    <!-- section permettant la connextion  -->
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
                    <input type="text" name="nom_user" placeholder="nom" /><br/>
                    <input type="text" name="prenom_user" placeholder="prenom"/><br/>
                    <input type="text" name="email_user" placeholder="address mail"/><br/>
                    <input type="password" name="motpass_user" placeholder="mot de passe"/><br/>
                    <input type="password" name="motpass_repeat" placeholder="confirmer votre mot de passe"/><br />
                </div>
                <input type="submit" name="submit" class="btn"/>
            </form>
        </section>

<style>
        #section-heading {
            text-align: center;
            padding: 5%;
        }
        #section-heading span {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 5rem;
            background: rgba(255, 165, 0, .2);
            color: black;
            border-radius: .5rem;
            padding: .2rem 1rem;
        }
    </style>
</body>
</html>