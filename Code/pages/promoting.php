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

$req2_1 = $dbconn->prepare("SELECT * FROM `ic_2.1` WHERE CountryID = ? ");
$req2_1->execute([$uid]);
$data_2_1 = $req2_1->fetch();

$req2_2 = $dbconn->prepare("SELECT * FROM `ic_2.2` WHERE CountryID = ? ");
$req2_2->execute([$uid]);
$data_2_2 = $req2_2->fetch();

$req2_3 = $dbconn->prepare("SELECT * FROM `ic_2.3` WHERE CountryID = ? ");
$req2_3->execute([$uid]);
$data_2_3 = $req2_3->fetch();

$req2_4 = $dbconn->prepare("SELECT * FROM `ic_2.4` WHERE CountryID = ? ");
$req2_4->execute([$uid]);
$data_2_4 = $req2_4->fetch();
   
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
                                                    <div type="button" id="tab-1" class="tablinks step-col active" onclick="openCity(event, 'content-1')"><div class="circle">2.1</div><div  class="screen650">Ecosystem management actions</div></div>
                                                    <div type="button" id="tab-2" class="tablinks step-col" onclick="openCity(event, 'content-2')"><div class="circle">2.2</div><div  class="screen650">Climate Smart Agriculture</div></div>
                                                    <div type="button" id="tab-3" class="tablinks step-col" onclick="openCity(event, 'content-3')"><div class="circle">2.3</div><div  class="screen650">Energy transition </div></div>
                                                    <div type="button" id="tab-4" class="tablinks step-col" onclick="openCity(event, 'content-4')"><div class="circle">2.4</div><div  class="screen650">Social protection and insurance</div></div>
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
                                                <h1 id="heading">2.1. Ecosystem management actions</h1>
                                                <p id="formHeaderp">Please provide accurate details for the Ecosystem management actions.</p><br>
                                                    <div class="form-card">
                                                        <div class="row">
                                                            <div class="col-7">
                                                            </div>
                                                            <div class="col-5">
                                                                <h2 class="steps">Step 1 - 4</h2>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <div class="form-group">
                                                                <label >2.1.1. Share of areas for which land use plan is developed</label><br>
                                                                <input type="text" value="<?php if(isset($data_2_1['LandUsePlanning'])){echo $data_2_1['LandUsePlanning'];} ?>" id="LandUsePlanning" name="LandUsePlanning" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                            </div>
                                                        </div>
                                                    </div>	
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <div class="form-group">
                                                            <label >2.1.2. Number of green cities established </label><br>
                                                            <input type="text" value="<?php if(isset($data_2_1['GreenCities'])){echo $data_2_1['GreenCities'];} ?>" id="GreenCities" name="GreenCities" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >2.1.3. Share of protected areas (area closure) </label><br>
                                                            <input type="text" value="<?php if(isset($data_2_1['ProtectedAreas'])){echo $data_2_1['ProtectedAreas'];} ?>" id="ProtectedAreas" name="ProtectedAreas" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >2.1.4. Share of non-arable lands with protection measures </label><br>
                                                            <input type="text" value="<?php if(isset($data_2_1['CostalLands'])){echo $data_2_1['CostalLands'];} ?>" id="CostalLands" name="CostalLands" placeholder="Costal lands" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >2.1.5. Share of non-arable lands with protection measures </label><br>
                                                            <input type="text" value="<?php if(isset($data_2_1['RangeLands'])){echo $data_2_1['RangeLands'];} ?>" id="RangeLands" name="RangeLands" placeholder="Range lands" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >2.1.6. Share of non-arable lands with protection measures </label><br>
                                                            <input type="text" value="<?php if(isset($data_2_1['ForestArea'])){echo $data_2_1['ForestArea'];} ?>" id="ForestArea" name="ForestArea" placeholder="Forest areas" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >2.1.7. Share of non-arable lands with protection measures </label><br>
                                                            <input type="text" value="<?php if(isset($data_2_1['SavannaLands'])){echo $data_2_1['SavannaLands'];} ?>" id="SavannaLands" name="SavannaLands" placeholder="Savanna Lands" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >2.1.8. Areas of forest and wetlands restored </label><br>
                                                            <input type="text" value="<?php if(isset($data_2_1['ForestWetlandRestored'])){echo $data_2_1['ForestWetlandRestored'];} ?>" id="ForestWetlandRestored" name="ForestWetlandRestored" placeholder="Areas of forest and wetlands restored" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
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
                                                <h1 id="heading">2.2. Climate Smart Agriculture</h1>
                                                <p id="formHeaderp">Please provide accurate details for the Climate Smart Agriculture.</p><br>
                                                    <div class="form-card">
                                                        <div class="row">
                                                            <div class="col-7">
                                                            </div>
                                                            <div class="col-5">
                                                                <h2 class="steps">Step 2 - 4</h2>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <H3 style="color:black">Share of arable land irrigated (ILH/ALH)*100 </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.2.1. Size of arable land in ha (ALH) </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_2['ArableLand'])){echo $data_2_2['ArableLand'];} ?>" id="ArableLand" name="ArableLand" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.2.2. Size of irrigated land in ha (ILH) </label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_2['IrrigatedLand'])){echo $data_2_2['IrrigatedLand'];} ?>" id="IrrigatedLand" name="IrrigatedLand" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                        <H3 style="color:black">Share of arable land covered by SWC measures </H3>
                                                            <div class="col-md-6">
                                                            <div class="form-group row">
                                                            <div class="form-group">
                                                                <label >2.2.3. Share of arable land   </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_2['ArableLandSWC'])){echo $data_2_2['ArableLandSWC'];} ?>" id="ArableLandSWC" name="ArableLandSWC" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="row">
                                                            <H3 style="color:black">Conservation agriculture index  (NMF+NTF+NRF)/3NCF </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.2.3.1. Number crop producing farmers (NCF) </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_2['NCF'])){echo $data_2_2['NCF'];} ?>" id="NCF" name="NCF" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.2.3.2. Number of farmers practice mulching (NMF) </label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_2['NMF'])){echo $data_2_2['NMF'];} ?>" id="NMF" name="NMF" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.2.3.3. Number of farmers practice minimum tillage, (NTF) </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_2['NTF'])){echo $data_2_2['NTF'];} ?>" id="NTF" name="NTF" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.2.3.4. Number of farmers practice crop rotation (NRF)</label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_2['NRF'])){echo $data_2_2['NRF'];} ?>" id="NRF" name="NRF" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <H3 style="color:black">% of farmers apply organic fertilizers </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.2.4.1. Number of farmers applying organic fertilizers </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_2['FarmersApplyingFertilizers'])){echo $data_2_2['FarmersApplyingFertilizers'];} ?>" id="FarmersApplyingFertilizers" name="FarmersApplyingFertilizers" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.2.4.2. Total number of farmer </label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_2['NumberFarmers'])){echo $data_2_2['NumberFarmers'];} ?>" id="NumberFarmers" name="NumberFarmers" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <H3 style="color:black">% of crop area covered by improved seeds  </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.2.5.1. size of area where farmers used improved seeds </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_2['FarmersImprovedSeedsArea'])){echo $data_2_2['FarmersImprovedSeedsArea'];} ?>" id="FarmersImprovedSeedsArea" name="FarmersImprovedSeedsArea" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.2.5.2. Total Size of crop area </label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_2['CropAreaSize'])){echo $data_2_2['CropAreaSize'];} ?>" id="CropAreaSize" name="CropAreaSize" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <H3 style="color:black">% of improved cow breeds </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.2.6.1. Number of improved cow breeds </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_2['ImprovedCowBreeds'])){echo $data_2_2['ImprovedCowBreeds'];} ?>" id="ImprovedCowBreeds" name="ImprovedCowBreeds" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.2.6.2. total number of cow </label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_2['CowNumber'])){echo $data_2_2['CowNumber'];} ?>" id="CowNumber" name="CowNumber" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <H3 style="color:black">Changes in large ruminant population  </H3>
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.2.7. Changes in large ruminant population    </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_2['LargeRuminantPopulationChange'])){echo $data_2_2['LargeRuminantPopulationChange'];} ?>" id="LargeRuminantPopulationChange" name="LargeRuminantPopulationChange" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <H3 style="color:black">Changes in small ruminant population  </H3>
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.2.8. Changes in small ruminant population  </label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_2['SmallRuminantPopulationChange'])){echo $data_2_2['SmallRuminantPopulationChange'];} ?>" id="SmallRuminantPopulationChange" name="SmallRuminantPopulationChange" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <H3 style="color:black">% of farmers practice improved methane reduction options </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.2.9.1. Number of farmers own livestock </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_2['FarmersLivestockOwnership'])){echo $data_2_2['FarmersLivestockOwnership'];} ?>" id="FarmersLivestockOwnership" name="FarmersLivestockOwnership" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.2.9.2. Number farmers practiced aerobic treatment</label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_2['AerobicTreatment'])){echo $data_2_2['AerobicTreatment'];} ?>" id="AerobicTreatment" name="AerobicTreatment" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.2.9.3. Number farmers practiced manure storage </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_2['ManureStorage'])){echo $data_2_2['ManureStorage'];} ?>" id="ManureStorage" name="ManureStorage" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.2.9.4. Number of farmers produce paddy rice</label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_2['PaddyRiceProduction'])){echo $data_2_2['PaddyRiceProduction'];} ?>" id="PaddyRiceProduction" name="PaddyRiceProduction" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.2.9.5. Number farmers practice Alternate Wetting and Drying (AWD) in rice cultivation</label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_2['AWDinRiceCultivation'])){echo $data_2_2['AWDinRiceCultivation'];} ?>" id="AWDinRiceCultivation" name="AWDinRiceCultivation" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
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
                                                <h1 id="heading">2.3. Energy transition </h1>
                                                <p id="formHeaderp">Please provide accurate details for the Energy transition.</p><br>
                                                    <div class="form-card">
                                                        <div class="row">
                                                            <div class="col-7">
                                                            </div>
                                                            <div class="col-5">
                                                                <h2 class="steps">Step 3 - 4</h2>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <H3 style="color:black">Share of energy supply from renewable sources </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.3.1.1. The volume of renewable energy</label><br>
                                                                <input type="text" value="<?php if(isset($data_2_3['RenewableEnergyVolume'])){echo $data_2_3['RenewableEnergyVolume'];} ?>" id="RenewableEnergyVolume" name="RenewableEnergyVolume" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.3.1.2. The total volume of energy supply </label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_3['EnergyVolumeSupply'])){echo $data_2_3['EnergyVolumeSupply'];} ?>" id="EnergyVolumeSupply" name="EnergyVolumeSupply" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                    <H3 style="color:black">Share of electric vehicles </H3>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.3.2.1. Number of electric vehicles  </label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_3['ElectricVehiclesNumber'])){echo $data_2_3['ElectricVehiclesNumber'];} ?>" id="ElectricVehiclesNumber" name="ElectricVehiclesNumber" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.3.2.2. Total number of vehicles</label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_3['VehiclesNumber'])){echo $data_2_3['VehiclesNumber'];} ?>" id="VehiclesNumber" name="VehiclesNumber" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="row">
                                                            <H3 style="color:black">Per capita consumption of fossil fuel </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.3.3.1. The value of fossil fuel consumption</label><br>
                                                                <input type="text" value="<?php if(isset($data_2_3['FossilFuelConsumption'])){echo $data_2_3['FossilFuelConsumption'];} ?>" id="FossilFuelConsumption" name="FossilFuelConsumption" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.3.3.2. GDP</label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_3['GDP_2_3'])){echo $data_2_3['GDP_2_3'];} ?>" id="GDP_2_3" name="GDP_2_3" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <H3 style="color:black">Share of households depend on biomass energy </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.3.4. Number of households using biomass energy </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_3['BiomassHouseholdsNumber'])){echo $data_2_3['BiomassHouseholdsNumber'];} ?>" id="BiomassHouseholdsNumber" name="BiomassHouseholdsNumber" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                        </div>
                                                        <div class="row">
                                                            <H3 style="color:black">Share of households adopted solar technology for cooking, heating, and lighting  </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.3.5.1. Number of households using solar technology </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_3['SolarTechAdoption'])){echo $data_2_3['SolarTechAdoption'];} ?>" id="SolarTechAdoption" name="SolarTechAdoption" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.3.5.2. Total number of households </label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_3['HouseholdsNumber'])){echo $data_2_3['HouseholdsNumber'];} ?>" id="HouseholdsNumber" name="HouseholdsNumber" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="success-popup3"></div>
                                              <input type='button' id='saverecords3'  class="action-button" value ='Save' /> 
                                                </fieldset>
                                            </form>
                                            <form id="msform">
                                                <fieldset id="content-4" class="tabcontent">
                                                <h3 id="formHeaderH3">Key Performance Indicator 4</h3>
                                                <h1 id="heading">2.4. Social protection and insurance </h1>
                                                <p id="formHeaderp">Please provide accurate details for the Social protection and insurance.</p><br>
                                                    <div class="form-card">
                                                        <div class="row">
                                                            <div class="col-7">
                                                            </div>
                                                            <div class="col-5">
                                                                <h2 class="steps">Step 4 - 4</h2>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <H3 style="color:black">Share of households covered by social protection programs </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.4.1.1. Number of households eligible for direct support </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_4['EligibleHouseholdsDS'])){echo $data_2_4['EligibleHouseholdsDS'];} ?>" id="EligibleHouseholdsDS" name="EligibleHouseholdsDS" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.4.1.2. Number of households received direct support</label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_4['ReceivedHouseholdsDS'])){echo $data_2_4['ReceivedHouseholdsDS'];} ?>" id="ReceivedHouseholdsDS" name="ReceivedHouseholdsDS" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.4.1.3. Number of households interested and/or eligible for public work  </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_4['InterestedOrEligibleHouseholdsPW'])){echo $data_2_4['InterestedOrEligibleHouseholdsPW'];} ?>" id="InterestedOrEligibleHouseholdsPW" name="InterestedOrEligibleHouseholdsPW" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.4.1.4. Number of people participated in public work support</label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_4['PeopleParticipatedPW'])){echo $data_2_4['PeopleParticipatedPW'];} ?>" id="PeopleParticipatedPW" name="PeopleParticipatedPW" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.4.1.5. Number of people received income generation activity support (training and finance) </label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_4['PeopleReceivedIncome'])){echo $data_2_4['PeopleReceivedIncome'];} ?>" id="PeopleReceivedIncome" name="PeopleReceivedIncome" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <H3 style="color:black">Disaster response capacity</H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.4.2.1. The number of people affected by disaster in this year  </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_4['PeopleDisasterAffected'])){echo $data_2_4['PeopleDisasterAffected'];} ?>" id="PeopleDisasterAffected" name="PeopleDisasterAffected" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.4.2.2. The number of people supported</label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_4['PeopleDisasterSupported'])){echo $data_2_4['PeopleDisasterSupported'];} ?>" id="PeopleDisasterSupported" name="PeopleDisasterSupported" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.4.2.3. The number of people rehabilitated </label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_4['PeopleDisasterRehabilitated'])){echo $data_2_4['PeopleDisasterRehabilitated'];} ?>" id="PeopleDisasterRehabilitated" name="PeopleDisasterRehabilitated" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <H3 style="color:black">Food reserve </H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.4.3.1. The national food storage capacity in M3  </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_4['FoodStorageCapacity'])){echo $data_2_4['FoodStorageCapacity'];} ?>" id="FoodStorageCapacity" name="FoodStorageCapacity" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.4.3.2. The amount food reserve</label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_4['FoodReserve'])){echo $data_2_4['FoodReserve'];} ?>" id="FoodReserve" name="FoodReserve" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <H3 style="color:black">Agricultural insurance</H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.4.4.1. Number of crop farmers  </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_4['CropFarmers'])){echo $data_2_4['CropFarmers'];} ?>" id="CropFarmers" name="CropFarmers" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.4.4.2. Number of farmers purchased crop insurance  </label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_4['CropInsuranceFarmers'])){echo $data_2_4['CropInsuranceFarmers'];} ?>" id="CropInsuranceFarmers" name="CropInsuranceFarmers" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.4.4.3. Number of livestock farmers </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_4['LivestockFarmers'])){echo $data_2_4['LivestockFarmers'];} ?>" id="LivestockFarmers" name="LivestockFarmers" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.4.4.4. Number of farmers purchased livestock insurance </label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_4['LivestockInsuranceFarmers'])){echo $data_2_4['LivestockInsuranceFarmers'];} ?>" id="LivestockInsuranceFarmers" name="LivestockInsuranceFarmers" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <H3 style="color:black">Health insurance coverage</H3>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.4.5.1. Total population  </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_4['TotalPopulation'])){echo $data_2_4['TotalPopulation'];} ?>" id="TotalPopulation" name="TotalPopulation" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                    <label >2.4.5.2. Number of people covered by health insurance </label><br>
                                                                    <input type="text" value="<?php if(isset($data_2_4['HealthInsuranceCoverage'])){echo $data_2_4['HealthInsuranceCoverage'];} ?>" id="HealthInsuranceCoverage" name="HealthInsuranceCoverage" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <H3 style="color:black">Employment creation support </H3>
                                                                <div class="form-group row">
                                                                <div class="form-group">
                                                                <label >2.4.7. Employment creation support </label><br>
                                                                <input type="text" value="<?php if(isset($data_2_4['EmploymentCreationSupport'])){echo $data_2_4['EmploymentCreationSupport'];} ?>" id="EmploymentCreationSupport" name="EmploymentCreationSupport" placeholder="ex : 123,45" data-validation-allowing="float" data-sanitize="numberFormat" data-sanitize-number-format="0,0.00">
                                                                </div>
                                                                </div>
                                                            </div>	
                                                        </div>
                                                        <div id="success-popup4"></div>
                                              <input type='button' id='saverecords4'  class="action-button" value ='Save' />
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
  progress.style.width = 71 + "%";
}if (activeId == "content-4") {
  // Faire quelque chose   
  var progress = document.getElementById("progress");
  progress.style.width = 100 + "%";
}
}

