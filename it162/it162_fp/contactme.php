   <?php include 'includes/fp-header.php';?>   
   <div>
     	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "Chih.W.Wang@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Chih Wen Wang"; //place your client's name here
        $website = "Web 162 Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
   </div>
 <?php include 'includes/fp-footer.php';?>    
    