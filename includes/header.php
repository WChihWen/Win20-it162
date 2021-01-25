<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Chih Wen Wang's IT162 Portal Website</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" , initial-scale=1 />

  <meta charset="utf-8" />
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/tables.css" />
 </head> 
 <body>
     <header>
     <h1><a href="index.php"><i class="logo fa fa-home"></i> Chih Wen Wang's SCC IT162 Portal</a></h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.php?pg=index" class="<?php if ($_REQUEST['pg'] == "index" || empty($_REQUEST['pg'])) {echo 'active';} else {echo '';} ; ?>">Welcome</a>
       <a href="aia.php?pg=aia" class="<?php if ($_REQUEST['pg'] == "aia") echo 'active'; ?>">AIA</a>
       <a href="big/index.php">BIG</a>
       <a href="flowchart.php?pg=flowchart" class="<?php if ($_REQUEST['pg'] == "flowchart") echo 'active'; ?>">Flowchart</a>
       <a href="fp/index.php">Final Project</a>
       <a href="contactme.php?pg=contactme" class="<?php if ($_REQUEST['pg'] == "contactme") echo 'active'; ?>">Contact Chih Wen</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
<!--  header end here  -->