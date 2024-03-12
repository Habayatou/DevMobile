<?php


include('../../includes/dbconnection.php');

$Theme_param = $_GET['kpi'];

  if($Theme_param == '1'){

$CountryID = trim($_POST["CountryID"]);

$req2 = $dbconn->prepare("SELECT * FROM `ic_1.1` WHERE CountryID = ? ");
        $req2->execute([$CountryID]);
        $data_1_3 = $req2->fetchAll();
        // If data data exist in Table 2_1ii do update
        if (!empty($data_1_3)){
            $TGG = ($_POST['TGG'] == "") ? $data_1_3[0]['TGG'] : trim($_POST['TGG']);
            $TSC = ($_POST['TSC'] == "") ? $data_1_3[0]['TSC'] : trim($_POST['TSC']);
            $AGG = ($_POST['AGG'] == "") ? $data_1_3[0]['AGG'] : trim($_POST['AGG']);
            $TCS = ($_POST['TCS'] == "") ? $data_1_3[0]['TCS'] : trim($_POST['TCS']);
            $EnergyGHG = ($_POST['EnergyGHG'] == "") ? $data_1_3[0]['EnergyGHG'] : trim($_POST['EnergyGHG']);
            $IPPUGHG = ($_POST['IPPUGHG'] == "") ? $data_1_3[0]['IPPUGHG'] : trim($_POST['IPPUGHG']);
            $WASTEGHG = ($_POST['WASTEGHG'] == "") ? $data_1_3[0]['WasteGHG'] : trim($_POST['WASTEGHG']);
            $MethaneEmissions = ($_POST['MethaneEmissions'] == "") ? $data_1_3[0]['MethaneEmissions'] : trim($_POST['MethaneEmissions']);
            $req_d2 = $dbconn->prepare("UPDATE `ic_1.1` SET TGG = ?, TSC = ?, AGG = ?, TCS = ?, EnergyGHG = ?, IPPUGHG = ?, WASTEGHG = ?, MethaneEmissions = ? WHERE CountryID = ? ");
            $req_d2->execute([$TGG, $TSC, $AGG, $TCS, $EnergyGHG, $IPPUGHG, $WASTEGHG, $MethaneEmissions, $CountryID]);
        }else{
            $TGG=trim($_POST['TGG']);
            $TSC=trim($_POST['TSC']);
            $AGG=trim($_POST['AGG']);
            $TCS=trim($_POST['TCS']);
            $EnergyGHG=trim($_POST['EnergyGHG']);
            $IPPUGHG=trim($_POST['IPPUGHG']);
            $WASTEGHG=trim($_POST['WASTEGHG']);
            $MethaneEmissions=trim($_POST['MethaneEmissions']);
            $req_d2 = $dbconn->prepare("INSERT INTO `ic_1.1` SET TGG = ?, TSC = ?, AGG = ?, TCS = ?, EnergyGHG = ?, IPPUGHG = ?, WASTEGHG = ?, MethaneEmissions = ?, CountryID = ? ");
            $req_d2->execute([$TGG, $TSC, $AGG, $TCS, $EnergyGHG, $IPPUGHG, $WASTEGHG, $MethaneEmissions, $CountryID]);
        }

    $dbconn = null;
  }

  if($Theme_param == '2'){

   $CountryID = trim($_POST["CountryID"]);
    
   $req2 = $dbconn->prepare("SELECT * FROM `ic_1.2` WHERE CountryID = ? ");
   $req2->execute([$CountryID]);
   $data_1_3 = $req2->fetchAll();
   // If data data exist in Table 2_1ii do update
   if (!empty($data_1_3)){
        $TempHeatShock = ($_POST['TempHeatShock'] == "") ? $data_1_3[0]['TempHeatShock'] : trim($_POST['TempHeatShock']);
        $Drought_index = ($_POST['Drought_index'] == "") ? $data_1_3[0]['Drought_index'] : trim($_POST['Drought_index']);
        $Flood_Incidence = ($_POST['Flood_Incidence'] == "") ? $data_1_3[0]['Flood_Incidence'] : trim($_POST['Flood_Incidence']);
        $Climate_Incidence = ($_POST['Climate_Incidence'] == "") ? $data_1_3[0]['Climate_Incidence'] : trim($_POST['Climate_Incidence']);
        $req_d2 = $dbconn->prepare("UPDATE `ic_1.2` SET TempHeatShock = ?, Drought_index = ?, Flood_Incidence = ?, Climate_Incidence = ? WHERE CountryID = ? ");
        $req_d2->execute([$TempHeatShock, $Drought_index, $Flood_Incidence, $Climate_Incidence, $CountryID]);
   }else{
    $TempHeatShock=trim($_POST['TempHeatShock']);
    $Drought_index=trim($_POST['Drought_index']);
    $Flood_Incidence=trim($_POST['Flood_Incidence']);
    $Climate_Incidence=trim($_POST['Climate_Incidence']);
       $req_d2 = $dbconn->prepare("INSERT INTO `ic_1.2` SET TempHeatShock = ?, Drought_index = ?, Flood_Incidence = ?, Climate_Incidence = ?, CountryID = ? ");
       $req_d2->execute([$TempHeatShock, $Drought_index, $Flood_Incidence, $Climate_Incidence, $CountryID]);
   }

        $dbconn = null;
      } 
