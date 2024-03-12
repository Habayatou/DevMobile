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
  <link rel="icon" href="../../images/logo.png" type="image/png">
    <title>AfMAR</title>
  <!-- base:css -->
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/profilecss.css">
  <!-- endinject -->
</head>

<body>
    <div class="container  bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                  <?php if($sth->rowCount()):
                  foreach($result as $row){ ?>
                      <img class=" mt-5" width="150" style="box-shadow: 4px 5px 6px 0px rgb(0 0 0 / 25%);" src="../images/png250px/<?php echo $row['flag'];?>.png" >
                    <br><H1><?php if(isset($row['country_name'])){echo $row['country_name'];} ?></H1>
                
                  <?php } endif;  ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back" ><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                            <h5> Back to home</h5>
                        </div>
                        <h4 class="text-right">Edit Password</h4>
                    </div>
                  <form id="msform">
                    <div class="row mt-5">
                      <div class="col-md-6"><label class="labels"> Current Password</label>
                        <input class="form-control" type="password" id="CurrentPassword" name="CurrentPassword" placeholder="enter your current password">
                      </div>
                        <div class="col-md-6"><label class="labels">New Password</label>
                          <input class="form-control" type="password" id="NewPassword" name="NewPassword" placeholder="enter a new password" >
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6"><label class="labels">Confirm Password</label>
                          <input class="form-control" type="password" id="ConfirmPassword" name="ConfirmPassword" placeholder="confirm the new password">
                        </div>
                    </div>
                    <div class="mt-5 text-right">
                      <input type='button' id='saverecords'  class="action-button" value ='Save Profile' />
                    </div>
                  </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
  const backButton = document.querySelector('.back');

  backButton.addEventListener('click', function() {
    window.history.back();
  });
  
$('#saverecords').on( 'click', function(){
          var NewPassword=$("#NewPassword").val();
          alert(NewPassword);
          var CountryID=<?php echo json_encode($uid); ?>;
          var url = 'insert/profileInsert.php';
          $.post( url, {NewPassword:NewPassword, CountryID:CountryID})
        .done(function( data ) {
          if(data > 0){
            $('.success').show(3000).html("Record saved successfully.").delay(2000).fadeOut(1000);
          }else{
            $('.error').show(3000).html("Record could not be saved. Please try again.").delay(2000).fadeOut(1000);
          }
          $("#saverecords").val('Save');
          
            $('.success-message').show();
          setTimeout(function(){
            window.location.reload(1);
          }, 5000);
      });
       });
</script>
</body>

</html>
<?php } ?>