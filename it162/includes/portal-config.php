<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Chih Wen Wang";

//prevents data from being sent early
ob_start();


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;
$logo_color = '';
switch(THIS_PAGE){
    case 'index.php':
        $title = "Chih Wen Wang's IT162 Portal Website";
        $logo = 'fa-home';
        $PageID = '  Welcome';
        break;
    case 'aia.php':
        $title = "Chih Wen Wang's IT162 AIA Page";
        $logo = 'fa-table';
        $PageID = "  Chih Wen Wang's Final Project Audience, Issues and Approach Research";
        $logo_color = ' style="color:#00f"';
        break;
    case 'flowchart.php':
            $title = "Chih Wen Wang's IT162 Flowchart Page";
            $logo = 'fa-line-chart';
            $PageID = " Chih Wen Wang's Flowchart";
            $logo_color = ' style="color:#0f3"';
            break;
    case 'contactme.php':
        $title = "Chih Wen Wang's IT162 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = '  Contact Chih Wen Wang';
        $logo_color = ' style="color:#0f0"';
        break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = '  Welcome';
        break;
   }



/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE){//selected page - add class reference
	    	$myReturn .= '<a class="active" href="' . $url . '">' . $text . '</a>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<a href="' . $url . '">' . $text . '</a>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


?>
