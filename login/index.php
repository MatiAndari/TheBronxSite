<?php
    require ('steamauth/steamauth.php');
    unset($_SESSION['steam_uptodate']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign-In-Page</title>
</head>
<body>
<?php
if(!isset($_SESSION['steamid'])) {

    echo "welcome guest! please login<br><br>";
    loginbutton(); //login buttonhttps://github.com/YEET200/Login-Form-with-steam-google-and-Facebook/security
    
}  else {
    //working on redirect
}    
?>
