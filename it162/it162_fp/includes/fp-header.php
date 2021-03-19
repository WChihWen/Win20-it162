<?php include 'fp-config.php'?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title><?=$title?></title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" , initial-scale=1 />

    <meta charset="utf-8" />
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/fp-nav.css" />
    <link rel="stylesheet" href="css/fp.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/hybrid.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">   
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js?2021031802" type="text/javascript"></script>
    <script src="js/highlight.min.js" type="text/javascript"></script>
    </head> 
    <body>
       <main>
            <header>
                <h1><a href="index.php"><i class="logo fa <?=$logo?>" <?=$logo_color?>></i> Chih Wen's blog</a></h1>
                
                <nav id="cssmenu">
                    <ul>
                        <?=makeLinks($nav1)?> 
                    </ul>
                </nav>
            </header>
        
            <h2 class="pageID"><?=$PageID?></h2>
        
<!--  header end here  -->

