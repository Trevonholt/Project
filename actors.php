<?php
require_once("util-db.php");
require_once("model-actors.php");

$pageTitle="Actors";
include "view-header.php";
$actors=selectActors();
include "view-actors.php";
include "view-footer.php";
?>
