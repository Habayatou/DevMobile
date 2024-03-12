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
        
        $req3_1 = $dbconn->prepare("SELECT * FROM `ic_3.1` WHERE CountryID = ? ");
        $req3_1->execute([$uid]);
        $data_3_1 = $req3_1->fetch();

        $req3_2 = $dbconn->prepare("SELECT * FROM `ic_3.2` WHERE CountryID = ? ");
        $req3_2->execute([$uid]);
        $data_3_2 = $req3_2->fetch();

        $req3_3 = $dbconn->prepare("SELECT * FROM `ic_3.3` WHERE CountryID = ? ");
        $req3_3->execute([$uid]);
        $data_3_3 = $req3_3->fetch();  
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
            <section class="snowflakes" aria-hidden="true">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                                <div class="card px-0 pt-0 pb-0 mt-3 mb-3">
                                                <div id="step-row">
                                                    <div id="progress"></div>
                                                    <div type="button" id="tab-1" class="tablinks step-col active" onclick="openCity(event, 'content-1')"><div class="circle">3.1</div><div  class="screen650">Climate governance</div></div>
                                                    <div type="button" id="tab-2" class="tablinks step-col" onclick="openCity(event, 'content-2')"><div class="circle">3.2</div><div  class="screen650">Climate finance</div></div>
                                                    <div type="button" id="tab-3" class="tablinks step-col tab-3-wide" onclick="openCity(event, 'content-3')"><div class="circle">3.3</div><div  class="screen650">Climate knowledge and innovation</div></div>
                                                </div><br>

                                            <form id="msform">
                                                <section>
                                                    <div class="col-sm-12 success-message" style="display: none;">
                                                        <div class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                                                            <i class="start-icon far fa-check-circle faa-tada animated"></i>
                                                            <strong class="font__weight-semibold"> Records has been successfully saved.</strong>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!-- progressbar -->
                                                <fieldset id="content-1" class="tabcontent">
                                                <h3 id="formHeaderH3">Key Performance Indicator 1</h3>
                                                <h1 id="heading">3.1. Climate governance</h1>
                                                <p id="formHeaderp">Please provide accurate details for the climate governance.</p><br>
                                                    <div class="form-card">
                                                        <div class="row">
                                                            <div class="col-7">
                                                            </div>
                                                            <div class="col-5">
                                                                <h2 class="steps">Step 1 - 3</h2>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <H3 style="color:black">Mainstreaming of climate actions </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >3.1.1.1. The number of government Ministries </label><br>
                                                                <input type="text" value="<?php if(isset($data_3_1['GovernmentMinistries'])){echo $data_3_1['GovernmentMinistries'];} ?>" id="GovernmentMinistries" name="GovernmentMinistries" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >3.1.1.2. The number of government ministries with climate action focal point/committee  </label><br>
                                                                    <input type="text" value="<?php if(isset($data_3_1['MinistriesWithClimateFP'])){echo $data_3_1['MinistriesWithClimateFP'];} ?>" id="MinistriesWithClimateFP" name="MinistriesWithClimateFP" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >3.1.1.3. Presence of a full-fledge agency/section responsible for climate change </label><br>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input" name="ClimateChangeAgencyPresence" value="no" <?php if(isset($data_3_1['ClimateChangeAgencyPresence']) && $data_3_1['ClimateChangeAgencyPresence'] == 'no'){echo 'checked';} ?>>
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input" name="ClimateChangeAgencyPresence" value="yes" <?php if(isset($data_3_1['ClimateChangeAgencyPresence']) && $data_3_1['ClimateChangeAgencyPresence'] == 'yes'){echo 'checked';} ?>>
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                        <H3 style="color:black">Effectiveness of climate change multi-sectoral working group (MSWG)</H3>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >3.1.2.1. The presence of MSWG for climate change    </label><br>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input" name="MSWGpresence" value="no" <?php if(isset($data_3_1['MSWGpresence']) && $data_3_1['MSWGpresence'] == 'no'){echo 'checked';} ?>>
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input" name="MSWGpresence" value="yes" <?php if(isset($data_3_1['MSWGpresence']) && $data_3_1['MSWGpresence'] == 'yes'){echo 'checked';} ?>>
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >3.1.2.2. The number meetings held per year</label><br>
                                                                    <input type="text" value="<?php if(isset($data_3_1['MeetingsPerYear'])){echo $data_3_1['MeetingsPerYear'];} ?>" id="MeetingsPerYear" name="MeetingsPerYear" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >3.1.2.3. The share of members participated in a meeting </label><br>
                                                                    <input type="text" value="<?php if(isset($data_3_1['MemberMeetingParticipation'])){echo $data_3_1['MemberMeetingParticipation'];} ?>" id="MemberMeetingParticipation" name="MemberMeetingParticipation" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="row">
                                                            <H3 style="color:black">Decentralization of climate actions</H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >3.1.3.1. The presence of a full-fledge agency/section responsible for climate change at sub-national level  </label><br>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input" name="SubNationalClimateAgency" value="no" <?php if(isset($data_3_1['SubNationalClimateAgency']) && $data_3_1['SubNationalClimateAgency'] == 'no'){echo 'checked';} ?>>
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input" name="SubNationalClimateAgency" value="yes" <?php if(isset($data_3_1['SubNationalClimateAgency']) && $data_3_1['SubNationalClimateAgency'] == 'yes'){echo 'checked';} ?>>
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <div class="form-group">
                                                                        <label >3.1.3.2. The presence of climate change coordination platform/ committee (CCCP) at sub-national level </label><br>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" class="form-check-input" name="SubNationalCCCP" value="no" <?php if(isset($data_3_1['SubNationalCCCP']) && $data_3_1['SubNationalCCCP'] == 'no'){echo 'checked';} ?>>
                                                                                No
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" class="form-check-input" name="SubNationalCCCP" value="yes" <?php if(isset($data_3_1['SubNationalCCCP']) && $data_3_1['SubNationalCCCP'] == 'yes'){echo 'checked';} ?>>
                                                                                Yes
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>    
                                                        <div id="success-popup"></div>
                                                    <input type='button' id='saverecords'  class="action-button" value ='Save' />
                                              </fieldset>
                                              </form>
    
                                            <form id="msform">
                                                <fieldset id="content-2" class="tabcontent">
                                                <h3 id="formHeaderH3">Key Performance Indicator 2</h3>
                                                <h1 id="heading">3.2. Climate finance  </h1>
                                                <p id="formHeaderp">Please provide accurate details for the Climate finance .</p><br>
                                                    <div class="form-card">
                                                        <div class="row">
                                                            <div class="col-7">
                                                            </div>
                                                            <div class="col-5">
                                                                <h2 class="steps">Step 2 - 3</h2>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <H3 style="color:black">Share of budget allocated for climate action </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >3.2.1.1. Budget allocated for climate action</label><br>
                                                                <input type="text" value="<?php if(isset($data_3_2['ClimateActionBudget'])){echo $data_3_2['ClimateActionBudget'];} ?>" id="ClimateActionBudget" name="ClimateActionBudget" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >3.2.1.2. Total budget </label><br>
                                                                    <input type="text" value="<?php if(isset($data_3_2['TotalBudget'])){echo $data_3_2['TotalBudget'];} ?>" id="TotalBudget" name="TotalBudget" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                    <H3 style="color:black">Amount of climate fund received form international sources as a percentage of GDP </H3>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >3.2.2.1. Amount of climate fund received form international sources  </label><br>
                                                                    <input type="text" value="<?php if(isset($data_3_2['ClimateFundReceived'])){echo $data_3_2['ClimateFundReceived'];} ?>" id="ClimateFundReceived" name="ClimateFundReceived" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >3.2.2.2. GDP</label><br>
                                                                    <input type="text" value="<?php if(isset($data_3_2['GDP'])){echo $data_3_2['GDP'];} ?>" id="GDP" name="GDP" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="row">
                                                            <H3 style="color:black">Share of total climate finance allocated to adaptation actions </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >3.2.3.1. Budget allocated for climate action</label><br>
                                                                <input type="text" value="<?php if(isset($data_3_2['TotalAdaptationBudgetAllocated'])){echo $data_3_2['TotalAdaptationBudgetAllocated'];} ?>" id="TotalAdaptationBudgetAllocated" name="TotalAdaptationBudgetAllocated" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >3.2.3.2. Amount of climate fund received form international sources</label><br>
                                                                    <input type="text" value="<?php if(isset($data_3_2['InternationalSourcesFund'])){echo $data_3_2['InternationalSourcesFund'];} ?>" id="InternationalSourcesFund" name="InternationalSourcesFund" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >3.2.3.3. Total budget need for adaptation actions</label><br>
                                                                    <input type="text" value="<?php if(isset($data_3_2['AdaptationActionsBudgetNeed'])){echo $data_3_2['AdaptationActionsBudgetNeed'];} ?>" id="AdaptationActionsBudgetNeed" name="AdaptationActionsBudgetNeed" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="success-popup2"></div>
                                              <input type='button' id='saverecords2'  class="action-button" value ='Save' />
                                                </fieldset>
                                            </form>
                                            <form id="msform">
                                                <fieldset id="content-3" class="tabcontent">
                                                <h3 id="formHeaderH3">Key Performance Indicator 3</h3>
                                                <h1 id="heading">3.3. Climate finance  </h1>
                                                <p id="formHeaderp">Please provide accurate details for the Climate finance .</p><br>
                                                    <div class="form-card">
                                                        
                                                        <div class="row">
                                                            <H3 style="color:black">% of farmers receive weather information and advisory services  </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >3.3.1.1. Number of farmers receive weather information and advisory services </label><br>
                                                                <input type="text" value="<?php if(isset($data_3_3['FarmersReceivingWeatherInfo'])){echo $data_3_3['FarmersReceivingWeatherInfo'];} ?>" id="FarmersReceivingWeatherInfo" name="FarmersReceiveWeatherInformationAdvisory" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >3.3.1.2. Total number of Farmers </label><br>
                                                                    <input type="text" value="<?php if(isset($data_3_3['FarmersNumber'])){echo $data_3_3['FarmersNumber'];} ?>" id="FarmersNumber" name="FarmersNumber" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <H3 style="color:black">% of weather disasters for which early warning is published before 24 hours</H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <div class="form-group">
                                                                    <label >3.3.2.1. Total occurrence of weather disasters</label><br>
                                                                    <input type="text" value="<?php if(isset($data_3_3['WeatherDisastersOccurrence'])){echo $data_3_3['WeatherDisastersOccurrence'];} ?>" id="WeatherDisastersOccurrence" name="OccurrenceWeatherDisasters" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                    </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <div class="form-group">
                                                                        <label >3.3.2.2. Number of weather disasters for which early warning is published before 24 hours  </label><br>
                                                                        <input type="text" value="<?php if(isset($data_3_3['EarlyWarningWeatherDisasters'])){echo $data_3_3['EarlyWarningWeatherDisasters'];} ?>" id="EarlyWarningWeatherDisasters" name="WeatherDisastersEarlyWarning" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <H3 style="color:black">Investment in climate science and research </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >3.3.3. Investment in climate science and research  </label><br>
                                                                <input type="text" value="<?php if(isset($data_3_3['InvestmentClimateScienceResearch'])){echo $data_3_3['InvestmentClimateScienceResearch'];} ?>" id="InvestmentClimateScienceResearch" name="InvestmentClimateScienceResearch" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                        </div>
                                                        <div id="success-popup3"></div>
                                              <input type='button' id='saverecords3'  class="action-button" value ='Save' /> 
                                                </fieldset>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>


                            
                        </div>
                    </div>
                </div>
                </div>
                </div>
            
            </div>
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
window.onload = function() {
  openCity(event, 'content-1'); 
}
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
  // Récupérer l'élément actif
  var activeTab = document.getElementById(cityName);

  // Récupérer l'ID 
  var activeId = activeTab.id;

  // Vérifier si l'ID correspond
  if (activeId == "content-1") {
  // Faire quelque chose   
  var progress = document.getElementById("progress");
  progress.style.width = 21 + "%";
}
if (activeId == "content-2") {
  // Faire quelque chose   
  var progress = document.getElementById("progress");
  progress.style.width = 47 + "%";
}if (activeId == "content-3") {
  // Faire quelque chose   
  var progress = document.getElementById("progress");
  progress.style.width = 100 + "%";
}
}

