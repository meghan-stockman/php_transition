<?php 
$pageID = strtolower($pageTitle); 
$userName = 'Meghan';
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
    <div class "row clearfix">
       <a href="index.php"><img class="mustache-logo" src="images/generic-logo.gif" /></a>

        <?php include 'nav.php'; ?>

    </div>
  </header> 

  