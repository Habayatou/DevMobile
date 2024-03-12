<?php


include('../../includes/dbconnection.php');

$Theme_param = $_GET['kpi'];

  if($Theme_param == '1'){

$CountryID = trim($_POST["CountryID"]);

$req2 = $dbconn->prepare("SELECT * FROM `ic_2.1` WHERE CountryID = ? ");
        $req2->execute([$CountryID]);
        $data_1_3 = $req2->fetchAll();
        // If data data exist in Table 2_1ii do update
        if (!empty($data_1_3)){
            $LandUsePlanning = ($_POST['LandUsePlanning'] == "") ? $data_1_3[0]['LandUsePlanning'] : trim($_POST['LandUsePlanning']);
            $GreenCities = ($_POST['GreenCities'] == "") ? $data_1_3[0]['GreenCities'] : trim($_POST['GreenCities']);
            $ProtectedAreas = ($_POST['ProtectedAreas'] == "") ? $data_1_3[0]['ProtectedAreas'] : trim($_POST['ProtectedAreas']);
            $CostalLands = ($_POST['CostalLands'] == "") ? $data_1_3[0]['CostalLands'] : trim($_POST['CostalLands']);
            $RangeLands = ($_POST['RangeLands'] == "") ? $data_1_3[0]['RangeLands'] : trim($_POST['RangeLands']);
            $ForestArea = ($_POST['ForestArea'] == "") ? $data_1_3[0]['ForestArea'] : trim($_POST['ForestArea']);
            $SavannaLands = ($_POST['SavannaLands'] == "") ? $data_1_3[0]['SavannaLands'] : trim($_POST['SavannaLands']);
            $ForestWetlandRestored = ($_POST['ForestWetlandRestored'] == "") ? $data_1_3[0]['ForestWetlandRestored'] : trim($_POST['ForestWetlandRestored']);
            $req_d2 = $dbconn->prepare("UPDATE `ic_2.1` SET LandUsePlanning = ?, GreenCities = ?, ProtectedAreas = ?, CostalLands = ?, RangeLands = ?, ForestArea = ?, SavannaLands = ?, ForestWetlandRestored = ? WHERE CountryID = ? ");
            $req_d2->execute([$LandUsePlanning, $GreenCities, $ProtectedAreas, $CostalLands, $RangeLands, $ForestArea, $SavannaLands, $ForestWetlandRestored, $CountryID]);
        }else{
            $LandUsePlanning=trim($_POST['LandUsePlanning']);
            $GreenCities=trim($_POST['GreenCities']);
            $ProtectedAreas=trim($_POST['ProtectedAreas']);
            $CostalLands=trim($_POST['CostalLands']);
            $RangeLands=trim($_POST['RangeLands']);
            $ForestArea=trim($_POST['ForestArea']);
            $SavannaLands=trim($_POST['SavannaLands']);
            $ForestWetlandRestored=trim($_POST['ForestWetlandRestored']);
            $req_d2 = $dbconn->prepare("INSERT INTO `ic_2.1` SET LandUsePlanning = ?, GreenCities = ?, ProtectedAreas = ?, CostalLands = ?, RangeLands = ?, ForestArea = ?, SavannaLands = ?, ForestWetlandRestored = ?, CountryID = ? ");
            $req_d2->execute([$LandUsePlanning, $GreenCities, $ProtectedAreas, $CostalLands, $RangeLands, $ForestArea, $SavannaLands, $ForestWetlandRestored, $CountryID]);
        }

    $dbconn = null;
  }

  if($Theme_param == '2'){

   $CountryID = trim($_POST["CountryID"]);
    
   $req2 = $dbconn->prepare("SELECT * FROM `ic_2.2` WHERE CountryID = ? ");
   $req2->execute([$CountryID]);
   $data_1_3 = $req2->fetchAll();
   // If data data exist in Table 2_1ii do update
   if (!empty($data_1_3)){
        $ArableLand = ($_POST['ArableLand'] == "") ? $data_1_3[0]['ArableLand'] : trim($_POST['ArableLand']);
        $IrrigatedLand = ($_POST['IrrigatedLand'] == "") ? $data_1_3[0]['IrrigatedLand'] : trim($_POST['IrrigatedLand']);
        $ArableLandSWC = ($_POST['ArableLandSWC'] == "") ? $data_1_3[0]['ArableLandSWC'] : trim($_POST['ArableLandSWC']);
        $NCF = ($_POST['NCF'] == "") ? $data_1_3[0]['NCF'] : trim($_POST['NCF']);
        $NMF = ($_POST['NMF'] == "") ? $data_1_3[0]['NMF'] : trim($_POST['NMF']);
        $NTF = ($_POST['NTF'] == "") ? $data_1_3[0]['NTF'] : trim($_POST['NTF']);
        $NRF = ($_POST['NRF'] == "") ? $data_1_3[0]['NRF'] : trim($_POST['NRF']);
        $FarmersApplyingFertilizers = ($_POST['FarmersApplyingFertilizers'] == "") ? $data_1_3[0]['FarmersApplyingFertilizers'] : trim($_POST['FarmersApplyingFertilizers']);
        $NumberFarmers = ($_POST['NumberFarmers'] == "") ? $data_1_3[0]['NumberFarmers'] : trim($_POST['NumberFarmers']);
        $FarmersImprovedSeedsArea = ($_POST['FarmersImprovedSeedsArea'] == "") ? $data_1_3[0]['WasteGHG'] : trim($_POST['FarmersImprovedSeedsArea']);
        $CropAreaSize = ($_POST['CropAreaSize'] == "") ? $data_1_3[0]['CropAreaSize'] : trim($_POST['CropAreaSize']);
        $ImprovedCowBreeds = ($_POST['ImprovedCowBreeds'] == "") ? $data_1_3[0]['ImprovedCowBreeds'] : trim($_POST['ImprovedCowBreeds']);
        $CowNumber = ($_POST['CowNumber'] == "") ? $data_1_3[0]['CowNumber'] : trim($_POST['CowNumber']);
        $LargeRuminantPopulationChange = ($_POST['LargeRuminantPopulationChange'] == "") ? $data_1_3[0]['LargeRuminantPopulationChange'] : trim($_POST['LargeRuminantPopulationChange']);
        $SmallRuminantPopulationChange = ($_POST['SmallRuminantPopulationChange'] == "") ? $data_1_3[0]['SmallRuminantPopulationChange'] : trim($_POST['SmallRuminantPopulationChange']);
        $FarmersLivestockOwnership = ($_POST['FarmersLivestockOwnership'] == "") ? $data_1_3[0]['FarmersLivestockOwnership'] : trim($_POST['FarmersLivestockOwnership']);
        $AerobicTreatment = ($_POST['AerobicTreatment'] == "") ? $data_1_3[0]['WasteGHG'] : trim($_POST['AerobicTreatment']);
        $ManureStorage = ($_POST['ManureStorage'] == "") ? $data_1_3[0]['ManureStorage'] : trim($_POST['ManureStorage']);
        $PaddyRiceProduction = ($_POST['PaddyRiceProduction'] == "") ? $data_1_3[0]['PaddyRiceProduction'] : trim($_POST['PaddyRiceProduction']);
        $AWDinRiceCultivation = ($_POST['AWDinRiceCultivation'] == "") ? $data_1_3[0]['AWDinRiceCultivation'] : trim($_POST['AWDinRiceCultivation']);
        $req_d2 = $dbconn->prepare("UPDATE `ic_2.2` SET ArableLand = ?, IrrigatedLand = ?, ArableLandSWC = ?, NCF = ?, NMF = ?, NTF = ?, NRF = ?, FarmersApplyingFertilizers = ?, NumberFarmers = ?, FarmersImprovedSeedsArea = ?, CropAreaSize = ?, ImprovedCowBreeds = ?, CowNumber = ?, LargeRuminantPopulationChange = ?, SmallRuminantPopulationChange = ?, FarmersLivestockOwnership = ?, AerobicTreatment = ?, ManureStorage = ?, PaddyRiceProduction = ?, AWDinRiceCultivation = ? WHERE CountryID = ? ");
        $req_d2->execute([$ArableLand, $IrrigatedLand, $ArableLandSWC, $NCF, $NMF, $NTF, $NRF, $FarmersApplyingFertilizers, $NumberFarmers, $FarmersImprovedSeedsArea, $CropAreaSize, $ImprovedCowBreeds, $CowNumber, $LargeRuminantPopulationChange, $SmallRuminantPopulationChange, $FarmersLivestockOwnership, $AerobicTreatment, $ManureStorage, $PaddyRiceProduction, $AWDinRiceCultivation, $CountryID]);
   }else{
    $ArableLand=trim($_POST['ArableLand']);
        $IrrigatedLand=trim($_POST['IrrigatedLand']);
        $ArableLandSWC=trim($_POST['ArableLandSWC']);
        $NCF=trim($_POST['NCF']);
        $NMF=trim($_POST['NMF']);
        $NTF=trim($_POST['NTF']);
        $NRF=trim($_POST['NRF']);
        $FarmersApplyingFertilizers=trim($_POST['FarmersApplyingFertilizers']);
        $NumberFarmers=trim($_POST['NumberFarmers']);
        $FarmersImprovedSeedsArea=trim($_POST['FarmersImprovedSeedsArea']);
        $CropAreaSize=trim($_POST['CropAreaSize']);
        $ImprovedCowBreeds=trim($_POST['ImprovedCowBreeds']);
        $CowNumber=trim($_POST['CowNumber']);
        $LargeRuminantPopulationChange=trim($_POST['LargeRuminantPopulationChange']);
        $SmallRuminantPopulationChange=trim($_POST['SmallRuminantPopulationChange']);
        $FarmersLivestockOwnership=trim($_POST['FarmersLivestockOwnership']);
        $AerobicTreatment=trim($_POST['AerobicTreatment']);
        $ManureStorage=trim($_POST['ManureStorage']);
        $PaddyRiceProduction=trim($_POST['PaddyRiceProduction']);
        $AWDinRiceCultivation=trim($_POST['AWDinRiceCultivation']);
       $req_d2 = $dbconn->prepare("INSERT INTO `ic_2.2` SET ArableLand = ?, IrrigatedLand = ?, ArableLandSWC = ?, NCF = ?, NMF = ?, NTF = ?, NRF = ?, FarmersApplyingFertilizers = ?, NumberFarmers = ?, FarmersImprovedSeedsArea = ?, CropAreaSize = ?, ImprovedCowBreeds = ?, CowNumber = ?, LargeRuminantPopulationChange = ?, SmallRuminantPopulationChange = ?, FarmersLivestockOwnership = ?, AerobicTreatment = ?, ManureStorage = ?, PaddyRiceProduction = ?, AWDinRiceCultivation = ?, CountryID = ? ");
       $req_d2->execute([$ArableLand, $IrrigatedLand, $ArableLandSWC, $NCF, $NMF, $NTF, $NRF, $FarmersApplyingFertilizers, $NumberFarmers, $FarmersImprovedSeedsArea, $CropAreaSize, $ImprovedCowBreeds, $CowNumber, $LargeRuminantPopulationChange, $SmallRuminantPopulationChange, $FarmersLivestockOwnership, $AerobicTreatment, $ManureStorage, $PaddyRiceProduction, $AWDinRiceCultivation, $CountryID]);
   }

        $dbconn = null;
      } 
      if($Theme_param == '3'){
        $CountryID = trim($_POST["CountryID"]);
        
        $req2 = $dbconn->prepare("SELECT * FROM `ic_2.3` WHERE CountryID = ? ");
        $req2->execute([$CountryID]);
        $data_1_3 = $req2->fetchAll();
        // If data data exist in Table 2_1ii do update
        if (!empty($data_1_3)){
            $RenewableEnergyVolume = ($_POST['RenewableEnergyVolume'] == "") ? $data_1_3[0]['RenewableEnergyVolume'] : trim($_POST['RenewableEnergyVolume']);
            $EnergyVolumeSupply = ($_POST['EnergyVolumeSupply'] == "") ? $data_1_3[0]['EnergyVolumeSupply'] : trim($_POST['EnergyVolumeSupply']);
            $ElectricVehiclesNumber = ($_POST['ElectricVehiclesNumber'] == "") ? $data_1_3[0]['ElectricVehiclesNumber'] : trim($_POST['ElectricVehiclesNumber']);
            $VehiclesNumber = ($_POST['VehiclesNumber'] == "") ? $data_1_3[0]['VehiclesNumber'] : trim($_POST['VehiclesNumber']);
            $FossilFuelConsumption = ($_POST['FossilFuelConsumption'] == "") ? $data_1_3[0]['FossilFuelConsumption'] : trim($_POST['FossilFuelConsumption']);
            $GDP_2_3 = ($_POST['GDP_2_3'] == "") ? $data_1_3[0]['GDP_2_3'] : trim($_POST['GDP_2_3']);
            $BiomassHouseholdsNumber = ($_POST['BiomassHouseholdsNumber'] == "") ? $data_1_3[0]['BiomassHouseholdsNumber'] : trim($_POST['BiomassHouseholdsNumber']);
            $HouseholdsNumber = ($_POST['HouseholdsNumber'] == "") ? $data_1_3[0]['HouseholdsNumber'] : trim($_POST['HouseholdsNumber']);
            $SolarTechAdoption = ($_POST['SolarTechAdoption'] == "") ? $data_1_3[0]['SolarTechAdoption'] : trim($_POST['SolarTechAdoption']);
               
            $req_d2 = $dbconn->prepare("UPDATE `ic_2.3` SET RenewableEnergyVolume = ?, EnergyVolumeSupply = ?, ElectricVehiclesNumber = ?, VehiclesNumber = ?, FossilFuelConsumption = ?, GDP_2_3 = ?, BiomassHouseholdsNumber = ?, HouseholdsNumber = ?, SolarTechAdoption = ? WHERE CountryID = ? ");
            $req_d2->execute([$RenewableEnergyVolume, $EnergyVolumeSupply, $ElectricVehiclesNumber, $VehiclesNumber, $FossilFuelConsumption, $GDP_2_3, $BiomassHouseholdsNumber, $HouseholdsNumber, $SolarTechAdoption, $CountryID]);
        }else{
            $RenewableEnergyVolume=trim($_POST['RenewableEnergyVolume']);
            $EnergyVolumeSupply=trim($_POST['EnergyVolumeSupply']);
            $ElectricVehiclesNumber=trim($_POST['ElectricVehiclesNumber']);
            $VehiclesNumber=trim($_POST['VehiclesNumber']);
            $FossilFuelConsumption=trim($_POST['FossilFuelConsumption']);
            $GDP_2_3=trim($_POST['GDP_2_3']);
            $BiomassHouseholdsNumber=trim($_POST['BiomassHouseholdsNumber']);
            $HouseholdsNumber=trim($_POST['HouseholdsNumber']);
            $SolarTechAdoption=trim($_POST['SolarTechAdoption']);
            
            $req_d2 = $dbconn->prepare("INSERT INTO `ic_2.3` SET RenewableEnergyVolume = ?, EnergyVolumeSupply = ?, ElectricVehiclesNumber = ?, VehiclesNumber = ?, FossilFuelConsumption = ?, GDP_2_3 = ?, BiomassHouseholdsNumber = ?, HouseholdsNumber = ?, SolarTechAdoption = ?, CountryID = ? ");
            $req_d2->execute([$RenewableEnergyVolume, $EnergyVolumeSupply, $ElectricVehiclesNumber, $VehiclesNumber, $FossilFuelConsumption, $GDP_2_3, $BiomassHouseholdsNumber, $HouseholdsNumber, $SolarTechAdoption, $CountryID]);
        }
                $dbconn = null;
              } 
