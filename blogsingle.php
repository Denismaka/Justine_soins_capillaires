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
    <section class="blogsingle" id="blogsingle">
      <div class="container">
        <div class="section-heading">
          <h1>blog</h1>
        </div>
        <div class="row">
          <div class="col-md-4">
            <img src="/assets/images//Blog/11.webp" class="img-fluid rounded"/>
          </div>
          <div class="col-md-4">
            <img src="/assets/images//Blog/2.jpeg" class="img-fluid rounded"/>
          </div>
          <div class="col-md-4">
            <img src="/assets/images//Blog/3.webp" class="img-fluid rounded"/>
          </div>
          <div class="col-md-4">
            <img src="/assets/images//Blog/7.webp" class="img-fluid rounded"/>
          </div>
          <div class="col-md-4">
            <img src="/assets/images//Blog/5.webp" class="img-fluid rounded"/>
          </div>
          <div class="col-md-4">
            <img src="/assets/images//Blog/6.webp" class="img-fluid rounded"/>
          </div>
        </div>
        <style>
          #blogsingle .container h1 {
            color: #ff8000;
            margin-top: 40px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            text-transform: uppercase;
            font-size: 70px;
            font-weight: 800;
            text-decoration: underline;
          }
          #blogsingle .container .row {
            margin-top: 60px;
          }
        </style>
      </div>
      <style>
        #blogsingle {
          background-color: black;
          color: white;
          min-height: 87vh;
        }
        #blogsingle .container .row .col-md-4 {
          margin-bottom: 50px;
        }
        #blogsingle .container .row .col-md-4 img {
          transition: 0.2s ease-in-out;
        }
        #blogsingle .container .row .col-md-4:hover img {
          transform: scale(1.1);
        }
      </style>
    </section>
  </body>
</html>

<?php include('layouts/footer.php') ?>;
