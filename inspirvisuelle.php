<?php 
session_start() 
?>; // Démarre la session

<?php include('layouts/header.php') ?>;
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="/assets/bootstrap/js/bootstrap.bundle.min.js"
    />
    <title>Document</title>
  </head>
  <body>
    <section class="inspirvisuelle" id="inspirvisuelle">
      <div class="container">
        <div class="section-heading">
          <h1>autre inspiration visuelle</h1>
        </div>
        <div class="row">
          <div class="col-md-4">
            <img
              src="/assets/images/Inspirations visuelles/ivA.jpg"
              alt=""
              class="img-fluid rounded"
            />
          </div>
          <div class="col-md-4">
            <img
              src="/assets/images/Inspirations visuelles/ivB.jpg"
              alt=""
              class="img-fluid rounded"
            />
          </div>
          <div class="col-md-4">
            <img
              src="/assets/images/Inspirations visuelles/ivC.jpg"
              alt=""
              class="img-fluid rounded"
            />
          </div>
          <div class="col-md-4">
            <img
              src="/assets/images/Inspirations visuelles/ivD.jpg"
              alt=""
              class="img-fluid rounded"
            />
          </div>
          <div class="col-md-4">
            <img
              src="/assets/images/Inspirations visuelles/ivE.jpg"
              alt=""
              class="img-fluid rounded"
            />
          </div>
          <div class="col-md-4">
            <img
              src="/assets/images/Inspirations visuelles/ivF.jpg"
              alt=""
              class="img-fluid rounded"
            />
          </div>
        </div>
        <style>
          #inspirvisuelle .container h1 {
            color: #ff8000;
            margin-top: 40px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            text-transform: uppercase;
            font-size: 70px;
            font-weight: 800;
            text-decoration: underline;
          }
          #inspirvisuelle .container .row {
            margin-top: 60px;
          }
        </style>
      </div>
      <style>
        #inspirvisuelle {
          background-color: black;
          color: white;
          min-height: 87vh;
        }
        #inspirvisuelle .container .row .col-md-4 {
          margin-bottom: 50px;
        }
        #inspirvisuelle .container .row .col-md-4 img {
          transition: 0.2s ease-in-out;
        }
        #inspirvisuelle .container .row .col-md-4:hover img {
          transform: scale(1.1);
        }
      </style>
    </section>
  </body>
</html>

<?php include('layouts/footer.php') ?>;
