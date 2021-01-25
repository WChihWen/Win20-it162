<!-- footer start here -->
<div class="wrapper"> 
    <footer>
      <p><small>&copy; <?php echo date("Y");?>
      <a href="contactme.php" target = "_blank">Chih Wen Wang</a>, All Rights Reserved ~ 
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ 
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
</div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>