/* Edit button ajax call */
$('#saverecords').on( 'click', function(){
                    var GovernmentMinistries=$("#GovernmentMinistries").val();
					var MinistriesWithClimateFP=$("#MinistriesWithClimateFP").val();
                    var ClimateChangeAgencyPresence = $('input[name="ClimateChangeAgencyPresence"]:checked').val() || '';
                    var MSWGpresence = $('input[name="MSWGpresence"]:checked').val() || '';
                    var MeetingsPerYear=$("#MeetingsPerYear").val();
                    var MemberMeetingParticipation=$("#MemberMeetingParticipation").val();
                    var SubNationalClimateAgency = $('input[name="SubNationalClimateAgency"]:checked').val() || '';
                    var SubNationalCCCP = $('input[name="SubNationalCCCP"]:checked').val() || '';
                    var CountryID=<?php echo json_encode($uid); ?>;
          var url = 'insert/buildingInsert.php?kpi=1';
            
          $.post( url, {GovernmentMinistries:GovernmentMinistries, MinistriesWithClimateFP:MinistriesWithClimateFP, ClimateChangeAgencyPresence:ClimateChangeAgencyPresence, MSWGpresence:MSWGpresence, MeetingsPerYear:MeetingsPerYear, MemberMeetingParticipation:MemberMeetingParticipation, SubNationalClimateAgency:SubNationalClimateAgency, SubNationalCCCP:SubNationalCCCP, CountryID:CountryID})
            .done(function( data ) {
                $("#saverecords").val('Save');
                $('#success-popup').html('<div class="alert alert-success alert-dismissible fade show" role="alert">Records has been successfully saved.</div>');
                    $('#success-popup .alert').delay(1500).fadeOut('slow', function() {
                        $(this).alert('close');
                    });
                setTimeout(function(){
                    window.location.reload(1);
                }, 2500);
            });
            });
