
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login form </title>
  <!-- CORE CSS-->
  
  <link rel="stylesheet" href="materialize/css/materialize.min.css">

<style type="text/css">
html,
body {
    height: 100%;
	background:url('imageedit_1_3702034004.jpg');
	background-size:cover;
	background-attachment:fixed;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
  margin: 0 !important;
}
</style>
  
</head>


<body>

<a href="docfinder.php"><img src="images/DoctorFinder_logo_final.png"></a>
  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" method="post" action="login.php">
        <div class="row">
          <div class="input-field col s12 center">
           
            <p class="center login-form-text"><h3>Login</h3> </p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="username" type="text" name="username" value="password">
            <label for="username" data-error="wrong" data-success="right" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="password" value="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <?php
        $key=$_GET['key'];
        session_start();
         if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED']==1){
    header('location:docfinder.php');
}
        else{
        echo '<div class="row">
          <div class="input-field col s12">
            <button type="submit" name="submit" value="'.$key.'" class="btn waves-effect waves-light col s12">Login</button>
          </div>
        </div>';
            session_destroy();}
            ?>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="signup.php">SignUp</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="forgot-password.html">Forgot password?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>


  <center>
    <!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Post Page - Responsive -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-5104998679826243"
     data-ad-slot="3470684978"></ins>
<!--<script>
(adsbygoogle = window.adsbygoogle || []).push({});-->
</script>
</center>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
 <script type="text/javascript" src="jquery/jquery.min.js"></script>
  <!--materialize js-->
  <script src="materialize/js/materialize.min.js"></script>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27820211-3', 'auto');
  ga('send', 'pageview');

</script><!--<script src="//load.sumome.com/" data-sumo-site-id="1cf2c3d548b156a57050bff06ee37284c67d0884b086bebd8e957ca1c34e99a1" async="async"></script>


   
  </footer>-->
</body>

</html>