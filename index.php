<?php
  require "header.php";
?>  
 <!-- //ergrsfdhfdhfdhfdhdfxhfd -->
       <main>
          <div class="wrapper-main">
            <section class="section-default">
              <?php
                 if (isset($_SESSION['userId'])) {
                  echo '<p class="login-status">You are Logged in!</p>';

                 }
                 else{
                  echo '<p class="login-status">You are logged out!</p>';
                 }
              
              ?>
           
            </section>
          </div>
         

       </main>
<?php
  require "footer.php";
?> 


         