if($Theme_param == '4'){

        $CountryID = trim($_POST["CountryID"]);
            
        $req2 = $dbconn->prepare("SELECT * FROM `ic_2.4` WHERE CountryID = ? ");
        $req2->execute([$CountryID]);
        $data_1_3 = $req2->fetchAll();
        // If data data exist in Table 2_1ii do update
        if (!empty($data_1_3)){
            $EligibleHouseholdsDS = ($_POST['EligibleHouseholdsDS'] == "") ? $data_1_3[0]['EligibleHouseholdsDS'] : trim($_POST['EligibleHouseholdsDS']);
            $ReceivedHouseholdsDS = ($_POST['ReceivedHouseholdsDS'] == "") ? $data_1_3[0]['ReceivedHouseholdsDS'] : trim($_POST['ReceivedHouseholdsDS']);
            $InterestedOrEligibleHouseholdsPW = ($_POST['InterestedOrEligibleHouseholdsPW'] == "") ? $data_1_3[0]['InterestedOrEligibleHouseholdsPW'] : trim($_POST['InterestedOrEligibleHouseholdsPW']);
            $PeopleParticipatedPW = ($_POST['PeopleParticipatedPW'] == "") ? $data_1_3[0]['PeopleParticipatedPW'] : trim($_POST['PeopleParticipatedPW']);
            $PeopleReceivedIncome = ($_POST['PeopleReceivedIncome'] == "") ? $data_1_3[0]['PeopleReceivedIncome'] : trim($_POST['PeopleReceivedIncome']);
            $PeopleDisasterAffected = ($_POST['PeopleDisasterAffected'] == "") ? $data_1_3[0]['PeopleDisasterAffected'] : trim($_POST['PeopleDisasterAffected']);
            $PeopleDisasterSupported = ($_POST['PeopleDisasterSupported'] == "") ? $data_1_3[0]['PeopleDisasterSupported'] : trim($_POST['PeopleDisasterSupported']);
            $PeopleDisasterRehabilitated = ($_POST['PeopleDisasterRehabilitated'] == "") ? $data_1_3[0]['PeopleDisasterRehabilitated'] : trim($_POST['PeopleDisasterRehabilitated']);
            $FoodStorageCapacity = ($_POST['FoodStorageCapacity'] == "") ? $data_1_3[0]['FoodStorageCapacity'] : trim($_POST['FoodStorageCapacity']);
            $FoodReserve = ($_POST['FoodReserve'] == "") ? $data_1_3[0]['FoodReserve'] : trim($_POST['FoodReserve']);
            $CropFarmers = ($_POST['CropFarmers'] == "") ? $data_1_3[0]['CropFarmers'] : trim($_POST['CropFarmers']);
            $CropInsuranceFarmers = ($_POST['CropInsuranceFarmers'] == "") ? $data_1_3[0]['CropInsuranceFarmers'] : trim($_POST['CropInsuranceFarmers']);
            $LivestockFarmers = ($_POST['LivestockFarmers'] == "") ? $data_1_3[0]['LivestockFarmers'] : trim($_POST['LivestockFarmers']);
            $LivestockInsuranceFarmers = ($_POST['LivestockInsuranceFarmers'] == "") ? $data_1_3[0]['LivestockInsuranceFarmers'] : trim($_POST['LivestockInsuranceFarmers']);
            $TotalPopulation = ($_POST['TotalPopulation'] == "") ? $data_1_3[0]['TotalPopulation'] : trim($_POST['TotalPopulation']);
            $HealthInsuranceCoverage = ($_POST['HealthInsuranceCoverage'] == "") ? $data_1_3[0]['HealthInsuranceCoverage'] : trim($_POST['HealthInsuranceCoverage']);
            $EmploymentCreationSupport = ($_POST['EmploymentCreationSupport'] == "") ? $data_1_3[0]['EmploymentCreationSupport'] : trim($_POST['EmploymentCreationSupport']);
            $req_d2 = $dbconn->prepare("UPDATE `ic_2.4` SET EligibleHouseholdsDS = ?, ReceivedHouseholdsDS = ?, InterestedOrEligibleHouseholdsPW = ?, PeopleParticipatedPW = ?, PeopleReceivedIncome = ?, PeopleDisasterAffected = ?, PeopleDisasterSupported = ?, PeopleDisasterRehabilitated = ?,  FoodStorageCapacity = ?, FoodReserve = ?, CropFarmers = ?, CropInsuranceFarmers = ?, LivestockFarmers = ?, LivestockInsuranceFarmers = ?, TotalPopulation = ?, HealthInsuranceCoverage = ?, EmploymentCreationSupport = ? WHERE CountryID = ? ");
            $req_d2->execute([$EligibleHouseholdsDS, $ReceivedHouseholdsDS, $InterestedOrEligibleHouseholdsPW, $PeopleParticipatedPW, $PeopleReceivedIncome, $PeopleDisasterAffected, $PeopleDisasterSupported, $PeopleDisasterRehabilitated, $FoodStorageCapacity, $FoodReserve, $CropFarmers, $CropInsuranceFarmers, $LivestockFarmers, $LivestockInsuranceFarmers, $TotalPopulation, $HealthInsuranceCoverage, $EmploymentCreationSupport, $CountryID]);
        }else{
            $EligibleHouseholdsDS=trim($_POST['EligibleHouseholdsDS']);
            $ReceivedHouseholdsDS=trim($_POST['ReceivedHouseholdsDS']);
            $InterestedOrEligibleHouseholdsPW=trim($_POST['InterestedOrEligibleHouseholdsPW']);
            $PeopleParticipatedPW=trim($_POST['PeopleParticipatedPW']);
            $PeopleReceivedIncome=trim($_POST['PeopleReceivedIncome']);
            $PeopleDisasterAffected=trim($_POST['PeopleDisasterAffected']);
            $PeopleDisasterSupported=trim($_POST['PeopleDisasterSupported']);
            $PeopleDisasterRehabilitated=trim($_POST['PeopleDisasterRehabilitated']);
            $FoodStorageCapacity=trim($_POST['FoodStorageCapacity']);
            $FoodReserve=trim($_POST['FoodReserve']);
            $CropFarmers=trim($_POST['CropFarmers']);
            $CropInsuranceFarmers=trim($_POST['CropInsuranceFarmers']);
            $LivestockFarmers=trim($_POST['LivestockFarmers']);
            $LivestockInsuranceFarmers=trim($_POST['LivestockInsuranceFarmers']);
            $TotalPopulation=trim($_POST['TotalPopulation']);
            $HealthInsuranceCoverage=trim($_POST['HealthInsuranceCoverage']);
            $EmploymentCreationSupport=trim($_POST['EmploymentCreationSupport']);
            $req_d2 = $dbconn->prepare("INSERT INTO `ic_2.4` SET EligibleHouseholdsDS = ?, ReceivedHouseholdsDS = ?, InterestedOrEligibleHouseholdsPW = ?, PeopleParticipatedPW = ?, PeopleReceivedIncome = ?, PeopleDisasterAffected = ?, PeopleDisasterSupported = ?, PeopleDisasterRehabilitated = ?,  FoodStorageCapacity = ?, FoodReserve = ?, CropFarmers = ?, CropInsuranceFarmers = ?, LivestockFarmers = ?, LivestockInsuranceFarmers = ?, TotalPopulation = ?, HealthInsuranceCoverage = ?, EmploymentCreationSupport = ?, CountryID = ? ");
            $req_d2->execute([$EligibleHouseholdsDS, $ReceivedHouseholdsDS, $InterestedOrEligibleHouseholdsPW, $PeopleParticipatedPW, $PeopleReceivedIncome, $PeopleDisasterAffected, $PeopleDisasterSupported, $PeopleDisasterRehabilitated, $FoodStorageCapacity, $FoodReserve, $CropFarmers, $CropInsuranceFarmers, $LivestockFarmers, $LivestockInsuranceFarmers, $TotalPopulation, $HealthInsuranceCoverage, $EmploymentCreationSupport, $CountryID]);
        }
                $dbconn = null;
              }