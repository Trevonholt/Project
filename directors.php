<?php
require_once("util-db.php");
require_once("model-directors.php");

$pageTitle="genres";
include "view-header.php";
$directors=selectDirectors();
include "view-directors.php";
include "view-footer.php";
?>
