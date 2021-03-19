<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/
$nav1['index.php'] = "Home";

$nav1['#note'] = "Notes";
$nav1['java.php'] = "Java";
$nav1['python.php'] = "Python";

$nav1['#tutorial'] = "Tutorial";
$nav1['cssflexbox.php'] = "CSS Flexbox";

$nav1['#algorithm'] = "Algorithm";
$nav1['sorting.php'] = "Sorting";

$nav1['contactme.php'] = "Contact Me";



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
        
    case '#note':
        break;
    case 'java.php':
        $title = "Chih Wen's blog - Java Note";
        $logo = 'fa-home';
        $PageID = "  How to use basic Java language?";
        $logo_color = " style='color:#8c0000'";
        break;
    case 'python.php':
        $title = "Chih Wen's blog - Python Note";
        $logo = 'fa-home';
        $PageID = "  How to use basic Python language?";
        $logo_color = " style='color:#8c0000'";
        break; 

    case '#tutorial':
        break;
    case 'cssflexbox.php':
        $title = "Chih Wen's blog - CSS Flexbox Tutorial";
        $logo = 'fa-home';
        $PageID = "  CSS Flexbox";
        $logo_color = " style='color:#8c0000'";
        break; 
    
    case '#algorithm':
        break;
    case 'sorting.php':
        $title = "Chih Wen's blog - Sorting Algorithm";
        $logo = 'fa-home';
        $PageID = "  Sorting with Python";
        $logo_color = " style='color:#8c0000'";
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
            case '#note':  
                $mymenuico = 'fa fa-pencil-square-o';
                break;  
            case '#tutorial':
                $mymenuico = 'fa fa-book';
                break; 
            case '#algorithm':
                $mymenuico = 'fa fa-bolt';
                break; 
            case 'contactme.php':
                $mymenuico = 'fa fa-address-book';
                break;
            default:
                $mymenuico = '';
                break;
           }

        if ($url == "java.php" || $url == "python.php" || $url == "cssflexbox.php" || $url == "sorting.php"){
           // do nothing
        }else{
            if($url == THIS_PAGE){//selected page - add class reference
                $myReturn .= '<li><a class="active" href="' . $url . '"><i class="' . $mymenuico . '"></i>' . $text . '</a></li>' . PHP_EOL;
            }else if ($url=="#note"){
                //make all subjct sub items
                $myReturn .= '<li><a href="#"><i class="' . $mymenuico . '"></i>' . $text . '</a><ul>' . PHP_EOL; 
                $myReturn .= '<li><a href="java.php"><i class=""></i> Java</a></li>' . PHP_EOL;
                $myReturn .= '<li><a href="python.php"><i class=""></i> Python</a></li>' . PHP_EOL;
                $myReturn .= '</ul></li>' . PHP_EOL; 
    
            }else if($url == "#tutorial"){
                //make all tutorial including sub items
                $myReturn .= '<li><a href="#"><i class="' . $mymenuico . '"></i>' . $text . '</a><ul>' . PHP_EOL; 
                $myReturn .= '<li><a href="cssflexbox.php"><i class=" fa fa-table"></i> CSS Flexbox</a></li>' . PHP_EOL;
                $myReturn .= '</ul></li>' . PHP_EOL;  

            }else if($url == "#algorithm"){
                //make all algorithm including sub items
                $myReturn .= '<li><a href="#"><i class="' . $mymenuico . '"></i>' . $text . '</a><ul>' . PHP_EOL; 
                $myReturn .= '<li><a href="sorting.php"><i class=" fa fa-sort"></i> Sorting</a></li>' . PHP_EOL;
                $myReturn .= '</ul></li>' . PHP_EOL; 

            }else{
                $myReturn .= '<li><a href="' . $url . '"><i class="' . $mymenuico . '"></i>' . $text . '</a></li>'  . PHP_EOL;
            } 
        
        } 
          
    }      
    return $myReturn;    
}

?>