/* Edit button ajax call */
$('#saverecords').on( 'click', function(){
                    var LandUsePlanning=$("#LandUsePlanning").val();
					 var GreenCities=$("#GreenCities").val();
					 var ProtectedAreas=$("#ProtectedAreas").val();
					 var CostalLands=$("#CostalLands").val();
					 var RangeLands=$("#RangeLands").val();
					 var ForestArea=$("#ForestArea").val();
					 var SavannaLands=$("#SavannaLands").val();
					 var ForestWetlandRestored=$("#ForestWetlandRestored").val();
					 var CountryID=<?php echo json_encode($uid); ?>;
          var url = 'insert/promotingInsert.php?kpi=1';
            
          $.post( url, {LandUsePlanning:LandUsePlanning, GreenCities:GreenCities, ProtectedAreas:ProtectedAreas, CostalLands:CostalLands, RangeLands:RangeLands, ForestArea:ForestArea, SavannaLands:SavannaLands, ForestWetlandRestored:ForestWetlandRestored, CountryID:CountryID})
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
                    var ArableLand=$("#ArableLand").val();
                    var IrrigatedLand=$("#IrrigatedLand").val();
                    var ArableLandSWC=$("#ArableLandSWC").val();
                    var NCF=$("#NCF").val();
                    var NMF=$("#NMF").val();
                    var NTF=$("#NTF").val();
                    var NRF=$("#NRF").val();
                    var FarmersApplyingFertilizers=$("#FarmersApplyingFertilizers").val();
                    var NumberFarmers=$("#NumberFarmers").val();
                    var FarmersImprovedSeedsArea=$("#FarmersImprovedSeedsArea").val();
                    var CropAreaSize=$("#CropAreaSize").val();
                    var ImprovedCowBreeds=$("#ImprovedCowBreeds").val();
                    var CowNumber=$("#CowNumber").val();
                    var LargeRuminantPopulationChange=$("#LargeRuminantPopulationChange").val();
                    var SmallRuminantPopulationChange=$("#SmallRuminantPopulationChange").val();
                    var FarmersLivestockOwnership=$("#FarmersLivestockOwnership").val();
                    var AerobicTreatment=$("#AerobicTreatment").val();
                    var ManureStorage=$("#ManureStorage").val();
                    var PaddyRiceProduction=$("#PaddyRiceProduction").val();
                    var AWDinRiceCultivation=$("#AWDinRiceCultivation").val();
                    var CountryID=<?php echo json_encode($uid); ?>;
          var url = 'insert/promotingInsert.php?kpi=2';
          $.post( url, {ArableLand:ArableLand, IrrigatedLand:IrrigatedLand, ArableLandSWC:ArableLandSWC, NCF:NCF, NMF:NMF, NTF:NTF,NRF:NRF, FarmersApplyingFertilizers:FarmersApplyingFertilizers, NumberFarmers:NumberFarmers, FarmersImprovedSeedsArea:FarmersImprovedSeedsArea, CropAreaSize:CropAreaSize, ImprovedCowBreeds:ImprovedCowBreeds, CowNumber:CowNumber, LargeRuminantPopulationChange:LargeRuminantPopulationChange, SmallRuminantPopulationChange:SmallRuminantPopulationChange, FarmersLivestockOwnership:FarmersLivestockOwnership, AerobicTreatment:AerobicTreatment, ManureStorage:ManureStorage, PaddyRiceProduction:PaddyRiceProduction, AWDinRiceCultivation:AWDinRiceCultivation, CountryID:CountryID})
          .done(function( data ) {
                $("#saverecords2").val('Save');
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
                    var RenewableEnergyVolume=$("#RenewableEnergyVolume").val();
                    var EnergyVolumeSupply=$("#EnergyVolumeSupply").val();
                    var ElectricVehiclesNumber=$("#ElectricVehiclesNumber").val();
                    var VehiclesNumber=$("#VehiclesNumber").val();
                    var FossilFuelConsumption=$("#FossilFuelConsumption").val();
                    var GDP_2_3=$("#GDP_2_3").val();
                    var BiomassHouseholdsNumber=$("#BiomassHouseholdsNumber").val();
                    var HouseholdsNumber=$("#HouseholdsNumber").val();
                    var SolarTechAdoption=$("#SolarTechAdoption").val();
                    var CountryID=<?php echo json_encode($uid); ?>;
          var url = 'insert/promotingInsert.php?kpi=3';
            
          $.post( url, {RenewableEnergyVolume:RenewableEnergyVolume, EnergyVolumeSupply:EnergyVolumeSupply, ElectricVehiclesNumber:ElectricVehiclesNumber, VehiclesNumber:VehiclesNumber, FossilFuelConsumption:FossilFuelConsumption, GDP_2_3:GDP_2_3, BiomassHouseholdsNumber:BiomassHouseholdsNumber, HouseholdsNumber:HouseholdsNumber, SolarTechAdoption:SolarTechAdoption, CountryID:CountryID})
          .done(function( data ) {
                $("#saverecords3").val('Save');
                $('#success-popup3').html('<div class="alert alert-success alert-dismissible fade show" role="alert">Records has been successfully saved.</div>');
                    $('#success-popup3 .alert').delay(1500).fadeOut('slow', function() {
                        $(this).alert('close');
                    });
                setTimeout(function(){
                    window.location.reload(1);
                }, 2500);
            });
       });
$('#saverecords4').on( 'click', function(){
  var TGG=$("#TGG").val();
                    var EligibleHouseholdsDS=$("#EligibleHouseholdsDS").val();
                    var ReceivedHouseholdsDS=$("#ReceivedHouseholdsDS").val();
                    var InterestedOrEligibleHouseholdsPW=$("#InterestedOrEligibleHouseholdsPW").val();
                    var PeopleParticipatedPW=$("#PeopleParticipatedPW").val();
                    var PeopleReceivedIncome=$("#PeopleReceivedIncome").val();
                    var PeopleDisasterAffected=$("#PeopleDisasterAffected").val();
                    var PeopleDisasterSupported=$("#PeopleDisasterSupported").val();
                    var PeopleDisasterRehabilitated=$("#PeopleDisasterRehabilitated").val();
                    var FoodStorageCapacity=$("#FoodStorageCapacity").val();
                    var FoodReserve=$("#FoodReserve").val();
                    var CropFarmers=$("#CropFarmers").val();
                    var CropInsuranceFarmers=$("#CropInsuranceFarmers").val();
                    var LivestockFarmers=$("#LivestockFarmers").val();
                    var LivestockInsuranceFarmers=$("#LivestockInsuranceFarmers").val();
                    var TotalPopulation=$("#TotalPopulation").val();
                    var HealthInsuranceCoverage=$("#HealthInsuranceCoverage").val();
                    var EmploymentCreationSupport=$("#EmploymentCreationSupport").val();
                    var CountryID=<?php echo json_encode($uid); ?>;
          var url = 'insert/promotingInsert.php?kpi=4';
            
          $.post( url, {EligibleHouseholdsDS:EligibleHouseholdsDS, ReceivedHouseholdsDS:ReceivedHouseholdsDS, InterestedOrEligibleHouseholdsPW:InterestedOrEligibleHouseholdsPW, PeopleParticipatedPW:PeopleParticipatedPW, PeopleReceivedIncome:PeopleReceivedIncome, PeopleDisasterAffected:PeopleDisasterAffected, PeopleDisasterSupported:PeopleDisasterSupported, PeopleDisasterRehabilitated:PeopleDisasterRehabilitated, FoodStorageCapacity:FoodStorageCapacity, FoodReserve:FoodReserve, CropFarmers:CropFarmers, CropInsuranceFarmers:CropInsuranceFarmers, LivestockFarmers:LivestockFarmers, LivestockInsuranceFarmers:LivestockInsuranceFarmers, TotalPopulation:TotalPopulation, HealthInsuranceCoverage:HealthInsuranceCoverage, EmploymentCreationSupport:EmploymentCreationSupport, CountryID:CountryID})
          .done(function( data ) {
                $("#saverecords4").val('Save');
                $('#success-popup4').html('<div class="alert alert-success alert-dismissible fade show" role="alert">Records has been successfully saved.</div>');
                    $('#success-popup4 .alert').delay(1500).fadeOut('slow', function() {
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