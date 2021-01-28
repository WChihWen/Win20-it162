<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title><?=$title?></title>
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
            <h1><a href="index.php?pg=index"><i class="logo fa <?=$logo?><?=$logo_color?>"></i> ( Chih Wen Wang's SCC IT162 Portal</a></h1>
            <nav class="topnav" id="myTopnav">
            <?=makeLinks($nav1)?>
            <!-- START COMMENT OUT NAV      
            <a href="index.php" class="active">Welcome</a>
            <a href="aia.php" >AIA</a>
            <a href="big/index.php">BIG</a>
            <a href="flowchart.php" >Flowchart</a>
            <a href="fp/index.php">Final Project</a>
            <a href="contactme.php?pg=contactme">Contact Chih Wen</a>
            END COMMENT OUT NAV -->      
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </nav>
        </header>
        <div class="wrapper">
            <h2 class="pageID"><?=$PageID?></h2>
        </div>
<!--  header end here  -->

