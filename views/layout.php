<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <base href="http://localhost/jo-florist/"></base>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--  <link rel="shortcut icon" href="home/dist/img/icon.png"> -->


  <!-- resources login -->
<!--   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="resources/css/login.css"> -->


  <!-- resources homeAdmin -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width , initial-scale=1.0">
  <!-- <link href="resources/css/style.css" type="text/css" rel="stylesheet"> -->
  <link rel="stylesheet" href="resources/css/bootstrap.min.css">
  <script src="resources/js/jquery-3.2.1.min.js"></script>
  <script src="resources/js/bootstrap.min.js"></script>

<!--   <title>jo-florist jember</title>
 -->


    <link rel="icon" href="resources/images/favicon.png">


</head>

<body>

  <?php require_once('routes.php') ?>


 <!--  <div class="footer-custom">
    <div class="container">


    </div>
  </div> -->












  <script>
      $(document).ready(function(){
          // Add scrollspy to <body>
          $('body').scrollspy({target: ".navbar", offset: 50});

          // Add smooth scrolling on all links inside the navbar
          $("#myNavbar a").on('click', function(event) {
              // Make sure this.hash has a value before overriding default behavior
              if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();

                  // Store hash
                  var hash = this.hash;

                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                      scrollTop: $(hash).offset().top
                  }, 800, function(){

                      // Add hash (#) to URL when done scrolling (default click behavior)
                      window.location.hash = hash;
                  });
              }  // End if
          });
      });
  </script>
</body>

</html>
