<?php


include('../../includes/dbconnection.php');

$Theme_param = $_GET['kpi'];

  if($Theme_param == '1'){

$CountryID = trim($_POST["CountryID"]);

$req2 = $dbconn->prepare("SELECT * FROM `ic_3.1` WHERE CountryID = ? ");
        $req2->execute([$CountryID]);
        $data_1_3 = $req2->fetchAll();
        // If data data exist in Table 2_1ii do update
        if (!empty($data_1_3)){
            $GovernmentMinistries = ($_POST['GovernmentMinistries'] == "") ? $data_1_3[0]['GovernmentMinistries'] : trim($_POST['GovernmentMinistries']);
            $MinistriesWithClimateFP = ($_POST['MinistriesWithClimateFP'] == "") ? $data_1_3[0]['MinistriesWithClimateFP'] : trim($_POST['MinistriesWithClimateFP']);
            $ClimateChangeAgencyPresence = ($_POST['ClimateChangeAgencyPresence'] == "") ? $data_1_3[0]['ClimateChangeAgencyPresence'] : trim($_POST['ClimateChangeAgencyPresence']);
            $MSWGpresence = ($_POST['MSWGpresence'] == "") ? $data_1_3[0]['MSWGpresence'] : trim($_POST['MSWGpresence']);
            $MeetingsPerYear = ($_POST['MeetingsPerYear'] == "") ? $data_1_3[0]['MeetingsPerYear'] : trim($_POST['MeetingsPerYear']);
            $MemberMeetingParticipation = ($_POST['MemberMeetingParticipation'] == "") ? $data_1_3[0]['MemberMeetingParticipation'] : trim($_POST['MemberMeetingParticipation']);
            $SubNationalClimateAgency = ($_POST['SubNationalClimateAgency'] == "") ? $data_1_3[0]['SubNationalClimateAgency'] : trim($_POST['SubNationalClimateAgency']);
            $SubNationalCCCP = ($_POST['SubNationalCCCP'] == "") ? $data_1_3[0]['SubNationalCCCP'] : trim($_POST['SubNationalCCCP']);
            $req_d2 = $dbconn->prepare("UPDATE `ic_3.1` SET GovernmentMinistries = ?, MinistriesWithClimateFP = ?, ClimateChangeAgencyPresence = ?, MSWGpresence = ?, MeetingsPerYear = ?, MemberMeetingParticipation = ?, SubNationalClimateAgency = ?, SubNationalCCCP = ? WHERE CountryID = ? ");
            $req_d2->execute([$GovernmentMinistries, $MinistriesWithClimateFP, $ClimateChangeAgencyPresence, $MSWGpresence, $MeetingsPerYear, $MemberMeetingParticipation, $SubNationalClimateAgency, $SubNationalCCCP, $CountryID]);
        }else{
            $GovernmentMinistries=trim($_POST['GovernmentMinistries']);
            $MinistriesWithClimateFP=trim($_POST['MinistriesWithClimateFP']);
            $ClimateChangeAgencyPresence=trim($_POST['ClimateChangeAgencyPresence']);
            $MSWGpresence=trim($_POST['MSWGpresence']);
            $MeetingsPerYear=trim($_POST['MeetingsPerYear']);
            $MemberMeetingParticipation=trim($_POST['MemberMeetingParticipation']);
            $SubNationalClimateAgency=trim($_POST['SubNationalClimateAgency']);
            $SubNationalCCCP=trim($_POST['SubNationalCCCP']);
            $req_d2 = $dbconn->prepare("INSERT INTO `ic_3.1` SET GovernmentMinistries = ?, MinistriesWithClimateFP = ?, ClimateChangeAgencyPresence = ?, MSWGpresence = ?, MeetingsPerYear = ?, MemberMeetingParticipation = ?, SubNationalClimateAgency = ?, SubNationalCCCP = ?, CountryID = ? ");
            $req_d2->execute([$GovernmentMinistries, $MinistriesWithClimateFP, $ClimateChangeAgencyPresence, $MSWGpresence, $MeetingsPerYear, $MemberMeetingParticipation, $SubNationalClimateAgency, $SubNationalCCCP, $CountryID]);
        }

    $dbconn = null;
  }

  if($Theme_param == '2'){

   $CountryID = trim($_POST["CountryID"]);
    
   $req2 = $dbconn->prepare("SELECT * FROM `ic_3.2` WHERE CountryID = ? ");
   $req2->execute([$CountryID]);
   $data_1_3 = $req2->fetchAll();
   // If data data exist in Table 2_1ii do update
   if (!empty($data_1_3)){
        $ClimateActionBudget = ($_POST['ClimateActionBudget'] == "") ? $data_1_3[0]['ClimateActionBudget'] : trim($_POST['ClimateActionBudget']);
        $TotalBudget = ($_POST['TotalBudget'] == "") ? $data_1_3[0]['TotalBudget'] : trim($_POST['TotalBudget']);
        $ClimateFundReceived = ($_POST['ClimateFundReceived'] == "") ? $data_1_3[0]['ClimateFundReceived'] : trim($_POST['ClimateFundReceived']);
        $GDP = ($_POST['GDP'] == "") ? $data_1_3[0]['GDP'] : trim($_POST['GDP']);
        $TotalAdaptationBudgetAllocated = ($_POST['TotalAdaptationBudgetAllocated'] == "") ? $data_1_3[0]['TotalAdaptationBudgetAllocated'] : trim($_POST['TotalAdaptationBudgetAllocated']);
        $InternationalSourcesFund = ($_POST['InternationalSourcesFund'] == "") ? $data_1_3[0]['InternationalSourcesFund'] : trim($_POST['InternationalSourcesFund']);
        $AdaptationActionsBudgetNeed = ($_POST['AdaptationActionsBudgetNeed'] == "") ? $data_1_3[0]['AdaptationActionsBudgetNeed'] : trim($_POST['AdaptationActionsBudgetNeed']);
        $req_d2 = $dbconn->prepare("UPDATE `ic_3.2` SET ClimateActionBudget = ?, TotalBudget = ?, ClimateFundReceived = ?, GDP = ?, TotalAdaptationBudgetAllocated = ?, InternationalSourcesFund = ?, AdaptationActionsBudgetNeed = ? WHERE CountryID = ? ");
        $req_d2->execute([$ClimateActionBudget, $TotalBudget, $ClimateFundReceived, $GDP, $TotalAdaptationBudgetAllocated, $InternationalSourcesFund, $AdaptationActionsBudgetNeed, $CountryID]);
   }else{
        $ClimateActionBudget=trim($_POST['ClimateActionBudget']);
        $TotalBudget=trim($_POST['TotalBudget']);
        $ClimateFundReceived=trim($_POST['ClimateFundReceived']);
        $GDP=trim($_POST['GDP']);
        $TotalAdaptationBudgetAllocated=trim($_POST['TotalAdaptationBudgetAllocated']);
        $InternationalSourcesFund=trim($_POST['InternationalSourcesFund']);
        $AdaptationActionsBudgetNeed=trim($_POST['AdaptationActionsBudgetNeed']);
        $req_d2 = $dbconn->prepare("INSERT INTO `ic_3.2` SET ClimateActionBudget = ?, TotalBudget = ?, ClimateFundReceived = ?, GDP = ?, TotalAdaptationBudgetAllocated = ?, InternationalSourcesFund = ?, AdaptationActionsBudgetNeed = ?, CountryID = ? ");
       $req_d2->execute([$ClimateActionBudget, $TotalBudget, $ClimateFundReceived, $GDP, $TotalAdaptationBudgetAllocated, $InternationalSourcesFund, $AdaptationActionsBudgetNeed, $CountryID]);
   }
        $dbconn = null;
      } 
      if($Theme_param == '3'){
        $CountryID = trim($_POST["CountryID"]);
        
        $req2 = $dbconn->prepare("SELECT * FROM `ic_3.3` WHERE CountryID = ? ");
        $req2->execute([$CountryID]);
        $data_1_3 = $req2->fetchAll();
        // If data data exist in Table 2_1ii do update
        if (!empty($data_1_3)){
            $FarmersReceivingWeatherInfo = ($_POST['FarmersReceivingWeatherInfo'] == "") ? $data_1_3[0]['FarmersReceivingWeatherInfo'] : trim($_POST['FarmersReceivingWeatherInfo']);
            $FarmersNumber = ($_POST['FarmersNumber'] == "") ? $data_1_3[0]['FarmersNumber'] : trim($_POST['FarmersNumber']);
            $WeatherDisastersOccurrence = ($_POST['WeatherDisastersOccurrence'] == "") ? $data_1_3[0]['WeatherDisastersOccurrence'] : trim($_POST['WeatherDisastersOccurrence']);
            $EarlyWarningWeatherDisasters = ($_POST['EarlyWarningWeatherDisasters'] == "") ? $data_1_3[0]['EarlyWarningWeatherDisasters'] : trim($_POST['EarlyWarningWeatherDisasters']);
            $InvestmentClimateScienceResearch = ($_POST['InvestmentClimateScienceResearch'] == "") ? $data_1_3[0]['InvestmentClimateScienceResearch'] : trim($_POST['InvestmentClimateScienceResearch']);
            $req_d2 = $dbconn->prepare("UPDATE `ic_3.3` SET FarmersReceivingWeatherInfo = ?, FarmersNumber = ?, WeatherDisastersOccurrence = ?, EarlyWarningWeatherDisasters = ?, InvestmentClimateScienceResearch = ? WHERE CountryID = ? ");
            $req_d2->execute([$FarmersReceivingWeatherInfo, $FarmersNumber, $WeatherDisastersOccurrence, $EarlyWarningWeatherDisasters, $InvestmentClimateScienceResearch, $CountryID]);
        }else{
            $FarmersReceivingWeatherInfo=trim($_POST['FarmersReceivingWeatherInfo']);
            $FarmersNumber=trim($_POST['FarmersNumber']);
            $WeatherDisastersOccurrence=trim($_POST['WeatherDisastersOccurrence']);
            $EarlyWarningWeatherDisasters=trim($_POST['EarlyWarningWeatherDisasters']);
            $InvestmentClimateScienceResearch=trim($_POST['InvestmentClimateScienceResearch']);
            $req_d2 = $dbconn->prepare("INSERT INTO `ic_3.3` SET FarmersReceivingWeatherInfo = ?, FarmersNumber = ?, WeatherDisastersOccurrence = ?, EarlyWarningWeatherDisasters = ?, InvestmentClimateScienceResearch = ?, CountryID = ? ");
            $req_d2->execute([$FarmersReceivingWeatherInfo, $FarmersNumber, $WeatherDisastersOccurrence, $EarlyWarningWeatherDisasters, $InvestmentClimateScienceResearch, $CountryID]);
        }
                $dbconn = null;
              } 