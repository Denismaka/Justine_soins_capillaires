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
    <section class="noservices" id="noservices">
      <div class="container">
        <div class="section-heading">
          <h1>décoration, tresses, make up, habillage</h1>
        </div>
        <div class="row">
          <div class="col-md-3">
            <img src="/assets/images/Noservices/1.jpg" class="img-fluid rounded"/>
          </div>    
          <div class="col-md-3">
            <img src="/assets/images/Noservices/1.jpg" class="img-fluid rounded"/>
          </div>    
          <div class="col-md-3">
            <img src="/assets/images/Noservices/1.jpg" class="img-fluid rounded"/>
          </div>    
          <div class="col-md-3">
            <img src="/assets/images/Noservices/1.jpg" class="img-fluid rounded"/>
          </div>    
        </div>
        <style>
          #noservices .container h1 {
            color: #ff8000;
            margin-top: 40px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            text-transform: uppercase;
            font-size: 50px;
            font-weight: 800;
            text-decoration: underline;
          }
          #noservices .container .row {
            margin-top: 60px;
          }
        </style>
      </div>
      <style>
        #noservices {
          background-color: black;
          color: white;
          min-height: 87vh;
        }
        #noservices .container .row .col-md-3 {
          margin-bottom: 50px;
        }
        #noservices .container .row .col-md-3 img {
          transition: 0.2s ease-in-out;
        }
        #noservices .container .row .col-md-3:hover img {
          transform: scale(1.1);
        }
      </style>
    </section>
  </body>
</html>

<?php include('layouts/footer.php') ?>;
