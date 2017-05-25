?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'User.php';

if(isset($_GET['code'])){
    $gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
    $gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
    //Get user profile data from google
    $gpUserProfile = $google_oauthV2->userinfo->get();
    
    //Initialize User class
    $user = new User();
    
    //Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);
    
    //Storing user data into session
    $_SESSION['userData'] = $userData;
    
    //Render facebook profile data
    if(!empty($userData)){
        $output = '<h1>Google+ Profile Details </h1>';
        $output .= '<img src="'.$userData['picture'].'" width="300" height="220">';
        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Google';
        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
        $output .= '<br/>Logout from <a href="logout.php">Google</a>'; 
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} else {
    $authUrl = $gClient->createAuthUrl();
    $output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="imagenes/glogin.png" alt=""/></a>';
}
?>


<HTML lang"en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <meta name="viewport" content="wicth=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/Estlios.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300'>



</head>
<body>
    <header>
        <div class="container">
            <div class="col-xs-12 col-md-2" align="center"><img src="imagenes/escudounimag.png"style="float: left;" width="120" height="120"></div>
            <div class="col-xs-12 col-md-8" align="center"> <h1><strong>STUMAR</strong></h1></div>
        </div>
    </header>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es&callback=iniciar"></script>
    
    
  
    <div class="container">

        <div class="col-xs-12 col-md-5" id="login">

            <h1><strong>Bienvenido.</strong> Por favor logearse.</h1>
            <br>
            <form action="InicioWEB.html" method="get">

                <fieldset>

                    <p><input type="text" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "></p> <!-- JS because of IE support; better: placeholder="Username" -->

                    <p><input type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "></p> <!-- JS because of IE support; better: placeholder="Password" -->

                    <br>
                    <input type="submit"  value="Login">

                </fieldset>

            </form>

            <p><span class="btn-round">or</span></p>

            <p>
               <div align="center"><?php echo $output; ?></div>

            </p>


        </div> <!-- end login -->  
        <div class="col-xs-12 col-md-1"  width="130" height="1000">
        </div>
        <div class="col-xs-12 col-md-7 .img-responsive" id="map" ><br><br>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:500px;width:800px;'><div id='gmap_canvas' style='height:500px;width:800px;'></div><div><small><a href="http://embedgooglemaps.com">embed google map</a></small></div><div><small><a href="http://directorioweblol.com">directorio de enlaces</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(11.2264541,-74.18707030000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(11.2264541,-74.18707030000002)});infowindow = new google.maps.InfoWindow({content:'<strong>Cafeteria Central</strong><br>Universidad del Magdalena<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
  
           

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</HTML>
