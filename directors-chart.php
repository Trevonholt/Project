<?php
require_once("util-db.php");
require_once("model-directors-chart.php");

$pageTitle="Directors Chart";
include "view-header.php";
$directors=selectDirectors();
include "view-directors-chart.php";
include "view-footer.php";
?>
