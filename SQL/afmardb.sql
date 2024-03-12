-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 12 mars 2024 à 12:21
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `afmardb`
--

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `id` int NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `flag` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `country`
--

INSERT INTO `country` (`id`, `country_name`, `email`, `flag`, `password`) VALUES
(1, 'Algeria', 'ubourthoumieux0@ucoz.ru', 'dz', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(2, 'Angola', 'nohern1@apache.org', 'ao', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(3, 'Benin', 'tniven2@admin.ch', 'bj', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(4, 'Botswana', 'ccolcutt3@cafepress.com', 'bw', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(5, 'Burkina Faso', 'bbootyman4@histats.com', 'bf', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(6, 'Burundi', 'soland5@yale.edu', 'bi', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(7, 'Cabo Verde', 'jmaccheyne6@eepurl.com', 'cv', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(8, 'Cameroon', 'obland7@wisc.edu', 'cm', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(9, 'Central African Republic', 'cquantick8@wisc.edu', 'cf', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(10, 'Chad', 'friccioppo9@loc.gov', 'td', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(11, 'Comoros', 'amurrigana@delicious.com', 'km', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(12, 'DR Congo', 'cfiermanb@wikispaces.com', 'cd', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(13, 'Congo Republic', 'twigginc@histats.com', 'cg', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(14, 'Cote d’Ivoire', 'cconsidined@sakura.ne.jp', 'ci', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(15, 'Djibouti', 'toglethorpee@howstuffworks.com', 'dj', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(16, 'Egypt', 'kponterf@bloglovin.com', 'eg', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(17, 'Equatorial Guinea', 'dglasscoeg@rakuten.co.jp', 'gq', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(18, 'Eritrea', 'hbickardikeh@hubpages.com', 'er', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(19, 'Eswatini', 'sattridei@hc360.com', 'sz', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(20, 'Ethiopia', 'fmongerj@dagondesign.com', 'et', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(21, 'Gabon', 'bhewkink@tinyurl.com', 'ga', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(22, 'Gambia', 'gkaindll@wordpress.org', 'gm', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(23, 'Ghana', 'rfinnism@telegraph.co.uk', 'gh', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(24, 'Guinea', 'rallotn@skyrock.com', 'gn', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(25, 'Guinea-Bissau', 'gbenneo@surveymonkey.com', 'gw', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(26, 'Kenya', 'ocrinionp@list-manage.com', 'ke', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(27, 'Lesotho', 'eglisaneq@soup.io', 'ls', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(28, 'Liberia', 'acobboldr@miitbeian.gov.cn', 'lr', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(29, 'Libya', 'bsollimes@vimeo.com', 'ly', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(30, 'Madagascar', 'pschuckt@goo.gl', 'mg', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(31, 'Malawi', 'cvandaalenu@github.com', 'mw', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(32, 'Mali', 'dlearnedv@wordpress.org', 'ml', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(33, 'Mauritania', 'battocw@exblog.jp', 'mr', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(34, 'Mauritius', 'kboicex@engadget.com', 'mu', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(35, 'Morocco', 'wvannozziiy@wufoo.com', 'ma', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(36, 'Mozambique', 'csnailhamz@prweb.com', 'mz', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(37, 'Namibia', 'rmccarrell10@ed.gov', 'na', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(38, 'Niger', 'adenis11@bloglovin.com', 'ne', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(39, 'Nigeria', 'bsibbert12@si.edu', 'ng', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(40, 'Rwanda', 'lschukert13@etsy.com', 'rw', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(41, 'Sao Tome and Principe', 'aingman14@edublogs.org', 'st', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(42, 'Senegal', 'dwalsham15@privacy.gov.au', 'sn', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(43, 'Seychelles', 'tcansdill16@mapy.cz', 'sc', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(44, 'Sierra Leone', 'mkender17@unesco.org', 'sl', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(45, 'Somalia', 'lfaltskog18@parallels.com', 'so', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(46, 'South Africa', 'rdaguanno19@ask.com', 'za', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(47, 'South Sudan', 'tunwins1a@globo.com', 'ss', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(48, 'Sudan', 'idahlman1b@opensource.org', 'sd', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(49, 'Tanzania', 'hmanders1c@squidoo.com', 'tz', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(50, 'Togo', 'emulroy1d@indiatimes.com', 'tg', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(51, 'Tunisia', 'ldalgetty1e@webs.com', 'tn', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(52, 'Uganda', 'mrobens1f@reddit.com', 'ug', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(53, 'Zambia', 'tallingham1g@pagesperso-orange.fr', 'zm', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(54, 'Zimbabwe', 'eslewcock1h@goodreads.com', 'zw', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973'),
(55, 'Sahrawi Republic', 'sahrawi@ucoz.ru', 'rasd', 'e041df85ae2e371de37c9468738671b5a086721a79c51e02b9ec77e207980973');

-- --------------------------------------------------------

--
-- Structure de la table `ic_1.1`
--

DROP TABLE IF EXISTS `ic_1.1`;
CREATE TABLE IF NOT EXISTS `ic_1.1` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `TGG` varchar(30) DEFAULT NULL,
  `TSC` varchar(30) DEFAULT NULL,
  `AGG` varchar(30) DEFAULT NULL,
  `TCS` varchar(30) DEFAULT NULL,
  `EnergyGHG` varchar(30) DEFAULT NULL,
  `IPPUGHG` varchar(30) DEFAULT NULL,
  `WasteGHG` varchar(30) DEFAULT NULL,
  `MethaneEmissions` varchar(30) DEFAULT NULL,
  `CountryID` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `CountryID` (`CountryID`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ic_1.2`
--

DROP TABLE IF EXISTS `ic_1.2`;
CREATE TABLE IF NOT EXISTS `ic_1.2` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `TempHeatShock` varchar(30) DEFAULT NULL,
  `Drought_index` varchar(30) DEFAULT NULL,
  `Flood_Incidence` varchar(30) DEFAULT NULL,
  `Climate_Incidence` varchar(30) DEFAULT NULL,
  `CountryID` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `CountryID` (`CountryID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ic_1.3`
--

DROP TABLE IF EXISTS `ic_1.3`;
CREATE TABLE IF NOT EXISTS `ic_1.3` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ForestArea` varchar(30) DEFAULT NULL,
  `NaturalForestArea` varchar(30) DEFAULT NULL,
  `BiodiversityChange` varchar(30) DEFAULT NULL,
  `CountryID` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `CountryID` (`CountryID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ic_1.4`
--

DROP TABLE IF EXISTS `ic_1.4`;
CREATE TABLE IF NOT EXISTS `ic_1.4` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `GDP` varchar(30) DEFAULT NULL,
  `GDPperGHG` varchar(30) DEFAULT NULL,
  `TotalCommoditiesExported` varchar(30) DEFAULT NULL,
  `ExportValueByCommodity` varchar(30) DEFAULT NULL,
  `TotalExportValue` varchar(30) DEFAULT NULL,
  `IncomeDiversification` varchar(30) DEFAULT NULL,
  `HumanCapital` varchar(30) DEFAULT NULL,
  `TechnologicalCapital` varchar(30) DEFAULT NULL,
  `FinancialCapital` varchar(30) DEFAULT NULL,
  `InstitutionalCapital` varchar(30) DEFAULT NULL,
  `ClimateRisk` varchar(30) DEFAULT NULL,
  `Sensitivity` varchar(30) DEFAULT NULL,
  `VulnerabilityIndex` varchar(30) DEFAULT NULL,
  `Adaptation` varchar(30) DEFAULT NULL,
  `CountryID` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `CountryID` (`CountryID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ic_2.1`
--

DROP TABLE IF EXISTS `ic_2.1`;
CREATE TABLE IF NOT EXISTS `ic_2.1` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `LandUsePlanning` varchar(30) DEFAULT NULL,
  `GreenCities` varchar(30) DEFAULT NULL,
  `ProtectedAreas` varchar(30) DEFAULT NULL,
  `CostalLands` varchar(30) DEFAULT NULL,
  `RangeLands` varchar(30) DEFAULT NULL,
  `ForestArea` varchar(30) DEFAULT NULL,
  `SavannaLands` varchar(30) DEFAULT NULL,
  `ForestWetlandRestored` varchar(30) DEFAULT NULL,
  `CountryID` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `CountryID` (`CountryID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ic_2.2`
--

DROP TABLE IF EXISTS `ic_2.2`;
CREATE TABLE IF NOT EXISTS `ic_2.2` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ArableLand` varchar(30) DEFAULT NULL,
  `IrrigatedLand` varchar(30) DEFAULT NULL,
  `ArableLandSWC` varchar(30) DEFAULT NULL,
  `NCF` varchar(30) DEFAULT NULL,
  `NMF` varchar(30) DEFAULT NULL,
  `NTF` varchar(30) DEFAULT NULL,
  `NRF` varchar(30) DEFAULT NULL,
  `FarmersApplyingFertilizers` varchar(30) DEFAULT NULL,
  `NumberFarmers` varchar(30) DEFAULT NULL,
  `FarmersImprovedSeedsArea` varchar(30) DEFAULT NULL,
  `CropAreaSize` varchar(30) DEFAULT NULL,
  `ImprovedCowBreeds` varchar(30) DEFAULT NULL,
  `CowNumber` varchar(30) DEFAULT NULL,
  `LargeRuminantPopulationChange` varchar(30) DEFAULT NULL,
  `SmallRuminantPopulationChange` varchar(30) DEFAULT NULL,
  `FarmersLivestockOwnership` varchar(30) DEFAULT NULL,
  `AerobicTreatment` varchar(30) DEFAULT NULL,
  `ManureStorage` varchar(30) DEFAULT NULL,
  `PaddyRiceProduction` varchar(30) DEFAULT NULL,
  `AWDinRiceCultivation` varchar(30) DEFAULT NULL,
  `CountryID` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `CountryID` (`CountryID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ic_2.3`
--

DROP TABLE IF EXISTS `ic_2.3`;
CREATE TABLE IF NOT EXISTS `ic_2.3` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `RenewableEnergyVolume` varchar(30) DEFAULT NULL,
  `EnergyVolumeSupply` varchar(30) DEFAULT NULL,
  `ElectricVehiclesNumber` varchar(30) DEFAULT NULL,
  `VehiclesNumber` varchar(30) DEFAULT NULL,
  `FossilFuelConsumption` varchar(30) DEFAULT NULL,
  `GDP_2_3` varchar(30) DEFAULT NULL,
  `BiomassHouseholdsNumber` varchar(30) DEFAULT NULL,
  `HouseholdsNumber` varchar(30) DEFAULT NULL,
  `SolarTechAdoption` varchar(30) DEFAULT NULL,
  `CountryID` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `CountryID` (`CountryID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ic_2.4`
--

DROP TABLE IF EXISTS `ic_2.4`;
CREATE TABLE IF NOT EXISTS `ic_2.4` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `EligibleHouseholdsDS` varchar(30) DEFAULT NULL,
  `ReceivedHouseholdsDS` varchar(30) DEFAULT NULL,
  `InterestedOrEligibleHouseholdsPW` varchar(30) DEFAULT NULL,
  `PeopleParticipatedPW` varchar(30) DEFAULT NULL,
  `PeopleReceivedIncome` varchar(30) DEFAULT NULL,
  `PeopleDisasterAffected` varchar(30) DEFAULT NULL,
  `PeopleDisasterSupported` varchar(30) DEFAULT NULL,
  `PeopleDisasterRehabilitated` varchar(30) DEFAULT NULL,
  `FoodStorageCapacity` varchar(30) DEFAULT NULL,
  `FoodReserve` varchar(30) DEFAULT NULL,
  `CropFarmers` varchar(30) DEFAULT NULL,
  `CropInsuranceFarmers` varchar(30) DEFAULT NULL,
  `LivestockFarmers` varchar(30) DEFAULT NULL,
  `LivestockInsuranceFarmers` varchar(30) DEFAULT NULL,
  `TotalPopulation` varchar(30) DEFAULT NULL,
  `HealthInsuranceCoverage` varchar(30) DEFAULT NULL,
  `EmploymentCreationSupport` varchar(30) DEFAULT NULL,
  `CountryID` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `CountryID` (`CountryID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ic_3.1`
--

DROP TABLE IF EXISTS `ic_3.1`;
CREATE TABLE IF NOT EXISTS `ic_3.1` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `GovernmentMinistries` varchar(30) DEFAULT NULL,
  `MinistriesWithClimateFP` varchar(30) DEFAULT NULL,
  `ClimateChangeAgencyPresence` varchar(30) DEFAULT NULL,
  `MSWGpresence` varchar(30) DEFAULT NULL,
  `MeetingsPerYear` varchar(30) DEFAULT NULL,
  `MemberMeetingParticipation` varchar(30) DEFAULT NULL,
  `SubNationalClimateAgency` varchar(30) DEFAULT NULL,
  `SubNationalCCCP` varchar(30) DEFAULT NULL,
  `CountryID` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `CountryID` (`CountryID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ic_3.2`
--

DROP TABLE IF EXISTS `ic_3.2`;
CREATE TABLE IF NOT EXISTS `ic_3.2` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ClimateActionBudget` varchar(30) DEFAULT NULL,
  `TotalBudget` varchar(30) DEFAULT NULL,
  `ClimateFundReceived` varchar(30) DEFAULT NULL,
  `GDP` varchar(30) DEFAULT NULL,
  `TotalAdaptationBudgetAllocated` varchar(30) DEFAULT NULL,
  `InternationalSourcesFund` varchar(30) NOT NULL,
  `AdaptationActionsBudgetNeed` varchar(30) NOT NULL,
  `CountryID` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `CountryID` (`CountryID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ic_3.3`
--

DROP TABLE IF EXISTS `ic_3.3`;
CREATE TABLE IF NOT EXISTS `ic_3.3` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `FarmersReceivingWeatherInfo` varchar(30) DEFAULT NULL,
  `FarmersNumber` varchar(30) DEFAULT NULL,
  `WeatherDisastersOccurrence` varchar(30) DEFAULT NULL,
  `EarlyWarningWeatherDisasters` varchar(30) DEFAULT NULL,
  `InvestmentClimateScienceResearch` varchar(30) DEFAULT NULL,
  `CountryID` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `CountryID` (`CountryID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
