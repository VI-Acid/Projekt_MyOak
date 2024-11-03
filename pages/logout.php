<?php
session_start();
session_unset();
session_destroy();

?>

<h1>Your are logged out now!</h1>
<p>Go back to <a href="/Projekt_MyOak/pages/login.php">Go back</a> login</p>

<?php
// Weiterleitung zur Login-Seite
header("Location: /Projekt_MyOak/pages/login.php");
exit(); 
?>