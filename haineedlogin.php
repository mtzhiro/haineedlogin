<?php
/*
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


ini_set( 'error_reporting', E_ERROR );
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta name="content-language" content="ja">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Style-Type" content="text/css; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="http://hirosato.info/wp-content/uploads/2018/09/cropped-t4510logo-s1-300x233-1-32x32.png" sizes="32x32" type="image/x-icon" />
<link rel="icon" href="http://hirosato.info/wp-content/uploads/2018/09/cropped-t4510logo-s1-300x233-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="http://hirosato.info/wp-content/uploads/2018/09/cropped-t4510logo-s1-300x233-1-180x180.png" />
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="content-language" content="ja">
<meta name="robots"  content="index,follow">
<!--meta http-equiv="refresh" content="0;url=http://" /-->
<meta name="keyword" content="">
<meta name="description" content="">
<meta name="author" copyright="" content="">
<meta name="reply-to" content="">
<link rev="made" href="mailto:">
<link rel="next" href="http://">
<link rel="shortcut icon" href="http://amongchat.com/wp-content/uploads/2018/09/cropped-amongchat1-1.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="http://amongchat.com/wp-content/uploads/2018/09/cropped-amongchat1-1.png" />
<style type="text/css">
  h1 { width: 95%; font-size: 20pt; color: black; background-color: #bbbbbb; border: 1px #000000 solid; padding: 20px 15px 15px 15px; filter: alpha(finishOpacity=100, finishX=0, finishY=50, opacity=10, startX=0, startY=0, style=1); }

  h2 { width: 95%; font-size: 17pt; color: black; background-color: #bbbbbb; border: 1px #000000 solid; padding: 18px 15px 12px 15px; filter: alpha(finishOpacity=100, finishX=0, finishY=50, opacity=10, startX=0, startY=0, style=1); }

  h3 { width: 95%; font-size: 14pt; color: black; background-color: #bbbbbb; border: 1px #000000 solid; padding: 15px 15px 10px 15px; filter: alpha(finishOpacity=100, finishX=0, finishY=50, opacity=10, startX=0, startY=0, style=1); }

  h4  { width: 95%; font-size: 12pt; color: black; background-color: #bbbbbb; border: 1px #000000 solid; padding: 15px 15px 10px 15px; filter: alpha(finishOpacity=100, finishX=0, finishY=50, opacity=10, startX=0, startY=0, style=1); }

    table, tr, th, td { border: 1px #b0b0b0 solid; padding: 10px; border-collapse: collapse; }

</style>

<script type="" text="" javascript="">
<!--
//-->
</script>
<title>haineedlogin</title>
</head>
<body>
<form method="post" action="index.php" name="forma">

<?php
date_default_timezone_set('Asia/Tokyo');

//  echo "key=" . $_REQUEST['amachakey'] .  ",user=" . $_REQUEST['amachauser'] .  ",email=" . $_REQUEST['amachaemail'] . "\n";

$uflag = 0;
$kflag = 0;
$eflag = 0;
if (isset($_REQUEST["amachauser"]) ) {
  $uflag = 2;
}
if (isset($_REQUEST["amachakey"]) ) {
  $kflag = 2;
}
if (isset($_REQUEST["amachaemail"]) ) {
  $eflag = 2;
}
if (isset($_COOKIE["amachauser"])) {
  $amachauser = $_COOKIE["amachauser"];
} else if (isset($_REQUEST["amachauser"]) ) {
  $amachauser = $_REQUEST["amachauser"];
  if (isset($_COOKIE["amachauser"]) && $uflag > 1) {
    echo '<input type="hidden" name="amachauser" value="' . $_COOKIE['amachauser'] . '" />';
    $uflag = 1;
  }
  if (isset($_REQUEST["amachauser"]) && $uflag > 1) {
    echo '<input type="hidden" name="amachauser" value="' . $_REQUEST['amachauser'] . '" />';
    $uflag = 1;
  }
  if ($kflag == 0) {
    echo ' pass: <input type="password" name="amachakey" size="10" /><br />';
    $kflag = 1;
  }
  if ($eflag == 0) {
    echo ' email: <input type="text" name="amachaemail" size="20" />';
    $eflag = 1;
  }
} else{
  if (isset($_COOKIE["amachauser"]) && $uflag > 1) {
    echo '<input type="hidden" name="amachauser" value="' . $_COOKIE['amachauser'] . '" />';
    $uflag = 1;
  }
  if (isset($_REQUEST["amachauser"]) && $uflag > 1) {
    echo '<input type="hidden" name="amachauser" value="' . $_REQUEST['amachauser'] . '" />';
    $uflag = 1;
  }
  if ($kflag == 0) {
    echo ' pass: <input type="password" name="amachakey" size="10" /><br />';
    $kflag = 1;
  }
  if ($eflag == 0) {
    echo ' email: <input type="text" name="amachaemail" size="20" />';
    $eflag = 1;
  }
}
if (isset($_COOKIE["amachakey"]) ) {
  $amachakey = $_COOKIE["amachakey"];
} else if (isset($_REQUEST["amachakey"]) ) {
  $amachakey = $_REQUEST["amachakey"];

  //--case param set already ---------------------------
  if (isset($_REQUEST["amachauser"]) ) {
    $amachauser = $_REQUEST["amachauser"];
    echo '<input type="hidden" name="amachauser" value="' . $_REQUEST['amachauser'] . '" />';
    $uflag = 1;
  }
  if (isset($_REQUEST["amachaemail"]) ) {
    $amachauemail = $_REQUEST["amachaemail"];
    echo '<input type="hidden" name="amachaemail" value="' . $_REQUEST['amachaemail'] . '" />';
    $eflag = 1;
  }
  //--end case param set already -----------------------

  if ($uflag == 0) {
    echo ' user: <input type="text" name="amachauser" size="10" />';
    $uflag = 1;
  }
  if (isset($_COOKIE["amachakey"]) && $kflag > 1) {
    echo '<input type="hidden" name="amachakey" value="' . $_COOKIE['amachakey'] . '" />';
    $kflag = 1;
  }
  if (isset($_REQUEST["amachakey"]) && $kflag > 1) {
    echo '<input type="hidden" name="amachakey" value="' . $_REQUEST['amachakey'] . '" />';
    $kflag = 1;
  }
  if ($eflag == 0) {
    echo ' email: <input type="text" name="amachaemail" size="20" />';
    $eflag = 1;
  }
} else {

  //--case param set already ---------------------------
  if (isset($_REQUEST["amachauser"]) ) {
    $amachauser = $_REQUEST["amachauser"];
    echo '<input type="hidden" name="amachauser" value="' . $_REQUEST['amachauser'] . '" />';
    $uflag = 1;
  }
  if (isset($_REQUEST["amachaemail"]) ) {
    $amachauemail = $_REQUEST["amachaemail"];
    echo '<input type="hidden" name="amachaemail" value="' . $_REQUEST['amachaemail'] . '" />';
    $eflag = 1;
  }
  //--end case param set already -----------------------

  if ($uflag == 0) {
    echo ' user: <input type="text" name="amachauser" size="10" />';
    $uflag = 1;
  }
  if (isset($_COOKIE["amachakey"]) && $kflag > 1) {
    echo '<input type="hidden" name="amachakey" value="' . $_COOKIE['amachakey'] . '" />';
    $kflag = 1;
  }
  if (isset($_REQUEST["amachakey"]) && $kflag > 1) {
    echo '<input type="hidden" name="amachakey" value="' . $_REQUEST['amachakey'] . '" />';
    $kflag = 1;
  }
  if ($eflag == 0) {
    echo ' email: <input type="text" name="amachaemail" size="20" />';
    $eflag = 1;
  }
}
if (isset($_COOKIE["amachaemail"]) ) {
  $amachaemail = $_COOKIE["amachaemail"];
} else if (isset($_REQUEST["amachaemail"]) ) {
  $amachaemail = $_REQUEST["amachaemail"];
  if ($uflag == 0) {
    echo ' user: <input type="text" name="amachauser" size="10" />';
    $uflag = 1;
  }
  if ($kflag == 0) {
    echo ' pass: <input type="password" name="amachakey" size="10" /><br />';
    $kflag = 1;
  }
  if (isset($_COOKIE["amachaemail"]) && $eflag > 1) {
    echo '<input type="hidden" name="amachaemail" value="' . $_COOKIE['amachaemail'] . '" />';
    $eflag = 1;
  }
  if (isset($_REQUEST["amachaemail"]) && $eflag > 1) {
    echo '<input type="hidden" name="amachaemail" value="' . $_REQUEST['amachaemail'] . '" />';
    $eflag = 1;
  }
} else {
  if ($uflag == 0) {
    echo ' user: <input type="text" name="amachauser" size="10" />';
    $uflag = 1;
  }
  if ($kflag == 0) {
    echo ' pass: <input type="password" name="amachakey" size="10" /><br />';
    $kflag = 1;
  }
  if (isset($_COOKIE["amachaemail"]) && $eflag > 1) {
    echo '<input type="hidden" name="amachaemail" value="' . $_COOKIE['amachaemail'] . '" />';
    $eflag = 1;
  }
  if (isset($_REQUEST["amachaemail"]) && $eflag > 1) {
    echo '<input type="hidden" name="amachaemail" value="' . $_REQUEST['amachaemail'] . '" />';
    $eflag = 1;
  }
}
  if (isset($_COOKIE["amachauser"]) || isset($_REQUEST["amachauser"]) ) { // if no COOKIE or no REQUEST then button
?>
<?php
  } else { // if no COOKIE or no REQUEST then button
?>
<br />
<input type="submit" name="kikisub22" id="ikikisubf22" value="login or subscribe" /><br />
email is for registration and never public. | emailは登録のみに必要で公開されません <br />
</form>
<?php
  } // if no COOKIE or no REQUEST then button
?>

<?php


  //islogin
  $lbpas = 'xxxxxxxxxx';
if ( ( isset($_COOKIE["amachauser"]) && isset($_COOKIE["amachakey"]) ) || (isset($_REQUEST["amachauser"]) && isset($_REQUEST["amachakey"]) ) ) { //islogin1
  if ( $_COOKIE["amachakey"] == $lbpas  || $_REQUEST["amachakey"] == $lbpas ) { //islogin2
    echo '<div style="text-align: right;">Welcome ' . $amachauser . '/'  . substr(md5($amachaemail), 0, 5) . '' . '<br /></div>' . "\n";
ini_set( 'error_reporting', E_ERROR );
  $testnum = 0;
$exptime = 60 * 60 * 24 * 365;
if (isset($_COOKIE["amachauser"])) {
  $amachauser = $_COOKIE["amachauser"];
  $amachakey = $_COOKIE["amachakey"];
  $amachaemail = $_COOKIE["amachaemail"];
} else if (isset($_REQUEST["amachauser"])){
  $amachauser = $_REQUEST["amachauser"];
  $amachakey = $_REQUEST["amachakey"];
  $amachaemail = $_REQUEST["amachaemail"];
} else {
  $amachauser = '';
}
?>




<div><!-- main wrapper -->




<h1>haineedlogin</h1>












</div><!-- end main wrapper -->









<?php
   } //islogin2
 } //islogin1
//islogin



?>
</body>
</html>
