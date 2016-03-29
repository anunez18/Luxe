<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Contact Form'; 
        $to = 'anunez@svbllc.com'; 
        $subject = 'Message from Contact';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! We will be in touch with you soon.</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LUXE/GROUPE</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/luxe-style.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
          <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Luxe Groupe</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right masthead-nav">
          
          <li><a href="#about">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Testimonials</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
  </div>
</nav>
    <!-- Start top-section -->
<section id="top">

    <div class="top-wrapper parallax-image" data-bottom-top="background-position: center 0%"
     data-top-bottom="background-position: center 100%;" data-smooth-scrolling="on">

      <div class="container masthead">
          <div class="row">
            <div class="col-lg-6 col-md-8">
              <h1>THE JOURNEY STARTS HERE</h1>
                <p>Our team of highly motivated marketing gurus, designers and social media experts know how to get the job done. Effeficency and precision are what we aim for. Never settle for less. </p>
                <br>
                <a href="" class="lx-btn">Read More</a>
            </div>
          </div>
        </div>
        <!-- Masthead end -->

      </div>
      <!-- Top Wrapper end -->
</section>
<section id="who">
   <div class="grid">
     <div class="row">
        <div class="grid item">
            <div class="col-lg-5 col-lg-offset-2 col-md-5 col-md-offset-2">
                <h1>Who we are</h1>
            </div>
        </div>
        <div class="grid item">
            <div class="col-md-10 col-md-offset-3 col-sm-6">
              <h2>Luxe Groupe</h2>
                <p>We are a marketing, branding, content strategy, social media strategy consulting group working with start-ups.</p>
              <h5>FROM NEW YORK, NY</h5>
            </div>
        </div>
     </div>
   </div>
</section>


 
    <div class="sec-name">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
    </div>
 <section class="Services">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
          <h2>BRANDING</h2>
            <p>Our team is creative and works closely with each client to produce viral successes, educational content, and headline-grabbing news. Every prospective client undergoes this process to ensure we're a fit for their brand. This is where we excel so make sure you get in touch!</p>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h2>MARKETING</h2>
          <p>Our team is creative and works closely with each client to produce viral successes, educational content, and headline-grabbing news. Every prospective client undergoes this process to ensure we're a fit for their brand. This is where we excel so make sure you get in touch!</p>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h2>CONTENT STRATEGY</h2>
          <p>Our team is creative and works closely with each client to produce viral successes, educational content, and headline-grabbing news. Every prospective client undergoes this process to ensure we're a fit for their brand. This is where we excel so make sure you get in touch!</p>
      </div>
    </div>
    <!-- row end -->
    <div class="row servRow">
       <div class="col-md-3">
          <h2>SOCIAL MEDIA STRATEGY</h2>
            <p>Our team is creative and works closely with each client to produce viral successes, educational content, and headline-grabbing news. Every prospective client undergoes this process to ensure we're a fit for their brand. This is where we excel so make sure you get in touch!</p>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h2>WEB DESIGN &amp; DEVELOPMENT</h2>
          <p>Our team is creative and works closely with each client to produce viral successes, educational content, and headline-grabbing news. Every prospective client undergoes this process to ensure we're a fit for their brand. This is where we excel so make sure you get in touch!</p>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <h2>SEARCH OPTIMIZATION</h2>
          <p>Our team is creative and works closely with each client to produce viral successes, educational content, and headline-grabbing news. Every prospective client undergoes this process to ensure we're a fit for their brand. This is where we excel so make sure you get in touch!</p>
      </div>
    </div>
  </div>

</section>
 
    <div class="sec-name">
      <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2>Testimonials</h2>
            </div>
          </div>
        </div>
    </div>   

    <section id="who">
   <div class="container-fluid">
     <div class="row">
     <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 rt">
            <div class="col-md-6 col-md-offset-4 col-sm-6 col-xs-7">
              <h2>Luxe Groupe</h2>
                <p>We are a marketing, branding, content strategy, social media strategy consulting group working with start-ups.</p>
              <h5>FROM NEW YORK, NY</h5>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 who-bkg">
            
        </div>
        
     </div>
   </div>
</section>
<div class="sec-name ">
   <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2>Contact</h2>
            </div>
          </div>
        </div>
</div>
  <section class="pre-foot parallax-image" data-bottom-top="background-position: center 0%"
     data-top-bottom="background-position: center 100%;" data-smooth-scrolling="on">
    <div class="container">
      <div class="row">
        <div class="col-md-12 lx">
          <form class="form-horizontal lx-form" role="form" method="post" action="index.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="First &amp; Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
            <?php echo "<p class='text-danger'>$errHuman</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>    
        </div>
    </div>
</form> 
        </div>
      </div>
    </div>
  </section>
  <div class="sec-name ">
   <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2>We're social</h2>
            </div>
          </div>
        </div>
</div>
   <footer>
     <div class="container">
       <div class="row">
         <div class="col-md-12 text-center">
           <img src="img/Luxe-logo-lg.png" alt="Luxe Groupe Logo">
         </div>
       </div>
       <div class="row servRow text-center">
         <div class="col-md-6 col-md-offset-3">
           <ul class="list-inline list-unstyled">
            <li><a href="#about">About</a></li>
              <li><a href="#">Services</a></li>
                <li><a href="#">Testimonials</a></li>
                  <li><a href="#contact">Contact</a></li>
           </ul>
           <br>
           <h5>&copy;Copyright 2015 Luxe Groupe Inc. All Rights Reserved.</h5>
         </div>
       </div>
     </div>
   </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/skrollr.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min"></script>
        <script src="js/masonry.pkgd.min.js"></script>
      <script type="text/javascript">
      $(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});
   if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
    skrollr.init({
        forceHeight: false
    });
}
$('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: 50%
});
    </script>

  </body>
</html>