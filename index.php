<?php 
session_start() 
?>; // Démarre la session

<?php
    include('layouts/header.php');
    include('functions/index.func.php');
?>

    <!-- ############## -->
    <!-- Home -->
    <!-- ############## -->
    <section class="home" id="home">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1>bienvenue <span class="multiple"></span></h1>
            <p>
              Décrouvez un havre de paix ou vos cheveux réçoivent toute
              l'attention qu'ils méritent. Notre équipe de stylistes passionnées
              est prete à vous offrir une expérience de soins capillaires
              inégalée. Rérvez dès maintenant votre rendez-vous pour une
              transformation qui fera briller votre beauté.
            </p>
            <a href="rendez_vous.php" class="btn">reservez</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ############## -->
    <!-- About -->
    <!-- ############## -->
    <section class="about" id="about">
      <div class="container">
        <div class="section-heading">
          <h2>notre histoire</h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p>
              Chez <span>JSC</span>, nous croyons que chaque client mérite un
              service personnalisé. Fondé avec l'ambition de fournir des soins
              capillaires de qualité, notre salon est un espace ou la créativité
              et le savoir-faire se rencontrent
            </p>
          </div>
          <div class="col-md-6">
            <img
              src="assets/images/Salon/salon.webp"
              class="img-fluid rounded"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- ############## -->
    <!-- Services -->
    <!-- ############## -->
    <section class="services" id="services">
      <div class="container">
        <div class="section-heading">
          <h2>nos soins capillaires</h2>
        </div>
        <div class="row">
          <p class="text-white">
            Décrouvrez notre large gamme de services adaptés à tous les types de
            chéveux; De la coupe tendaces à la coloration éclatante, en passant
            par des traitements révitalisant, nous avons ce qu'il vous faut pour
            révéler votre beauté naturelle.
          </p>
          <div class="col-md-4">
            <div class="box">
              <div class="img">
                <img src="assets/images/Soins capillaires/soins1.jpg" alt="" />
              </div>
              <div class="description">
                <span>50$</span>
                <h5>brunshing</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
              <div class="img">
                <img src="assets/images/Soins capillaires/soins2.jpg" alt="" />
              </div>
              <div class="description">
                <span>20$</span>
                <h5>brunshing</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
              <div class="img">
                <img src="assets/images/Soins capillaires/soins3.jpg" alt="" />
              </div>
              <div class="description">
                <span>10$</span>
                <h5>brunshing</h5>
              </div>
            </div>
          </div>
          <a href="soins.php" class="btn">en savoir plus</a>
        </div>
      </div>
    </section>

    <!-- ############## -->
    <!-- Galeries -->
    <!-- ############## -->
    <section class="galeries" id="galeries">
      <div class="container">
        <div class="section-heading">
          <h2>inspiration visuelle</h2>
          <p>
            Parcourez notre galerie pour décrouvrir des réalisation
            époustouflantes de notre équipe. Que ce soit des coupes audacieuses
            des couleurs éclatantes ou des styles élégants laissez-vous inspirer
            par notre savoir-faire
          </p>
        </div>
        <div class="row">
          <div class="col-md-3">
            <img src="assets/images/Inspirations visuelles/iv1.jpg" alt="" />
          </div>
          <div class="col-md-3">
            <img src="assets/images/Inspirations visuelles/iv2.jpg" alt="" />
          </div>
          <div class="col-md-3">
            <img src="assets/images/Inspirations visuelles/iv3.jpg" alt="" />
          </div>
          <div class="col-md-3">
            <img src="assets/images/Inspirations visuelles/vi4.jpg" alt="" />
          </div>
          <a href="inspirvisuelle.php" class="btn">voir plus</a>
        </div>
      </div>
    </section>

    <!-- ############## -->
    <!-- Témoignages -->
    <!-- ############## -->
    <section class="témoignages" id="témoignages">
      <div class="container">
        <div class="section-heading">
          <h2>témoignages</h2>
          <h4>Ce que nos clients disent de nous !</h4>
          <p>
            lisez les témoignages de nos clients satisfaits qui partagent leurs
            exprériences au sein de notre salon. votre satisfaction est notre
            priorité, et nous sommmes fiers de recevoir tant de rétours
            possitifs
          </p>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="box d-flex">
              <div class="right">
                <img src="assets/images/Reviews/avis-01.jpg" alt="" />
              </div>
              <div class="left">
                <h4>Charlote A</h4>
                <p>
                  Je suis ravie de ma dernière visite chez <span>jsc</span>! mon
                  coiffeur a parfaitement compris ce que je voulais et à
                  réaliser une coupe qui me va à meirveille. L'ambiance est
                  chaleureuse, et l'équipe est très professionnelle Je
                  recommande vivement ce salon.
                </p>
                <div class="font text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box d-flex">
              <div class="right">
                <img src="assets/images/Reviews/avis-02.jpg" alt="" />
              </div>
              <div class="left">
                <h4>Bénédicte k</h4>
                <p>
                  J'ai récenment fait une coloration chez <span>jsc</span>, et
                  je suis très satisfait du résultat! Les produits utilisés sont
                  de haute qualité, et mes cheveux sont restés en plein forme.
                  Je me sans vraiment bien dans ma peau grace à leur travail de
                  qualité. Merci à toute l'équipe !
                </p>
                <div class="font text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box d-flex">
              <div class="right">
                <img src="assets/images/Reviews/avis-03.jpg" alt="" />
              </div>
              <div class="left">
                <h4>Daniella T</h4>
                <p>
                  Le soins capillaires que j'ai réçu était incroyable ! Mes
                  cheveux étaient abimés et après un traitement ils sont révenus
                  à la vie. Je n'ai jamais eu autant de compliments! je
                  recommande ce salon à tous ce qui cherchent à prendre soin de
                  leurs cheveux.
                </p>
                <div class="font text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ############## -->
    <!-- Blog -->
    <!-- ############## -->
    <section class="blog" id="blog">
      <div class="container">
        <div class="section-heading">
          <h2>blog</h2>
          <h4>Conseils et tendaces !</h4>
          <p>
            Explorez notre blog pour des conseil d'experts sur les soins
            capillaires, des tendances à suivre et des récommandation de
            produits. Rester à jour avec les derniers nouveautés dans le monde
            de la coiffurs !
          </p>
        </div>
        <div class="row">
          <div class="col-md-4">
            <img src="assets/images/Blog/1.jpg" alt="" />
            <div class="project-layer">
              <h4>Tissage</h4>
              <p>Description</p>
              <a href="blog.php"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <img src="assets/images/Blog/2.jpg" alt="" />
            <div class="project-layer">
              <h4>Tresses</h4>
              <p>Description</p>
              <a href="blog.php"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <img src="assets/images/Blog/3.jpg" alt="" />
            <div class="project-layer">
              <h4>Brunshing</h4>
              <p>Description</p>
              <a href="blog.php"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <img src="assets/images/Blog/4.jpg" alt="" />
            <div class="project-layer">
              <h4>Tresses</h4>
              <p>Description</p>
              <a href="blog.php"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <img src="assets/images/Blog/5.jpg" alt="" />
            <div class="project-layer">
              <h4>Brunshing</h4>
              <p>Description</p>
              <a href="blog.php"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <img src="assets/images/Blog/6.jpg" alt="" />
            <div class="project-layer">
              <h4>Tissage</h4>
              <p>Description</p>
              <a href="blog.php"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </div>
        </div>
        <a href="blogsingle.php" class="btn">en savoir plus</a>
      </div>
    </section>

    <!-- ############## -->
    <!-- Rendez-vous -->
    <!-- ############## -->
    <section class="contact" id="rendez-vous">
    <div class="section-heading">
        <h2>Prendre rendez-vous</h2>
    </div>
    <div class="container">
        <div class="row">
            <form action="functions/register.func.php" method="POST">
                <div class="input-box">
                    <input type="text" name="nom_user" placeholder="Nom" required />
                    <input type="text" name="prenom_user" placeholder="Prenom" required />
                    <input type="email" name="email_user" placeholder="Email" required />
                    <input type="number" name="tel_user" placeholder="Téléphone" required />
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

    <?php include('layouts/footer.php') ?>
   



    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/JS/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="assets/JS/typed.js/dist/typed.umd.js"></script>
    <script src="assets/JS/app.js"></script>
  </body>
</html>