$('#saverecords2').on( 'click', function(){
                    var ClimateActionBudget=$("#ClimateActionBudget").val();
                    var TotalBudget=$("#TotalBudget").val();
                    var ClimateFundReceived=$("#ClimateFundReceived").val();
                    var GDP=$("#GDP").val();
                    var TotalAdaptationBudgetAllocated=$("#TotalAdaptationBudgetAllocated").val();
                    var InternationalSourcesFund=$("#InternationalSourcesFund").val();
                    var AdaptationActionsBudgetNeed=$("#AdaptationActionsBudgetNeed").val();
                    var CountryID=<?php echo json_encode($uid); ?>;
          var url = 'insert/buildingInsert.php?kpi=2';
          $.post( url, {ClimateActionBudget:ClimateActionBudget, TotalBudget:TotalBudget, ClimateFundReceived:ClimateFundReceived, GDP:GDP, TotalAdaptationBudgetAllocated:TotalAdaptationBudgetAllocated, InternationalSourcesFund:InternationalSourcesFund, AdaptationActionsBudgetNeed:AdaptationActionsBudgetNeed, CountryID:CountryID})
        
          .done(function( data ) {
                $("#saverecords").val('Save');
                $('#success-popup2').html('<div class="alert alert-success alert-dismissible fade show" role="alert">Records has been successfully saved.</div>');
                    $('#success-popup2 .alert').delay(1500).fadeOut('slow', function() {
                        $(this).alert('close');
                    });
                setTimeout(function(){
                    window.location.reload(1);
                }, 2500);
            });
            });
       $('#saverecords3').on( 'click', function(){
                    var FarmersReceivingWeatherInfo=$("#FarmersReceivingWeatherInfo").val();
                    var FarmersNumber=$("#FarmersNumber").val();
                    var WeatherDisastersOccurrence=$("#WeatherDisastersOccurrence").val();
                    var EarlyWarningWeatherDisasters=$("#EarlyWarningWeatherDisasters").val();
                    var InvestmentClimateScienceResearch=$("#InvestmentClimateScienceResearch").val();
                    var CountryID=<?php echo json_encode($uid); ?>;
          var url = 'insert/buildingInsert.php?kpi=3';
            
          $.post( url, {FarmersReceivingWeatherInfo:FarmersReceivingWeatherInfo, FarmersNumber:FarmersNumber, WeatherDisastersOccurrence:WeatherDisastersOccurrence, EarlyWarningWeatherDisasters:EarlyWarningWeatherDisasters, InvestmentClimateScienceResearch:InvestmentClimateScienceResearch, CountryID:CountryID})
        
          .done(function( data ) {
                $("#saverecords").val('Save');
                $('#success-popup3').html('<div class="alert alert-success alert-dismissible fade show" role="alert">Records has been successfully saved.</div>');
                    $('#success-popup3 .alert').delay(1500).fadeOut('slow', function() {
                        $(this).alert('close');
                    });
                setTimeout(function(){
                    window.location.reload(1);
                }, 2500);
            });
            });
</script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</body>

</html>

<?php } ?>