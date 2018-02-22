<!-- Defines the doctype as HTML -->
<!doctype html>
<!-- Defines the HTML documents language as English -->
<html lang="en">
<!-- Opening head tag -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="A site built by Tyler Clauson using Bootstrap v4 framework">
<meta name="author" content="Tyler Clauson">
<link rel="icon" href="../../../../favicon.ico">

<title>tylerclauson.com | Sandbox Canvas</title>

<!-- Bootstrap core CSS CDN-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Custom CSS -->
<link rel="stylesheet" href="https://sandbox-tclauson2014360962.codeanyapp.com/assets/css/home.css">
<!-- Closing head tag ./ -->
</head>
  
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <?php include '/home/cabox/workspace/assets/php/includes/nav.php'; ?>
    </nav>
  <header></header>
<section id="content">
<div class="container">
  <div class="row h-100">
    <div class="col-lg-12 my-auto">
      <canvas id="gameCanvas"></canvas>
       <script>
    // Game engine creation //
    var canvas = document.getElementById("gameCanvas");
    var ctx = canvas.getContext('2d');
     
         if (canvas.getContext) {
           var ctx = canvas.getContext('2d');
            // drawing code here
       } else {
          canvas.innerHTML = "Your browser does not support HTML canvas."
      // canvas-unsupported code here
      }
     
     canvas.width = window.innerWidth;
     canvas.height = window.innerHeight;
     document.body.appendChild(canvas);
     
    //fullscreen//
     function fullscreen () {
       if(canvas.webkitRequestFullScreen) {
         canvas.webkitRequestFullScreen();
       }
       else {
         canvas.mozRequestFullScreen();
       }
     }
     canvas.addEventListener("click", fullscreen)
     document.body.onload = function (){
       colorRect(0,0, canvas.width, canvas.height, 'fireBrick');
       colorRect(110, 10, 50, 50, 'red');
       colorRect(10, 10, 100, 100, 'green');
     }
     //Draw Functions
     function colorRect(leftX,topY, width, height, drawColor) {
        ctx.fillStyle = drawColor;
        ctx.fillRect(leftX, topY, width, height);  
    }
      function colorCircle(centerX, centerY, radius, drawColor) {
        ctx.fillStyle = 'drawColor';
        ctx.beginPath();
        ctx.arc(centerX, centerY, radius, 0, Math.PI*2, true);
        ctx.fill();    
    }  
  </script>
    </div>
  </div>
  </div>
</section>
<footer>

</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>