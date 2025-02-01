<?php 
session_start() 
?>; // Démarre la session

<?php include('layouts/header.php') ?>;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap/js/bootstrap.bundle.min.js">
    <title>Document</title>
</head>
<body>
<section class="soins" id="soins">
        <div class="container">
            <div class="row">
                <h1>soins capillaires et tarifs</h1>
            </div>
            <div class="box">
                <div class="col-md-6">
                    <img src="/assets/images/Soins capillaires/soins1.jpg" alt="" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <h4>coupe de cheveux</h4>
                    <h6><span>description</span> : Une coupe personnalisée adaptée à votre style et à la forme de votre visage. 
                        Que vous souhaitiez une coupe classique, moderne ou tendance, nos stylistes vous conseilleront sur le meilleur choix.
                    </h6>
                    <button class="btn">Prix: 30$</button>
                </div>
            </div>
            <div class="box">
                <div class="col-md-6">
                    <h4>coloration</h4>
                    <h6><span>description</span> : Transformez votre look avec nos services de coloration. Que vous souhaitiez une couleur
                        uniforme, des meches ou une technique de bolay age, nous utilisons des produits de qualité pour un resultat éclatant.
                </h6>
                <button class="btn">Prix: 50$</button>
            </div>
            <div class="col-md-6">
                <img src="/assets/images/Soins capillaires/soins2.jpg" alt="" class="img-fluid rounded">
            </div>
            </div>
            <div class="box">
                <div class="col-md-6">
                    <img src="/assets/images/Soins capillaires/soins3.jpg" alt="" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <h4>traitement capillaire</h4>
                    <h6><span>description</span> : Un soin en profondeur pour ravitaliser et hydrater vos cheveux. Ce traitement aide à
                        reparer les cheveux abimés, à renforcer la brillance et à améliorer la texture.    
                    </h6>
                    <button class="btn">Prix: 40$</button>
                </div>
            </div>
            <div class="box">
                <div class="col-md-6">
                    <h4>brunshing</h4>
                    <h6><span>description</span> : Un brunshing élégant pour un look sophystiqué et soigné idéal pour les occassions spéciales
                        ou pour se faire plaisir au quotidient.
                </h6>
                <button class="btn">Prix: 25$</button>
            </div>
            <div class="col-md-6">
                <img src="/assets/images/Soins capillaires/soins4.jpg" alt="" class="img-fluid rounded">
            </div>
            </div>
        </div>
        <style>
            #soins {
                background-color: black;
                color: white;
                min-height: 87vh;
            }
            #soins h1 {
                color: #ff8000;
                margin-top: 80px;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                text-transform: uppercase;
                font-size: 70px;
                font-weight: 800;
                text-decoration: underline;
            }
            #soins p {
                text-align: center;
                font-size: 30px;
                margin-top: 25px;
            }
            #soins h3 {
                text-align: center;

                text-transform: uppercase;
                font-weight: 600;
                color: #ff8000;
                text-decoration: underline;
            }
            #soins .container .box {
                display: flex;
                margin-top: 50px;
            }
            #soins .container .box .col-md-6 img {
                width: 100%;
            }
            #soins .container .box .col-md-6 {
                padding-left: 100px;
            }
            #soins .container .box .col-md-6 h4 {
                text-transform: uppercase;
                font-weight: 600;
            }
            #soins .container .box .col-md-6 h6 {
                font-size: 20px;
                margin-top: 25px;
                line-height: 30px;
            }
            #soins .container .box .col-md-6 span {
                color: #ff8000;
                font-size: 25px;
                text-transform: uppercase;
                font-weight: 600;
            }
            #soins .container .box .col-md-6 .btn {
                margin-top: 25px;
                border-radius: 7px;
                padding: 15px 60px;
                background: var(--red);
                color: var(--white);
                transition: 0.2s ease-in-out;
                text-transform: capitalize;
            }
            #soins .container .box .col-md-6 .btn:hover {
                background-color: var(--orange);
                box-shadow: 0 0 1rem var(--orange);
                transition: 0.2s ease-in-out;
            }
        </style>
    </section>
</body>
</html>

<?php include('layouts/footer.php') ?>;
