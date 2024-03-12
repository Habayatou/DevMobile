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
    $result = $sth->fetchAll();
    /* Fetch all of rows in the result set */
    $req1_1 = $dbconn->prepare("SELECT * FROM `ic_1.1` WHERE CountryID = ? ");
    $req1_1->execute([$uid]);
    $data_1_1 = $req1_1->fetch();
    
    $req1_2 = $dbconn->prepare("SELECT * FROM `ic_1.2` WHERE CountryID = ? ");
    $req1_2->execute([$uid]);
    $data_1_2 = $req1_2->fetch();
    
    $req1_3 = $dbconn->prepare("SELECT * FROM `ic_1.3` WHERE CountryID = ? ");
    $req1_3->execute([$uid]);
    $data_1_3 = $req1_3->fetch();
    
    $req1_4 = $dbconn->prepare("SELECT * FROM `ic_1.4` WHERE CountryID = ? ");
    $req1_4->execute([$uid]);
    $data_1_4 = $req1_4->fetch();
 
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/mycssi.css">
  <!-- endinject -->
</head>


<body>
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
                                        <div type="button" id="tab-1" class="tablinks step-col active" onclick="openCity(event, 'content-1')"><div class="circle">1.1</div><div  class="screen650">GHG-Emission</div></div>
                                        <div type="button" id="tab-2" class="tablinks step-col" onclick="openCity(event, 'content-2')"><div class="circle">1.2</div><div  class="screen650">Climate risk/anomalies</div></div>
                                        <div type="button" id="tab-3" class="tablinks step-col" onclick="openCity(event, 'content-3')"><div class="circle">1.3</div><div  class="screen650">Ecosystem resilience </div></div>
                                        <div type="button" id="tab-4" class="tablinks step-col" onclick="openCity(event, 'content-4')"><div class="circle">1.4</div><div  class="screen650">Economy-wide resilience</div></div>
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
                                                <fieldset id="content-1" class="tabcontent">
                                                <h3 id="formHeaderH3">Key Performance Indicator 1</h3>
                                                <h1 id="heading">1.1. GHG-Emission</h1>
                                                <p id="formHeaderp">Please provide accurate details for the Greenhouse Gas Emission Assessment.</p><br>
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
                                                                        <h3 style="color:black">Total annual gross GHG emissions in CO2</h3>
                                                                        <label >1.1.1. TGG</label><br>
                                                                        <input type="text" id="TGG" name="TGG" placeholder="ex: 123,45" value="<?php if(isset($data_1_1['TGG'])){echo $data_1_1['TGG'];} ?>" data-validation-allowing="float" >
                                                                    </div>
                                                                </div>
                                                            </div>	
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <div class="form-group">
                                                                        <h3 style="color:black">Total annual net GHG emission</h3>
                                                                        <label >1.1.2. Total carbon sink (sequestration)</label><br>
                                                                        <input type="text" id="TSC" name="TSC"  placeholder="ex: 123,45" value="<?php if(isset($data_1_1['TSC'])){echo $data_1_1['TSC'];} ?>" data-validation-allowing="float" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <div class="form-group">
                                                                    <h3 style="color:black">Gross GHG emissions from agriculture </h3>
                                                                        <label >1.1.3. AGG</label><br>
                                                                        <input type="text" id="AGG" name="AGG" placeholder="ex: 123,45" value="<?php if(isset($data_1_1['AGG'])){echo $data_1_1['AGG'];} ?>" data-validation-allowing="float" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <div class="form-group">
                                                                    <h3 style="color:black">Net GHG emissions from agriculture (AGG-TCS)</h3>
                                                                        <label >1.1.4. Total soil carbon (TCS)</label><br>
                                                                      <label ></label><br>
                                                                        <input type="text" id="TCS" name="TCS" placeholder="ex: 123,45" value="<?php if(isset($data_1_1['TCS'])){echo $data_1_1['TCS'];} ?>" data-validation-allowing="float" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.1.5. GHG emissions from energy and transport </label><br>
                                                            <input type="text" id="EnergyGHG" name="EnergyGHG" placeholder="ex: 123,45" value="<?php if(isset($data_1_1['EnergyGHG'])){echo $data_1_1['EnergyGHG'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.1.6. GHG emissions from IPPU</label><br>
                                                            <input type="text" id="IPPUGHG" name="IPPUGHG" placeholder="ex: 123,45" value="<?php if(isset($data_1_1['IPPUGHG'])){echo $data_1_1['IPPUGHG'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.1.7. GHG emissions from waste </label><br>
                                                            <input type="text" id="WASTEGHG" name="WASTEGHG" placeholder="ex: 123,45" value="<?php if(isset($data_1_1['WasteGHG'])){echo $data_1_1['WasteGHG'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.1.8. Total methane emissions </label><br>
                                                            <input type="text" id="MethaneEmissions" name="MethaneEmissions" placeholder="ex: 123,45" value="<?php if(isset($data_1_1['MethaneEmissions'])){echo $data_1_1['MethaneEmissions'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                              
                                                        <div id="success-popup"></div>      </div>
                                              <input type='button' id='saverecords'  class="action-button" value ='Save' />
                                              </div>
                                              </fieldset>
                                        </form>
    
                                            <form id="msform">
                                              <fieldset id="content-2" class="tabcontent">
                                                <h3 id="formHeaderH3">Key Performance Indicator 2</h3>
                                                <h1 id="heading">1.2. Climate risk/anomalies</h1>
                                                <p id="formHeaderp">Please provide accurate details for the Climate risk/anomalies.</p><br>
                                                    <div class="form-card">
                                                        <div class="row">
                                                            <div class="col-7">
                                                            </div>
                                                            <div class="col-5">
                                                                <h2 class="steps">Step 2 - 4</h2>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                          <label >1.2.1. Temperature/heat shock </label><br>
                                                          <input type="text" id="TempHeatShock" name="TempHeatShock" placeholder="ex: 123,45" value="<?php if(isset($data_1_2['TempHeatShock'])){echo $data_1_2['TempHeatShock'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>	
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.2.2. Drought index </label><br>
                                                            <input type="text" id="Drought_index" name="Drought_index" placeholder="ex: 123,45" value="<?php if(isset($data_1_2['Drought_index'])){echo $data_1_2['Drought_index'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.2.3. Incidence of floods  </label><br>
                                                            <input type="text" id="Flood_Incidence" name="Flood_Incidence" placeholder="ex: 123,45" value="<?php if(isset($data_1_2['Flood_Incidence'])){echo $data_1_2['Flood_Incidence'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.2.4. Incidence of climate related health risk  </label><br>
                                                            <input type="text" id="Climate_Incidence" name="Climate_Incidence" placeholder="ex: 123,45" value="<?php if(isset($data_1_2['Climate_Incidence'])){echo $data_1_2['Climate_Incidence'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                        
                                                    </div> 
                                              
                                                        <div id="success-popup2"></div>      
                                              <input type='button' id='saverecords2'  class="action-button" value ='Save' />
                                                </fieldset>
                                            </form>
                                            <form id="msform">
                                                <fieldset id="content-3"  class="tabcontent">
                                                <h3 id="formHeaderH3">Key Performance Indicator 3</h3>
                                                <h1 id="heading">1.3. Ecosystem resilience </h1>
                                                <p id="formHeaderp">Please provide accurate details for the Ecosystem resilience.</p><br>
                                                    <div class="form-card">
                                                        <div class="row">
                                                            <div class="col-7">
                                                            </div>
                                                            <div class="col-5">
                                                                <h2 class="steps">Step 3 - 4</h2>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                          <label >1.3.1. Total forest area </label><br>
                                                          <input type="text" id="ForestArea" name="ForestArea" placeholder="ex: 123,45" value="<?php if(isset($data_1_3['ForestArea'])){echo $data_1_3['ForestArea'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>	
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.3.2. Area covered by natural forest </label><br>
                                                            <input type="text" id="NaturalForestArea" name="NaturalForestArea" placeholder="ex: 123,45" value="<?php if(isset($data_1_3['NaturalForestArea'])){echo $data_1_3['NaturalForestArea'];} ?>"data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.3.3. Changes in level of biodiversity </label><br>
                                                            <input type="text" id="BiodiversityChange" name="BiodiversityChange" placeholder="ex: 123,45" value="<?php if(isset($data_1_3['BiodiversityChange'])){echo $data_1_3['BiodiversityChange'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    </div>
                                                        <div id="success-popup3"></div>      
                                              <input type='button' id='saverecords3'  class="action-button" value ='Save' /> 
                                                </fieldset>
                                            </form>
                                            <form id="msform">
                                                <fieldset id="content-4"  class="tabcontent">
                                                <h3 id="formHeaderH3">Key Performance Indicator 4</h3>
                                                <h1 id="heading">1.4. Economy-wide resilience</h1>
                                                <p id="formHeaderp">Please provide accurate details for the Economy-wide resilience.</p><br>
                                                    <div class="form-card">
                                                        <div class="row">
                                                            <div class="col-7">
                                                            </div>
                                                            <div class="col-5">
                                                                <h2 class="steps">Step 4 - 4</h2>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                    <div class="col-md-6">
                                                        <H3 style="color:black">Variability in GDP growth rate </H3>
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                          <label >1.4.1. GDP growth rates for the last 10 recent year </label><br>
                                                          <input type="text" id="GDP" name="GDP" placeholder="ex : 123,45" value="<?php if(isset($data_1_4['GDP'])){echo $data_1_4['GDP'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>	
                                                    <div class="col-md-6">
                                                        <H3 style="color:black">Green growth </H3>
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.4.2. GDP per GHG emission</label><br>
                                                            <input type="text" id="GDPperGHG" name="GDPperGHG" placeholder="ex : 123,45" value="<?php if(isset($data_1_4['GDPperGHG'])){echo $data_1_4['GDPperGHG'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                        <H3 style="color:black"> Export diversification index </H3>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.4.3.1. Total number of commodities exported </label><br>
                                                            <input type="text" id="TotalCommoditiesExported" name="TotalCommoditiesExported" placeholder="ex : 123,45" value="<?php if(isset($data_1_4['TotalCommoditiesExported'])){echo $data_1_4['TotalCommoditiesExported'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.4.3.2. Value of exports by commodity </label><br>
                                                          <input type="text" id="ExportValueByCommodity" name="ExportValueByCommodity" placeholder="ex : 123,45" value="<?php if(isset($data_1_4['ExportValueByCommodity'])){echo $data_1_4['ExportValueByCommodity'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.4.3.3. Total exports value </label><br>
                                                          <input type="text" id="TotalExportValue" name="TotalExportValue" placeholder="ex : 123,45" value="<?php if(isset($data_1_4['TotalExportValue'])){echo $data_1_4['TotalExportValue'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                        <H3 style="color:black"> Income diversification </H3>
                                                    <div class="col-md-6">
                                                      <div class="form-group row">
                                                          <div class="form-group">
                                                            <label >1.4.4. The share of industrial GDP </label><br>
                                                            <input type="text" id="IncomeDiversification" name="IncomeDiversification" placeholder="ex : 123,45" value="<?php if(isset($data_1_4['IncomeDiversification'])){echo $data_1_4['IncomeDiversification'];} ?>" data-validation-allowing="float" >
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                        <H3 style="color:black"> Adaptive capacity index </H3>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.4.5.1. Human capital index </label><br>
                                                            <input type="text" id="HumanCapital" name="HumanCapital" placeholder="ex : 123,45" value="<?php if(isset($data_1_4['HumanCapital'])){echo $data_1_4['HumanCapital'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.4.5.2. Technological capital index </label><br>
                                                            <input type="text" id="TechnologicalCapital" name="TechnologicalCapital" placeholder="ex : 123,45" value="<?php if(isset($data_1_4['TechnologicalCapital'])){echo $data_1_4['TechnologicalCapital'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.4.5.3. Financial capital index</label><br>
                                                            <input type="text" id="FinancialCapital" name="FinancialCapital" placeholder="ex : 123,45" value="<?php if(isset($data_1_4['FinancialCapital'])){echo $data_1_4['FinancialCapital'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.4.5.4. Institutional capital index</label><br>
                                                            <input type="text" id="InstitutionalCapital" name="InstitutionalCapital" placeholder="ex : 123,45" value="<?php if(isset($data_1_4['InstitutionalCapital'])){echo $data_1_4['InstitutionalCapital'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <H3 style="color:black"> Vulnerability index by sub-nationals </H3>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.4.6.1. Climate risk index </label><br>
                                                            <input type="text" id="ClimateRisk" name="ClimateRisk" placeholder="ex : 123,45" value="<?php if(isset($data_1_4['ClimateRisk'])){echo $data_1_4['ClimateRisk'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                        <label >1.4.6.2. Sensitivity index </label><br>
                                                            <input type="text" id="Sensitivity" name="Sensitivity" placeholder="ex : 123,45" value="<?php if(isset($data_1_4['Sensitivity'])){echo $data_1_4['Sensitivity'];} ?>" data-validation-allowing="float" >
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                        <div class="form-group">
                                                            <label >1.4.6.3. Adaptation index </label><br>
                                                            <input type="text" id="Adaptation" name="Adaptation" placeholder="ex : 123,45" value="<?php if(isset($data_1_4['Adaptation'])){echo $data_1_4['Adaptation'];} ?>" data-validation-allowing="float" >
                                                        </div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
  progress.style.width = 18 + "%";
}
if (activeId == "content-2") {
  // Faire quelque chose   
  var progress = document.getElementById("progress");
  progress.style.width = 45 + "%";
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
                    var TGG=$("#TGG").val();
					 var TSC=$("#TSC").val();
					 var AGG=$("#AGG").val();
					 var TCS=$("#TCS").val();
					 var EnergyGHG=$("#EnergyGHG").val();
					 var IPPUGHG=$("#IPPUGHG").val();
					 var WASTEGHG=$("#WASTEGHG").val();
					 var MethaneEmissions=$("#MethaneEmissions").val();
					 var CountryID=<?php echo json_encode($uid); ?>;
          var url = 'insert/realizingInsert.php?kpi=1';
            
          $.post( url, {TGG:TGG, TSC:TSC, AGG:AGG, TCS:TCS, EnergyGHG:EnergyGHG, IPPUGHG:IPPUGHG, WASTEGHG:WASTEGHG, MethaneEmissions:MethaneEmissions, CountryID:CountryID})
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
                    var TempHeatShock=$("#TempHeatShock").val();
                    var Drought_index=$("#Drought_index").val();
                    var Flood_Incidence=$("#Flood_Incidence").val();
                    var Climate_Incidence=$("#Climate_Incidence").val();
                    var CountryID=<?php echo json_encode($uid); ?>;
          var url = 'insert/realizingInsert.php?kpi=2';
            
          $.post( url, {TempHeatShock:TempHeatShock, Drought_index:Drought_index, Flood_Incidence:Flood_Incidence, Climate_Incidence:Climate_Incidence, CountryID:CountryID})
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
                    var ForestArea=$("#ForestArea").val();
                    var NaturalForestArea=$("#NaturalForestArea").val();
                    var BiodiversityChange=$("#BiodiversityChange").val();
                    var CountryID=<?php echo json_encode($uid); ?>;
          var url = 'insert/realizingInsert.php?kpi=3';
            
          $.post( url, {ForestArea:ForestArea, NaturalForestArea:NaturalForestArea, BiodiversityChange:BiodiversityChange, CountryID:CountryID})
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
					 var GDP=$("#GDP").val();
					 var GDPperGHG=$("#GDPperGHG").val();
					 var TotalCommoditiesExported=$("#TotalCommoditiesExported").val();
					 var ExportValueByCommodity=$("#ExportValueByCommodity").val();
					 var TotalExportValue=$("#TotalExportValue").val();
					 var IncomeDiversification=$("#IncomeDiversification").val();
					 var HumanCapital=$("#HumanCapital").val();
                     var TechnologicalCapital=$("#TechnologicalCapital").val();
					  var FinancialCapital=$("#FinancialCapital").val();
					 var InstitutionalCapital=$("#InstitutionalCapital").val();
					 var ClimateRisk=$("#ClimateRisk").val();
					 var Sensitivity=$("#Sensitivity").val();
					 var Adaptation=$("#Adaptation").val();
					  var CountryID=<?php echo json_encode($uid); ?>;
          var url = 'insert/realizingInsert.php?kpi=4';
            
          $.post( url, {GDP:GDP, GDPperGHG:GDPperGHG, TotalCommoditiesExported:TotalCommoditiesExported, ExportValueByCommodity:ExportValueByCommodity, TotalExportValue:TotalExportValue, IncomeDiversification:IncomeDiversification, HumanCapital:HumanCapital, TechnologicalCapital:TechnologicalCapital, FinancialCapital:FinancialCapital, InstitutionalCapital:InstitutionalCapital, ClimateRisk:ClimateRisk, Sensitivity:Sensitivity, Adaptation:Adaptation, CountryID:CountryID})
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