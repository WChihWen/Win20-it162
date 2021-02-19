<?php include 'includes/header.php';?> 

<script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
<section>  
   <div id="tabs">
      <ul>
         <li><a href="#tabs-1">Client Questionnare</a></li>
         <li><a href="#tabs-2">Website Information</a></li>
      </ul>
      <div id="tabs-1">
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
            $website = "Contact Form of Web 162 Big Website";  //place NAME of your client's website

            echo loadContact('includes/multiple.php');#demonstrates a simple contact form
            //echo loadContact('multiple.php');#demonstrates multiple form elements

            ?>
         </div>
      </div>
      <div id="tabs-2">
         <div>
            <p>
               This website, which I build in Web162 class at Seattle Central College, presents some embed examples:
            </p>
            <ul>
               <li>
                  <a href="youtube.php">Google Youtube</a>
               </li>
               <li>
                  <a href="calendar.php">Google Calendar</a>
               </li>
               <li>
                  <a href="map.php">Google Map</a>
               </li>
            </ul>
               <p>In addition, it includes my three research topics:</p>
            <ul>
               <li>
                  <a href="rechflexbox.php">Flexbox Research</a>
               </li>
               <li>
                  <a href="rechgallery.php">Gallery Research</a>
               </li>
               <li>
                  <a href="rechsitevsapp.php">Site vs App Research</a>
               </li> 
            </ul>
            <p>Moreover, it includes one shopping cart, and live web camera:</p>
            <ul>
               <li>
                  <a href="shoppingcarts.php">Shopping Carts</a>
               </li>
               <li>
                  <a href="webcam.php">Live Web Camera</a>
               </li> 
            </ul>         
         </div>
      </div>

   </div>
         
   </section>
   <aside>
      <h3>My Favorite Web Resources</h3>
      <ul>
         <li><a href="https://embedresponsively.com/" target="_blank">Embed Responsively</a></li>
         <li><a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Font Awesome Icons</a></li>
         <li><a href="https://www.citationmachine.net/mla8/cite-a-website" target="_blank">Citation Machine®: Format & Generate</a></li>
         <li><a href="https://joshvogt.co/blog/css-grid-layout-grid-template-areas/">CSS Grid Layout</a></li>
      </ul>
   </aside>
   
<?php include 'includes/footer.php';?>
    
