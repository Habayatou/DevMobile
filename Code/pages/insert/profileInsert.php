<?php
include('../../includes/dbconnection.php');
$CountryID = trim($_POST["CountryID"]);

$req2 = $dbconn->prepare("SELECT * FROM `country` WHERE id = ? ");
$req2->execute([$CountryID]);
$data_1_3 = $req2->fetchAll();

$passwordd = ($_POST['NewPassword'] == "") ? $data_1_3[0]['password'] : trim($_POST['NewPassword']);
$password = hash('sha256', $passwordd);
// $password = md5($passwordd);
$req_d2 = $dbconn->prepare("UPDATE `country` SET `password` = ? WHERE id = ? ");
$req_d2->execute([$password, $CountryID]);
        
$dbconn = null;
    $dbconn = null;