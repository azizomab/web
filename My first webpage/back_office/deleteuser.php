<?php
include '../Controller/userC.php';
$userC = new userc();
$userC->deleteuser($_GET["iduser"]);
header('Location:index.php');
