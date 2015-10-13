<?php 
$pageID = strtolower($pageTitle); 
$userName = "";
?>


<!DOCTYPE html>
<html>
  <head>
    <!-- Adding the Page Title from the index, about, or contact pages -->
    <title><?php echo $pageTitle; ?> | Your Name Here</title>

    <!-- Tell the browser to render the view width correctly -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link our stylesheet -->
    <link rel="stylesheet" href="style.css">
  </head>

  <body id="<?php echo $pageID; ?>">

  <header>
    <div class="row">
       <a href="index.php"><img class="logo" src="img/logo.png"/></a>

        <?php include 'nav.php'; ?>

    </div>
  </header> 

  