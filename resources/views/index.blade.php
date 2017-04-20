<!doctype html>
<html lang="en">
 <head> 
  <!-- Basic Page Needs
    ================================================== --> 
  <meta charset="utf-8"> 
  <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]--> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>{{$index->myProfile}}</title> 
  <meta name="description" content="Your Description Here"> 
  <meta name="keywords" content="bootstrap themes, portfolio, responsive theme"> 
  <meta name="author" content="ThemeForces.Com"> 
  <!-- Favicons
    ================================================== --> 
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> 
  <link rel="apple-touch-icon" href="../png/apple-touch-icon.png"> 
  <link rel="apple-touch-icon" sizes="72x72" href="../png/apple-touch-icon-72x72.png"> 
  <link rel="apple-touch-icon" sizes="114x114" href="../png/apple-touch-icon-114x114.png"> 
  <!-- Bootstrap --> 
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css"> 
  <!-- Stylesheet
    ================================================== --> 
  <link rel="stylesheet" type="text/css" href="../css/style.css"> 
  <link rel="stylesheet" type="text/css" href="../css/responsive.css"> 
  <script type="text/javascript" src="../js/modernizr.custom.js"></script> 
  <link href="http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300" rel="stylesheet" type="text/css"> 
  <link href="http://fonts.googleapis.com/css?family=Playball" rel="stylesheet" type="text/css"> 
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
 </head> 
 <body> 
  <div id="tf-home"> 
{!!$index->home!!}
  </div> 
  <div id="tf-service"> 
  {!!$index->service!!}
  </div> 
  <div id="tf-portfolio"> 
     {!!$index->portfolio!!}
  </div> 
  <div id="tf-about"> 
  {!!$index->about!!}
  </div> 
  <div id="tf-why-me"> 
   {!!$index->whyme!!}
  </div> 
  <div id="tf-contact"> 
      <form id="contact" method="POST" action="/contact" accept-charset="UTF-8">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
      
     {!!$index->contact!!}
      </form> 
  </div> 
  <nav id="tf-footer"> 
     {!!$index->footer!!}
  </nav> 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="../js/jquery.min.js"></script> 
  <script type="text/javascript" src="../js/jquery.1.11.1.js"></script> 
  <!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script type="text/javascript" src="../js/bootstrap.js"></script> 
  <!-- Javascripts
    ================================================== --> 
  <script type="text/javascript" src="../js/main.js"></script>  
 </body>
</html>