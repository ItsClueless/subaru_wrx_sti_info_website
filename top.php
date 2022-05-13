<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The Beast Of Rallying: Subaru's WRX/STI</title>
    <meta name="author" content="Dwayne Kirby">
    <meta name="description" content="Subaru's WRX/STI is one of their most successful car makes. The WRX has a histroy behind it and its legacy in rallying, and the coming future of the car and Subaru as a brand">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
    <link rel="stylesheet" media="(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time(); ?>" type="text/css">
    <link rel="stylesheet" media="(max-width: 600px)" href="css/custom-phone.css?version=<?php print time(); ?>" type="text/css">
</head>

<?php
print '<body id="' . $pathParts['filename'] . '">';
print '<!-- #################    Body element  ################# -->';
include 'connect-DB.php';
include 'header.php';
include 'nav.php';
?>