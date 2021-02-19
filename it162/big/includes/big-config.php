<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/
$nav1['../index.php'] = "WEB162";
$nav1['index.php'] = "BIG";
//$nav1['galleries.php'] = "Galleries";

$nav1['#research'] = "Research Topic";
$nav1['rechflexbox.php'] = "Flexbox Research";
$nav1['rechgallery.php'] = "Galleries Research";
$nav1['rechsitevsapp.php'] = "Site vs App Research";

$nav1['#google'] = "Google Tools";
$nav1['calendar.php'] = "Google Calendar";
$nav1['map.php'] = "Google Map";
$nav1['youtube.php'] = "Responsive Youtube Video";

$nav1['shoppingcarts.php'] = "Shopping Carts";
$nav1['webcam.php'] = "Web Cam";




//prevents data from being sent early
ob_start();


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;
$logo_color = '';
switch(THIS_PAGE){
    case 'index.php':
        $title = "Web Developer Examples and Resources";
        $logo = 'fa-home';
        $PageID = "  Chih Wen's Big Website";
        break;
    case 'galleries.php':
        $title = "Galleries";
        $logo = 'fa fa-fw fa-camera-retro';
        $PageID = "  Galleries";
        $logo_color = ' style="color:#00f"';
        break;   
    
    case '#research':
        break;
    case 'rechflexbox.php':
        $title = "Flexbox Research";
        $logo = 'fa fa-th';
        $PageID = "  Flexbox Research";
        $logo_color = ' style="color:#0f0"';
        break;
    case 'rechgallery.php':
        $title = "Galleries Research";
        $logo = 'fa fa-fw fa-camera-retro';
        $PageID = "  Gallery Research";
        $logo_color = ' style="color:#0f0"';
        break; 
    case 'rechsitevsapp.php':
        $title = "Site vs App Research";
        $logo = 'fa fa-thumbs-o-up';
        $PageID = "  Site vs App Research";
        $logo_color = ' style="color:#0f0"';
        break; 

    case '#google':
        break;
    case 'calendar.php':
        $title = "Google Calendar";
        $logo = 'fa fa-fw fa-calendar';
        $PageID = "  Google Calendar";
        $logo_color = ' style="color:#00f"';
        break; 
    case 'map.php':
        $title = "Google Map";
        $logo = 'fa fa-fw fa-map-o';
        $PageID = "  Google Map";
        $logo_color = ' style="color:#00f"';
        break; 
    case 'youtube.php':
        $title = "Responsive Youtube Video";
        $logo = 'fa fa-fw fa-desktop';
        $PageID = "  Responsive Youtube Video";
        $logo_color = ' style="color:#00f"';
        break; 
    case 'shoppingcarts.php':
        $title = "Shopping Carts";
        $logo = ' ';
        $PageID = "  Shopping Carts";
        $logo_color = ' style="color:#00f"';
        break; 
   
    case 'webcam.php':
        $title = "Live Web Camera";
        $logo = 'fa fa-video-camera';
        $PageID = "  Live Web Camera";
        $logo_color = ' style="color:#00f"';
        break; 
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = "  Chih Wen's Big Website";
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
            case 'galleries.php':
                $mymenuico = 'fa fa-picture-o';
                break;           
            case '#google':  
                $mymenuico = 'fa fa-google';
                break;  
            case 'shoppingcarts.php':
                $mymenuico = '';
                break; 
            case 'webcam.php':
                $mymenuico = 'fa fa-video-camera';
                break; 
            default:
                $mymenuico = '';
                break;
           }

        if ($url == "calendar.php" || $url == "map.php" || $url == "youtube.php" || $url == "rechflexbox.php" || $url == "rechgallery.php" || $url == "rechsitevsapp.php"){
           // do nothing
        }else{
            if($url == THIS_PAGE){//selected page - add class reference
                $myReturn .= '<li><a class="active" href="' . $url . '"><i class="' . $mymenuico . '"></i>' . $text . '</a></li>' . PHP_EOL;
            }else if ($url=="#research"){
                //make all research topic including sub items
                $myReturn .= '<li><a href="#"><i class="' . $mymenuico . '"></i>' . $text . '</a><ul>' . PHP_EOL; 
                $myReturn .= '<li><a href="rechflexbox.php"><i class="fa fa-th"></i> Flexbox Research</a></li>' . PHP_EOL;
                $myReturn .= '<li><a href="rechgallery.php"><i class="fa fa-fw fa-camera-retro"></i> Gallery Research</a></li>' . PHP_EOL;
                $myReturn .= '<li><a href="rechsitevsapp.php"><i class="fa fa-thumbs-o-up"></i> Site vs App Research</a></li>' . PHP_EOL;
                $myReturn .= '</ul></li>' . PHP_EOL; 
    
            }else if($url == "#google"){
                //make all google including sub items
                $myReturn .= '<li><a href="#"><i class="' . $mymenuico . '"></i>' . $text . '</a><ul>' . PHP_EOL; 
                $myReturn .= '<li><a href="youtube.php"><i class="fa fa-fw fa-desktop"></i> Youtube</a></li>' . PHP_EOL;
                $myReturn .= '<li><a href="calendar.php"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>' . PHP_EOL;
                $myReturn .= '<li><a href="map.php"><i class="fa fa-fw fa-map-o"></i> Map</a></li>' . PHP_EOL;
                $myReturn .= '</ul></li>' . PHP_EOL;  
            }else{
                $myReturn .= '<li><a href="' . $url . '"><i class="' . $mymenuico . '"></i>' . $text . '</a></li>'  . PHP_EOL;
            } 
        
        } 
          
    }      
    return $myReturn;    
}


?>
