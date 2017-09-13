<?php include('php/quotegen.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
  </head>

  <body>
    <div>
      <h3>Brian Worthington</h3>
      <img src="/images/myprofile.jpg" />
    </div>
    <div class="aboutMe">
      <h3>About Me</h3>
      <p>Hi there!  I'm a native of Boston, Massachussets.
      I live on the North shore with my wife Kara and daughter Amelia.
      I'm currently employed at Oracle, Inc, where I work as a Quality Engineer,
      testing front end and back end applications.
      I started learning about web development about 2 years ago,
      and I'm looking foward to learning a great deal about dynamic web applications in this course!</p>
    </div>
    <div class="quote">
      <h3>Random Quote</h3>
      <p><?=$quotes[$quote].'<br><br> -'.$quote?></p>
    </div>

  </body>
</html>
