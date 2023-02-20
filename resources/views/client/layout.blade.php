<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>E-Shop</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href={{url("assets/css/bootstrap.min.css")}}>
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href={{url("assets/css/style.css")}}>
        <!-- Responsive-->
        <link rel="stylesheet" href={{url("assets/css/responsive.css")}}>
        <!-- fevicon -->
        <link rel="icon" href={{url("/favicon.ico")}} type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href={{url("assets/css/jquery.mCustomScrollbar.min.css")}}>
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
        <!-- font awesome -->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--  -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- owl stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href={{url("css/owl.carousel.min.css")}}>
        <link rel="stylesoeet" href={{url("css/owl.theme.default.min.css")}}>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    </head>

<body>




@yield('content');








      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src={{ url("/assets/images/logo.png")}} width="120px" height="60px"></a></div>
            <div class="input_bt">
               <span type="text" class="mail_bt" name="Your Email">
                belhadii.oussama@gmail.com
               </span>
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Best Sellers</a></li>
                  <li><a href="#">Gift Ideas</a></li>
                  <li><a href="#">New Releases</a></li>
                  <li><a href="#">Today's Deals</a></li>
                  <li><a href="#">Customer Service</a></li>
               </ul>
            </div>
            <div class="location_main">Help Line  Number : <a href="#">+1 1800 1200 1200</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2023 All Rights Reserved.</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src={{ url('assets/js/jquery.min.js')}}></script>
      <script src={{ url('assets/js/popper.min.js')}}></script>
      <script src={{ url('assets/js/bootstrap.bundle.min.js')}}></script>
      <script src={{ url('assets/js/jquery-3.0.0.min.js')}}></script>
      <script src={{ url('assets/js/plugin.js')}}></script>
      <!-- sidebar -->
      <script src={{ url('assets/js/jquery.mCustomScrollbar.concat.min.js')}}></script>
      <script src={{ url('assets/js/custom.js')}}></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }

         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>
