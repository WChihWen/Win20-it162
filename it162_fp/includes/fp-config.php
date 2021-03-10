<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/
$nav1['index.php'] = "Home";

$nav1['#language'] = "Language";
$nav1['java.php'] = "Java";
$nav1['python.php'] = "Python";

$nav1['#tutorial'] = "Tutorial";
$nav1['mean.php'] = "MEAN Stack";

$nav1['practice.php'] = "Coding Practice";


//prevents data from being sent early
ob_start();


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;
$logo_color = '';
switch(THIS_PAGE){
    case 'index.php':
        $title = " Welcom to Chih Wen's blog Website";
        $logo = 'fa-home';
        $PageID = "  ";
        $logo_color = " style='color:#8c0000'";
        break;
        
    case '#language':
        break;
    case 'java.php':
        $title = "Java";
        $logo = 'fa fa-th';
        $PageID = "  Java Note";
        $logo_color = "";
        break;
    case 'python.php':
        $title = "Python";
        $logo = 'fa fa-fw fa-camera-retro';
        $PageID = "  Python Note";
        $logo_color = "";
        break; 

    case '#tutorial':
        break;
    case 'mean.php':
        $title = "MEAN Stack Tutorial";
        $logo = 'fa fa-fw fa-calendar';
        $PageID = "  MEAN Stack";
        $logo_color = "";
        break; 

    case 'practice.php':
        $title = "Coding Practice";
        $logo = ' ';
        $PageID = "  Coding Practic";
        $logo_color = "";
        break; 
   
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = "  ";
        $logo_color = " style='color:#8c0000'";
        break;
   }



/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray){
    $myReturn = '';
    
    foreach($linkArray as $url => $text){
        
        switch($url){
            case '../index.php':
                $mymenuico='fa fa-university';
                break;
            case 'index.php':
                $mymenuico='fa fa-fw fa-home';
                break;         
            case '#language':  
                $mymenuico = 'fa fa-google';
                break;  
            case '#tutorial':
                $mymenuico = '';
                break; 
            default:
                $mymenuico = '';
                break;
           }

        if ($url == "java.php" || $url == "python.php" || $url == "mean.php"){
           // do nothing
        }else{
            if($url == THIS_PAGE){//selected page - add class reference
                $myReturn .= '<li><a class="active" href="' . $url . '"><i class="' . $mymenuico . '"></i>' . $text . '</a></li>' . PHP_EOL;
            }else if ($url=="#language"){
                //make all research topic including sub items
                $myReturn .= '<li><a href="#"><i class="' . $mymenuico . '"></i>' . $text . '</a><ul>' . PHP_EOL; 
                $myReturn .= '<li><a href="java.php"><i class="fa fa-th"></i> Java</a></li>' . PHP_EOL;
                $myReturn .= '<li><a href="python.php"><i class="fa fa-fw fa-camera-retro"></i> Python</a></li>' . PHP_EOL;
                $myReturn .= '</ul></li>' . PHP_EOL; 
    
            }else if($url == "#tutorial"){
                //make all google including sub items
                $myReturn .= '<li><a href="#"><i class="' . $mymenuico . '"></i>' . $text . '</a><ul>' . PHP_EOL; 
                $myReturn .= '<li><a href="mean.php"><i class="fa fa-fw fa-desktop"></i> MEAN Stack</a></li>' . PHP_EOL;
                $myReturn .= '</ul></li>' . PHP_EOL;  
            }else{
                $myReturn .= '<li><a href="' . $url . '"><i class="' . $mymenuico . '"></i>' . $text . '</a></li>'  . PHP_EOL;
            } 
        
        } 
          
    }      
    return $myReturn;    
}

?>
