<?php
include("backend\models\appointment.php");
if (!isset($_POST["submit"])) {
    header('location: http://localhost/Semesterprojekt/');
}

$date = $_POST["date"];
$title = $_POST["title"];
$votingExpirationDate = $_POST["votingExpirationDate"];
$beginTime  = $_POST["begin"];
$endTime = $_POST["end"];
$terminoption1 = $_POST["terminoption1"];
$terminoption2 = $_POST["terminoption2"];

echo $title;
echo $date;
echo $votingExpirationDate;
echo $endTime;
echo $beginTime;

// store in database
// über den serviceHandler neue Funktion erstellen die alles in die Datenbank schickt
$appointment = new Appointment($date, $title, $votingExpirationDate, $beginTime, $endTime, [10, 20]);