if($Theme_param == '3'){
    $CountryID = trim($_POST["CountryID"]);
    
    $req2 = $dbconn->prepare("SELECT * FROM `ic_1.3` WHERE CountryID = ? ");
    $req2->execute([$CountryID]);
    $data_1_3 = $req2->fetchAll();
    // If data data exist in Table 2_1ii do update
    if (!empty($data_1_3)){
        $ForestArea = ($_POST['ForestArea'] == "") ? $data_1_3[0]['ForestArea'] : trim($_POST['ForestArea']);
        $NaturalForestArea = ($_POST['NaturalForestArea'] == "") ? $data_1_3[0]['NaturalForestArea'] : trim($_POST['NaturalForestArea']);
        $BiodiversityChange = ($_POST['BiodiversityChange'] == "") ? $data_1_3[0]['BiodiversityChange'] : trim($_POST['BiodiversityChange']);
            
        $req_d2 = $dbconn->prepare("UPDATE `ic_1.3` SET ForestArea = ?, NaturalForestArea = ?, BiodiversityChange = ? WHERE CountryID = ? ");
        $req_d2->execute([$ForestArea, $NaturalForestArea, $BiodiversityChange, $CountryID]);
    }else{
        $ForestArea=trim($_POST['ForestArea']);
        $NaturalForestArea=trim($_POST['NaturalForestArea']);
        $BiodiversityChange=trim($_POST['BiodiversityChange']);
        
        $req_d2 = $dbconn->prepare("INSERT INTO `ic_1.3` SET ForestArea = ?, NaturalForestArea = ?, BiodiversityChange = ?, CountryID = ? ");
        $req_d2->execute([$ForestArea, $NaturalForestArea, $BiodiversityChange, $CountryID]);
    }
            $dbconn = null;
          } 
