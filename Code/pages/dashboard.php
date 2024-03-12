<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['user_country']==0)) {
  header('location:../logout.php');
  } else{ 
    $uid=$_SESSION['user_country'];
    $sth = $dbconn->prepare("select * from country where id='$uid'");
$sth->execute();
/* Fetch all of rows in the result set */
$result = $sth->fetchAll();
   
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" />
  <link rel="icon" href="../images/logo.png" type="image/png">
    <title>AfMAR</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/mycssi.css">
  <!-- endinject -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../partials/_horizontal-navbar.html -->               
                      
    <div class="horizontal-menu">
    <?php include_once('../includes/header.php');?>
    <?php include_once('../includes/sidebar.php');?>
    </div>               
                 
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
	    <div class="main-panel">
        
		</div>
	</div>
    </section>
        <!-- content-wrapper ends -->
        <!-- partial:../partials/_footer.html -->
        <?php include_once('../includes/footer.php');?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../js/chart.js"></script>
  <!-- End custom js for this page-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
        <script>
        $(document).ready(function(){

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;
            
            setProgressBar(current);
            
            $(".next").click(function(){
            
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            
            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            var currentActive = $("#step-row .active");
            
            // Trouver le prochain élément "step-col" et lui ajouter la classe "active"
            var nextStepCol = currentActive.next();
            nextStepCol.addClass("active");
            

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
            step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;
            
            current_fs.css({
            'display': 'none',
            'position': 'relative'
            });
            next_fs.css({'opacity': opacity});
            },
            duration: 500
            });
            current = ++current + 0.3; 
            setProgressBar(current);
            });
            
            $(".previous").click(function(){
            
            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();
            
            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            //***************** */
            var currentActive = $("#step-row .active");
    
            // Trouver l'élément "step-col" précédent
            var previousStepCol = currentActive.prev();
            
            // Si l'élément précédent existe et n'est pas le premier
            if (previousStepCol.length && !previousStepCol.is(":first-child")) {
                // Supprimer la classe "active" de l'élément actuel
                currentActive.removeClass("active");
                
                // Ajouter la classe "active" à l'élément précédent
                previousStepCol.addClass("active");
            }
            //show the previous fieldset
            previous_fs.show();
            
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
            step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;
            
            current_fs.css({
            'display': 'none',
            'position': 'relative'
            });
            previous_fs.css({'opacity': opacity});
            },
            duration: 500
            });
            current = --current - 0.3; 
            setProgressBar(current);
            });
            
            function setProgressBar(curStep){
            var percent = parseFloat(80 / steps) * curStep;
            percent = percent.toFixed();
            $("#progress")
            .css("width",percent+"%")
            }
            
            $(".submit").click(function(){
            return false;
            })
            
            });
    </script>
</body>

</html>

<?php } ?>