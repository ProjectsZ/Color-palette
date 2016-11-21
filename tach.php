
<?php require_once("resources/config.php");?>

   
<!DOCTYPE html>
<html lang="es" ng-app="app">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Color</title>
    <!-- CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/front.css">
    <link rel="stylesheet" href="css/color-palettes.css">
   
</head>

<body>
<div>
    <?  get_ColorSwatches(); ?>
</div>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
   <!-- <script src="assets/js/angular.min.js"></script>-->
    <script src="assets/js/affix.js"></script>
    
    <script src="js/script.js"></script>
    
    
</body>

</html>