if($Theme_param == '4'){

        $CountryID = trim($_POST["CountryID"]);
            
        $req2 = $dbconn->prepare("SELECT * FROM `ic_1.4` WHERE CountryID = ? ");
        $req2->execute([$CountryID]);
        $data_1_3 = $req2->fetchAll();
        // If data data exist in Table 2_1ii do update
        if (!empty($data_1_3)){
            $GDP = ($_POST['GDP'] == "") ? $data_1_3[0]['GDP'] : trim($_POST['GDP']);
            $GDPperGHG = ($_POST['GDPperGHG'] == "") ? $data_1_3[0]['GDPperGHG'] : trim($_POST['GDPperGHG']);
            $TotalCommoditiesExported = ($_POST['TotalCommoditiesExported'] == "") ? $data_1_3[0]['TotalCommoditiesExported'] : trim($_POST['TotalCommoditiesExported']);
            $ExportValueByCommodity = ($_POST['ExportValueByCommodity'] == "") ? $data_1_3[0]['ExportValueByCommodity'] : trim($_POST['ExportValueByCommodity']);
            $TotalExportValue = ($_POST['TotalExportValue'] == "") ? $data_1_3[0]['TotalExportValue'] : trim($_POST['TotalExportValue']);
            $IncomeDiversification = ($_POST['IncomeDiversification'] == "") ? $data_1_3[0]['IncomeDiversification'] : trim($_POST['IncomeDiversification']);
            $HumanCapital = ($_POST['HumanCapital'] == "") ? $data_1_3[0]['HumanCapital'] : trim($_POST['HumanCapital']);
            $TechnologicalCapital = ($_POST['TechnologicalCapital'] == "") ? $data_1_3[0]['TechnologicalCapital'] : trim($_POST['TechnologicalCapital']);
            $FinancialCapital = ($_POST['FinancialCapital'] == "") ? $data_1_3[0]['FinancialCapital'] : trim($_POST['FinancialCapital']);
            $InstitutionalCapital = ($_POST['InstitutionalCapital'] == "") ? $data_1_3[0]['InstitutionalCapital'] : trim($_POST['InstitutionalCapital']);
            $ClimateRisk = ($_POST['ClimateRisk'] == "") ? $data_1_3[0]['ClimateRisk'] : trim($_POST['ClimateRisk']);
            $Sensitivity = ($_POST['Sensitivity'] == "") ? $data_1_3[0]['Sensitivity'] : trim($_POST['Sensitivity']);
            $Adaptation = ($_POST['Adaptation'] == "") ? $data_1_3[0]['Adaptation'] : trim($_POST['Adaptation']);
            $req_d2 = $dbconn->prepare("UPDATE `ic_1.4` SET GDP = ?, GDPperGHG = ?, TotalCommoditiesExported = ?, ExportValueByCommodity = ?, TotalExportValue = ?, IncomeDiversification = ?, HumanCapital = ?, TechnologicalCapital = ?,  FinancialCapital = ?, InstitutionalCapital = ?, ClimateRisk = ?, Sensitivity = ?, Adaptation = ?, CountryID = ? ");
            $req_d2->execute([$GDP, $GDPperGHG, $TotalCommoditiesExported, $ExportValueByCommodity, $TotalExportValue, $IncomeDiversification, $HumanCapital, $TechnologicalCapital, $FinancialCapital, $InstitutionalCapital, $ClimateRisk, $Sensitivity, $Adaptation, $CountryID]);
        }else{
            $GDP=trim($_POST['GDP']);
            $GDPperGHG=trim($_POST['GDPperGHG']);
            $TotalCommoditiesExported=trim($_POST['TotalCommoditiesExported']);
            $ExportValueByCommodity=trim($_POST['ExportValueByCommodity']);
            $TotalExportValue=trim($_POST['TotalExportValue']);
            $IncomeDiversification=trim($_POST['IncomeDiversification']);
            $HumanCapital=trim($_POST['HumanCapital']);
            $TechnologicalCapital=trim($_POST['TechnologicalCapital']);
            $FinancialCapital=trim($_POST['FinancialCapital']);
            $InstitutionalCapital=trim($_POST['InstitutionalCapital']);
            $ClimateRisk=trim($_POST['ClimateRisk']);
            $Sensitivity=trim($_POST['Sensitivity']);
            $Adaptation=trim($_POST['Adaptation']);
            $req_d2 = $dbconn->prepare("INSERT INTO `ic_1.4` SET GDP = ?, GDPperGHG = ?, TotalCommoditiesExported = ?, ExportValueByCommodity = ?, TotalExportValue = ?, IncomeDiversification = ?, HumanCapital = ?, TechnologicalCapital = ?,  FinancialCapital = ?, InstitutionalCapital = ?, ClimateRisk = ?, Sensitivity = ?, Adaptation = ?, CountryID = ? ");
            $req_d2->execute([$GDP, $GDPperGHG, $TotalCommoditiesExported, $ExportValueByCommodity, $TotalExportValue, $IncomeDiversification, $HumanCapital, $TechnologicalCapital, $FinancialCapital, $InstitutionalCapital, $ClimateRisk, $Sensitivity, $Adaptation, $CountryID]);
        }
                $dbconn = null;
              }